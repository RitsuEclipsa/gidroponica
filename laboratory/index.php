<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/header.php");?>

<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/lab_sidebar.php");?>


<?
$page = $REST_API->read($t_pages, "laboratory");
?>


<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/footer.php");?>