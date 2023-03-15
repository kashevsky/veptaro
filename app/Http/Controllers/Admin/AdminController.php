<?php

namespace App\Http\Controllers\Admin;

use App\Models\IndexSection;
use App\Models\IndexService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $i = 0;
        $index = 1;
        for($i=0; $i<$data['count']; $i++)
        {
            $mainData['h2'] = $data['h2'.$i];
            $mainData['content'] = $data['content'.$i];
            $section = IndexSection::where('id',$index)->first();
            $section->update($mainData);
            $section->save();
            $index++;
        }

    }
}
