<?php

$id = $_REQUEST["id"];

$db = new DB();
$livro = $db->livros($id);

view("livro", compact("livro"));

