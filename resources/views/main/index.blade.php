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
        <h2 class="title--h2">
            Гадания Таро: обо мне
        </h2>
        <div class="text">
            <p class="text__paragraph">
                Приветствую Вас на моем сайте предсказаний! Меня зовут Елена. Я серцифицированный практикующий таролог и преподаватель Таро, рунолог, расстановщик на картах таро.
            </p>
            <p class="text__paragraph">
                Практик по:
            </p>
            <ul class="text__list">
                <li class="text-item">Отливкам на воск и металлы;</li>
                <li class="text-item">работе с восковой матрицей, свечной магией;</li>
                <li class="text-item">Расстановкам на Таро;</li>
                <li class="text-item">Коррекции жизненной энергии с помощью энергетического наполнения через карты Таро;</li>
                <li class="text-item">Работе в золотом сечении, в энергиях серебра и олова;</li>
                <li>Работе и созданию стихийных духов-помощников Ифритов.</li>
            </ul>

        </div>
        
    </div>
    <br>
</div>
@endsection