<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
// $APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
// $APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
// $APPLICATION->SetTitle("Статьи");
?>


<?$APPLICATION->IncludeComponent(
	"demo:news.list", 
	"custom1", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "mainSlider",
		"IBLOCK_ID" => "22",
		"NEWS_COUNT" => "5",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "BLINK",
			1 => "BTEXT",
			2 => "DESCRIPTION",
			3 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "custom1",
		"STRICT_SECTION_CHECK" => "N",
		"FILE_404" => "",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	),
	false
);?>
<div class="menu-catalog" data-modal="catalog">
          <div class="menu-catalog__inner baron" data-modal-inner>
            <div class="baron__scroller">
              <div class="menu-catalog__title">
                <svg class="icon icon-category">
                  <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-category"></use>
                </svg> Каталог </div>
              <ul class="menu-catalog__list">
                <li>
                  <a href="#" class="menu-catalog-item">
                    <span class="menu-catalog-item__icon">
                      <svg class="icon icon-towel">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-towel"></use>
                      </svg>
                    </span>
                    <span class="menu-catalog-item__title">Махровые полотенца</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-catalog-item">
                    <span class="menu-catalog-item__icon">
                      <svg class="icon icon-bathrobe">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-bathrobe"></use>
                      </svg>
                    </span>
                    <span class="menu-catalog-item__title">Махровые халаты</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-catalog-item">
                    <span class="menu-catalog-item__icon">
                      <svg class="icon icon-sheet">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-sheet"></use>
                      </svg>
                    </span>
                    <span class="menu-catalog-item__title">Махровые простыни</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-catalog-item">
                    <span class="menu-catalog-item__icon">
                      <svg class="icon icon-canvas">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-canvas"></use>
                      </svg>
                    </span>
                    <span class="menu-catalog-item__title">Махровое полотно</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-catalog-item">
                    <span class="menu-catalog-item__icon">
                      <svg class="icon icon-sauna">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-sauna"></use>
                      </svg>
                    </span>
                    <span class="menu-catalog-item__title">Наборы для сауны</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-catalog-item">
                    <span class="menu-catalog-item__icon">
                      <svg class="icon icon-bedclothes">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-bedclothes"></use>
                      </svg>
                    </span>
                    <span class="menu-catalog-item__title">Комплекты постельного белья</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-catalog-item">
                    <span class="menu-catalog-item__icon">
                      <svg class="icon icon-socks">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-socks"></use>
                      </svg>
                    </span>
                    <span class="menu-catalog-item__title">Носки</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-catalog-item">
                    <span class="menu-catalog-item__icon">
                      <svg class="icon icon-shawl">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-shawl"></use>
                      </svg>
                    </span>
                    <span class="menu-catalog-item__title">Носовые платки</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-catalog-item">
                    <span class="menu-catalog-item__icon">
                      <svg class="icon icon-knitwear">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-knitwear"></use>
                      </svg>
                    </span>
                    <span class="menu-catalog-item__title">Трикотажные изделия</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-catalog-item">
                    <span class="menu-catalog-item__icon">
                      <svg class="icon icon-terry">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-terry"></use>
                      </svg>
                    </span>
                    <span class="menu-catalog-item__title">Махровая продукция</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="baron__track">
              <div class="baron__free">
                <div class="baron__bar"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="cart-popup" data-modal="cart">
          <div class="cart-popup__inner" data-modal-inner>
            <div class="cart-popup__close" data-modal-close>
              <svg class="icon icon-close">
                <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-close"></use>
              </svg>
            </div>
            <div class="cart-popup__list baron">
              <div class="baron__scroller">
                <div class="cart-popup__item">
                  <div class="cart-min-item">
                    <div class="cart-min-item__left">
                      <div class="cart-min-item__img">
                        <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/cart-min.jpg" alt=""></a>
                      </div>
                      <div class="cart-min-item__count">
                        <ul class="counter">
                          <li class="counter__btn" data-counter="minus">-</li>
                          <li><input type="text" value="1" min="0"></li>
                          <li class="counter__btn" data-counter="plus">+</li>
                        </ul>
                      </div>
                    </div>
                    <div class="cart-min-item__right">
                      <div class="cart-min-item__art">Артикул: 12-8790</div>
                      <div class="cart-min-item__title"><a href="#">Элегантный бамбук</a></div>
                      <div class="cart-min-item__size">30x70 см</div>
                      <div class="cart-min-item__price-box">
                        <div class="cart-min-item__price price">1250 <svg class="icon icon-rubl">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-rubl"></use>
                          </svg>
                        </div>
                        <a href="#" class="cart-min-item__del btn-del">
                          <svg class="icon icon-del">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-del"></use>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cart-popup__item">
                  <div class="cart-min-item">
                    <div class="cart-min-item__left">
                      <div class="cart-min-item__img">
                        <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/cart-min.jpg" alt=""></a>
                      </div>
                      <div class="cart-min-item__count">
                        <ul class="counter">
                          <li class="counter__btn" data-counter="minus">-</li>
                          <li><input type="text" value="1" min="0"></li>
                          <li class="counter__btn" data-counter="plus">+</li>
                        </ul>
                      </div>
                    </div>
                    <div class="cart-min-item__right">
                      <div class="cart-min-item__art">Артикул: 12-8790</div>
                      <div class="cart-min-item__title"><a href="#">Элегантный бамбук</a></div>
                      <div class="cart-min-item__size">30x70 см</div>
                      <div class="cart-min-item__price-box">
                        <div class="cart-min-item__price price">1250 <svg class="icon icon-rubl">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-rubl"></use>
                          </svg>
                        </div>
                        <a href="#" class="cart-min-item__del btn-del">
                          <svg class="icon icon-del">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-del"></use>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cart-popup__item">
                  <div class="cart-min-item">
                    <div class="cart-min-item__left">
                      <div class="cart-min-item__img">
                        <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/cart-min.jpg" alt=""></a>
                      </div>
                      <div class="cart-min-item__count">
                        <ul class="counter">
                          <li class="counter__btn" data-counter="minus">-</li>
                          <li><input type="text" value="1" min="0"></li>
                          <li class="counter__btn" data-counter="plus">+</li>
                        </ul>
                      </div>
                    </div>
                    <div class="cart-min-item__right">
                      <div class="cart-min-item__art">Артикул: 12-8790</div>
                      <div class="cart-min-item__title"><a href="#">Элегантный бамбук</a></div>
                      <div class="cart-min-item__size">30x70 см</div>
                      <div class="cart-min-item__price-box">
                        <div class="cart-min-item__price price">1250 <svg class="icon icon-rubl">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-rubl"></use>
                          </svg>
                        </div>
                        <a href="#" class="cart-min-item__del btn-del">
                          <svg class="icon icon-del">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-del"></use>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cart-popup__item">
                  <div class="cart-min-item">
                    <div class="cart-min-item__left">
                      <div class="cart-min-item__img">
                        <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/cart-min.jpg" alt=""></a>
                      </div>
                      <div class="cart-min-item__count">
                        <ul class="counter">
                          <li class="counter__btn" data-counter="minus">-</li>
                          <li><input type="text" value="1" min="0"></li>
                          <li class="counter__btn" data-counter="plus">+</li>
                        </ul>
                      </div>
                    </div>
                    <div class="cart-min-item__right">
                      <div class="cart-min-item__art">Артикул: 12-8790</div>
                      <div class="cart-min-item__title"><a href="#">Элегантный бамбук</a></div>
                      <div class="cart-min-item__size">30x70 см</div>
                      <div class="cart-min-item__price-box">
                        <div class="cart-min-item__price price">1250 <svg class="icon icon-rubl">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-rubl"></use>
                          </svg>
                        </div>
                        <a href="#" class="cart-min-item__del btn-del">
                          <svg class="icon icon-del">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-del"></use>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cart-popup__item">
                  <div class="cart-min-item">
                    <div class="cart-min-item__left">
                      <div class="cart-min-item__img">
                        <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/cart-min.jpg" alt=""></a>
                      </div>
                      <div class="cart-min-item__count">
                        <ul class="counter">
                          <li class="counter__btn" data-counter="minus">-</li>
                          <li><input type="text" value="1" min="0"></li>
                          <li class="counter__btn" data-counter="plus">+</li>
                        </ul>
                      </div>
                    </div>
                    <div class="cart-min-item__right">
                      <div class="cart-min-item__art">Артикул: 12-8790</div>
                      <div class="cart-min-item__title"><a href="#">Элегантный бамбук</a></div>
                      <div class="cart-min-item__size">30x70 см</div>
                      <div class="cart-min-item__price-box">
                        <div class="cart-min-item__price price">1250 <svg class="icon icon-rubl">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-rubl"></use>
                          </svg>
                        </div>
                        <a href="#" class="cart-min-item__del btn-del">
                          <svg class="icon icon-del">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-del"></use>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="baron__track">
                <div class="baron__free">
                  <div class="baron__bar"></div>
                </div>
              </div>
            </div>
            <div class="cart-popup__bottom">
              <div class="cart-popup__price-box">
                <span class="cart-popup__price-title">К оплате:</span>
                <span class="cart-popup__price price">5525 <svg class="icon icon-rubl">
                    <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-rubl"></use>
                  </svg>
                </span>
              </div>
              <a href="#" class="btn cart-popup__btn">Перейти в корзину</a>
            </div>
          </div>
        </div>
        <div class="bottom-menu">
          <ul class="bottom-menu__list">
            <li><a href="#">
                <svg class="icon icon-category">
                  <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-category"></use>
                </svg>
              </a></li>
            <li>
              <a href="#">
                <span class="bottom-menu__count-box">
                  <svg class="icon icon-cart">
                    <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-cart"></use>
                  </svg>
                  <span class="bottom-menu__count">2</span>
                </span>
              </a>
            </li>
            <li><a href="#">
                <svg class="icon icon-user">
                  <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-user"></use>
                </svg>
              </a></li>
            <li><a href="#" data-modal-open="mobile-search">
                <svg class="icon icon-search">
                  <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-search"></use>
                </svg>
              </a></li>
          </ul>
        </div>

