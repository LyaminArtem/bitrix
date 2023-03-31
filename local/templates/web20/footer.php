<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?> 
      <!-- begin footer -->
      <footer class="footer">
        <div class="footer__top">
          <div class="footer__container container">
            <div class="footer__top-row">
              <div class="footer__menu">
                <div class="footer__menu-block">
                  <div class="footer-menu" data-collapse="sm">
                    <div class="footer-menu__title js-collapse__title" data-collapse-title>Компания</div>
                    <ul class="footer-menu__list" data-collapse-list>
                      <li><a href="#">О компании</a></li>
                      <li><a href="#">Новости</a></li>
                      <li><a href="#">Отзывы</a></li>
                      <li><a href="#">Часто задаваемые вопросы</a></li>
                      <li><a href="#">Личный кабинет</a></li>
                    </ul>
                  </div>
                </div>
                <div class="footer__menu-block">
                  <div class="footer-menu" data-collapse="sm">
                    <div class="footer-menu__title js-collapse__title" data-collapse-title>Информация</div>
                    <ul class="footer-menu__list js-collapse__list" data-collapse-list>
                      <li><a href="#">Как сделать заказ</a></li>
                      <li><a href="#">Совместные закупки</a></li>
                      <li><a href="#">Оплата</a></li>
                      <li><a href="#">Доставка</a></li>
                      <li><a href="#">Размерная сетка</a></li>
                      <li><a href="#">Прайс-лист</a></li>
                    </ul>
                  </div>
                </div>
                <div class="footer__menu-block footer__menu-block--columns">
                  <div class="footer-menu" data-collapse="sm">
                    <div class="footer-menu__title js-collapse__title" data-collapse-title>Каталог</div>
                    <ul class="footer-menu__list footer-menu__list--columns js-collapse__list" data-collapse-list>
                      <li><a href="#">Махровые полотенца</a></li>
                      <li><a href="#">Махровые халаты</a></li>
                      <li><a href="#">Махровые простыни</a></li>
                      <li><a href="#">Махровое полотно</a></li>
                      <li><a href="#">Наборы для сауны</a></li>
                      <li><a href="#">Носки</a></li>
                      <li><a href="#">Комплекты постельного белья</a></li>
                      <li><a href="#">Носовые платки</a></li>
                      <li><a href="#">Трикотажные изделия</a></li>
                      <li><a href="#">Махровая продукция</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="footer__contacts">
                <div class="footer-menu footer__contacts-block" data-collapse="sm">
                  <div class="footer-menu__title js-collapse__title" data-collapse-title>Контакты</div>
                  <ul class="footer-menu__list js-collapse__list" data-collapse-list>
                    <li>
                      <a href="#">
                        <div class="footer-menu__list-icon">
                          <svg class="icon icon-phone">
                            <use href="img/sprite.svg#icon-phone"></use>
                          </svg>
                        </div> 
                        <?$APPLICATION->includeFile(
                          SITE_DIR."include/phone.php",
                          array(),
                          array(
                            "MODE" => "text"
                          )
                        );?>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="footer-menu__list-icon">
                          <svg class="icon icon-mail">
                            <use href="img/sprite.svg#icon-mail"></use>
                          </svg>
                        </div> 
                        <?$APPLICATION->includeFile(
                          SITE_DIR."include/email.php",
                          array(),
                          array(
                            "MODE" => "text"
                          )
                        );?>
                      </a>
                    </li>
                    <li>
                      <div class="footer-menu__text">
                        <div class="footer-menu__list-icon">
                          <svg class="icon icon-map">
                            <use href="img/sprite.svg#icon-map"></use>
                          </svg>
                        </div>
                        <div>
                          <p>153005, г. Иваново, ул. Сосновая 1, ТекстильПрофи, пав.&nbsp;№3209</p>
                          <p> 
                            <?$APPLICATION->includeFile(
                          SITE_DIR."include/workingtime.php",
                          array(),
                          array(
                            "MODE" => "text"
                          )
                        );?></p>
                        </div>
                      </div>
                    </li>
                    <li class="footer__social">
                      <ul class="social">
                        <li><a href="#">
                            <svg class="icon icon-vk">
                              <use href="img/sprite.svg#icon-vk"></use>
                            </svg>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer__container container">
            <div class="footer__bottom-row">
              <div class="footer__policy"><a href="#">Политика в отношении обработки персональных данных</a></div>
              <div class="footer__copy">Баракат-Текс © 1990-2018</div>
              <div class="footer__dev">
                <a href="https://cadesign.ru/" class="cadesign" target="_blank">
                  <div class="cadesign__title">Создание сайта —</div>
                  <svg class="icon icon-cadesign">
                    <use href="img/sprite.svg#icon-cadesign"></use>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end footer -->
    </div>
    <!-- end wrapper -->
</body>
</html>