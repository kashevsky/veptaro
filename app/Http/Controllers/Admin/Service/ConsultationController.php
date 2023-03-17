<?php

namespace App\Http\Controllers\Admin\Service;

use Illuminate\Http\Request;
use App\Models\ConsultationContent;
use App\Models\ConsultationSection;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use File;

class ConsultationController extends Controller
{
    public function update(Request $request)
    {
        $data = $request->all();
        array_shift($data);
        $index = 1;
        for($i=0; $i<$data['count']; $i++)
        {
            $image = null;
            $sectionData['h2'] = $data['h2'.$i];
            $sectionData['text'] = $data['text'.$i];
            if($request->has('image'.$i))
            {
                $image = $request->file('image'.$i);
            }
            if(!is_null($image))
            {
                $sectionData['image'] = Storage::put('public/images',$image);
            }
            $section = ConsultationSection::where('id',$index)->first();
            $section->update($sectionData);
            $section->save(); 
            unset($sectionData['image']);
            $index++;
        }
        $data = $request->all();
        $dom = new \DomDocument('1.0', 'UTF-8');;
        $dom->loadHtml("\xEF\xBB\xBF" . $data['content'], LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $image_file = $dom->getElementsByTagName('imageFile');
        if (!File::exists(public_path('uploads'))) {
            File::makeDirectory(public_path('uploads'));
        }
        foreach($image_file as $key => $image) {
            $temp = $image->getAttribute('src');
            list($type, $temp) = explode(';', $temp);
            list(, $temp) = explode(',', $temp);

            $img_data = base64_decode($temp);
            $image_name = "/uploads/" . time().$key.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $img_data);
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }
        $data['content'] = html_entity_decode($dom->saveHTML());
        $bottomContent['content'] = $data['content'];
        $bottomContent['h2'] = $data['content_h2'];
        $content = ConsultationContent::first();
        $content->update($bottomContent);
        $content->save();
        return redirect()->back();
    }
}
