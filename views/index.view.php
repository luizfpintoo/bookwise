<div>
    <h1 class="text-2xl font-bold mb-4">Explorar</h1>
    <form action="#">
        <input class="border border-stone-800 py-2 px-4 rounded-md focus:outline-none" type="text" name="pesquisar" id="pesquisar" placeholder="Pesquisar Livro">
        <button class="bg-emerald-500 py-2 px-4 rounded-md text-emerald-900 font-semibold cursor:pointer" type="submit">Pesquisar</button>
    </form>
</div>

<section class="mt-10">
    <div class="grid md:grid-cols-3 gap-3">
        <?php foreach ($livros as $livro): ?>
            <a href="/livro?id=<?= $livro["id"]; ?>">
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
        <?php endforeach; ?>
    </div>
</section>