<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario com PHP</title>
</head>
<body>
    <h1>Formulário e processsamentos juntos</h1>
    <hr>

    <?php
    // Detectando o envio do formulario
    if( isset($_POST["enviar"]) ){
        $nome = $_POST["nome"];
    ?>
       <h2>Dados processados!</h2>
       <p>Nome: <?=$nome?></p>
    <?php
    } else {
    ?>
    
    <form action="" method="post">
        <label for="nome">Nome :</label>
        <input type="text" name="nome" id="nome">
        <button type="submit" name="enviar">Enviar</button>
    </form>
    <?php
    }
    ?>


</body>
</html>