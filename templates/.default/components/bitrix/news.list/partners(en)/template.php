<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="partners">
    <h2>
        Partners
    </h2>
    <div class="block">
        <?
        $i = 0;
        foreach($arResult["ITEMS"] as $arItem){
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            $i++;
            ?>
            <div class="item">
                <a target="_blank" href="<?=$arItem['PROPERTIES']['link']['VALUE']?>"><img src="<?=$arItem['PICT']['src']?>" alt=""></a>
            </div>
            <?
            if($i == 3) echo "<div class=\"clearfix show_320\"></div>";
        }
        ?>
        <div class="clearfix"></div>
    </div>
</div>