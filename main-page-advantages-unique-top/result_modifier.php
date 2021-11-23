<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var  $arResult */
foreach ($arResult['ITEMS'] as &$item) {
    $item['PIC'] = [];
    if ($item['PROPERTIES']['ICON']['VALUE']) {
        $item['PIC'] = \CFile::resizeImageGet($item['PROPERTIES']['ICON']['VALUE'], [
            'width' => 438,
            'height' => 263,
        ]);
    }

    $item['PIC_MIN'] = [];
    if ($item['PROPERTIES']['ICON_MIN']['VALUE']) {
        $item['PIC_MIN'] = \CFile::resizeImageGet($item['PROPERTIES']['ICON_MIN']['VALUE'], [
            'width' => 21,
            'height' => 21,
        ]);
    }
}

