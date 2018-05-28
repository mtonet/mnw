<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$ddd = $_POST['ddd'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$assunto = "Contato enviado pelo site Pica Pau Import";
$assunto2 = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$recipient = "emailbizarro@gmail.com";

$mensagem = "<b>Telefone:</b> (" . trim($_POST["ddd"]) . ") " .  trim($_POST["telefone"]) . "<br><br>";
$mensagem .= "<b>Assunto<br></b>" . $_POST["assunto"] . "<br><br>";
$mensagem .= "<b>Mensagem:<br></b> " . $_POST["mensagem"];

$mailheaders = "$nome - $assunto";
$ok=mail("$recipient", "$assunto", "$msg", "$mailheaders");
echo "&ok=$ok";

?> 