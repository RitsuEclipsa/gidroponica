
<? $plants = $REST_API->readAll($t_plants); ?>

<div class="plants">
    <p class="header_my">Выберите растение!</p>
    <?foreach($plants as $item):?>
        <?
        $href = "/laboratory/".$item["code"]."/";
        $title = $item["title"];
        $preview_picture = $item["preview_picture"];

        $class_active = '';
        if($_GET["plant_code"] == $item["code"]){
            $class_active = 'class="active"';
        }
        ?>
        <div class="half">
            <a <?=$class_active?> href="<?=$href?>">
                <img class="pl_img_my" src="<?=$preview_picture?>">
                <p class="after-pict"><?=$title?></p>
            </a>
        </div>
    <?endforeach;?>
</div>

