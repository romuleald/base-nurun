<?php

//$history = array()
$items = array('432543', '432543', '432543', '432543', '432543', '432543', '6457645', '63456456', '5435432', '8967');
$json = array("datas" => array("type" => "pro", "name" => "testimport", "elements" => $items));

header('Content-Type: application/json; charset=utf8');

echo json_encode($json)
?>