<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/header.php");?>

<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/lab_sidebar.php");?>

<?
$page = $REST_API->read($t_pages, "laboratory");
?>

    <div class="content_block">
        <div class="text_wrap">
            <h1 class="title"><?=$page["title"]?></h1>
            <?=$page["text"]?>
        </div>
    </div><!--/content_block -->

<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/footer.php");?>