<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Оплата экспертизы резюме");


$sum = 390;
include($_SERVER["DOCUMENT_ROOT"]."/exp_inc.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>