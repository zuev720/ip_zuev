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
        <div class="col-lg-3"><h1 class="logotype">ИП Зуев</h1></div>
        <div class="col-lg-6"><h4 class="header_description">Комплектующие собственного производства для чистых помещений</h4></div>
        <div class="col-lg-3">
            <div class="header_contacts no-gutters">
                <div class="col"><img class="image_phone img-fluid align-text-bottom" src="https://img2.freepng.ru/20180402/age/kisspng-mobile-phones-computer-icons-telephone-clip-art-book-now-button-5ac21e3a728975.1107891215226711624692.jpg"/>+7 (909) 297-41-44</div>
                <div class="col"><img class="image_mail img-fluid align-text-bottom" src="https://i2.wp.com/www.advokat35.ru/wp-content/uploads/2016/03/email-icon.png?fit=250%2C250"/> zuev720@mail.ru</div>
                <div class="col"><a class="link_send_mail" href="mailto:zuev720@mail.ru"><img class="image_send_mail img-fluid align-text-bottom" src="https://w7.pngwing.com/pngs/570/333/png-transparent-email-address-computer-icons-symbol-email-miscellaneous-angle-orange-thumbnail.png"/>Связаться с нами</a></div>
            </div>
        </div>
    </div>
</div>
<nav class="menu container-fluid navbar navbar-expand-lg bg-light">
    <button class="button_menu navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Hamburger_icon.svg/1200px-Hamburger_icon.svg.png"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="menu_list container nav-pills navbar-nav nav-justified mr-auto" id="list">
            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">ГЛАВНАЯ<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">ПРОДУКЦИЯ</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contacts') }}">КОНТАКТЫ</a>
            </li>
            <li class="nav-item"><a class="nav-link" id="about" href="{{ route('about') }}">О НАС</a>
            </li>
        </ul>
    </div>
</nav>
<div class="block_content container">
@yield('content')
</div>
<footer class="mt-5">
    <div class="www container mt-5">
        <div class="footer_contacts_block row align-items-center">
            <div class="col-lg-4"><h1 class="footer_logo">ИП Зуев</h1></div>
            <div class="col-lg-5"><h5 class="footer_address">Нижегородская область г. Павлово<br> ул. Комунистическая 20</h5>
            </div>
            <div class="wrap_footer_contacts col-lg-3">
                <div><img class="footer_contacts_image img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSRRsjcDoB7chWkkgpuVq1y-XgosEwCp8Zk80dLIpzlqgfSs_mJ&usqp=CAU"><span class="footer_phone">+7(920)-057-10-12</span></div>
                <div><img class="footer_contacts_image img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQPSkxXAtI-K2jUbe_L_-eOCKM2cNZBGJ_I01FgdHPqp0EjxX9E&usqp=CAU"><span class="footer_email"> zuev720@mail.ru</span></div>
            </div>
        </div>
        <div class="container">
            <div class="footer-menu row mt-5">
                <div class="col"><a class="flex-sm-fill text-sm-center nav-link" href="#">Производство</a></div>
                <div class="col"><a class="flex-sm-fill text-sm-center nav-link" href="#">Продукция</a></div>
                <div class="col"><a class="flex-sm-fill text-sm-center nav-link" href="#">О нас</a></div>
            </div>
        </div>
        <div class="mt-5"><small>Работаем с 2015 года.</small></div>
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
