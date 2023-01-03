<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<base href="{{URL('/')}}">
<link rel="stylesheet" href="css/style.css">
</head>
<header class="header">
    <div class="container-header">
        <a href="" class="logo__link">
            <div class="logo">
            <p class="logo__text">
               Vep<br>TARO
            </p>
            <img src="img/logo.png" class="logo__image">
             </div>
        </a>

        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__list-item"><a class="nav__list-link" href="">Обо мне</a></li>
                <li class="nav__list-item"><a class="nav__list-link" href="">Услуги</a></li>
                <li class="nav__list-item"><a class="nav__list-link" href="">Отзывы</a></li>
                <li class="nav__list-item"><a class="nav__list-link" href="">Контакты</a></li>
            </ul>
        </nav>
        <div class="header-socials">
            <a href="" class="header-socials__link">
                <img src="img/youtube.png" class="header-socials_image">
            </a>
            <a href="" class="header-socials__link">
                <img src="img/insta.png" class="header-socials_image">
            </a>
        </div>
    </div>
</header>
    <div class="content">
         @yield('content')
    </div>
<footer>
</footer>