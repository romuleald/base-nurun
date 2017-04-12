<?php
header('Content-Type: application/json');

$params = implode(' ', array_values($_POST));
exec('node ../js/core/generate-php.js ' . $params, $shellOutput);
$var = explode(',', $shellOutput[0]);
$output = $var;
echo json_encode($output);