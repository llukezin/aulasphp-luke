<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de dados</title>
</head>
<body>
    <h1>Processamento dos dados vindos do formulário</h1>
    <hr>

<?php
// Recebendo os dados via metodo post
// usando o array superglobal $_POST[]

$nome = $_POST["nome"];
$email = $_POST["email"];
$nascimento = $_POST["nascimento"];
$mensagem = $_POST["mensagem"];

if( empty($nome) || empty($email) ){
?>
    <p>Você deve preencher nome e e-mail!</p>
<?php

} else {
?>
<h2>Dados recebidos:</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>E-mail: <?=$email?></li>

    <!-- Se nascimento NÃO ESTIVER VAZIO -->
    <?php if( !empty($nascimento) ){ ?>
        <li>Data de nascimento: <?=$nascimento?></li>
    <?php } ?>

    <!-- se a mensagem NÃO ESTIVER VAZIO -->
    <?php if( !empty($mensagem) ){ ?>
        <li>mensagem: <?=$mensagem?></li>
    <?php } ?>
</ul>
<?php } ?>

</body>
</html>