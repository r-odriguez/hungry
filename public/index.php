<?php

use tusk\Route;

use function tusk\error_page;

const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . 'libs/tusk/init.php';
require BASE_PATH . 'globals.php';

const route = new Route(URL['path']);

route
    ->redirect(from: '/', to: '/search')
    ->path('/search', 'pages/search/')
    ->path('/restaurant/:name(word)', 'pages/restaurant/');

error_page("not-found");
