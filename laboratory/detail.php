<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/header.php");?>

<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/lab_sidebar.php");?>

<?
$syst_code = $_GET["system_code"];
$system_elem = $REST_API->read($t_systems, $syst_code);
?>

<div class="content_block">
    <div class="text_wrap">

        <h1 class="title"><?=$system_elem["title"]?></h1>

        <div class="picture_for_lab">
            <img  src="<?=$system_elem["detail_picture"]?>">
        </div>

        <p class="recommendations"><?=$system_elem["text"]?></p>

    </div>
</div><!--/content_block -->

<div class="clear"></div>

<?
$plant_code = $_GET["plant_code"];
$plant_current = $REST_API->read($t_plants, $plant_code);
$system_codes = explode(",", $plant_current["code_systems"]);
?>

<div class="system_gid">
    <p class="header_system">Выберите систему:</p>
    <?foreach($system_codes as $code):
        $system_item = $REST_API->read($t_systems, $code);
        $href = "/laboratory/".$_GET["plant_code"]."/".$system_item["code"]."/";
        $title = $system_item["title"];
        $preview_picture = $system_item["preview_picture"];

        $class_active = '';
        if($_GET["system_code"] == $system_item["code"]){
            $class_active = 'class="active"';
        }?>
        <div class="continue">
            <a <?=$class_active?> href="<?=$href?>">
                <img class="pl_img_my_system" src="<?=$preview_picture?>">
                <p class="after-pict_system"><?=$title?></p>
            </a>
        </div>
    <? endforeach;?>
    <div class="clear"></div>
</div>

<?php
// $_GET["plant_code"]
// $_GET["system_code"]
?>

<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/footer.php");?>
