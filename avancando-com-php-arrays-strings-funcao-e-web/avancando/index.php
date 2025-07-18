<?php
require_once "./funcoes.php";
// require_once ".//contas-correntes.php"; // ❌ ERRADO: ".//" é desnecessário, prefira "./" para indicar o diretório atual
require_once "./contas-correntes.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html & PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <main class="container py-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contasCorrentes as $indice => $conta): ?>
                    <?php ['titular' => $cpf, 'saldo' => $saldo] = $conta; ?>
                    <tr>
                        <td scope="row"><?= $indice + 1 ?></td>

                        <td><?= $cpf ?></td>

                        <td><?= $saldo ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>