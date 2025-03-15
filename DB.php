<?php

class DB
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    public function livros($pesquisar = null)
    {

        $prepare = $this->db->prepare("SELECT * FROM livros WHERE usuario_id = 1 AND titulo LIKE :pesquisar");
        $prepare->bindValue("pesquisar", "%$pesquisar%");
        $prepare->execute();
        $prepare->setFetchMode(PDO::FETCH_CLASS, Livro::class);
        $livros = $prepare->fetchAll();
        return $livros;
    }

    public function livro($id)
    {
        $prepare = $this->db->query("select * from livros where id = :id");
        $prepare->bindValue("id", $id);
        $prepare->setFetchMode(PDO::FETCH_CLASS, Livro::class);
        $prepare->execute();
        $livro = $prepare->fetch();
        return $livro;
    }
}
