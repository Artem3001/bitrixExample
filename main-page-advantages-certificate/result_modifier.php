<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var  $arResult */


foreach ($arResult['ITEMS'] as &$item) {
    $item['CERTIFICATE_PIC'] = [];
    if ($item['PROPERTIES']['CERTIFICATE_IMG']['VALUE']) {
        $item['CERTIFICATE_PIC'] = \CFile::resizeImageGet($item['PROPERTIES']['CERTIFICATE_IMG']['VALUE'], [
            'width' => 150,
            'height' => 210,
        ]);
    }

    $item['CERTIFICATE_PDF'] = [];
    if ($item['PROPERTIES']['CERTIFICATE_FILE']['VALUE']) {
        $item['CERTIFICATE_PDF'] = \CFile::GetPath($item['PROPERTIES']['CERTIFICATE_FILE']['VALUE']);
    }
}



