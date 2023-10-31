<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays (vetores e matrizes) </h1>
    <hr>

    <h2>Arrays numericos/indexados </h2>

<?php
// Declarando arrays
$bandas = ["Rush", "Slayer", "Iron Maiden",];
$cursos = array("HTML5", "PHP", "Design", "JS");

// Declarando como constante
define("UNIDADES_SESC", ["Belenzinho", "Bertioga"]);
const UNIDADES_SENAC = ["Penha", "Tatuapé", "São Miguel", "Itaquera "];
?>

<h3>Saida de dados de arrays</h3>
<ul>
    <li>Banda que eu mais gosto: <?=$bandas[0]?> </li>
    <li>Assunto estudando: <?=$cursos[1]?> </li>
    <!-- Mini-exercicios
    - Mostre em que unidade do Senac estamos
    - Mostre o Sesc que fica no litoral -->
    <li>Hoje a aula será no Senac <?= UNIDADES_SENAC[0] ?> </li>
    <li>Venha conhecer o Sesc <?= UNIDADES_SESC [1]  ?></li> 
</ul>

<hr>

<h2>Array associativo</h2>
<?php
$livro = [
    "titulo" => "Senhor dos Anéis",
    "autor" => "J.R.R. Tolkien",
    "ano" => 1954,
    "personagens" => ["Frodo", "Legolas"]
];

$filme = array(
    "titulo" => "Velozes e Furiosos",
    "genero" => "Acão"

)
?>

<h3>Saida de dados (array associativo)</h3>

<p>Livro: <?=$livro["titulo"]?></p>
<p>O cara que usa flechinhas:
<?=$livro["personagens"][1]?>     
</p>

<hr>

<h3>Comandos para analisar a estrutura de arrays:
 Print_r() e var_dump()</h3>

 <!-- Saidas sem formatação -->
 <?=print_r($bandas)?>
 <br><br>
 <?=var_dump($bandas)?>

 <!-- Saidas com formatação usando a tag <pre> -->
    <pre> <?=print_r($bandas)?> </pre>
    <pre> <?=var_dump($bandas)?> </pre>

<pre>
<?=var_dump($livro)?> 
</pre>
</body>
</html>