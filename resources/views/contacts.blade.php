@extends('layouts.master')
@section('title', 'Контакты')
@section('content')
    <header class="entry-header">
        <h1 class="entry-title">Контакты</h1>
    </header><!-- .entry-header -->
    <div class="contacts-wrapper">
        <div class="contacts-address">
            <div class="contacts-item">
                <p><b>Юридический и фактический адрес:</b> 606100, Россия, Нижегородская область, г. Павлово, ул. Комунистическая, 20.</p>
            </div>
            <div class="contacts-item send">
                <p><b>Почтовый адрес:</b> 606106, Россия, Нижегородская область, г. Павлово, ул. Урожайная, 4</p>
            </div>
            <div class="contacts-item">
                <p><b>Телефоны:</b><br/>
                    +7 (909) 297-41-44<br/>
                    +7 (920) 057-10-12</p>
            </div>
            <div class="contacts-item">
                <p><b>E-mail:</b> <a class="contacts_send_mail" href="mailto:zuev720@mail.ru">zuev720@mail.ru </a></p>
            </div>
            <div class="contacts-item">
                <p><b>Режим работы:</b> Пн-Сб 8:00-20:00</p>
            </div>
        </div>
    <div class="division">
        <div class="division-item">
            <p><b>Директор:</b><br>
            Зуев Сергей Николаевич<br/>
                Телефон: +7 (909) 297-41-44<br/>
                E-mail: <a href="mailto:zsn@miz.nnov.ru">zsn@miz.nnov.ru</a></p>
        </div>
    </div>
        <div class="contacts-map">
            <div class="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad20594a8bbb91c29de87233fa21f47298a8b2dfbab0614dc9fdc9bb82cd56318&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>            </div>
        </div>
    </div>
@endsection
