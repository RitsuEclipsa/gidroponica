<?php

// LOCAL
$db_host        = "localhost";
$db_name        = "gidro";
$db_user        = "root";
$db_pass        = "";
$db_charset     = "utf8";

// REMOTE
if($_SERVER["HTTP_HOST"] == "gidroponica-project.ru"){
    $db_host        = "localhost";
    $db_name        = "aeron_gidro";
    $db_user        = "aeron_gidro";
    $db_pass        = "7sSCF27K";
    $db_charset     = "utf8";
}

// Tables
$t_pages        = "t_pages";
$t_plants       = "t_plants";
$t_systems      = "t_systems";

$pdo_connection = null;

try {

    $db_dsn = "mysql:host=$db_host;dbname=$db_name;charset=$db_charset";
    $dbopt  = array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_PERSISTENT => true
    );

    $pdo_connection = new PDO($db_dsn, $db_user, $db_pass, $dbopt);

    $pdo_connection->exec("set names ".$db_charset); // cp1251 || utf8 (Set charset for outlet data)

} catch (Exception $e) {

    $echo["status"] = "errorConnect";
    echo json_encode($echo);
    die;

}

$REST_API = new PDO_DRIVER($pdo_connection);