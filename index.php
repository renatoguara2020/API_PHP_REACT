<?php


include_once 'connection.php';



function resposta($codigo, $ok, $msg){

    header("Access-Control-Allow-Origin: * ");
    header("Access-Control-Allow-Headers: * ");
    header("Content-Type: application/json");

    http_response_code($codigo);

    echo json_encode([

        'ok' => $ok,
        'msg' => $msg,
    ]);

    die;
}





//echo json_encode(["resposta" => "ok"]);




$body = file_get_contents('php://input');



if(! $body)

resposta(400, false, "Corpo da requisição não encontrado");

$body = json_decode($body);

$body->nome = filter_var($body->nome, FILTER_SANITIZE_STRING);
$body->email = filter_var($body->email, FILTER_VALIDATE_EMAIL);
$body->msg = filter_var($body->msg, FILTER_SANITIZE_STRING);

if(!empty($body->nome) || !empty($body->email) || !empty($body->msg)){

     reposta(400, false, "Favor Preencher todos os campos");


}