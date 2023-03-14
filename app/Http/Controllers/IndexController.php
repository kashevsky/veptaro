<?php

namespace App\Http\Controllers;

use App\Models\IndexSection;
use App\Models\IndexService;
use Illuminate\Http\Request;
use App\Models\ConsultationContent;

class IndexController extends Controller
{
    public function index()
    {
        $sections = IndexSection::get();
        $services = IndexService::get();
        return view('main.index', compact('services','sections'));
    }
    public function show($link)
    {
        //switch так как шаблон страницы consultacii_tarologa и некоторых других отличается от базовых
        //для этих страниц отдельные модели, контроллеры и тд.
        switch($link)
        {
            case 'consultacii_tarologa':
                $content = ConsultationContent::first();
                $sections = $content->sections;
                return view('consultation.index', compact('content','sections'));
            // ТУТ БУДУТ ЕЩЕ СТРАНИЦЫ
        }
        $service = IndexService::where('link',$link)->first();
        $content = $service->page;
        return view('page', compact('content'));
    }
}
