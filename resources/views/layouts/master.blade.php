<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;900&display=swap" rel="stylesheet">
    <title>ИП Зуев @yield('title')</title>
</head>
<body>
<div class="container header_information">
    <div class="row align-items-center">
        <div class="col-lg"><h1 class="logotype">ИП Зуев</h1></div>
        <div class="col-lg"><h4 class="header_description">Комплектующие собственного производства для чистых помещений</h4></div>
        <div class="col-lg">
            <div class="header_contacts align-items-center no-gutters">
                <div class="col"><img class="image_phone img-fluid align-text-bottom" src="https://img2.freepng.ru/20180402/age/kisspng-mobile-phones-computer-icons-telephone-clip-art-book-now-button-5ac21e3a728975.1107891215226711624692.jpg">+7 (909) 297-41-44</div>
                <div class="col"><img class="image_mail img-fluid align-text-bottom" src="https://i2.wp.com/www.advokat35.ru/wp-content/uploads/2016/03/email-icon.png?fit=250%2C250"> zuev720@mail.ru</div>
                <div class="col"><a class="link_send_mail" href="mailto:zuev720@mail.ru"><img class="image_send_mail img-fluid align-text-bottom" src="https://w7.pngwing.com/pngs/570/333/png-transparent-email-address-computer-icons-symbol-email-miscellaneous-angle-orange-thumbnail.png" alt="">Связаться с нами</a></div>
            </div>
        </div>
    </div>
    </div>
<nav class="menu navbar navbar-expand-lg navbar-light" style="background-color: #2d3138">
    <button class="button_menu navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon align-self-center"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="menu_list container nav-pills navbar-nav nav-justified mr-auto">
            <a class="nav-item p-2" href="{{ route('index') }}"><li>ГЛАВНАЯ</li>
            </a>
            <a class="nav-item p-2" href="{{ route('products') }}"><li>ПРОДУКЦИЯ</li>
            </a>
            <a class="nav-item p-2" href="{{ route('contacts') }}"><li>КОНТАКТЫ</li>
            </a>
            <a class="nav-item p-2" href="{{ route('about') }}"><li>О НАС</li>
            </a>
        </ul>
    </div>
</nav>
<div class="block_content container">
@yield('content')
</div>
<footer>
<div class="footer_block container-fluid no-gutters">
    <div class="container mt-5">
        <div class="row text-center no-gutters">
            <div class="col-md-4 mt-5"><h1 class="footer_logo row-fluid">ИП Зуев</h1></div>
            <div class="col-md-4 mt-5"><h5 class="footer_address row-fluid">Нижегородская область г. Павлово<br> ул. Комунистическая 20</h5></div>
            <div class="col-md-4 mt-5">Тел. +7 (909) 297-41-44</div>
        </div>
        <div class="row mt-5"><small>Работаем с 2015 года.</small></div>
    </div>
</div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
