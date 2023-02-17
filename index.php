<?php


include_once 'connection.php';



function resposta($codigo, $ok, $mensagem){


}

header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Headers: * ");
header("Content-Type: application/json");


//echo json_encode(["resposta" => "ok"]);




$body = file_get_contents('php://input');

$body = json_decode($body);

if(! $body){

    echo json_encode('Corpo da requisição não encontrado!!');
    die;
    }