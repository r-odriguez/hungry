<?php declare(strict_types=1);

use function tusk\http\status\method_not_allowed;

match (METHOD) {
    'GET' => handler(),
    default => method_not_allowed(),
};

function handler()
{
    $name = route->param('name');
    route->view(['name' => $name]);
}
