<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>
</head>
<body>
    <h1>Atividade que o prof passou</h1>
    <hr>
    
    <!-- Crie um novo arquivo chamado exercicio02.php e nele faça um array (numérico OU associativo) chamado dados contendo as seguintes informações:

Nome de usuário (exemplo: chapolin.colorado)
Senha (exemplo: 123teste)
Idade (exemplo: 30)
Cidade (exemplo: São Paulo)
Telefones (exemplo: 11-2135-0300 e 11-91234-5678)
Em seguida, mostre somente os valores de nome de usuário, idade, cidade e um dos telefones em uma lista ordenada HTML. -->

<?php 
$aluno = [
    "nome" => "Luffy",
    "senha" => "123teste",
    "idade" => 19,
    "cidade" => ["Minas Gerais", "São Paulo", "East Blue"],
    "telefone" => "11-4002-8922"];
?>

<h3>Numero do famoso Yonkou Mugiwara no Luffy</h3>
<ol>
<li>Um jovem chamado: <?=$aluno["nome"]?> </li>
<li>De apenas: <?=$aluno["idade"]?> anos</li>
<li>Veio diretamente do: <?=$aluno["cidade"][2]?> </li>
<li>Acaba vazando o proprio numero que é: <?=$aluno["telefone"]?> </li>
</ol>

</body>
</html>