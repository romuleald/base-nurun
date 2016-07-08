<?php

//$history = array()

$format = isset($_GET['format']) ? $_GET['format'] : 'undefined';
$json = array("datas" => array("file" => "export/techfile.pdf"));

header('Content-Type: application/json; charset=utf8');

echo json_encode($json)
?>