<?php declare(strict_types=1);

use function cache\restaurant_search_by;
use function tusk\http\status\method_not_allowed;

if (METHOD != "GET") {
    method_not_allowed();
}

[$r, $err] = restaurant_search_by("NameID", route->param("name"));

if ($err != null) {
    tusk\dd($err);
}
?>

<!DOCTYPE html>
<html>
    <?= tusk\partials("head") ?>

    <body class="flex flex-row">
        <aside id="navigation-bar" class="bg-red-400">
            <h4><?= $r["Name"] ?></h4>
            <ul>
                <details>
                    <summary>Cardápio</summary>
                    <ul>
                        <li><a href="">Entradas</a></li>
                        <li><a href="">Pratos principais</a></li>
                        <li><a href="">Sobremesas</a></li>
                        <li><a href="">Sucos</a></li>
                        <li><a href="">Bebidas</a></li>
                    </ul>
                </details>
                <li><a href="">Reservar</a></li>
                <li><a href="">Contato</a></li>
            </ul>
        </aside>

        <main class="w-full bg-blue-400">
            hi
        </main>

        <aside id="chat" class="bg-red-400"></aside>
    </body>
</html>
