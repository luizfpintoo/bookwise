<?php

class Livro
{
    public $id;
    public $titulo;
    public $descricao;
    public $ano_de_lancamento;
    public $usuario_id;
    public $autor;

    /**
     * @var Livro $livro
     */

    public static function make($item)
    {
        $livro = new self;
        $livro->id = $item["id"];
        $livro->titulo = $item["titulo"];
        $livro->descricao = $item["descricao"];
        $livro->ano_de_lancamento = $item["ano_de_lancamento"];
        $livro->usuario_id = $item["usuario_id"];
        $livro->autor = $item["autor"];

        return $livro;
    }
}
