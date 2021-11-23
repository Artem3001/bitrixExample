<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php /** @var  $arResult */ ?>
<?php /** @var  $APPLICATION */ ?>

<div class="block-title"><? $APPLICATION->IncludeFile("/.inc/content-advantages-tittle-1.php", array(), array("MODE" => "html", "NAME" => "Название заголовка",)); ?></div>
<div class="advantages">
    <div class="advantages-wrap swiper-container">
        <div class="advantages__list swiper-wrapper">
            <?php foreach ($arResult['ITEMS'] as $item): ?>
                <?php
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="advantages__item swiper-slide" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                    <div class="advantages-card">
                        <div class="advantages-card__img"><img
                                    src="<?= $item['PIC']['src'] ?>" alt=""
                                    loading="lazy"/></div>
                        <div class="advantages-card__desc">
                            <div class="advantages-card__title"><img class="advantages-card__icon"
                                                                     src="<?= $item['PIC_MIN']['src'] ?>"
                                                                     alt=""/><span><?= $item['NAME'] ?></span></div>
                            <div class="advantages-card__text"><?= $item['PROPERTIES']['TEXT']['VALUE'] ?></div>
                        </div>
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
