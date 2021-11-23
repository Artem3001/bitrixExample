<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

    <div class="soc">
    <ul class="soc__list">

<? foreach ($arResult['ITEMS'] as $item): ?>
        <?
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <li class="soc__item">
                <a id="<?=$this->GetEditAreaId($item['ID']);?>"
                   class="soc__link"
                   href="<?= $item['PROPERTIES']['LINK']['VALUE'] ?>">
                    <img
                            src="<?= $item['PIC']['src'] ?>"
                            alt="<?= $item['NAME'] ?>">
                </a>
            </li>

        <? endforeach; ?>
    </ul>
    </div>