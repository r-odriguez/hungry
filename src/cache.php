<?php declare(strict_types=1);

/**
 * This file is specifically for redis or some type of caching
 */
namespace cache;

use function tusk\arrays\filter;

function restaurant_search_by_name(string $n)
{
    $db = require BASE_PATH . 'db.php';
    return filter($db, fn ($i) =>
                  $i['type'] == 'restaurant' &&
                  $i['name'] == $n);
}
