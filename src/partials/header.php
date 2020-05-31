<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Базовые мета-теги для поисковиков -->
  <title><?php echo $title ?></title>

  <!-- Иконки для страницы -->
  <link rel="shortcut icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/favicon.png" type="image/png">
  <link rel="shortcut icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/favicon.ico" type="image/x-icon">
  <link rel="icon" sizes="16x16" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/favicon-16x16.png" type="image/png">
  <link rel="icon" sizes="32x32" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/favicon-32x32.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/apple-touch-icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="1024x1024" href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/favicons/apple-touch-icon-1024x1024.png">

  <!-- Метатаги которые выводят информацию о странице в поисковой запрос -->
  <meta name="description" content="<?php echo $description ?>" />
  <meta name="keywords" content="<?php echo $keywords ?>" />

  <!-- Контролирует поведение поисковых систем при индексации страницы -->
  <meta name="robots" content="index,follow,noodp" />

  <!-- Покраска адресной строки в мобильных Chrome, Firefox OS и Opera -->
  <meta name="theme-color" content="#2d2d2d" />

  <!-- Для Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#2d2d2d" />

  <!-- Для iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

  <!-- Верификация Яндекс.Вебмастер  -->
  <meta name="yandex-verification" content="" />

  <!-- Стили -->
  <!-- build:css -->
  <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?> /css/style.css" />
  <!-- endbuild -->
</head>

