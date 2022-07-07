<?php 
header('Content-Type: application/json; charset=utf-8');
$depart = date('Y/m/d', strtotime($_GET["depart"]));
$depart0 = date('Y/m/d', strtotime($depart . ' - 1 days'));
$depart1 = date('Y/m/d', strtotime($depart . ' + 1 days'));
$depart2 = date('Y/m/d', strtotime($depart . ' + 2 days'));

$return = date('Y/m/d', strtotime($_GET["return"]));
$return0 = date('Y/m/d', strtotime($return . ' - 1 days'));
$return1 = date('Y/m/d', strtotime($return . ' + 1 days'));
$return2 = date('Y/m/d', strtotime($return . ' + 2 days'));
?>