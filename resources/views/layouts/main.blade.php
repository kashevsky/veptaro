<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<base href="{{URL('/')}}">
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<header class="header">
    <div class="container-header">
        <a href="" class="logo__link">
            <div class="logo">
            <p class="logo__text">
               Vep<br>TARO
            </p>
            <img src="images/logo.png" class="logo__image">
             </div>
        </a>

        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__list-item"><a class="nav__list-link" href="">Обо мне</a></li>
                <li class="nav__list-item"><a class="nav__list-link" href="">Услуги</a></li>
                <li class="nav__list-item"><a class="nav__list-link" href="">Отзывы</a></li>
                <li class="nav__list-item"><a class="nav__list-link" href="">Контакты</a></li>
                <li class="nav__list-item"><a class="nav__list-link" href="">Блог</a></li>                 
            </ul>
        </nav>
        <div class="header-socials">
            <a href="" class="header-socials__link">
                <img src="images/youtube.png" class="header-socials_image">
            </a>
            <a href="" class="header-socials__link">
                <img src="images/insta.png" class="header-socials_image">
            </a>
        </div>
    </div>
</header>
    <div class="content">
         @yield('content')
    </div>
<footer>
    <div class="footer">
        <div class="logo">
            <p class="logo__text">
               Vep<br>TARO
            </p>
            <img src="images/logo.png" class="logo__image">
             </div>
    </div>
</footer>