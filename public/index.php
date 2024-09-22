<?php

use function tusk\controller;
use function tusk\http\status\not_found;

const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . 'libs/tusk/init.php';

match (URL['path']) {
    '/' => controller("web/home.php"),
    default => not_found(),
};

exit(0);
