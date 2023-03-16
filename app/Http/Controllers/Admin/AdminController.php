<?php

namespace App\Http\Controllers\Admin;

use App\Models\IndexSection;
use App\Models\IndexService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $sections = IndexSection::get();
        $services = IndexService::get();
        return view('admin.edit', compact('sections','services'));
    }
    public function update(Request $request)
    {
        $data = $request->all();
        array_shift($data);
        $index = 1;
        for($i=0; $i<$data['count']; $i++)
        {
            $left_image = null;
            $right_image = null;
            $mainData['h2'] = $data['h2'.$i];
            $mainData['content'] = $data['content'.$i];
            if($request->has('left_image'.$i))
            {
                $left_image = $request->file('left_image'.$i);
            }
            if($request->has('right_image'.$i))
            {
                $right_image = $request->file('right_image'.$i);
            }
            if(!is_null($left_image))
            {
                $mainData['left_image'] = Storage::put('public/images',$left_image);
            }
            if(!is_null($right_image))
            {
                $mainData['right_image'] = Storage::put('public/images',$right_image);
            }
            $section = IndexSection::where('id',$index)->first();
            $section->update($mainData);
            $section->save();
            unset($mainData['left_image'],$mainData['right_image']);
            $index++;
        }
            return redirect()->back();

    }
}
