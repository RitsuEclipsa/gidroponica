<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/header.php");?>

<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/lab_sidebar.php");?>

    <div class="container">

        <p>plant_code = <?=$_GET["plant_code"]?></p>

        <p>system_code = <?=$_GET["system_code"]?></p>

        <?
        echo "Описание системы для выращивания растения (Картинка системы выращивания)";
        ?>
    </div>

<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/footer.php");?>