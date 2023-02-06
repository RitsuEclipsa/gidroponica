<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/header.php");?>

<?
$page = $REST_API->read($t_pages, "index");
?>
    <div class="jumbotron">
        <h1 class="title">Добро пожаловать!</h1>
        <a href="/laboratory/" class="button">Создать свою лабораторию</a>
    </div>
    <div class="container">
        <div class="text_wrap index_list">
        <?=$page["text"]?>
        </div>
    </div>
    <p><a href="#top">В начало</a></p>
<?include_once($_SERVER["DOCUMENT_ROOT"]."/app/footer.php");?>