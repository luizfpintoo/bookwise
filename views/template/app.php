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

    <main class="mx-auto max-w-5xl mt-3 p-4">
        <?php require "views/{$view}.view.php"; ?>
    </main>
</body>

</html>