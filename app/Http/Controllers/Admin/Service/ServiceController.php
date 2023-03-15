<?php

namespace App\Http\Controllers\Admin\Service;

use App\Models\Diplom;
use App\Models\PageModel;
use File;
use App\Models\IndexSection;
use App\Models\IndexService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function create()
    {
        return view('admin.indexpage.service.create');
    }
    public function store(Request $request)
    {
        $pageData = $request->only('content');
        $serviceData = $request->only('h3','image','link');
        $dom = new \DomDocument('1.0', 'UTF-8');;
        $dom->loadHtml("\xEF\xBB\xBF" . $pageData['content'], LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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
        $pageData['content'] = html_entity_decode($dom->saveHTML());
        $page = PageModel::create($pageData);
        $serviceData['page_id'] = $page->id;
        $service = IndexService::create($serviceData);
        return redirect()->route('index');
    }
}
