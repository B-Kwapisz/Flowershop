 <?php


/* 
 * Brian Kwapisz
 * bk632631@wcupa.edu
 */

require_once "include/smarty.php";
require_once "include/db.php";
 
$books = R::findAll('flower', "order by {$session->order['name']}");
 
$data = [
    'flower' => $flower,
];
$smarty->assign($data);
$smarty->display("flower.tpl");