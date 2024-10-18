<?php declare(strict_types=1);

/**
 * This file is specifically for redis or some type of caching
 */
namespace cache;

const restaurants = [
    ["NameID" => "carranca_gulosa", "Name" => "Carranca Gulosa"],
    ["NameID" => "lumberjack", "Name" => "Lumberjack"],
];

function restaurant_search_by_name(string $n)
{
    foreach (restaurants as $restaurant) {
        if ($restaurant["Name"] == $n) {
            return [$restaurant, null];
        }
    }

    return [0, "Restaurant not found"];
}

function restaurant_search_by(string $field, string $n)
{
    foreach (restaurants as $restaurant) {
        if ($restaurant[$field] == $n) {
            return [$restaurant, null];
        }
    }

    return [0, "Restaurant not found"];
}
