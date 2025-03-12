<?php

class DB
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    public function livros($id = null)
    {
        $query = $this->db->query("select * from livros");
        $items = $query->fetchAll();
        $retorno = [];

        foreach ($items as $item) {
            $retorno[] = Livro::make($item);
        }

        return $retorno;
    }

    public function livro($id)
    {
        $sql = "select * from livros";
        $sql .= " where id = " . $id;
        $query = $this->db->query($sql);
        $items = $query->fetchAll();
        $retorno = [];

        foreach ($items as $item) {
            $retorno[] = Livro::make($item);
        }

        return $retorno[0];
    }
}
