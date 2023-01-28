<?php

// DEBUG
function pre($ar){
    echo "<pre>";
    if(is_array($ar)){
        print_r($ar);
    } else {
        echo $ar;
    }
    echo "</pre>";
}


