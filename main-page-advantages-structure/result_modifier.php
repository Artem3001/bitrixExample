<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var  $arResult */



foreach ($arResult['ITEMS'] as &$item) {
    $item['PIC_STRUCTURE'] = [];
    if ($item['PROPERTIES']['PIC_STRUC']['VALUE']) {
        $item['PIC_STRUCTURE'] = \CFile::resizeImageGet($item['PROPERTIES']['PIC_STRUC']['VALUE'], [
            'width' => 440,
            'height' => 108,
        ]);
    }
}

