<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('meta-title')@show</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header class="header">
        <div class="container header__container">
            <div class="logo header__logo">
                <a href="/">
                    <div class="logo__img">
                        <img src="../../images/logo.png">
                    </div>
                </a>
            </div>
            <div class="menu header__menu">
                <nav class="menu__nav">
                    <ul class="horizontal-list menu__list">
                        <li class="list__item"><a href="">Главная</a></li>
                        <li class="list__item"><a href="">Услуги</a></li>
                        <li class="list__item"><a href="">Торговые автоматы</a></li>
                        <li class="list__item"><a href="">Продукция</a></li>
                        <li class="list__item"><a href="">О компании</a></li>
                        <li class="list__item"><a href="">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    @yield('content')
    
    <footer class="footer">
        <div class="container footer__container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="footer__content info">
                        <div class="logo footer__logo">
                            <a href="/">
                                <div class="logo__img">
                                    <img src="../../images/logo-white.png">
                                </div>
                            </a>
                        </div>
                        <div class="footer__info">
                            <p class="footer__text">
                                На сегодняшний день аппараты с едой и продуктами набирают всё больше популярности, и могут находиться в шаговой доступности от мест работы или учебы. Поэтому снек-аппараты и автоматы для продажи еды зачастую являются спасением для студентов и работников офисов.
                            </p>
                            <p class="footer__text">
                                НАШИ  АППАРАТЫ ИДЕАЛЬНО ПОДОЙДУТ ДЛЯ: Офисов, логистических центров и предприятий, медицинских учреждених, школ, институтов, домов творчества, вокзалов и аэропортов, фитнесс клубов.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 offset-lg-1">
                    <div class="footer__content menu">
                        <ul class="vertical-list menu__list footer__menu">
                            <li class="list__item"><a href="">Главная</a></li>
                            <li class="list__item"><a href="">Услуги</a></li>
                            <li class="list__item"><a href="">Торговые автоматы</a></li>
                            <li class="list__item"><a href="">Продукция</a></li>
                            <li class="list__item"><a href="">О компании</a></li>
                            <li class="list__item"><a href="">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-xl-1">
                    <div class="footer__content contacts">
                        <div class="footer__contacts">
                            <div class="contacts__item contacts__address">АДРЕС: 655017, Россия, Республика<br>Хакасия, г. Абакан, ул. Кирова 77</div>
                            <div class="contacts__item contacts__phone">Телефоны: <a href="tel:88002224490">8-800-222-4490</a></div>
                            <div class="contacts__item contacts__mail">Email: abakanrock@ya.ru</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
