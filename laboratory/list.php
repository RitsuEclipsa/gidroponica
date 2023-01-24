<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/header.php");?>

<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/lab_sidebar.php");?>

    <div class="container">

        <p>plant_code = <?=$_GET["plant_code"]?></p>

        <?
        echo "Cтраница растения (список систем для растения)";
        ?>
    </div>

<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/footer.php");?>