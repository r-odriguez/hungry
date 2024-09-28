<?php
$title ??= "Default Title";
$scripts ??= [];
?>

<head>
    <title><?= $title ?></title>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="/css/app.css" />

    <!-- js -->
    <script defer type="module" src="/js/libs/htmx.min.js"></script>

    <?php foreach ($scripts as $path) : ?>
        <script defer type="module" src="<?= $path ?>"></script>
    <?php endforeach; ?>
</head>
