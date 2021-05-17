


<?php
/* 
 * Brian Kwapisz
 * bk632631@wcupa.edu
 */
require_once "include/smarty.php";
require_once "include/db.php";
 
$orderField = filter_input(INPUT_GET, 'orderField');
if (is_null($orderField)) {
  $orderField = "name";
}
 
$flowers_per_page = 10;
 
$page = filter_input(INPUT_GET, 'page');
 
if (is_null($page)) {
  $page = 1;
}
$offset = ($page-1) * $flowers_per_page;
 
$flower = R::findAll('flower', 
  "order by {$session->order['flower']} limit $offset,$flowers_per_page"
);
 
$num_pages = ceil( R::count('flower')/$flower_per_page );
 
$data = [
    'flower' => $flower,
    'page' => $page,
    'num_pages' => $num_pages,
];
$smarty->assign($data);
$smarty->display("flower-page.tpl");