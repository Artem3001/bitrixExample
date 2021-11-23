<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
/** @var  $arResult */
?>


    <div class="wrapper">
        <div class="main-banner__list swiper-container">
            <div class="swiper-wrapper"><!--у первого слайде нет .swiper-lazy -->
                <?php foreach ($arResult['ITEMS'] as $item): ?>
                    <?
                    $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="main-banner__item swiper-slide id="<?= $this->GetEditAreaId($item['ID']); ?>">
                        <picture class="main-banner__img">
                            <source media="(min-width: 640px)" srcset="<?= $item['PIC']['src'] ?>"/>
                            <source media="(max-width: 641px)" srcset="<?= $item['PIC_MOB']['src'] ?>"/>
                            <?php $srcRes = $item['PIC']['src'] . "\"" ?>
                            <?php if ($i >= 1) {
                                echo "<img class=\"swiper-lazy\" data-src=\"$srcRes";
                            } else
                                echo "<img src=\"$srcRes"; ?> alt="" loading="lazy"/>
                        </picture>
                        <?php if ($i >= 1) {
                            echo "<div class=\"swiper-lazy-preloader\"></div>";
                        } ?>
                        <a class="main-banner__link" href="<?= $item['PROPERTIES']['LINK']['VALUE'] ?>"></a>
                        <?php $i++; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
