@extends('layouts.main')
@section('content')
<div class="wrapper-top">
    <div class="wrapper-content">
        <h1 class="wrapper-content__title">
            Таро гадания и предсказания,<br> консультации
        </h1>
        <button class="button">
            Записаться
        </button>
    </div>
</div>
<div class="wrapper-side">
    <div class="background">
        <div class="wrapper-side-content">
            <h2 class="title--h2">
                <a name="uslugi"></a>
                Услуги предсказаний Таро
                </h2>
            <div class="catalog">
                @foreach ($services as $service )
                    <a class="catalog__link" href="{{route('index.show', $service->link)}}">
                        <div class="catalog__item">
                            <img src="{{$service->image}}" class="catalog__img">
                            <h3>
                                {{$service->h3}}
                            </h3>
                        </div>
                    </a>
                @endforeach
            </div>
        </div> 
        <div class="video">
            <video id="video_background2" preload="auto" autoplay="true" loop="true" muted="muted">
                <source src="video/video.mp4">
            </video>
        </div>
    </div>
    <div class="background">
    <div class="wrapper-side-content--borders">
        @foreach ($sections as $section )
        <div class="flex">
            @isset($section->left_image)
            <div class="image">
                <img src="{{Storage::url($section->left_image)}}">
            </div>      
            @endisset
        <h2 class="title--h2">
            {{$section->h2}}
        </h2>
            @isset($section->right_image)
            <div class="image">
                <img src="{{Storage::url($section->right_image)}}">
            </div> 
            @endisset
        </div>
        <div class="text">
            {{$section->content}}
        </div> 
        @endforeach
    </div>
    </div>
    <div class="diploms_container">
        <div class="diploms">
        </div>
    </div>
</div>
@endsection