<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult['ITEMS'] as &$item) {
    $item['PIC'] = [];
    if ($item['PROPERTIES']['ICON']['VALUE']) {
        $item['PIC'] = \CFile::resizeImageGet($item['PROPERTIES']['ICON']['VALUE'], [
            'width' => 1383,
            'height' => 432,
        ]);
    }

    $item['PIC_MOB'] = [];
    if ($item['PROPERTIES']['MOB_ICON']['VALUE']) {
        $item['PIC_MOB'] = \CFile::resizeImageGet($item['PROPERTIES']['MOB_ICON']['VALUE'], [
            'width' => 462,
            'height' => 303,
        ]);
    }
}

