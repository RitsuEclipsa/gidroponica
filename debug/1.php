<html>
<head>
    <link rel="stylesheet" type="text/css" href="/app/css/style.css?v=<?=time()?>">
</head>
<body>

<?php

$items = [
    [
        "id" => 2,
        "code" => "sistema_glubokovodyh_kultur",
        "title" => "Система глубоководных культур",
        "preview_picture" => "/images/templates/sist_gl_kyl.png",
        "detail_picture" => "/images/salat/syst_glub_k_salat.png",
        "text" => "2Текст описания(не придумано)",
    ],
    [
        "id" => 1,
        "code" => "fitilnaya_sistema",
        "title" => "Фитильная система",
        "preview_picture" => "/images/templates/fit_syst.png",
        "detail_picture" => "/images/salat/fit_syst_salat.png",
        "text" => "1 Текст описания(не придумано)"
    ],
    [
        "id" => 6,
        "code" => "aeroponika",
        "title" => "Аэропоника",
        "preview_picture" => "/images/templates/aeroponica.png",
        "detail_picture" => "/images/salat/aeroponica_salat.png",
        "text" => "6Текст описания(не придумано)"
    ]
];
?>
<div class="system_gid">
    <p class="header_system">Выбетире систему!</p>
<?foreach($items as $item):?>
    <?
    $param = $item;
    ?>
    <div class="continuu">
            <a href="/labaratory/"<?=$param["codi"]?>"/">
                <img class="pl_img_my_system" src="<?=$param["preview_pecture"]?>">
                <p class="after-pict_system"><?=$param["textt"]?></p>
            </a>
    <div>
<?endforeach?>
</div>

</body>
</html>
