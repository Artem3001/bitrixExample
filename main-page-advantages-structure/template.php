<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php /** @var  $arResult */ ?>
<?php /** @var  $APPLICATION */ ?>


<div class="block-title"><? $APPLICATION->IncludeFile("/.inc/content-advantages-tittle-2.php", array(), array("MODE" => "html", "NAME" => "Название заголовка",)); ?></div>
<div class="structure">
    <div class="structure-wrap swiper-container">
        <div class="structure__img">
            <?php $APPLICATION->IncludeFile("/.inc/content-advantages-pic-bg.php", array(), array("MODE" => "html", "NAME" => "Изображение центральное",)); ?>
        </div>
        <div class="structure__list swiper-wrapper">

            <?php foreach ($arResult['ITEMS'] as $item): ?>
                <?php
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div id="<?= $this->GetEditAreaId($item['ID']); ?>" class="structure__item swiper-slide">
                    <div class="structure-card">
                        <div class="structure-card__img"><img
                                    src="<?= $item['PIC_STRUCTURE']['src'] ?>" alt=""
                                    loading="lazy"/></div>
                        <div class="structure-card__title"><?= $item['NAME'] ?></div>
                        <div class="structure-card__text"><?= $item['PROPERTIES']['TEXT']['VALUE'] ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper__btns">
            <div class="swiper-button swiper-button-prev"></div>
            <div class="swiper-button swiper-button-next"></div>
        </div>
    </div>
</div>
