<? include_once($_SERVER["DOCUMENT_ROOT"] . "/app/header.php"); ?>

<? include_once($_SERVER["DOCUMENT_ROOT"] . "/app/lab_sidebar.php"); ?>

<?
$plant_code = $_GET["plant_code"];
$plant_current = $REST_API->read($t_plants, $plant_code);
?>

    <div class="content_block">
        <div class="text_wrap">
            <h1 class="title"><?=$plant_current["title"]?></h1>
            <?=$plant_current["text"]?>
        </div>
    </div><!--/content_block -->

    <div class="clear"></div>

<?
$system_codes = explode(",", $plant_current["code_systems"]);
?>

    <div class="system_gid">
        <p class="header_system">Выберите систему:</p>
        <? foreach ($system_codes as $code):
            $system_item = $REST_API->read($t_systems, $code);
            $href = "/laboratory/" . $_GET["plant_code"] . "/" . $system_item["code"] . "/";
            $title = $system_item["title"];
            $preview_picture = $system_item["preview_picture"]; ?>
            <div class="continue">
                <a href="<?= $href ?>">
                    <img class="pl_img_my_system" src="<?= $preview_picture ?>">
                    <p class="after-pict_system"><?= $title ?></p>
                </a>
            </div>
        <? endforeach; ?>
        <div class="clear"></div>
    </div>

<? include_once($_SERVER["DOCUMENT_ROOT"] . "/app/footer.php"); ?>