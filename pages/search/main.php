<?php declare(strict_types=1);

use function cache\restaurant_search_by_name;
use function tusk\http\GET;
use function tusk\http\status\method_not_allowed;
use function tusk\snip;
use function tusk\view;

require BASE_PATH . 'src/cache.php';

match (METHOD) {
    'GET' => count($_GET) > 0 ? search() : view(),
    default => method_not_allowed()
};

function search()
{
    $restaurant_name = GET('name');

    if (restaurant_search_by_name($restaurant_name)) {
        snip("btn", ['name' => $restaurant_name]);
    } else {
        echo "<p>Restaurant not found</p>";
    }
}
