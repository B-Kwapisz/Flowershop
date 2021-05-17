<?php

/* 
 * Brian Kwapisz
 * bk632631@wcupa.edu
 */
require_once "include/session.php";

$table = filter_input(INPUT_GET, 'field');
$session->order[$session->display] = $field;

header("location: .");
