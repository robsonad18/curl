<?php

// INICIA O CURL
$curl = curl_init();

$headers = [
	'Authorization: Bearer 34324324324343243432',
	'Content-type: application/json'
];

$post = [
	'nome'		=> 'Robson',
	'sobrenome' => 'Lucas'
];
// JSON
$json = json_encode($post);

// DEFINE AS CONFIGURAÇÕES
curl_setopt_array($curl, [
	// URL DA REQUISICAO
	CURLOPT_URL				=> 'http://localhost/project/curl/api.php',
	// METODO DA REQUISICAO
	CURLOPT_CUSTOMREQUEST   => 'POST',
	// RETORNO DA EXECUCAO - MOSTRA RESPONSe
	CURLOPT_RETURNTRANSFER  => true,
	// ENVIA HEADERS
	CURLOPT_HTTPHEADER		=> $headers,
	// DADOS DE ENVIO
	CURLOPT_POSTFIELDS		=> $json
]);


$response = curl_exec($curl);

curl_close($curl);

$return = json_decode($response, true);

print_r($return);
