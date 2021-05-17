<?php
require_once "include/session.php";
require_once "include/smarty.php";
require_once "include/db.php";

if(is_null($session->order) || is_null($session->display)){
    $session->order = ['flower'=>'name'];
    $session->display = 'flower';
}

$view_script = [
    "flower" => "flower-page.php",
    "member" => "member.php",
];

$target_script = $view_script[$session->display];
require_once($target_script);
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');

$flower = R::find('flower');

$data = [
  'page_title' => 'Home',
  'flower' => $flower,
];
$smarty->assign($data);
$smarty->display("index.tpl");
