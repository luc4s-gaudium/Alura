<?php
include './admin/Artigo.php';
$artigo = new Artigo();
$artigos = $artigo->pegaArtigos();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>Meu Blog</h1>
        <?php foreach ($artigos as $artigo): ?>
            <div>
                <h2>
                    <a href="<?php echo $artigo['link']; ?>">
                        <?php echo $artigo['titulo']; ?>
                    </a>
                </h2>
                <p>
                    <?php echo $artigo['conteudo']; ?>
                </p>
            </div>
        <?php endforeach; ?>

</body>

</html>