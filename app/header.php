<?php
require_once("functions.php");
require_once("PDO_DRIVER.php");
require_once("config.php");

$pages = $REST_API->readAll($t_pages);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Гидропоника — это способ выращивания растений на искусственных средах без почвы. Питание растения получают из питательного раствора.">
    <meta name="keywords" content="гидропоника, лаборатория, цифровая лаборатория, лаборатория гидропоники ">
    <title>Лаборатория гидропоники</title>
    <link rel="icon" href="/app/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/app/css/style.css?v=<?=time()?>">
</head>
<body>
<header id="top">
    <div class="brand">Лаборатория гидропоники</div>
    <ul id="navbar">
        <?foreach($pages as $item):?>
        <?
            $classText = 'class="class="line"';
            $href = "/".$item["code"]."/";
            $title = $item["title"];

            if($item["code"] == "index"){
                $classText = "";
                $href = "/";
            }
            ?>
        <li <?=$classText?>><a href="<?=$href?>"><?=$title?></a></li>
        <?endforeach;?>
    </ul>
</header>