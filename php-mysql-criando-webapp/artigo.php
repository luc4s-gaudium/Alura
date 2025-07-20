<?php
include "./config.php";
include "./src/Artigo.php";

$obj_artigo = new Artigo($mysql);
$artigo = $obj_artigo->pegaArtigoPorId($_GET['id']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>
            <?php echo $artigo['titulo'];?>
            <?php echo $_GET['id'];?>
        </h1>
        <p>
            <?php echo $artigo['conteudo'];?>
        </p>
        <div>
            <a class="botao botao-block" href="index.php">Voltar</a>
        </div>
    </div>
</body>

</html>