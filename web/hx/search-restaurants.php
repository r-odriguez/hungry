<?php declare(strict_types=1);

use function cache\restaurant_search_by_name;
use function tusk\http\GET;
use function tusk\http\status\method_not_allowed;

if (METHOD != "GET") {
    method_not_allowed();
}

$name = GET("name");

if (strlen($name) == 0) {
    header('HTMX-Result: "empty input"');
    exit(0);
}

[$r, $err] = restaurant_search_by_name($name);
?>

<p>
    <?php if ($err != null): ?>
        <?= $err ?>
    <?php else: ?>
        Found it!
        <a href="/restaurant/<?= $r["NameID"] ?>" class="underline text-blue-500">
            Go to <?= $r["Name"] ?>
        </a>
    <?php endif; ?>
</p>
