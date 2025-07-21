<?php
require "../config.php";
require "../src/Artigo.php";
require "../src/Redireciona.php";

$obj_artigo = new Artigo($mysql);
$artigo = $obj_artigo->pegaArtigoPorId($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $obj_artigo->editaArtigo($_POST['id'], $_POST['titulo'], $_POST['conteudo']);
    redireciona();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Editar Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Editar Artigo</h1>
        <form action="editar-artigo.php?id=<?php echo $artigo['id']; ?>" method="post">
            <p>
                <label for="titulo">Digite o novo título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" value="<?php echo $artigo['titulo']; ?>" />
            </p>
            <p>
                <label for="conteudo">Digite o novo conteúdo do artigo</label>
                <textarea class="campo-form" type="text" name="conteudo" id="conteudo"><?php echo nl2br($artigo['conteudo']); ?></textarea>
            </p>
            <p>
                <input type="hidden" name="id" value="<?php echo $artigo['id']; ?>" />
            </p>
            <p>
                <button class="botao">Editar Artigo</button>
            </p>
        </form>
    </div>
</body>

</html>