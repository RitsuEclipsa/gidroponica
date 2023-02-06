
<? $plants = $REST_API->readAll($t_plants); ?>

<div class="plants">
    <h3 class="header_my">Выберите растение:</h3>
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

