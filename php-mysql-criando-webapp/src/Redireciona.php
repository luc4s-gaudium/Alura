<?php
function redireciona(string $url = 'index.php'): void
{
    header("location: $url");
    die();
}
