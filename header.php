<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?><?php

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css");

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/vendors.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/base.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/xpage.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/common.js");
?>
<?php
/** @var  $APPLICATION */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title><? $APPLICATION->showTitle(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1"/>
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.svg" type="image/svg+xml"/>
    <? $APPLICATION->showHead(); ?>

</head><!--.standart-page - класс, чтобы делать на каких-то страницах линию под блоком с заголовком -->
<body class="inner loading standart-page">
<? $APPLICATION->ShowPanel() ?>
<header class="header">
    <div class="wrapper">
        <div class="header-cont">
            <!-- Компонент перехода на главную шапка -->
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "header-top-cont", array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "settings",
                    "IBLOCK_ID" => "10",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array("ID"),
                    "PROPERTY_CODE" => array("PIC", "LINK"),
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
            <nav class="main-nav">
                <div class="main-nav__text">
                    <a href="https://www.leinos.de/">
                        <? $APPLICATION->IncludeFile("/.inc/header-cont-nav.php", array(), array("MODE" => "html", "NAME" => "Информация про завод",)); ?>
                    </a></div>
                <!-- компонент меню шапка -->
                <? $APPLICATION->IncludeComponent("bitrix:menu", "header-menu", array(
                        "ROOT_MENU_TYPE" => "top",
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "",
                        "USE_EXT" => "Y",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "Y",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => ""
                    )
                ); ?>
            </nav>
            <div class="header__search">
                <form class="form-search" action="">
                    <div class="form-search__group">
                        <input class="default-input__input form-search__input" type="text" placeholder="Что вы ищите?"/>
                        <input class="form-search__btn" type="submit" value="Найти"/>
                    </div>
                </form>
            </div>
            <div class="header__btns"><a class="btn btn-color btn-order order-toggle" href="#" title="обратная связь">обратная
                    связь</a>
                <div class="burger"><span></span></div>
            </div>
        </div>
    </div>
</header>
<div>


</div>
<div class="title-block__crumbs">
    <ul class="bread-crumbs">
        <li class="bread-crumbs__link" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                    href="#" title="LEINOS" itemprop="url"><span itemprop="title">LEINOS</span></a></li>
        <li class="bread-crumbs__this">Новости</li>
    </ul>
</div>
</div>



<?if ($APPLICATION->GetCurPage(false) != '/'):?>
    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
            "START_FROM" => "0",
            "PATH" => "",
            "SITE_ID" => "s1"
        )
    );?>
<?endif;?>
