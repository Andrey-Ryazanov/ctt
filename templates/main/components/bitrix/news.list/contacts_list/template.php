<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<div class="team">
    <?
    $arSectionNumber = 0;
    $skip = false;
    ?>
    <? foreach ($arResult['SECTIONS'] as $arSection) : ?>
        <? if ($skip) {
            $arSectionNumber++;
            $skip = false;
            continue;
        } ?>
        <? if (count($arSection['ITEMS']) <= 1) : ?>
            <div class="team__row">
                <? foreach ($arSection['ITEMS'] as $arItem) : ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="team__col">
                        <div class="team__title"><?= $arSection['~NAME'] ?></div>
                        <div class="team__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <div class="team__img">
                                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arSection['~NAME'] ?>">
                            </div>
                            <div class="team__content">
                                <? if ($arItem['PROPERTIES']['desc']['VALUE']) : ?>
                                    <p>
                                        <?= $arItem['PROPERTIES']['desc']['~VALUE'] ?>
                                    </p>
                                <? endif; ?>
                                <p>
                                    <b><?= $arItem['~NAME'] ?></b>
                                </p>
                                <? if ($arItem['PROPERTIES']['email']['VALUE']) : ?>
                                    <p>
                                        <a href="mailto:<?= $arItem['PROPERTIES']['email']['VALUE'] ?>"><?= $arItem['PROPERTIES']['email']['~VALUE'] ?></a>
                                    </p>
                                <? endif; ?>
                                <? if ($arItem['PROPERTIES']['phone']['VALUE']) : ?>
                                    <? for ($j = 0; $j < count($arItem['PROPERTIES']['phone']['VALUE']); $j++) : ?>
                                        <p>
                                            <a href="tel:<?= $arItem['PROPERTIES']['phone']['DESCRIPTION'][$j] ?>"><?= $arItem['PROPERTIES']['phone']['~VALUE'][$j] ?></a>
                                        </p>
                                    <? endfor; ?>
                                <? endif; ?>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
                <? if ($arSectionNumber + 1 < count($arResult['SECTIONS'])) : ?>
                    <? if (count($arResult['SECTIONS'][$arSectionNumber + 1]['ITEMS']) <= 1) :
                        $skip = true; ?>
                        <? foreach ($arResult['SECTIONS'][$arSectionNumber + 1]['ITEMS'] as $arItem) : ?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <div class="team__col">
                                <div class="team__title"><?= $arResult['SECTIONS'][$arSectionNumber + 1]['~NAME'] ?></div>
                                <div class="team__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                    <div class="team__img">
                                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arResult['SECTIONS'][$arSectionNumber + 1]['~NAME'] ?>">
                                    </div>
                                    <div class="team__content">
                                        <? if ($arItem['PROPERTIES']['desc']['VALUE']) : ?>
                                            <p>
                                                <?= $arItem['PROPERTIES']['desc']['~VALUE'] ?>
                                            </p>
                                        <? endif; ?>
                                        <p>
                                            <b><?= $arItem['~NAME'] ?></b>
                                        </p>
                                        <? if ($arItem['PROPERTIES']['email']['VALUE']) : ?>
                                            <p>
                                                <a href="mailto:<?= $arItem['PROPERTIES']['email']['VALUE'] ?>"><?= $arItem['PROPERTIES']['email']['~VALUE'] ?></a>
                                            </p>
                                        <? endif; ?>
                                        <? if ($arItem['PROPERTIES']['phone']['VALUE']) : ?>
                                            <? for ($j = 0; $j < count($arItem['PROPERTIES']['phone']['VALUE']); $j++) : ?>
                                                <p>
                                                    <a href="tel:<?= $arItem['PROPERTIES']['phone']['DESCRIPTION'][$j] ?>"><?= $arItem['PROPERTIES']['phone']['~VALUE'][$j] ?></a>
                                                </p>
                                            <? endfor; ?>
                                        <? endif; ?>
                                    </div>
                                </div>
                            </div>
                        <? endforeach; ?>
                    <? endif; ?>
                <? endif ?>
            </div>
        <? else : ?>
            <div class="team__title"><?= $arSection['~NAME'] ?></div>
            <div class="team__row">
                <? $i = 0; ?>
                <? foreach ($arSection['ITEMS'] as $arItem) : $i++; ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="team__col">
                        <? if (count($arSection['ITEMS']) <= 1) : ?>
                            <div class="team__title"><?= $arSection['~NAME'] ?></div>
                        <? endif; ?>
                        <div class="team__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <div class="team__img">
                                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arSection['~NAME'] ?>">
                            </div>
                            <div class="team__content">
                                <? if ($arItem['PROPERTIES']['desc']['VALUE']) : ?>
                                    <p>
                                        <?= $arItem['PROPERTIES']['desc']['~VALUE'] ?>
                                    </p>
                                <? endif; ?>
                                <p>
                                    <b><?= $arItem['~NAME'] ?></b>
                                </p>
                                <? if ($arItem['PROPERTIES']['email']['VALUE']) : ?>
                                    <p>
                                        <a href="mailto:<?= $arItem['PROPERTIES']['email']['VALUE'] ?>"><?= $arItem['PROPERTIES']['email']['~VALUE'] ?></a>
                                    </p>
                                <? endif; ?>
                                <? if ($arItem['PROPERTIES']['phone']['VALUE']) : ?>
                                    <? for ($j = 0; $j < count($arItem['PROPERTIES']['phone']['VALUE']); $j++) : ?>
                                        <p>
                                            <a href="tel:<?= $arItem['PROPERTIES']['phone']['DESCRIPTION'][$j] ?>"><?= $arItem['PROPERTIES']['phone']['~VALUE'][$j] ?></a>
                                        </p>
                                    <? endfor; ?>
                                <? endif; ?>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        <? endif; ?>
        <? $arSectionNumber++; ?>
    <? endforeach; ?>
