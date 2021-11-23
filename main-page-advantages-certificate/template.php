<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php /** @var  $arResult */ ?>
<?php /** @var  $APPLICATION */ ?>

<div class="certificates-slider">
    <div class="certificates-slider__text">
        <div class="block-title"><? $APPLICATION->IncludeFile("/.inc/content-advantages-tittle-certificate.php", array(), array("MODE" => "html", "NAME" => "Название заголовка",)); ?></div>
        <p><? $APPLICATION->IncludeFile("/.inc/content-advantages-certificate-about.php", array(), array("MODE" => "html", "NAME" => "Текст описания ",)); ?></p>
        <div class="certificates-slider__btns">
            <div class="swiper__btns">
                <div class="swiper-button swiper-button-prev"></div>
                <div class="swiper-button swiper-button-next"></div>
            </div>
            <a class="btn btn-color btn-more" href="#">Все сертификаты</a>
        </div>
    </div>
    <div class="certificates-slider__list swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($arResult['ITEMS'] as $item): ?>
                <?
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
            <div class="certificates-slider__item swiper-slide" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                <div class="certificates-slide"><a class="certificates-slide__link"
                                                   href="<?= $item['CERTIFICATE_PDF'] ?>"
                                                   target="_blank"></a>
                    <div class="certificates-slide__img"><img
                                src="<?= $item['CERTIFICATE_PIC']['src'] ?>" alt=""
                                loading="lazy"/></div>
                    <div class="certificates-slide__title"><?= $item['PROPERTIES']['CERTIFICATE_TITLE']['VALUE'] ?></div>
                    <div class="certificates-slide__text"><?= $item['PROPERTIES']['CERTIFICATE_TEXT']['VALUE'] ?></div>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
    </div>




