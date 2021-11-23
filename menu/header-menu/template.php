<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>



    <ul class="main-nav__list">
        <? foreach ($arResult as $item): ?>
            <li class=" <?= $item['PARAMS']['CLASS'] ?> ">
                <a class="<?= $item['PARAMS']['A_CLASS'] ?>" href="<?= $item['LINK'] ?>">
                    <?= $item['TEXT'] ?>
                </a>
            </li>
        <? endforeach; ?>


    </ul>
