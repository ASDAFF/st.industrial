<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������");
?>

<?
CModule::IncludeModule('iblock');


/*
$APPLICATION->IncludeComponent("bitrix:news.detail", ".default", array(
     "IBLOCK_TYPE" => "news",
     "IBLOCK_ID" => "1",
     "ELEMENT_ID" => "ELEMENT_ID=\$_REQUEST['ELEMENT_ID']",
     "ELEMENT_CODE" => "",
     "CHECK_DATES" => "Y",
     "FIELD_CODE" => array(
          0 => "PREVIEW_PICTURE",
          1 => "",
     ),
     "PROPERTY_CODE" => array(
          0 => "",
          1 => "",
     ),
     "IBLOCK_URL" => "",
     "AJAX_MODE" => "N",
     "AJAX_OPTION_JUMP" => "N",
     "AJAX_OPTION_STYLE" => "Y",
     "AJAX_OPTION_HISTORY" => "N",
     "CACHE_TYPE" => "N",
     "CACHE_TIME" => "36000000",
     "CACHE_GROUPS" => "Y",
     "META_KEYWORDS" => "-",
     "META_DESCRIPTION" => "-",
     "BROWSER_TITLE" => "NAME",
     "SET_TITLE" => "Y",
     "SET_STATUS_404" => "N",
     "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
     "ADD_SECTIONS_CHAIN" => "Y",
     "ACTIVE_DATE_FORMAT" => "d.m.Y",
     "USE_PERMISSIONS" => "N",
     "DISPLAY_TOP_PAGER" => "N",
     "DISPLAY_BOTTOM_PAGER" => "Y",
     "PAGER_TITLE" => "��������",
     "PAGER_TEMPLATE" => "",
     "PAGER_SHOW_ALL" => "Y",
     "DISPLAY_DATE" => "Y",
     "DISPLAY_NAME" => "Y",
     "DISPLAY_PICTURE" => "Y",
     "DISPLAY_PREVIEW_TEXT" => "Y",
     "USE_SHARE" => "N",
     "AJAX_OPTION_ADDITIONAL" => ""
     ),
     false
);
*/
?>


<?
  //����������� ID ��������������� �����                                     
  $res = CIBlock::GetList(Array(), Array('TYPE'=>'el_news'),true);
  while($ar_res = $res->Fetch())
  {
     $aridn[]=$ar_res["ID"];
  }
?>

<?

$site=new CSite;
$dbsid = CSite::GetByID(SITE_ID);
$sid=$dbsid->Fetch();
//$rsDir = $site->GetByID('s1');
//echo $sid['DIR'];


$APPLICATION->IncludeComponent("bitrix:news", "devtemplates", array(
     "IBLOCK_TYPE" => "el_news",
     "IBLOCK_ID" => $aridn[0],
     "NEWS_COUNT" => "5",
     "USE_SEARCH" => "N",
     "USE_RSS" => "Y",
     "NUM_NEWS" => "20",
     "NUM_DAYS" => "30",
     "YANDEX" => "N",
     "USE_RATING" => "N",
     "USE_CATEGORIES" => "N",
     "USE_REVIEW" => "N",
     "USE_FILTER" => "N",
     "SORT_BY1" => "ACTIVE_FROM",
     "SORT_ORDER1" => "DESC",
     "SORT_BY2" => "SORT",
     "SORT_ORDER2" => "ASC",
     "CHECK_DATES" => "Y",
     "SEF_MODE" => "Y",
     "SEF_FOLDER" => $sid['DIR']."news/",
     "AJAX_MODE" => "N",
     "AJAX_OPTION_JUMP" => "Y",
     "AJAX_OPTION_STYLE" => "Y",
     "AJAX_OPTION_HISTORY" => "Y",
     "CACHE_TYPE" => "N",
     "CACHE_TIME" => "0",
     "CACHE_FILTER" => "N",
     "CACHE_GROUPS" => "Y",
     "SET_TITLE" => "Y",
     "SET_STATUS_404" => "Y",
     "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
     "ADD_SECTIONS_CHAIN" => "N",
     "USE_PERMISSIONS" => "N",
     "PREVIEW_TRUNCATE_LEN" => "",
     "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
     "LIST_FIELD_CODE" => array(
          0 => "",
          1 => "",
     ),
     "LIST_PROPERTY_CODE" => array(
          0 => "ncdate",
          1 => "",
     ),
     "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
     "DISPLAY_NAME" => "Y",
     "META_KEYWORDS" => "-",
     "META_DESCRIPTION" => "-",
     "BROWSER_TITLE" => "NAME",
     "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
     "DETAIL_FIELD_CODE" => array(
          0 => "",
          1 => "",
     ),
     "DETAIL_PROPERTY_CODE" => array(
          0 => "",
          1 => "",
     ),
     "DETAIL_DISPLAY_TOP_PAGER" => "N",
     "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
     "DETAIL_PAGER_TITLE" => "��������",
     "DETAIL_PAGER_TEMPLATE" => "",
     "DETAIL_PAGER_SHOW_ALL" => "N",
     "DISPLAY_TOP_PAGER" => "N",
     "DISPLAY_BOTTOM_PAGER" => "Y",
     "PAGER_TITLE" => "�������",
     "PAGER_SHOW_ALWAYS" => "Y",
     "PAGER_TEMPLATE" => "modern",
     "PAGER_DESC_NUMBERING" => "N",
     "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
     "PAGER_SHOW_ALL" => "N",
     "DISPLAY_DATE" => "Y",
     "DISPLAY_PICTURE" => "Y",
     "DISPLAY_PREVIEW_TEXT" => "Y",
     "USE_SHARE" => "N",
     "AJAX_OPTION_ADDITIONAL" => "",
     "SEF_URL_TEMPLATES" => array(
          "news" => "",
          "section" => "",
          "detail" => "#ELEMENT_ID#/",
          "rss" => "rss/",
          "rss_section" => "#SECTION_ID#/rss/",
     )
     ),
     false
);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
O