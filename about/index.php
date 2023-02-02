<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/header.php");?>

<?
$page = $REST_API->read($t_pages, "about");

?>
<h1 class="title"><?=$page["title"]?></h1>
<?=$page["text"]?>
<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/footer.php");?>