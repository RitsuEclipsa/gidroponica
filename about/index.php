<? include_once($_SERVER["DOCUMENT_ROOT"] . "/app/header.php"); ?>

<?
$page = $REST_API->read($t_pages, "about");
?>

    <div class="container">
        <div class="text_wrap">
            <h1 class="title"><?= $page["title"] ?></h1>
            <?= $page["text"] ?>
        </div>
    </div>

<? include_once($_SERVER["DOCUMENT_ROOT"] . "/app/footer.php"); ?>