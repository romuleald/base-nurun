<?php

//$history = array()
$items = array();
foreach ($_GET['id'] as $item) {
    array_push($items, array("id" => $item, "date" => date('d.m.y')));
}
$json = array("datas" => array("page" => array("elements" => $items)));

header('Content-Type: application/json; charset=utf8');

echo json_encode($json)
?>