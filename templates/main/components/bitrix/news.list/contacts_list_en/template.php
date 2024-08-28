<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<? if ($arResult['NO_SECTION_ITEMS']) : ?>
    <? foreach ($arResult['NO_SECTION_ITEMS'] as $arItem) : ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <table cellpadding="1" cellspacing="1" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <tbody>
                <tr>
                    <td width="230" height="225">
                        <img alt="<?= $arItem['NAME'] ?>" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" title="<?= $arItem['NAME'] ?>">
                    </td>
                    <td>
                        <div>
                            <b><?= $arItem['~NAME'] ?></b></br>
                            <? if ($arItem['PROPERTIES']['desc']['VALUE']) : ?>
                                <p><?= $arItem['PROPERTIES']['desc']['~VALUE'] ?></p>
                            <? endif; ?>
                        </div>
                        <? if ($arItem['PROPERTIES']['email']['VALUE']) : ?>
                            <div>
                                <b>E-Mail</b>:
                                <? foreach ($arItem['PROPERTIES']['email']['VALUE'] as $email) : ?>
                                    <a href="mailto:<?= $email ?>"><?= $email ?></a><br>
                                <? endforeach; ?>
                            </div>
                        <? endif; ?>
                        <? if ($arItem['PROPERTIES']['tel']['VALUE']) : ?>
                            <div>
                                <b>Tel</b>:
                                <? foreach ($arItem['PROPERTIES']['tel']['VALUE'] as $key => $tel) : ?>
                                    <a href="tel:<?= $arItem['PROPERTIES']['tel']['DESCRIPTION'][$key] ?>"><?= $tel ?></a><br>
                                <? endforeach; ?>
                            </div>
                        <? endif; ?>
                        <? if ($arItem['PROPERTIES']['url']['VALUE']) : ?>
                            <div>
                                <? foreach ($arItem['PROPERTIES']['url']['VALUE'] as $key => $url) : ?>
                                    <a href="<?= $arItem['PROPERTIES']['url']['DESCRIPTION'][$key] ?>"><?= $url ?></a><br>
                                <? endforeach; ?>
                            </div>
                        <? endif; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    <? endforeach; ?>
<? endif; ?>
<? if ($arResult['SECTIONS']) : ?>
    <? foreach ($arResult['SECTIONS'] as $arSection) : ?>
        <p>
            <b><?= $arSection['~NAME'] ?></b>
        </p>
        <? foreach ($arSection['ITEMS'] as $arItem) : ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <table cellpadding="1" cellspacing="1" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <tbody>
                    <tr>
                        <td width="230" height="225">
                            <img alt="<?= $arItem['NAME'] ?>" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" title="<?= $arItem['NAME'] ?>">
                        </td>
                        <td>
                            <div>
                                <b><?= $arItem['~NAME'] ?></b></br>
                                <? if ($arItem['PROPERTIES']['desc']['VALUE']) : ?>
                                    <p><?= $arItem['PROPERTIES']['desc']['~VALUE'] ?></p>
                                <? endif; ?>
                            </div>
                            <? if ($arItem['PROPERTIES']['email']['VALUE']) : ?>
                                <div>
                                    <b>E-Mail</b>:
                                    <? foreach ($arItem['PROPERTIES']['email']['VALUE'] as $email) : ?>
                                        <a href="mailto:<?= $email ?>"><?= $email ?></a><br>
                                    <? endforeach; ?>
                                </div>
                            <? endif; ?>
                            <? if ($arItem['PROPERTIES']['tel']['VALUE']) : ?>
                                <div>
                                    <b>Tel</b>:
                                    <? foreach ($arItem['PROPERTIES']['tel']['VALUE'] as $key => $tel) : ?>
                                        <a href="tel:<?= $arItem['PROPERTIES']['tel']['DESCRIPTION'][$key] ?>"><?= $tel ?></a><br>
                                    <? endforeach; ?>
                                </div>
                            <? endif; ?>
                            <? if ($arItem['PROPERTIES']['url']['VALUE']) : ?>
                                <div>
                                    <? foreach ($arItem['PROPERTIES']['url']['VALUE'] as $key => $url) : ?>
                                        <a href="<?= $arItem['PROPERTIES']['url']['DESCRIPTION'][$key] ?>"><?= $url ?></a><br>
                                    <? endforeach; ?>
                                </div>
                            <? endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        <? endforeach; ?>
    <? endforeach; ?>
<? endif; ?>