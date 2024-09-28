<!DOCTYPE html>
<html>
    <head>
        <title>Hungry - Not found</title>
    </head>
    <body>
        <h1>Error: 404 :(</h1>
        <h2>Not Found</h2>
    </body>
</html>

<?php
use function tusk\http\status\not_found;

not_found();
?>
