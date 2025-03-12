<?php 

class DB {
    public function livros() {
        $db = new PDO('sqlite:database.sqlite');
        $query = $db->query("select * from livros");
        $items = $query->fetchAll();
        $retorno = [];

        foreach($items as $item){
            $livro = new Livro();
            $livro->id = $item["id"];
            $livro->titulo = $item["titulo"];
            $livro->descricao = $item["descricao"];
            $livro->ano_de_lancamento = $item["ano_de_lancamento"];
            $livro->usuario_id = $item["usuario_id"];

            $retorno[] = $livro;
        }

        return $retorno;
    }
}