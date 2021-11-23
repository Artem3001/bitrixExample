<?php
/** @var  $APPLICATION */
?>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("LEINOS — официальный дистрибьютор натуральных немецких отделочных материалов");
?>
<? //
//global $trendFilter;
//$trendFilter = array('PROPERTY_TREND' => '4');
//?>


    <main id="content">
        <div class="main-banner">
            <!-- Main-banner -->
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "main-banner", array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => "6",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array("ID"),
                    "PROPERTY_CODE" => array("MOB_ICON, ICON, LINK"),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_LAST_MODIFIED" => "Y",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "DISPLAY_TOP_PAGER" => "Y",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_DESC_NUMBERING" => "Y",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",
                    "PAGER_BASE_LINK_ENABLE" => "Y",
                    "SET_STATUS_404" => "Y",
                    "SHOW_404" => "Y",
                    "MESSAGE_404" => "",
                    "PAGER_BASE_LINK" => "",
                    "PAGER_PARAMS_NAME" => "arrPager",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => ""
                )
            ); ?>
        </div>
        <div class="page-section about-block">
            <!-- Main-page-about -->
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "main-page-about", array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => "11",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array("ID"),
                    "PROPERTY_CODE" => array(
                        "BLOCK_TITLE, BTN_NAME, BTN_LINK, 
                        YOUTUBE_BTN_NAME, YOUTUBE_BTN_LINK,
                        VIDEO_LINK, VIDEO_PIC, DETAIL_PICTURE, DISPLAY_PROPERTIES"
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_LAST_MODIFIED" => "Y",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "DISPLAY_TOP_PAGER" => "Y",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_DESC_NUMBERING" => "Y",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",
                    "PAGER_BASE_LINK_ENABLE" => "Y",
                    "SET_STATUS_404" => "Y",
                    "SHOW_404" => "Y",
                    "MESSAGE_404" => "",
                    "PAGER_BASE_LINK" => "",
                    "PAGER_PARAMS_NAME" => "arrPager",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",

                )
            ); ?>
        </div>

        <!-- Main-page-Назначение красок -->
        <div class="page-section categories-block">
            <div class="wrapper">
                <div class="block-title">Назначение красок</div>
                <div class="categories tabs">
                    <div class="categories__list tabs-nav">
                        <div class="categories__item tabs-nav__item active" data-id="1">
                            <div class="categories-card">
                                <div class="categories-card__bg"><img
                                            src="<?= SITE_TEMPLATE_PATH ?>/img/photo/category-1.jpg" alt=""
                                            loading="lazy"/></div>
                                <div class="categories-card__top">
                                    <div class="categories-card__icon"><img
                                                src="<?= SITE_TEMPLATE_PATH ?>/img/category-ico-1.svg" alt=""/></div>
                                    <div class="categories-card__name">Для внутренних<br> работ по дереву</div>
                                </div>
                                <div class="categories-card__desc">Для стен и потолков. Для полов и лестниц. Для мебели.<br>
                                    Для влажных помещений. Для саун и парных. Для посуды.<br> Для столешниц и слебов.
                                    Для игрушек.
                                </div>
                                <a class="categories-card__link" href="#">Вся коллекция</a>
                            </div>
                        </div>
                        <div class="categories__item tabs-nav__item" data-id="2">
                            <div class="categories-card">
                                <div class="categories-card__bg"><img
                                            src="<?= SITE_TEMPLATE_PATH ?>/img/photo/category-2.jpg" alt=""
                                            loading="lazy"/></div>
                                <div class="categories-card__top">
                                    <div class="categories-card__icon"><img
                                                src="<?= SITE_TEMPLATE_PATH ?>/img/category-ico-2.svg" alt=""/></div>
                                    <div class="categories-card__name">Для наружных<br> работ по дереву</div>
                                </div>
                                <div class="categories-card__desc">Для фасадов. Для торцов. Для заборов.<br> Для террас.
                                    Для беседок. Для уличной мебели.<br> Для окон и дверей
                                </div>
                                <a class="categories-card__link" href="#">Вся коллекция</a>
                            </div>
                        </div>
                        <div class="categories__item tabs-nav__item" data-id="3">
                            <div class="categories-card">
                                <div class="categories-card__bg"><img
                                            src="<?= SITE_TEMPLATE_PATH ?>/img/photo/category-3.jpg" alt=""
                                            loading="lazy"/></div>
                                <div class="categories-card__top">
                                    <div class="categories-card__icon"><img
                                                src="<?= SITE_TEMPLATE_PATH ?>/img/category-ico-3.svg" alt=""/></div>
                                    <div class="categories-card__name">Декоративная отделка<br> минеральных поверхностей
                                    </div>
                                </div>
                                <div class="categories-card__desc">Для кухонь, коридоров и гостинных.<br> Для бассеинов
                                    и санузлов. Для спален
                                </div>
                                <a class="categories-card__link" href="#">Вся коллекция</a>
                            </div>
                        </div>

                    </div>
                    <div class="categories__content tabs-content active" data-id="1">
                        <div class="products-slider">
                            <div class="products-slider__list swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="products-slider__item swiper-slide">
                                        <div class="products-card"><a class="products-card__link" href="#"></a>
                                            <div class="products-card__img"><img
                                                        src="<?= SITE_TEMPLATE_PATH ?>/img/photo/product-1.png" alt=""
                                                        loading="lazy"/></div>
                                            <div class="products-card__info">
                                                <div class="products-card__tags">
                                                    <div class="products-card__tags-item">Для стен</div>
                                                    <div class="products-card__tags-item">Для потолков</div>
                                                    <div class="products-card__tags-item"></div>
                                                </div>
                                                <div class="products-card__title">Масло-лазурь для дерева 261</div>
                                                <div class="products-card__desc">Лазурь предназначена для защиты
                                                    деревянных стен и потолков внутри помещений от грязи, влаги и
                                                    пыли...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-slider__item swiper-slide">
                                        <div class="products-card"><a class="products-card__link" href="#"></a>
                                            <div class="products-card__img"><img
                                                        src="<?= SITE_TEMPLATE_PATH ?>/img/photo/product-2.png" alt=""
                                                        loading="lazy"/></div>
                                            <div class="products-card__info">
                                                <div class="products-card__tags">
                                                    <div class="products-card__tags-item">Для стен</div>
                                                    <div class="products-card__tags-item">Для потолков</div>
                                                    <div class="products-card__tags-item">Для полов</div>
                                                </div>
                                                <div class="products-card__title">Универсальное твёрдое масло 259</div>
                                                <div class="products-card__desc">Легкое в нанесении универсальное масло
                                                    предназначено для защиты от грязи, пыли и механических нагрузок...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-slider__item swiper-slide">
                                        <div class="products-card"><a class="products-card__link" href="#"></a>
                                            <div class="products-card__img"><img
                                                        src="<?= SITE_TEMPLATE_PATH ?>/img/photo/product-3.png" alt=""
                                                        loading="lazy"/></div>
                                            <div class="products-card__info">
                                                <div class="products-card__tags">
                                                    <div class="products-card__tags-item">Для полов</div>
                                                    <div class="products-card__tags-item">Для лестниц</div>
                                                    <div class="products-card__tags-item">Для мебели</div>
                                                </div>
                                                <div class="products-card__title">Твердое масло с воском 290</div>
                                                <div class="products-card__desc">Масло с воском для высококачественной
                                                    защиты полов, лестниц и мебели, а также всех поверхностей...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-slider__item swiper-slide">
                                        <div class="products-card"><a class="products-card__link" href="#"></a>
                                            <div class="products-card__img"><img
                                                        src="<?= SITE_TEMPLATE_PATH ?>/img/photo/product-4.png" alt=""
                                                        loading="lazy"/></div>
                                            <div class="products-card__info">
                                                <div class="products-card__tags">
                                                    <div class="products-card__tags-item">Для полов</div>
                                                    <div class="products-card__tags-item">Для мебели</div>
                                                    <div class="products-card__tags-item"></div>
                                                </div>
                                                <div class="products-card__title">Твердый воск без растворителя LF 310
                                                </div>
                                                <div class="products-card__desc">Воск предназначен для обработки
                                                    поверхностей полов и мебели
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-slider__item swiper-slide">
                                        <div class="products-card"><a class="products-card__link" href="#"></a>
                                            <div class="products-card__img"><img
                                                        src="<?= SITE_TEMPLATE_PATH ?>/img/photo/product-5.png" alt=""
                                                        loading="lazy"/></div>
                                            <div class="products-card__info">
                                                <div class="products-card__tags">
                                                    <div class="products-card__tags-item">Для поверхностей</div>
                                                    <div class="products-card__tags-item"></div>
                                                    <div class="products-card__tags-item"></div>
                                                </div>
                                                <div class="products-card__title">Масло для столешниц 280</div>
                                                <div class="products-card__desc">Масло для защиты рабочих поверхностей
                                                    из дерева, подверженных повышенному износу и требующих регулярный
                                                    уход. Масло для защиты рабочих поверхностей из дерева, подверженных
                                                    повышенному износу и требующих регулярный уход
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper__btns">
                                <div class="swiper-button swiper-button-prev"></div>
                                <div class="swiper-button swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

















        <!-- Main-page-Калькулятор -->
        <div class="page-section color-block calculate-block">
            <div class="wrapper">
                <div class="block-title">Расчет стоимости окраски</div>
                <div class="calculate">
                    <div class="calculate__list">
                        <div class="calculate__item">

                            <div class="calculate__title">Что будем красить?</div>

                            <div class="calculate__item-select">

                                <select class="calculate__input calculate__input--select">
                                    <option value="select-0" selected="selected" disabled="disabled">Выберите один из
                                        вариантов
                                    </option>
                                    <option value="select-1">Фасад дома</option>
                                    <option value="select-2">Терраса</option>
                                    <option value="select-3">Стены и потолки</option>
                                    <option value="select-4">Полы и лестницы</option>
                                </select>

                            </div>
                        </div>

                        <div class="calculate__item">
                            <div class="calculate__title">Площадь окрашиваемой поверхности, м²</div>
                            <div class="calculate__item-area">
                                <input class="calculate__input calculate__input--area" type="text" value="262"/>
                            </div>
                        </div>

                        <div class="calculate__item">
                            <div class="calculate__title">Рекомендованная стоимость масла</div>
                            <div class="calculate__item-total">
                                <div class="calculate__input calculate__input--total">20 640 рублей</div>
                            </div>

                            <div class="calculate__info">
                                <div class="calculate__title">В стоимость входит:</div>
                                <ul>
                                    <li><a href="#">Масло грунтовочное для дерева 150 </a>в один слой, колерованное</li>
                                    <li><a href="#">Масло-лазурь для дерева 260 </a>в два слоя, колерованное</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

















        <div class="page-section advantages-block">
            <div class="wrapper">

                <!-- первый компонент УНИКАЛЬНЫЕ СВОЙСТВА ТОП -->
                <? $APPLICATION->IncludeComponent("bitrix:news.list", "main-page-advantages-unique-top", array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "Y",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "12",
                        "NEWS_COUNT" => "20",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array("ID"),
                        "PROPERTY_CODE" => array(
                            "ICON, ICON_MIN, 
                                                NAME_ICON_MIN, 
                                                TEXT, YOUTUBE_LINK,
                                                YOUTUBE_NAME, YOUTUBE_ICON"
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "PARENT_SECTION" => "16",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "Y",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "Y",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "Y",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SHOW_404" => "Y",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => ""
                    )
                ); ?>

                <!-- второй компонент НАТУРАЛЬНЫЙ СОСТВА-->
                <? $APPLICATION->IncludeComponent("bitrix:news.list", "main-page-advantages-structure", array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "Y",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "13",
                        "NEWS_COUNT" => "20",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array("ID"),
                        "PROPERTY_CODE" => array(
                            "PIC_STRUC, TITLE, TEXT, 
                            PIC_BACKGROUND"
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "Y",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "Y",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "Y",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SHOW_404" => "Y",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",

                    )
                ); ?>

                <!-- третий компонент СЕРТИФИКАТЫ -->
                <?php $APPLICATION->IncludeComponent("bitrix:news.list", "main-page-advantages-certificate", array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "Y",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "14",
                        "NEWS_COUNT" => "20",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array("ID"),
                        "PROPERTY_CODE" => array(
                            "CERTIFICATE_FILE, 
                            CERTIFICATE_IMG, 
                            CERTIFICATE_TITLE, 
                            CERTIFICATE_TEXT,
                            "
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "Y",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "Y",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "Y",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SHOW_404" => "Y",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => ""
                    )
                ); ?>

                <!-- четвертый компонент УНИКАЛЬНЫЕ СВОЙСТВА БОТ-->
                <? $APPLICATION->IncludeComponent("bitrix:news.list", "main-page-advantages-unique-bottom", array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "Y",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "12",
                        "NEWS_COUNT" => "20",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array("ID"),
                        "PROPERTY_CODE" => array(
                            "ICON, ICON_MIN, 
                                                NAME_ICON_MIN, 
                                                TEXT, YOUTUBE_LINK,
                                                YOUTUBE_NAME, YOUTUBE_ICON"
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "PARENT_SECTION" => "18",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "Y",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "Y",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "Y",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SHOW_404" => "Y",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => ""
                    )
                ); ?>
            </div>
        </div>
        <div class="page-section news-block">
            <div class="wrapper">

                <!-- СТАТЬИ -->
                <? $APPLICATION->IncludeComponent("bitrix:news.list", "main-page-news-articles", array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "Y",
                        "IBLOCK_TYPE" => "news",
                        "IBLOCK_ID" => "15",
                        "NEWS_COUNT" => "20",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array("ID"),
                        "PROPERTY_CODE" => array(
                            "ARTICLE_LINK, ARTICLE_IMG, 
                            ARTICLE_DATE, ARTICLE_TAG, 
                            ARTICLE_TITLE, ARTICLE_TEXT"
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "Y",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "Y",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "Y",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SHOW_404" => "Y",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",

                    )
                ); ?>

                <!-- НОВОСТИ -->
                <? $APPLICATION->IncludeComponent("bitrix:news.list", "main-page-news-news", array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "Y",
                        "IBLOCK_TYPE" => "news",
                        "IBLOCK_ID" => "16",
                        "NEWS_COUNT" => "20",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array("ID"),
                        "PROPERTY_CODE" => array(
                            "NEWS_LINK, NEWS_IMG, 
                            NEWS_DATE_START, NEWS_DATE_FINISH, 
                            NEWS_PLACE, NEWS_TITLE,
                            NEWS_TEXT"
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "Y",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "Y",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "Y",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SHOW_404" => "Y",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",

                    )
                ); ?>


                <!-- компонент ПАРТНЕРЫ -->
                <? $APPLICATION->IncludeComponent("bitrix:news.list", "main-page-partners", array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "Y",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "17",
                        "NEWS_COUNT" => "30",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array("ID"),
                        "PROPERTY_CODE" => array(
                            "PARTNERS_LINK, PARTNERS_IMG"
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "Y",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "Y",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "Y",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SHOW_404" => "Y",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",

                    )
                ); ?>

            </div>
        </div>
        <div class="page-section instagram-block">
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "main-page-instagram", array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => "18",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ID",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array("ID"),
                    "PROPERTY_CODE" => array(
                        "INST_LINK, INST_IMG"
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_LAST_MODIFIED" => "Y",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "DISPLAY_TOP_PAGER" => "Y",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_DESC_NUMBERING" => "Y",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",
                    "PAGER_BASE_LINK_ENABLE" => "Y",
                    "SET_STATUS_404" => "Y",
                    "SHOW_404" => "Y",
                    "MESSAGE_404" => "",
                    "PAGER_BASE_LINK" => "",
                    "PAGER_PARAMS_NAME" => "arrPager",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",

                )
            ); ?>
        </div>
    </main>

    <!-- форма Обратной Связи -->
    <div class="order-popup">
        <div class="order-popup__close"></div>
        <form class="form order-popup__form" action="">
            <div class="form__title">форма обратной связи</div>
            <div class="form__inputs">
                <div class="default-input">
                    <input class="default-input__input" type="text" placeholder="Иванов Иван Иванович "/>
                    <label class="default-input__label">Имя</label>
                    <div class="default-input__error">
                        <!--текст ошибки--></div>
                </div>
                <div class="default-input">
                    <input class="default-input__input default-input__input--error" type="email"
                           placeholder="pochta@mail.com" required="required"/>
                    <label class="default-input__label">E-mail</label>
                    <div class="default-input__error">
                        заполните поле
                    </div>
                </div>
                <div class="default-input">
                    <textarea class="default-input__input default-input__input--textarea"
                              placeholder="Введите свое сообщение"></textarea>
                    <label class="default-input__label">Сообщение</label>
                    <div class="default-input__error">
                        <!--текст ошибки--></div>
                </div>
            </div>
            <div class="form__submit">
                <input class="btn btn-color form__submit-btn" type="submit" value="Отправить сообщение"/>
                <div class="form__submit-agreement">Нажимая на кнопку отправки сообщения, <br>я соглашаюсь на <a
                            href="#">обработку моих персональных данных</a></div>
            </div>
        </form>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>