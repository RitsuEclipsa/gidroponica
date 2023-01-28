<?
include_once($_SERVER["DOCUMENT_ROOT"]."/app/header.php");

$pages = $REST_API->readAll($t_pages);

$plants = $REST_API->readAll($t_plants);

$systems = $REST_API->readAll($t_systems);

$pageIndex = $REST_API->read($t_pages, "index");

pre($plants);

