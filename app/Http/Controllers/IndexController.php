<?php

namespace App\Http\Controllers;

use App\Models\IndexSection;
use App\Models\IndexService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sections = IndexSection::get();
        $services = IndexService::get();
        return view('main.index', compact('services','sections'));
    }
}
