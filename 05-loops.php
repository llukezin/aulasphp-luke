<?php require "recursos.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <style>
        ol li:nth-child(odd) { color: red; }
        ol li:nth-child(even) { color: green;}

        
    </style>
</head>
<body>
    <!-- Usando o foreach para acessar os dados so array criado em outro arquivo (acessivel devido ao include) -->
<?php foreach($linguagens as $linguagem){ ?>
    <p><i><?=$linguagem?></i></p>
    <?php } ?>
<h1> Loops </h1>
<hr>
<h2>Tradicionais: for, while, do/while</h2>

<h3>while</h3>
<?php
$i = 1;
while($i <= 3){
?>
    <p>Senac Penha - I vale <?=$i?> </p>
<?php
    $i++;
}
?>

<h3>do/while</h3>
<ul>

<?php
$j = 1;
do {
?>
    <li>Item: <?=$j?></li>
<?php
    $j++;
} while($j <= 5)
?>

</ul>

<h3>for</h3>
<?php
$alunos = ["Jean", "Giudeppe", "Arthur", "Pedro", "Paola"];

$quantidade = count($alunos);

for( $i = 0; $i < $quantidade; $i++ ){
?>
    <p> Aluno: <?=$alunos[$i]?></p>
<?php
}
?>

<h3>foreach</h3>
<?php foreach( $alunos as $aluno ){ ?>
    <p> <?=$aluno?> </p>
<?php } ?>


<!-- 1) Crie um array contendo o nome dos 12 meses do ano.

2) Monte uma lista ordenada exibindo o nome de cada mês em um item.

DESAFIO: formate a lista de uma forma que os meses apareçam com cores alternadas. Exemplo: janeiro/março em azul, fevereiro/abril em vermelho etc. -->



<?php
$meses = ["Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];?>
 
<ol>
<?php 
foreach( $meses as $mes){ ?>

<li> <?=$mes?> </li>

<?php } ?>
</ol>


</body>
</html>