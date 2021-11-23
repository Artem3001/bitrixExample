<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
/** @var  $APPLICATION */
?>

</div>
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
            <div class="form__submit-agreement">Нажимая на кнопку отправки сообщения, <br>я соглашаюсь на <a href="#">обработку
                    моих персональных данных</a></div>
        </div>
    </form>
</div>
<footer class="footer">
    <div class="wrapper">
        <div class="footer-cont">
            <div class="footer-top">
                <div class="footer-top__cont">
                    <!-- Компонент перехода на главную подвал -->
                    <? $APPLICATION->IncludeComponent("bitrix:news.list", "foot-top-cont", array(
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "AJAX_MODE" => "Y",
                            "IBLOCK_TYPE" => "settings",
                            "IBLOCK_ID" => "9",
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
                    <!-- компонент меню подвала-->
                    <? $APPLICATION->IncludeComponent("bitrix:menu", "bottom-menu", array(
                            "ROOT_MENU_TYPE" => "bottom",
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
                    <div class="footer-contacts">
                        <div class="footer-contacts__item">
                            <p>
                                <!--ТЕКСТ-ИНФО--> <? $APPLICATION->IncludeFile("/.inc/footer-contacts-text.php", array(), array("MODE" => "html", "NAME" => "ТЕКСТ-ИНФО",)); ?>
                            </p>
                            <div class="footer-contacts__info">
                                <p>
                                    <!--ИНН--> <? $APPLICATION->IncludeFile("/.inc/footer-contacts-inn.php", array(), array("MODE" => "html", "NAME" => "ИНН",)); ?>
                                    <br>
                                    <!--КПП--> <? $APPLICATION->IncludeFile("/.inc/footer-contacts-kpp.php", array(), array("MODE" => "html", "NAME" => "КПП",)); ?>
                                </p>
                            </div>
                        </div>
                        <div class="footer-contacts__item">
                            <p><a href="tel:+74951369569">
                                    <? $APPLICATION->IncludeFile("/.inc/footer-contacts-phone.php", array(), array("MODE" => "html", "NAME" => "Контактный телефон",)); ?>
                                </a></p>
                            <p><a href="mailto:info@leinos.ru">
                                    <? $APPLICATION->IncludeFile("/.inc/footer-contacts-mail.php", array(), array("MODE" => "html", "NAME" => "Контактный eMail",)); ?>
                                </a></p>
                        </div>
                        <div class="footer-contacts__item"><a class="btn btn-color order-toggle" href="#">Обратная
                                связь</a>
                            <div class="soc">
                                <!-- Компонент соцсети подвал -->
                                <? $APPLICATION->IncludeComponent("bitrix:news.list", "foot-soc", array(
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "AJAX_MODE" => "Y",
                                        "IBLOCK_TYPE" => "content",
                                        "IBLOCK_ID" => "5",
                                        "NEWS_COUNT" => "20",
                                        "SORT_BY1" => "ACTIVE_FROM",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER2" => "ASC",
                                        "FILTER_NAME" => "",
                                        "FIELD_CODE" => array("ID"),
                                        "PROPERTY_CODE" => array("LINK", "ICON"),
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom__cont">
                    <div class="copyright">
                        <p><? $APPLICATION->IncludeFile("/.inc/footer-contacts-copyright-text.php", array(), array("MODE" => "html", "NAME" => "Копирайт текст",)); ?>
                            <br>
                            <!-- Компонент Политик обраб перс данн подвал -->
                            <? $APPLICATION->IncludeComponent("bitrix:news.list", "foot-policy", array(
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "N",
                                    "DISPLAY_PICTURE" => "N",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "AJAX_MODE" => "Y",
                                    "IBLOCK_TYPE" => "settings",
                                    "IBLOCK_ID" => "7",
                                    "NEWS_COUNT" => "20",
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER2" => "ASC",
                                    "FILTER_NAME" => "",
                                    "FIELD_CODE" => array("ID"),
                                    "PROPERTY_CODE" => array("FILE"),
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
                        </p>
                    </div>
                    <!-- Компонент разработчика подвал -->
                    <? $APPLICATION->IncludeComponent("bitrix:news.list", "foot-develop", array(
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "AJAX_MODE" => "Y",
                            "IBLOCK_TYPE" => "settings",
                            "IBLOCK_ID" => "8",
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
                </div>
            </div>
        </div>
    </div>
    <!-- Формы обратной связи и комментариев-->
    <div style="display: none">
        <!--форма обратной связи-->
        <div class="popup" id="order-form">
            <form class="form popup__form" action="">
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
        <!--Оставить комментарий-->
        <div class="popup" id="add-comment">
            <form class="form" action="">
                <div class="form__title">Оставить комментарий</div>
                <div class="form__inputs">
                    <div class="default-input">
                        <input class="default-input__input" type="text" placeholder="Иванов Иван Иванович "/>
                        <label class="default-input__label">Имя</label>
                        <div class="default-input__error">
                            <!--текст ошибки--></div>
                    </div>
                    <div class="default-input">
                        <input class="default-input__input" type="text" placeholder="Грунтовочная краска 820"
                               value="Грунтовочная краска 820"/>
                        <label class="default-input__label">Тема</label>
                        <div class="default-input__error">
                            <!--текст ошибки--></div>
                    </div>
                    <div class="default-input">
                        <textarea class="default-input__input default-input__input--textarea"
                                  placeholder="Введите текст комментария"></textarea>
                        <label class="default-input__label">Комментарий</label>
                        <div class="default-input__error">
                            <!--текст ошибки--></div>
                    </div>
                </div>
                <div class="form__submit">
                    <input class="btn btn-color form__submit-btn" type="submit" value="Отправить"/>
                </div>
            </form>
        </div>
    </div>

</footer>
</body>
</html>
