<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/header.php");?>

<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/lab_sidebar.php");?>
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
    $preview_picture = $system_item["preview_picture"];?>
    <div class="continue">
        <a href="<?=$href?>">
            <img class="pl_img_my_system" src="<?=$preview_picture?>">
            <p class="after-pict_system"><?=$title?></p>
        </a>
    </div>
<? endforeach;?>
</div>





        <p>plant_code = <?=$_GET["plant_code"]?></p>
        <p>system_code = <?=$_GET["system_code"]?></p>

        <?
        echo "Cтраница растения (список систем для растения)";
        ?>


<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/footer.php");?>