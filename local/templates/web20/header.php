<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <?$APPLICATION->ShowHead();?>
    
    <meta charset="utf-8">
    <title><?$APPLICATION->ShowTitle()?></title>
      
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|PT+Serif:700|Philosopher:700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" media="all" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/style.css">
    
	  <script defer src="<?= SITE_TEMPLATE_PATH ?>/assets/js/app.js"></script>
    
	  
  </head>
  
  <body class="preload">
  <div id="panel">
    <?php $APPLICATION->ShowPanel(); ?></div>
    <!-- begin wrapper -->
    <div class="wrapper">
      <!-- begin wrap -->
      <div class="wrap">
        <!-- begin header -->
        <header class="header">
          <div class="header__container container">
            <div class="header__logo">
              <a href="#">
                <svg class="icon icon-logo">
                  <use href="img/sprite.svg#icon-logo"></use>
                </svg>
              </a>
              <a href="#" class="header__btn btn md-show sm-hide" data-modal-open="recall">Перезвоните мне</a>
            </div>
            <div class="header__content">
              <div class="header__top">
                <ul class="header__contacts">
                  <li>
                    <a href="#" class="link-icon link-icon--md-hide-icon">
                      <span class="link-icon__icon">
                        <svg class="icon icon-mail">
                          <use href="img/sprite.svg#icon-mail"></use>
                        </svg> > </span>
                      <span class="link-icon__text">
                        <?$APPLICATION->includeFile(
                          SITE_DIR."include/email.php",
                          array(),
                          array(
                            "MODE" => "text"
                          )
                        );?>
                        
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link-icon link-icon--md-hide-icon">
                      <span class="link-icon__icon">
                        <svg class="icon icon-phone">
                          <use href="img/sprite.svg#icon-phone"></use>
                        </svg>
                      </span>
                      <span class="link-icon__text bold">
                        <?$APPLICATION->includeFile(
                          SITE_DIR."include/phone.php",
                          array(),
                          array(
                            "MODE" => "text"
                          )
                        );?>
                        </span>
                    </a>
                  </li>
                  <li>
                    <div class="link-dotted hint"> График работы <span class="hint__popup">
                        <p>График работы:</p>
                        <p>  <?$APPLICATION->includeFile(
                          SITE_DIR."include/workingtime.php",
                          array(),
                          array(
                            "MODE" => "text"
                          )
                        );?>
                        <br> 
                        сб-вс: выходной </p>
                      </span>
                    </div>
                  </li>
                </ul>
                <ul class="header__links">
                  <li><a href="#" class="header__btn btn md-hide" data-modal-open="recall">Перезвоните мне</a></li>
                  <li>
                    <a href="#" class="link-icon hint" data-modal-open="cart">
                      <span class="link-icon__icon">
                        <svg class="icon icon-cart">
                          <use href="img/sprite.svg#icon-cart"></use>
                        </svg>
                      </span>
                      <span class="link-icon__count">2</span>
                      <span class="hint__popup">Посмотреть корзину</span>
                    </a>
                  </li>
                  <li>
                    <div class="link-icon hint">
                      <span class="link-icon__icon">
                        <svg class="icon icon-user">
                          <use href="img/sprite.svg#icon-user"></use>
                        </svg>
                      </span>
                      <span class="hint__popup"><a href="#" data-modal-open="login">Вход</a> / <a href="#" data-modal-open="reg">Регистрация</a></span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="header__menu">
                <nav class="header__nav">
                  <ul class="header__nav-list">
                    <li><a href="#" data-modal-open="catalog">Каталог</a></li>
                    <li><a href="#">Оплата</a></li>
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Контакты</a></li>
                  </ul>
                </nav>
                <div class="header__search">
                  <div class="search-block">
                    <svg class="icon icon-search">
                      <use href="img/sprite.svg#icon-search"></use>
                    </svg>
                    <input type="text" class="search-block__input" placeholder="Поиск">
                  </div>
                </div>
              </div>
            </div>
            <div class="header__hamb">
              <div class="hamb"></div> <!-- active -->
            </div>
            <!-- begin mobile-menu -->
            <div class="modal mobile-menu" data-modal="modal-main-menu" data-modal-inner>
              <!-- active -->
              <a href="#" class="mobile-menu__recall" data-modal-open="recall" data-modal-not-close>Перезвоните мне</a>
              <ul class="mobile-menu__list">
                <li><a href="#">Каталог</a></li>
                <li><a href="#">Оплата</a></li>
                <li><a href="#" class="active">Доставка</a></li>
                <li><a href="#">Отзывы</a></li>
                <li><a href="#">Контакты</a></li>
              </ul>
              <ul class="mobile-menu__contacts">
                <li><a href="#">8 (800) 250-92-44</a></li>
                <li>153005, г. Иваново, ул. Сосновая 1, ТекстильПрофи, пав. №3209</li>
                <li>Пн-Пт: 9-00 - 17-00</li>
              </ul>
            </div>
            <!-- end mobile-menu -->
          </div>
          <!-- end container -->
        </header>
        <!-- end header -->



<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false)?></h1>