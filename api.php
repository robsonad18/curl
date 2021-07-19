<?php

// METODO HTTP
echo 'Metodo:';
echo $_SERVER['REQUEST_METHOD'];

// HEADERS
echo 'Headers:';
$headers = getallheaders();
print_r($headers);

// POST
echo 'POSTS';
$input = file_get_contents('php://input');
$input = json_decode($input, true);
$_POST = !empty($input) ? $input : $_POST;
print_r($_POST);

$response = [
	'codigo'	=> 200,
	'sucesso'	=> true
];

echo json_encode($response);
