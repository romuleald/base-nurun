<?php

//$history = array()
$items = array();
foreach ($_GET['skus'] as $item) {
    array_push($items, array(
        "sku" => $item,
        "label" => "Céliane intuition - interrupteur à extinction",
        "range" => "Céliane",
        "ref" => "0 434 54",
        "price" => "32.43",
        "media" => "img/data/m-22.jpg",
        "href" => "test.html#$item"
    ));
}
$json = array("datas" => array("elements" => $items));

header('Content-Type: application/json; charset=utf8');

echo json_encode($json)
?>