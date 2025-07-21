<?php
require_once "../config.php";
require_once "../src/Artigo.php";
require_once "../src/Redireciona.php";

$obj_artigo = new Artigo($mysql);
$artigo = $obj_artigo->pegaArtigoPorId($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $obj_artigo->deletaArtigo($_POST['id']);
    redireciona();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Excluir Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Você realmente deseja excluir o artigo?</h1>
        <p>Nome do artigo: <?php echo $artigo['titulo']; ?></p>

        <form method="post" action="excluir-artigo.php?id=<?php echo $_GET['id'] ?>">
            <p>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                <button class="botao">Excluir</button>
            </p>
        </form>
    </div>
</body>

</html>