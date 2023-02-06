<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/header.php");?>


<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/lab_sidebar.php");?>

<?

$syst_code = $_GET["system_code"];
$system_elem = $REST_API->read($t_systems, $syst_code);


$text1 = $system_elem["text"];
$title1 = $system_elem["title"];
$detail_picture1 = $system_elem["detail_picture"];?>

<div class="picture_for_lab">
    <p class="recommendations"><?=$title1?></p>
    <img  src="<?=$detail_picture1?>">
    <p class="recommendations"><?=$text1?></p>
</div>

<?

$code = $_GET["plant_code"];

$plant_current = $REST_API->read($t_plants, $code);
$system_codes = explode(",", $plant_current["code_systems"]);


?>
<div class="system_gid">
    <p class="header_system">Выберите систему!</p>
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
            <a <?=$class_active?>"<?=$href?>>
                <img class="pl_img_my_system" src="<?=$preview_picture?>">
                <p class="after-pict_system"><?=$title?></p>
            </a>
        </div>
    <? endforeach;?>
</div>




<p>plant_code = <?=$_GET["plant_code"]?></p>
<p>system_code = <?=$_GET["system_code"]?></p>

        <?
        echo "Описание системы для выращивания растения (Картинка системы выращивания)";
        ?>
    </div>

<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/footer.php");?>
