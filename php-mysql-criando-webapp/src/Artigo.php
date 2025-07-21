<?php

class Artigo
{
    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }
    public function pegaArtigos()
    {
        $resultado = $this->mysql->query("SELECT id, titulo, conteudo FROM artigos");
        $artigos = $resultado->fetch_all(MYSQLI_ASSOC);

        return $artigos;
    }

    public function pegaArtigoPorId(string $id): array
    {
        $selecionaArtigo = $this->mysql->prepare("SELECT id, titulo, conteudo FROM artigos WHERE id = ?");
        $selecionaArtigo->bind_param('s', $id);
        $selecionaArtigo->execute();
        $artigo = $selecionaArtigo->get_result()->fetch_assoc();
        return $artigo;
    }

    public function adicionaArtigo(string $titulo, string $conteudo): void
    {
        $insereArtigo = $this->mysql->prepare("INSERT INTO artigos (titulo, conteudo) VALUES (?,?)");
        $insereArtigo->bind_param('ss', $titulo, $conteudo);
        $insereArtigo->execute();
    }

    public function deletaArtigo(string $id)
    {
        $deletar = $this->mysql->prepare("DELETE FROM artigos WHERE id = ?");
        $deletar->bind_param('s', $id);
        $deletar->execute();
    }

    public function  editaArtigo(string $id, string $titulo, string $conteudo)
    {
        $editar = $this->mysql->prepare("UPDATE artigos SET titulo = ?, conteudo = ? WHERE id = ?");
        $editar->bind_param('sss', $titulo, $conteudo, $id);
        $editar->execute();
    }
}
