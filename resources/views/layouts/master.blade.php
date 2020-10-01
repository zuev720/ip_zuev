<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <title>ИП Зуев @yield('title')</title>
</head>
<body>
<header class="header_block">
    <div class="header_information">
        <div class="logo"><a class="logo_link" href="{{ route('index') }}">Logo</a></div>
        <div class="header_description_block"><h1 class="header_description">Производство комплектующих для чистых помещений</h1></div>
        <div class="header_contacts_block">
            <a href="tel:+79092974144" class="phone_contact">+7 (909) 297-41-44</a>
            <a href="mailto:zuev720@mail.ru" class="email_contact">logo@mail.ru</a>
            <a class="link_basket" href="{{ route('basket') }}">Корзина</a>
        </div>
    </div>
    <nav class="menu navbar navbar-expand-lg navbar-light">
        <button class="button_menu navbar-toggler bg-light" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon align-self-center"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="menu_list nav-pills navbar-nav nav-justified">
                <li class="nav-item menu_item"><a class="menu_link_item"  href="{{ route('index') }}">ГЛАВНАЯ</a></li>
                <li class="nav-item menu_item"><a class="menu_link_item" href="{{ route('products') }}">ПРОДУКЦИЯ</a></li>
                <li class="nav-item menu_item"><a class="menu_link_item" href="{{ route('contacts') }}">КОНТАКТЫ</a></li>
                <li class="nav-item menu_item"><a class="menu_link_item" href="{{ route('about') }}">О НАС</a></li>
            </ul>
        </div>
    </nav>
</header>
<div class="notification_block">
    <div class="starter-template">
        @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
        @if(session()->has('warning'))
            <p class="alert alert-warning">{{ session()->get('warning') }}</p>
        @endif
    </div>
</div>
<main class="main_content">
@yield('content')
</main>
<footer>
<div class="footer">
    <div class="footer_information">
        <div class="footer_about_company">
            <h4 class="header_about_company"> ООО "Фора" - Производство скругляющих элементов для чистых помещений.</h4>
            <address class="phone_and_email_address">
                <a href="tel:+79092974144" class="footer_phone_contact">+7 (909) 297-41-44</a>
                <a href="mailto:zuev720@mail.ru" class="footer_email_contact">fora@fora.ru</a>
            </address>
            <address class="address_footer_company">Нижегородская обл.  г. Павлово  ул. Комунистическая 10</address>
        </div>
    </div>
    <div class="footer_small"><small>Работаем с 2015 года</small></div>
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
