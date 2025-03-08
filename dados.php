<?php

$db = new PDO('sqlite:database.sqlite');
$query = $db->query("select * from livros")->fetchAll();

$livros = $query;
dd($livros);