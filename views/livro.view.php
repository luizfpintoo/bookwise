<?php
/**
 * @var Livro $livro
 */
?>

<section class="mt-10">
    <div>
        <a href="/livro?id=<?= $livro->id; ?>">
            <div class="bg-stone-800 p-4 rounded-md">
                <div class="flex gap-4">
                    <div class=" w-1/3">
                        Imagem
                    </div>
                    <div>
                        <h3 class="font-semibold"><?= $livro->titulo; ?></h3>
                        <p class="text-sm italic"><?= $livro->autor; ?></p>
                        <p class="text-sm">⭐⭐⭐⭐⭐(5 Avalicações)</p>
                    </div>
                </div>
                <p class="mt-2"><?= $livro->descricao; ?></p>
            </div>
        </a>
    </div>
</section>