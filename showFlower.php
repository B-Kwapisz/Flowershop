<?php
require_once "include/session.php";
require_once "include/db.php";
require_once "include/smarty.php";
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');

$flower_id = filter_input(INPUT_GET, 'flower_id');

$flower = R::load('flower', $flower_id);

$data = [
    'flower' => $flower,
];
$smarty->assign($data);
$smarty->display("showFlower.tpl");
