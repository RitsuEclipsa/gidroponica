<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/header.php");?>

<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/lab_sidebar.php");?>
<?
$code = $_GET["plant_code"];
$plant_current = $REST_API->read($t_plants, $code);

$arr = explode(",", $plant_current["code_systems"]);


$system = $REST_API->read($t_systems);
echo ($t_systems);
?>




<?foreach ($arr as $item):?>
    <? echo($item);?>
    <? echo "<br>";?>

<?endforeach;?>


     <div class="system_gid">
            <p class="header_system">Выбетире систему!</p>
            <div class="continue">
                <a href="">
                    <img class="pl_img_my_system" src="images/templates/fit_syst.png">
                    <p class="after-pict_system">Фитильная система</p>
                </a>
            </div>
            <div class="continue2">
                <a href="">
                    <img class="pl_img_my_system" src="images/templates/sist_gl_kyl.png">
                    <p class="after-pict_system">Система глубоководых культур</p>
                </a>
            </div>
            <div class="continue">
                <a href="">
                    <img class="pl_img_my_system" src="images/templates/syst_cap_pol.png">
                    <p class="after-pict_system">Система капельного полива</p>
                </a>
            </div>
            <div class="continue">
                <a href="">
                    <img class="pl_img_my_system" src="images/templates/syst_per_zat.png">
                    <p class="after-pict_system">Система периодического затопления</p>
                </a>
            </div>
        </div>
        <p>plant_code = <?=$_GET["plant_code"]?></p>

        <?
        echo "Cтраница растения (список систем для растения)";
        ?>


<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/footer.php");?>