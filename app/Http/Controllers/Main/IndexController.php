<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MainPage\ContentSectionModel;

class IndexController extends Controller
{
    public function __invoke()
    {
        $contentSection = ContentSectionModel::all();
        return view('main.index', compact('contentSection'));
    }
}
