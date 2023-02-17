<?php


include_once '/connection.php';

header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Headers: * ");
header("Content-Type: application/json");


//echo json_encode(["resposta" => "ok"]);



if(! $body)

echo('Corpo da requisição não encontrado!!');

$body = file_get_contents('php://input');

$body = json_decode($body);