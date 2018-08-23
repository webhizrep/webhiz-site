<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

$to = "contato.webhizagencia@gmail.com";

$subject = "Contato através da HOME do site";

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$website = $_POST["website"];

$message = "Nome: $nome
Email: $email
Telefone: $telefone
Website: $website";

mail($to, $subject, $message);

$redirect = "https://www.webhiz.com.br/mensagem-enviada.html";

header("location:$redirect");

?>