<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?>
	<div class="form-message"><?=$arResult["FORM_ERRORS_TEXT"];?></div>
<?endif;?>

<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y")
{
?>
<?if ($arResult["isFormDescription"] == "Y"):?>
	<div class="form-message"><?=$arResult["FORM_DESCRIPTION"]?></div>
<?endif?>
<?=$arResult["FORM_HEADER"]?>
<?
/***********************************************************************************
						form questions
***********************************************************************************/
?>
<div class="form-container">
	<?
	$bSectionOpened = false;
	$iSection = 1;
	foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
	{
		if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
		{
			echo $arQuestion["HTML_CODE"];
		}
		else
		{
	?>
	<?
			//print_pre($arQuestion);
		$bQuestionTitle = true;
		if($arQuestion['STRUCTURE'][0]['QUESTION_ID'] && array_key_exists($arQuestion['STRUCTURE'][0]['QUESTION_ID'], $arParams["SECTION_SORT"])){
			$sectionTitle = $arParams["SECTION_SORT"][$arQuestion['STRUCTURE'][0]['QUESTION_ID']];
			if(!$sectionTitle){
				$sectionTitle = $arQuestion["CAPTION"].($arQuestion["REQUIRED"] == "Y"? $arResult["REQUIRED_SIGN"]: "");
				$bQuestionTitle = false;
				//print_pre($arQuestion);
			}
			if($bSectionOpened)
				echo "</div>";

			echo '<h2 class="section-title">'.$iSection++.". ".$sectionTitle.'</h2><div class="form-area">';
			$bFirstSection = false;
			$bSectionOpened = true;
		}
	?>
	<div class="form-row<?if(!$bQuestionTitle) echo " spec"?>">
		<?if($bQuestionTitle):?>
			<div class="form-col">
				<label for=""><?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?></label>
			</div>
			<div class="form-col" data-code="<?=$FIELD_SID?>">
				<?=$arQuestion["HTML_CODE"]?>
			</div>
		<?else:?>
			<?=str_replace(array("<br />", "<br/>", "<br>"), "", $arQuestion["HTML_CODE"])?>
		<?endif?>
	</div>
	<?	}
	} //endwhile
	if($bSectionOpened)
		echo "</div>";
	?>
<?
if($arResult["isUseCaptcha"] == "Y")
{
?>
		<div class="form-row">
			<div class="form-col">
				<?=GetMessage("FORM_CAPTCHA_FIELD_TITLE")?><?=$arResult["REQUIRED_SIGN"];?>
			</div>
			<div class="form-col">
				<input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" />
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>"/>
				<input type="text" name="captcha_word" value="" class="captcha" />
			</div>
		</div>
<?
} // isUseCaptcha
?>
</div>
<div class="form-notice"><?=$arResult["REQUIRED_SIGN"];?> - <?=GetMessage("FORM_REQUIRED_FIELDS")?></div>
<table class="form-send" cellpadding="0" cellspacing="0" width="100%">
<tr>
	<td class="form-privacy">
		<?=GetMessage("FORM_PRIVACY")?>
	</td>
	<td width="1%">
		<input <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>"/>
	</td>
</tr>
</table>
<?=$arResult["FORM_FOOTER"]?>

<!--[if lt IE 9]>
	<style>
		#eticket_block input[type="checkbox"] + label{
			width: 44.4%;
		}
	</style>
<![endif]-->
<?
} //endif (isFormNote)
?>