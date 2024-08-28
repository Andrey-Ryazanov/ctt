<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
<table>
    <tbody>
        <? foreach ($arResult['ITEMS'] as $key => $item) : ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <tr id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <td><img src="<?= $item['PREVIEW_PICTURE']['re_src'] ?>" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"></td>
                <td>
                    <?= date('d.m.Y', strtotime($item['ACTIVE_FROM'])) ?> <br> 
                    <?if(!empty($item['theme'])):?>
                        <?=$item['theme']?> <br>
                    <?endif;?>
                    <span class="press-release--title"><?= $item['NAME'] ?> </span> <br>
                    
                    <div class="offset"></div>
                    <div style="max-width: 400px;"><?= $item['PREVIEW_TEXT'] ?></div>
                </td>
            </tr>
        <? endforeach; ?>
    </tbody>
</table>