<body>
  <!-- Шапка -->
  <header id="header">
    <div class="container">
      <img id="parallax" class="logo" src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/logo.svg" alt="Логотип">

      <nav class="nav">
        <ul class="nav__navbar">
          <li class="nav__item"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/index.php" class="nav__link">Главная</a></li>
          <li class="nav__item"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/portfolio/index.php" class="nav__link">Наши работы</a></li>
          <li class="nav__item"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/materials.php" class="nav__link">С чем работаем</a></li>
          <li class="nav__item"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/order.php" class="nav__link">Схема заказа</a></li>
        </ul>
      </nav>

      <div class="callback">
        <div class="callback-action">
          <svg class="callback-action__icon" xmlns="http://www.w3.org/2000/svg" width="16.03" height="16" viewBox="0 0 16.03 16">
            <path fill="#75b726" fill-rule="evenodd" id="phone" d="M1187.88,33.81a0.7,0.7,0,0,0-.75.357,0.683,0.683,0,0,0,.12.821,0.651,0.651,0,0,0,.36.191,2.805,2.805,0,0,1,2.22,2.2,1.3,1.3,0,0,0,.19.36,0.7,0.7,0,0,0,1.19-.626m-3.38-6.1a0.7,0.7,0,0,0-.58,1.186,1.888,1.888,0,0,1,.42.2,5.581,5.581,0,0,1,4.95,4.921,1.29,1.29,0,0,0,.21.416,0.7,0.7,0,0,0,.8.135,0.712,0.712,0,0,0,.39-0.706m0,0a7,7,0,0,0-6.19-6.151m4.79,13.884h-0.7v0Zm-1.53,1.395-0.07.693h0.01Zm-6.05-2.14,0.38-.585v0Zm-4.2-4.183,0.59-.374-0.01-.005Zm-2.16-6.045-0.69.063V34Zm1.4-1.52V31.7h0v0.7Zm2.1,0v0.7h0.01Zm1.4,1.2,0.7-.091V33.5Zm0.49,1.959-0.65.244h0Zm-0.31,1.471,0.49,0.493,0.01,0Zm-0.89.886-0.5-.493a0.692,0.692,0,0,0-.11.837Zm4.21,4.183-0.35.606a0.7,0.7,0,0,0,.84-0.113Zm0.89-.886-0.5-.5v0Zm1.47-.314-0.24.653h0Zm1.97,0.488,0.1-.69h0Zm-0.2-4.275a4.206,4.206,0,0,0-3.33-3.305m4.04,9V44.9h1.4V42.8h-1.4Zm0,2.094a0.685,0.685,0,0,1-.23.517l0.95,1.028a2.081,2.081,0,0,0,.68-1.55Zm-0.23.517a0.692,0.692,0,0,1-.53.181l-0.13,1.389a2.113,2.113,0,0,0,1.61-.542Zm-0.52.182a13.245,13.245,0,0,1-5.75-2.033l-0.76,1.17a14.615,14.615,0,0,0,6.36,2.249Zm-5.75-2.036a12.891,12.891,0,0,1-3.99-3.969l-1.19.748a14.46,14.46,0,0,0,4.43,4.4Zm-4-3.974a13.131,13.131,0,0,1-2.04-5.74l-1.39.148a14.357,14.357,0,0,0,2.26,6.35Zm-2.04-5.729a0.7,0.7,0,0,1,.18-0.533l-1.03-.941a2.051,2.051,0,0,0-.54,1.6Zm0.18-.533a0.714,0.714,0,0,1,.52-0.227V31.7a2.094,2.094,0,0,0-1.55.681Zm0.52-.227h2.1V31.7h-2.1V33.1Zm2.11,0a0.7,0.7,0,0,1,.7.6l1.39-.2a2.1,2.1,0,0,0-2.11-1.8Zm0.7,0.593a9.088,9.088,0,0,0,.53,2.112l1.31-.488a8.032,8.032,0,0,1-.45-1.806Zm0.53,2.113a0.713,0.713,0,0,1-.16.736l1,0.98a2.075,2.075,0,0,0,.47-2.207Zm-0.16.733-0.89.886,0.99,0.986,0.89-.885Zm-1,1.723a11.845,11.845,0,0,0,4.47,4.445l0.69-1.212a10.482,10.482,0,0,1-3.94-3.922Zm5.31,4.332,0.89-.885-0.99-.986-0.89.885Zm0.89-.883a0.7,0.7,0,0,1,.74-0.157l0.49-1.305a2.114,2.114,0,0,0-2.22.471Zm0.74-.156a9.821,9.821,0,0,0,2.12.526l0.19-1.382a8.465,8.465,0,0,1-1.82-.45Zm2.12,0.525a0.7,0.7,0,0,1,.6.708l1.4,0.035a2.091,2.091,0,0,0-1.81-2.123Z" transform="translate(-1178 -31)" />
          </svg>
          <button class="callback-action__label">Обратный звонок</button>
        </div>
        <!-- /.callback-action -->

        <span class="callback__time">с 9 до 22</span>
        <a class="callback__phone" href="tel:+74993906764">+7 499 390 67 64</a>
      </div>
      <!-- /.callback -->

      <form action="" class="form form-callback">
        <p class="form-callback__title">Перезвоните мне</p>
        <input type="text" class="form-callback__input input border-br-tl" placeholder="Имя" name="user_name">
        <input type="tel" class="form-callback__input input border-br-tl" placeholder="Телефон" name="user_phone">
        <button type="button" class="form-callback__button button button-form border-bl-tr">Отправить заявку</button>
        <div class="form-callback__policy policy">
          <label class="checkbox">
            <input type="checkbox">
            <span class="checkbox__mark border-small-br-tl"></span>
            <span class="checkbox__label policy__label">Я даю свое согласие на обработку</span>
          </label>
          <a href="" class="policy__label policy__label--important">&nbsp;персональных данных</a>
        </div>
        <!-- /.policy-wrapper -->
        <span data-error-label class="form-error"></span>
      </form>

      <button class="hamburger hamburger--collapse" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>
    <!-- /.container -->
    <!-- /.mobile-menu -->
  </header>

  <div id="mobile-menu" class="mobile-menu mobile-menu--slide">
    <ul class="mobile-menu__navbar">
      <li class="mobile-menu__item"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/index.php" class="mobile-menu__link">Главная</a></li>
      <li class="mobile-menu__item"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/portfolio/index.php" class="mobile-menu__link">Наши работы</a></li>
      <li class="mobile-menu__item"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/materials.php" class="mobile-menu__link">С чем работаем</a></li>
      <li class="mobile-menu__item"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/order.php" class="mobile-menu__link">Схема заказа</a></li>
    </ul>

    <div class="callback">
      <div class="callback-action">
        <svg class="callback-action__icon" xmlns="http://www.w3.org/2000/svg" width="16.03" height="16" viewBox="0 0 16.03 16">
          <path fill="#75b726" fill-rule="evenodd" id="phone" d="M1187.88,33.81a0.7,0.7,0,0,0-.75.357,0.683,0.683,0,0,0,.12.821,0.651,0.651,0,0,0,.36.191,2.805,2.805,0,0,1,2.22,2.2,1.3,1.3,0,0,0,.19.36,0.7,0.7,0,0,0,1.19-.626m-3.38-6.1a0.7,0.7,0,0,0-.58,1.186,1.888,1.888,0,0,1,.42.2,5.581,5.581,0,0,1,4.95,4.921,1.29,1.29,0,0,0,.21.416,0.7,0.7,0,0,0,.8.135,0.712,0.712,0,0,0,.39-0.706m0,0a7,7,0,0,0-6.19-6.151m4.79,13.884h-0.7v0Zm-1.53,1.395-0.07.693h0.01Zm-6.05-2.14,0.38-.585v0Zm-4.2-4.183,0.59-.374-0.01-.005Zm-2.16-6.045-0.69.063V34Zm1.4-1.52V31.7h0v0.7Zm2.1,0v0.7h0.01Zm1.4,1.2,0.7-.091V33.5Zm0.49,1.959-0.65.244h0Zm-0.31,1.471,0.49,0.493,0.01,0Zm-0.89.886-0.5-.493a0.692,0.692,0,0,0-.11.837Zm4.21,4.183-0.35.606a0.7,0.7,0,0,0,.84-0.113Zm0.89-.886-0.5-.5v0Zm1.47-.314-0.24.653h0Zm1.97,0.488,0.1-.69h0Zm-0.2-4.275a4.206,4.206,0,0,0-3.33-3.305m4.04,9V44.9h1.4V42.8h-1.4Zm0,2.094a0.685,0.685,0,0,1-.23.517l0.95,1.028a2.081,2.081,0,0,0,.68-1.55Zm-0.23.517a0.692,0.692,0,0,1-.53.181l-0.13,1.389a2.113,2.113,0,0,0,1.61-.542Zm-0.52.182a13.245,13.245,0,0,1-5.75-2.033l-0.76,1.17a14.615,14.615,0,0,0,6.36,2.249Zm-5.75-2.036a12.891,12.891,0,0,1-3.99-3.969l-1.19.748a14.46,14.46,0,0,0,4.43,4.4Zm-4-3.974a13.131,13.131,0,0,1-2.04-5.74l-1.39.148a14.357,14.357,0,0,0,2.26,6.35Zm-2.04-5.729a0.7,0.7,0,0,1,.18-0.533l-1.03-.941a2.051,2.051,0,0,0-.54,1.6Zm0.18-.533a0.714,0.714,0,0,1,.52-0.227V31.7a2.094,2.094,0,0,0-1.55.681Zm0.52-.227h2.1V31.7h-2.1V33.1Zm2.11,0a0.7,0.7,0,0,1,.7.6l1.39-.2a2.1,2.1,0,0,0-2.11-1.8Zm0.7,0.593a9.088,9.088,0,0,0,.53,2.112l1.31-.488a8.032,8.032,0,0,1-.45-1.806Zm0.53,2.113a0.713,0.713,0,0,1-.16.736l1,0.98a2.075,2.075,0,0,0,.47-2.207Zm-0.16.733-0.89.886,0.99,0.986,0.89-.885Zm-1,1.723a11.845,11.845,0,0,0,4.47,4.445l0.69-1.212a10.482,10.482,0,0,1-3.94-3.922Zm5.31,4.332,0.89-.885-0.99-.986-0.89.885Zm0.89-.883a0.7,0.7,0,0,1,.74-0.157l0.49-1.305a2.114,2.114,0,0,0-2.22.471Zm0.74-.156a9.821,9.821,0,0,0,2.12.526l0.19-1.382a8.465,8.465,0,0,1-1.82-.45Zm2.12,0.525a0.7,0.7,0,0,1,.6.708l1.4,0.035a2.091,2.091,0,0,0-1.81-2.123Z" transform="translate(-1178 -31)" />
        </svg>
        <button class="callback-action__label">Обратный звонок</button>
      </div>
      <!-- /.callback-action -->

      <div class="callback__info callback-info">
        <span class="callback-info__time">с 9 до 22</span>
        <a class="callback-info__phone" href="tel:+74993906764">+7 499 390 67 64</a>
      </div>
      <!-- /.callback-info -->
    </div>
    <!-- /.callback -->
  </div>