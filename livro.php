<?php
    require "dados.php";

    $id = $_REQUEST["id"];
    
    $filtrado = array_filter($livros, function($l) use ($id) {
        return $l["id"] == $id;
    });

    $livro = array_pop($filtrado);
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Bookwise</title>
</head>

<body class="bg-stone-950 text-stone-300">
    <header class="bg-stone-900">
        <nav class="mx-auto max-w-5xl flex justify-between p-4">
            <div class="font-bold text-xl">Book Wise</div>
            <ul class="flex gap-3">
                <li>
                    <a class="text-emerald-500" href="/">Explorar</a>
                </li>
                <li>
                    <a class="hover:underline" href="/meus-livros.php">Meus Livros</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="/login.php">Fazer Login</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-5xl mt-10 p-4">
        <section class="mt-10">
            <div>
            <a href="/livro.php?id=<?= $livro["id"]; ?>">
                    <div class="bg-stone-800 p-4 rounded-md">
                        <div class="flex gap-4">
                            <div class=" w-1/3">
                                Imagem
                            </div>
                            <div>
                                <h3 class="font-semibold"><?= $livro["titulo"]; ?></h3>
                                <p class="text-sm italic"><?= $livro["autor"]; ?></p>
                                <p class="text-sm">⭐⭐⭐⭐⭐(5 Avalicações)</p>
                            </div>
                        </div>
                        <p class="mt-2">Lorem ipsum dolor sit amet consectetu</p>
                    </div>
                </a>
            </div>
        </section>
    </main>
</body>

</html>