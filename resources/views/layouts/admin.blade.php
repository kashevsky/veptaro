<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<base href="{{URL('/')}}">
<html lang="ru">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="/css/admin.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="assets/plugins/summernote/lang/summernote-ru-RU.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


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
<body>
    <div class="content">
         @yield('content')
    </div>
</body>
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
<script>
    $(document).ready(function() {
      $('.editor').summernote({
        toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['insert', ['link', 'picture', 'video']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
  ],
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $('.title_editor').summernote({
        width:500,
        toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['height', ['height']]
  ]
      });
    });
  </script>
  <script>
  $(document).ready(function() {
  var HightlightButton = function(context) {
  var ui = $.summernote.ui;
  var button = ui.button({
    contents: 'Кнопка',
    tooltip: 'Кнопка',
    click: function () {
      context.invoke('editor.insertText', '<br><div class="button-low" style="width=200px"><a href=" введите ссылку, куда ведет кнопка вместо этого текста  "> Текст на кнопке </a></div>');
}
  });

  return button.render();
}
          $('.editor-long').summernote({
            width:1000,
            height:500,
            toolbar: [
        // [groupName, [list of button]]
        ['style', ['style']],
        ['style', ['highlight','bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['height', ['height']]
        ['para', ['ul', 'ol', 'paragraph']],
        ['insert', ['myphoto','link', 'picture', 'video']],
      ],
      buttons: {
      highlight: HightlightButton
    }
      
          });
        });
   </script>

