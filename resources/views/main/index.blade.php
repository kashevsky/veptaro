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
    <div class="wrapper-side-content">
        <h2 class="title--h2">
            <a name="uslugi"></a>
            Услуги предсказаний Таро
            </h2>
        <a name="uslugi"></a>
        <div class="catalog">
            <a class="catalog__link" href="{{route('consultation.index')}}">
                <div class="catalog__item">
                    <img src="img/4.1.jpg" class="catalog__img">
                    <h3>
                        Консультации таролога
                    </h3>
                </div>
            </a>
            <a class="catalog__link" href="{{route('training.index')}}">
                <div class="catalog__item">
                    <img src="img/4.2.jpg" class="catalog__img">
                    <h3>
                        Обучение Таро
                    </h3>
                </div>
            </a>
            <a class="catalog__link" href="{{route('arrangements.index')}}">
                <div class="catalog__item">
                    <img src="img/4.3.jpg" class="catalog__img">
                    <h3>     
                        Расстановки Таро
                    </h3>
                </div>
            </a>
            <a class="catalog__link" href="{{route('blog.index')}}">
                <div class="catalog__item">
                    <img src="img/4.4.jpg" class="catalog__img">
                    <h3>
                        Блог Таро
                    </h3>
                </div>
            </a>
        </div>
    </div> 
    <div class="video">
        <video id="video_background2" preload="auto" autoplay="true" loop="true" muted="muted">
            <source src="videos/video.mp4">
        </video>
    </div>
    <div class="wrapper-side-content--borders">
        @foreach ($contentSection as $content )
        <h2 class="title--h2">
            {{$content->h2}}
        </h2>
        <div class="text">
            {!! html_entity_decode($content->text) !!}
        </div> 
        @endforeach
    </div>
    <br>
</div>
@endsection