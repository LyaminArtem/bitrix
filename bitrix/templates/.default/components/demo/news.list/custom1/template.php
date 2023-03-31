<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
// $this->addExternalCss("/bitrix/css/main/bootstrap.css");
// $this->addExternalCss("/bitrix/css/main/font-awesome.css");
// $this->addExternalCss($this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css');
?>

<!-- BEGIN content -->

<div class="main-slider">
  <div class="main-slider__main">
    
    <div class="main-slider__row">
      <div class="main-slider__img">
        <div class="main-slider-images">
          <div class="main-slider-images__slider">
          <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
	            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	          ?>
            <div class="main-slider-images__item">
 
              <div class="main-slider-images__img-box">
                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?= $arItem["NAME"] ?>">
              </div>
            </div>
            <? endforeach;?>
          </div>
          <div class="main-slider-images__counts slider-counts">
            <span class="slider-counts__num">01</span>
            <span class="slider-counts__all">/<span class="slider-counts__all-num"><?//= count($arResult["ITEMS"])?>5</span></span>
          </div>
        </div>
      </div>
      <div class="main-slider__content">
        <div class="main-slider-content">
        <?foreach($arResult["ITEMS"] as $arItem):?>
          <div class="main-slider-content__item">
          
            <div class="main-slider-content__container">
              <div class="main-slider-content__title"> <?= $arItem["NAME"] ?></div>
              <div class="main-slider-content__desc"> <?= $arItem["PREVIEW_TEXT"] ?> </div>
              <a href="<?=$arItem["PROPERTIES"]["BLINK"]['NAME']?>" class="btn main-slider-content__btn"><?=$arItem["PROPERTIES"]["BTEXT"]["VALUE"]?></a>
            </div>
            
          </div>
          <? endforeach;?>
        </div>
      </div>
    </div>
    
  </div>
  <div class="main-slider__thumbs">
    <div class="main-slider__container">
      <div class="main-slider-thumbs">
        <div class="main-slider-thumbs__slider">
          <?foreach($arResult["ITEMS"] as $arItem):?>
          <div class="main-slider-thumbs__item">
            <div class="main-slider-thumbs__title"> <?= $arItem["NAME"] ?> </div>
            <a href="#" class="main-slider-thumbs__link">Подробнее <svg class="icon icon-chevron-right">
                <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-chevron-right"></use>
              </svg>
            </a>
          </div>
          <? endforeach;?>
        </div>
        <div class="main-slider-thumbs__arrows">
          <button type="button" class="main-slider-thumbs__arrow main-slider-thumbs__arrow--prev">
            <svg class="icon icon-chevron-left">
              <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-chevron-left"></use>
            </svg>
          </button>
          <button type="button" class="main-slider-thumbs__arrow main-slider-thumbs__arrow--next">
            <svg class="icon icon-chevron-right">
              <use href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#icon-chevron-right"></use>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
		
		
