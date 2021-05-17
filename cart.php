<?php

require_once "include/smarty.php";
require_once "include/db.php";
require_once "include/session.php";

if (!isset($session->cart)) {
  $session->cart = [];
}

$cart_data = [];
$total_price = 0;
/*
  process $session->cart, storing information into $cart_data
 */

// here's some fake data to give you an idea
$cart_data = [
    1 => [ 'name' => 'Missouri Evening Primrose', 'price' => 8.00, 'quantity' => 50],
];

$data = [
    'cart_data' => $cart_data,
    'total_price' => $total_price,
];
$smarty->assign($data);
$smarty->display("cart.tpl");
