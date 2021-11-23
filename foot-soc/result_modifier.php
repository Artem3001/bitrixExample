<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['ITEMS'] as &$item) {
    $item['PIC'] = [];
    if ($item['PROPERTIES']['ICON']['VALUE']) {
        $item['PIC'] = \CFile::resizeImageGet($item['PROPERTIES']['ICON']['VALUE'], [
            'width' => 28,
            'height' => 28,
        ]);
    }
}