<!-- BEGIN content -->

        <ul class="float-btn">
          <li>
            <a href="#" class="float-btn__item">
              <span class="float-btn__icon">
                <svg class="icon icon-cart-2">
                  <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-cart-2"></use>
                </svg>
              </span>
              <span class="float-btn__text"> Совместные<br> покупки </span>
            </a>
          </li>
          <li>
            <a href="#" class="float-btn__item">
              <span class="float-btn__icon">
                <svg class="icon icon-list-sale">
                  <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-list-sale"></use>
                </svg>
              </span>
              <span class="float-btn__text"> Система<br> скидок </span>
            </a>
          </li>
          <li>
            <a href="#" class="float-btn__item">
              <span class="float-btn__icon">
                <svg class="icon icon-sizes">
                  <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-sizes"></use>
                </svg>
              </span>
              <span class="float-btn__text"> Таблицы<br> размеров </span>
            </a>
          </li>
        </ul>
        <section class="section section--category">
          <div class="container">
            <h2 class="section-title">
              <svg class="icon icon-category">
                <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-category"></use>
              </svg> Каталог продукции </h2>
            <div class="category-list">
              <div class="category-list__item">
                <a href="#" class="category-item">
                  <div class="category-item__img">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-1.jpg" alt="">
                    <svg class="icon icon-towel">
                      <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-towel"></use>
                    </svg>
                  </div>
                  <div class="category-item__content">
                    <div class="category-item__title">Махровые полотенца</div>
                    <div class="category-item__link">Смотреть все</div>
                  </div>
                </a>
              </div>
              <div class="category-list__item">
                <a href="#" class="category-item">
                  <div class="category-item__img">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-2.jpg" alt="">
                    <svg class="icon icon-bathrobe">
                      <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-bathrobe"></use>
                    </svg>
                  </div>
                  <div class="category-item__content">
                    <div class="category-item__title">Махровые халаты</div>
                    <div class="category-item__link">Смотреть все</div>
                  </div>
                </a>
              </div>
              <div class="category-list__item">
                <a href="#" class="category-item">
                  <div class="category-item__img">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-3.jpg" alt="">
                    <svg class="icon icon-sheet">
                      <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-sheet"></use>
                    </svg>
                  </div>
                  <div class="category-item__content">
                    <div class="category-item__title">Махровые простыни</div>
                    <div class="category-item__link">Смотреть все</div>
                  </div>
                </a>
              </div>
              <div class="category-list__item">
                <a href="#" class="category-item">
                  <div class="category-item__img">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-4.jpg" alt="">
                    <svg class="icon icon-canvas">
                      <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-canvas"></use>
                    </svg>
                  </div>
                  <div class="category-item__content">
                    <div class="category-item__title">Махровое полотно</div>
                    <div class="category-item__link">Смотреть все</div>
                  </div>
                </a>
              </div>
              <div class="category-list__item">
                <a href="#" class="category-item">
                  <div class="category-item__img">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-5.jpg" alt="">
                    <svg class="icon icon-sauna">
                      <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-sauna"></use>
                    </svg>
                  </div>
                  <div class="category-item__content">
                    <div class="category-item__title">Наборы для сауны</div>
                    <div class="category-item__link">Смотреть все</div>
                  </div>
                </a>
              </div>
              <div class="category-list__item">
                <a href="#" class="category-item">
                  <div class="category-item__img">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-6.jpg" alt="">
                    <svg class="icon icon-bedclothes">
                      <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-bedclothes"></use>
                    </svg>
                  </div>
                  <div class="category-item__content">
                    <div class="category-item__title">Комплекты постельного белья</div>
                    <div class="category-item__link">Смотреть все</div>
                  </div>
                </a>
              </div>
              <div class="category-list__item">
                <a href="#" class="category-item">
                  <div class="category-item__img">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-7.jpg" alt="">
                    <svg class="icon icon-socks">
                      <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-socks"></use>
                    </svg>
                  </div>
                  <div class="category-item__content">
                    <div class="category-item__title">Носки</div>
                    <div class="category-item__link">Смотреть все</div>
                  </div>
                </a>
              </div>
              <div class="category-list__item">
                <a href="#" class="category-item">
                  <div class="category-item__img">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-8.jpg" alt="">
                    <svg class="icon icon-shawl">
                      <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-shawl"></use>
                    </svg>
                  </div>
                  <div class="category-item__content">
                    <div class="category-item__title">Носовые платки</div>
                    <div class="category-item__link">Смотреть все</div>
                  </div>
                </a>
              </div>
              <div class="category-list__item">
                <a href="#" class="category-item">
                  <div class="category-item__img">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-9.jpg" alt="">
                    <svg class="icon icon-knitwear">
                      <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-knitwear"></use>
                    </svg>
                  </div>
                  <div class="category-item__content">
                    <div class="category-item__title">Трикотажные изделия</div>
                    <div class="category-item__link">Смотреть все</div>
                  </div>
                </a>
              </div>
              <div class="category-list__item">
                <a href="#" class="category-item">
                  <div class="category-item__img">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-10.jpg" alt="">
                    <svg class="icon icon-terry">
                      <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-terry"></use>
                    </svg>
                  </div>
                  <div class="category-item__content">
                    <div class="category-item__title">Махровая продукция</div>
                    <div class="category-item__link">Смотреть все</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="section section--news">
          <div class="container">
            <h2 class="section-title">
              <svg class="icon icon-new-products">
                <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-new-products"></use>
              </svg> Новинки </h2>
            <div class="catalog-list">
              <div class="catalog-list__item">
                <div class="catalog-item">
                  <a href="#" class="catalog-item__cover-link"></a>
                  <div class="catalog-item__img">
                    <div class="catalog-item__label catalog-item__label--discont">%</div>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-1.jpg" alt="">
                    <a href="#" class="btn catalog-item__btn catalog-item__category">Полотенца</a>
                    <a href="#" class="btn catalog-item__btn catalog-item__fast" data-modal-open="fast">Быстрый просмотр</a>
                    <ul class="catalog-item__sizes">
                      <li><span class="catalog-item__size catalog-item__btn btn">40x70 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">50x80 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">40x70 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">50x80 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                    </ul>
                  </div>
                  <div class="catalog-item__content">
                    <div class="catalog-item__art">12C-60</div>
                    <div class="catalog-item__name">Элегантный бамбук</div>
                    <div class="catalog-item__sale">
                      <div class="catalog-item__price price">126 <svg class="icon icon-rubl">
                          <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-rubl"></use>
                        </svg>
                      </div>
                      <a href="#" class="btn catalog-item__btn">Подробнее</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="catalog-list__item">
                <div class="catalog-item">
                  <a href="#" class="catalog-item__cover-link"></a>
                  <div class="catalog-item__img">
                    <div class="catalog-item__label catalog-item__label--discont">%</div>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-2.jpg" alt="">
                    <a href="#" class="btn catalog-item__btn catalog-item__category">Полотенца</a>
                    <a href="#" class="btn catalog-item__btn catalog-item__fast" data-modal-open="fast">Быстрый просмотр</a>
                    <ul class="catalog-item__sizes">
                      <li><span class="catalog-item__size catalog-item__btn btn">40x70 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">50x80 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">40x70 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">50x80 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                    </ul>
                  </div>
                  <div class="catalog-item__content">
                    <div class="catalog-item__art">12C-60</div>
                    <div class="catalog-item__name">Элегантный бамбук</div>
                    <div class="catalog-item__sale">
                      <div class="catalog-item__price price">126 <svg class="icon icon-rubl">
                          <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-rubl"></use>
                        </svg>
                      </div>
                      <a href="#" class="btn catalog-item__btn">Подробнее</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="catalog-list__item">
                <div class="catalog-item">
                  <a href="#" class="catalog-item__cover-link"></a>
                  <div class="catalog-item__img">
                    <div class="catalog-item__label catalog-item__label--new">Новинка</div>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-3.jpg" alt="">
                    <a href="#" class="btn catalog-item__btn catalog-item__category">Полотенца</a>
                    <a href="#" class="btn catalog-item__btn catalog-item__fast" data-modal-open="fast">Быстрый просмотр</a>
                    <ul class="catalog-item__sizes">
                      <li><span class="catalog-item__size catalog-item__btn btn">40x70 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">50x80 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">40x70 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">50x80 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                    </ul>
                  </div>
                  <div class="catalog-item__content">
                    <div class="catalog-item__art">12C-60</div>
                    <div class="catalog-item__name">Элегантный бамбук</div>
                    <div class="catalog-item__sale">
                      <div class="catalog-item__price price">126 <svg class="icon icon-rubl">
                          <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-rubl"></use>
                        </svg>
                      </div>
                      <a href="#" class="btn catalog-item__btn">Подробнее</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="catalog-list__item">
                <div class="catalog-item">
                  <a href="#" class="catalog-item__cover-link"></a>
                  <div class="catalog-item__img">
                    <div class="catalog-item__label catalog-item__label--discont">%</div>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/category-4.jpg" alt="">
                    <a href="#" class="btn catalog-item__btn catalog-item__category">Полотенца</a>
                    <a href="#" class="btn catalog-item__btn catalog-item__fast" data-modal-open="fast">Быстрый просмотр</a>
                    <ul class="catalog-item__sizes">
                      <li><span class="catalog-item__size catalog-item__btn btn">40x70 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">50x80 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">40x70 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">50x80 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                      <li><span class="catalog-item__size catalog-item__btn btn">70x130 см</span></li>
                    </ul>
                  </div>
                  <div class="catalog-item__content">
                    <div class="catalog-item__art">12C-60</div>
                    <div class="catalog-item__name">Элегантный бамбук</div>
                    <div class="catalog-item__sale">
                      <div class="catalog-item__price price">126 <svg class="icon icon-rubl">
                          <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-rubl"></use>
                        </svg>
                      </div>
                      <a href="#" class="btn catalog-item__btn">Подробнее</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="catalog-list__more-box">
                <a href="#" class="btn btn--border">Загрузить еще 4</a>
              </div>
            </div>
          </div>
        </section>
        <section class="section section--features">
          <div class="container">
            <h2 class="section-title section-title--features"> О компании </h2>
            <div class="features-list">
              <div class="features-list__item">
                <div class="features-item">
                  <div class="features-item__icon">
                    <svg class="icon icon-features-1">
                      <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-features-1"></use>
                    </svg>
                  </div>
                  <div class="features-item__title">Собственное производство</div>
                  <div class="features-item__desc">Собственная ткаческая и красильная фабрика в Узбекистане</div>
                </div>
              </div>
              <div class="features-list__item">
                <div class="features-item">
                  <div class="features-item__icon">
                    <svg class="icon icon-features-2">
                      <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-features-2"></use>
                    </svg>
                  </div>
                  <div class="features-item__title">Из 1-х рук без посредников</div>
                  <div class="features-item__desc">Товар в России из 1-х рук без посредников</div>
                </div>
              </div>
              <div class="features-list__item">
                <div class="features-item">
                  <div class="features-item__icon">
                    <svg class="icon icon-features-3">
                      <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-features-3"></use>
                    </svg>
                  </div>
                  <div class="features-item__title">Весь спектр махровой продукции</div>
                  <div class="features-item__desc">Весь спектр махровой продукции от полотна до готовых изделий</div>
                </div>
              </div>
              <div class="features-list__item">
                <div class="features-item">
                  <div class="features-item__icon">
                    <svg class="icon icon-features-4">
                      <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-features-4"></use>
                    </svg>
                  </div>
                  <div class="features-item__title">Соответствие ГОСТам</div>
                  <div class="features-item__desc">Соответствие ГОСТам и ТР</div>
                </div>
              </div>
              <div class="features-list__item">
                <div class="features-item">
                  <div class="features-item__icon">
                    <svg class="icon icon-features-5">
                      <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-features-5"></use>
                    </svg>
                  </div>
                  <div class="features-item__title">Индивидуальные параметры</div>
                  <div class="features-item__desc">Возможно изготовление по индивидуальным параметрам (размер, цвет, логотип)</div>
                </div>
              </div>
              <div class="features-list__item">
                <div class="features-item">
                  <div class="features-item__icon">
                    <svg class="icon icon-features-6">
                      <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-features-6"></use>
                    </svg>
                  </div>
                  <div class="features-item__title">Выполнение крупных заказов</div>
                  <div class="features-item__desc">Выполнение крупных заказов под гос.закупки (осанатории, больницы, и прочие гос. структуры) — производственная мощность ткацкого цеха 90 тонн в мес</div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END content -->
      </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>