</div>
<? if (false) : ?>
    <div class="team">
        <div class="team__row">
            <div class="team__col">
                <div class="team__title">Директор выставки:</div>
                <div class="team__item">
                    <div class="team__img">
                        <img src="/upload/team/vashurkina.jpg" alt="img">
                    </div>
                    <div class="team__content">
                        <p>
                            <b>Марина Вашуркина</b>
                        </p>
                        <p>
                            <a href="mailto:Marina.Vashurkina@sigma-expo.ru">Marina.Vashurkina@sigma-expo.ru</a>
                        </p>
                        <p>
                            <a href="tel:+74951203787">+7 (495) 120-37-87(130)</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="team__col">
                <div class="team__title">По вопросам развития проекта и&nbsp;GR:</div>
                <div class="team__item">
                    <div class="team__img">
                        <img src="/upload/team/tsarenkova.jpg" alt="img">
                    </div>
                    <div class="team__content">
                        <p>
                            <b>Алена Царенкова</b>
                        </p>
                        <p>
                            <a href="mailto:Alena.Tsarenkova@sigma-expo.ru">Alena.Tsarenkova@sigma-expo.ru</a>
                        </p>
                        <p>
                            <a href="tel:+74951203787">+7 (495) 120-37-87 (102)</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="team__title">По вопросам участия в&nbsp;выставке:</div>

        <div class="team__row">
            <div class="team__col">
                <div class="team__item">
                    <div class="team__img">
                        <img src="/upload/team/martinova.jpg" alt="img">
                    </div>
                    <div class="team__content">
                        <p>
                            <b>Екатерина Мартынова</b>
                        </p>
                        <p>
                            <a href="mailto:Ekaterina.Martynova@sigma-expo.ru">Ekaterina.Martynova@sigma-expo.ru</a>
                        </p>
                        <p>
                            <a href="tel:+74951203787">+7 (495) 120-37-87 (132)</a>
                        </p>
                        <p>
                            <a href="tel:+79299283359">+7 (929) 928-33-59</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="team__col">
                <div class="team__item">
                    <div class="team__img">
                        <img src="/upload/team/smalko.jpg" alt="img">
                    </div>
                    <div class="team__content">
                        <p>
                            <b>Дмитрий Смалько</b>
                        </p>
                        <p>
                            <a href="mailto:Dmitriy.Smalko@sigma-expo.ru">Dmitriy.Smalko@sigma-expo.ru</a>
                        </p>
                        <p>
                            <a href="tel:+74951203787">+7 (495) 120-37-87 (131)</a>
                        </p>
                        <p>
                            <a href="tel:+79299283325">+7(929) 928-33-25</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="team__row">
            <div class="team__col">
                <div class="team__item">
                    <div class="team__img">
                        <img src="/upload/team/semenova.jpg" alt="img">
                    </div>
                    <div class="team__content">
                        <p>
                            <b>Людмила Семенова</b>
                        </p>
                        <p>
                            <a href="mailto:ludmila.semenova@sigma-expo.ru">Ludmila.semenova@sigma-expo.ru</a>
                        </p>
                        <p>
                            <a href="tel:+74951203787">+7(495)120-37-87(135)</a>
                        </p>
                        <p>
                            <a href="tel:+79251309332">+7 (925)130-93-32</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="team__col">
                <div class="team__item">
                    <div class="team__img">
                        <img src="/upload/team/kamalova.jpg" alt="img">
                    </div>
                    <div class="team__content">
                        <p>Иностранные участники:</p>
                        <p>
                            <b>Камалова Вероника</b>
                        </p>
                        <p>
                            <a href="mailto:Veronika.Kamalova@sigma-expo.ru">Veronika.Kamalova@sigma-expo.ru</a>
                        </p>
                        <p>
                            <a href="tel: +79256246786">+7 (925) 624-67-86</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="team__row">
            <div class="team__col">
                <div class="team__title">По вопросам участия в&nbsp;деловой программе, партнерским возможностям и&nbsp;PR:</div>
                <div class="team__item">
                    <div class="team__img">
                        <img src="/upload/team/zubko.jpg" alt="img">
                    </div>
                    <div class="team__content">
                        <p>
                            <b>Мария Зубко</b>
                        </p>
                        <p>
                            <a href="Maria.Zubko@sigma-expo.ru">Maria.Zubko@sigma-expo.ru </a>
                        </p>
                        <p>
                            <a href="tel:+74951203787">7 (495) 120-37-87 (120)</a>
                        </p>
                        <p>
                            <a href="tel:+79252818631">+7 (925) 281-86-31</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="team__col">
                <div class="team__title">По вопросам сотрудничества с медиа-партнерами и СМИ:</div>
                <div class="team__item">
                    <div class="team__img">
                        <img src="/upload/team/putrina.jpg" alt="img">
                    </div>
                    <div class="team__content">
                        <p>
                            <b>Ольга Путрина</b>
                        </p>
                        <p>
                            <a href="olga.putrina@sigma-expo.ru">Olga.putrina@sigma-expo.ru</a>
                        </p>
                        <p>
                            <a href="tel:+74951203787">+7 (495) 120-37-87 (123)</a>
                        </p>
                        <p>
                            <a href="tel:+79299283324">+7 (929) 928-33-24</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="team__row">
            <div class="team__col">
                <div class="team__title">Технический директор:</div>
                <div class="team__item">
                    <div class="team__img">
                        <img src="/upload/team/fokin.jpg" alt="img">
                    </div>
                    <div class="team__content">
                        <p>
                            <b>Александр Фокин</b>
                        </p>
                        <p>
                            <a href="mailto:Alexandr.Fokin@sigma-expo.ru">Alexandr.Fokin@sigma-expo.ru</a>
                        </p>
                        <p>
                            <a href="tel:+74951203787">7 (495) 120-37-87 (140)</a>
                        </p>
                        <p>
                            <a href="tel:+79299283317">+7 (929) 928-33-17</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="team__col">
                <div class="team__title">По техническим вопросам:</div>
                <div class="team__item">
                    <div class="team__img">
                        <img src="/upload/team/andronov.jpg" alt="img">
                    </div>
                    <div class="team__content">
                        <p>
                            <b>Эдуард Андронов</b>
                        </p>
                        <p>
                            <a href="Eduard.Andronov@sigma-expo.ru">Eduard.Andronov@sigma-expo.ru</a>
                        </p>
                        <p>
                            <a href="tel:+74951203787">+7 (495) 120-37-87 (151)</a>
                        </p>
                        <p>
                            <a href="tel:+79995457588">+7(999) 545-75-88</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? endif; ?>