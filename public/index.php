<?php

use tusk\Route;

use function tusk\error_page;

const BASE_PATH = __DIR__ . "/../";
require BASE_PATH . "libs/tusk/init.php";
require BASE_PATH . "globals.php";
require BASE_PATH . "src/cache.php";

const route = new Route(URL["path"]);

route->redirect(from: "/", to: "/search") // views
    ->path("/search", "/search.php")
    ->path("/restaurant/:name(word)", "/restaurant.php")
    ->api("/hx/search-restaurants", "/search-restaurants.php"); // apis

error_page("not-found");
