<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

$to = "contato.webhizagencia@gmail.com";

$subject = "Contato através da HOME do site para receber newsletter";

$nome = $_POST["nome"];
$email = $_POST["email"];


$message = "Nome: $nome
Email: $email";

mail($to, $subject, $message);

$redirect = "https://www.webhiz.com.br/submissao-recebida.html";

header("location:$redirect");

?>