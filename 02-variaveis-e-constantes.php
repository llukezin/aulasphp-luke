<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>

    <style>
        p { font-family: Verdana; }

        .destaque {
            background-color: yellow;
            color: red;
        }
    </style>
</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <hr>

<?php
    // Variáveis
    $curso = "Programador web";
    $ano = 2023;
    $area = "Back-End";

    // Estamos no programador Web em 2023

   /*  Formas se saida completas via php */

    // saida interpolada
    echo "<p>Estamos no <span class='destaque'> $curso em $ano</p>";
    echo "<p>Estamos no <span class=\"destaque\"> $curso em $ano</p>";
    
    //Não dá certo, as variaveis são tratadas como texto
    echo '<p>Estamos no $curso em $ano</p>';

    //saida com CONCATENAÇÃO
    echo '<p>estamos no '.$curso.' em ' .$ano. '</p>';
    echo "<p>estamos no ".$curso. " em " .$ano. "</p>";
?>

<hr>

    <!-- Forma de saida ABREVIADA/SIMPLIFICADA -->
    <P>Estamos no <span class="destaque"><?=$curso?></span> em <?=$ano?> </P>

<hr>

<?php
    // constantes (recomenda-se dar nome em MAIUSCULAS)

    //forma antiga, tradicional
    define("AUTOR", "Tiago Bezzera dos Santos");

    //forma moderna, atual
    const EMPRESA = "ABC Tecnologia";
    const ANO_FUNDACAO = 2000;
?>

<!-- Saidas -->
    <p>Autor do site: <?=AUTOR?> </p>
    <p>Nome da empresa: <?=EMPRESA?> </p>
    <p>Fundada em: <?=ANO_FUNDACAO?> </p>

</body>
</html>