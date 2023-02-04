<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/header.php");?>

<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/lab_sidebar.php");?>
<?



$code = $_GET["plant_code"];
$plant_current = $REST_API->read($t_plants, $code);
$arr = explode(",", $plant_current["code_systems"]);


$sys_code =$_GET["system_code"];
$system = $REST_API->readAll($t_systems);



?>


     <div class="system_gid">
            <p class="header_system">Выбетире систему!</p>
         <?foreach($system as $item):?>
             <?
             $href = "/laboratory/".$code."/".$item["code"]."/";
             $title = $item["title"];
             $preview_picture = $item["preview_picture"];
             ?>
             <div class="continue">
                 <a href="<?=$href?>">
                     <img class="pl_img_my_system" src="<?=$preview_picture?>">
                     <p class="after-pict_system"><?=$title?></p>
                 </a>
             </div>
         <?endforeach;?>
        </div>
        <p>plant_code = <?=$_GET["plant_code"]?></p>
        <p>system_code = <?=$_GET["system_code"]?></p>

        <?
        echo "Cтраница растения (список систем для растения)";
        ?>


<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/footer.php");?>