<?php

require __DIR__ . '/../public/index.php';
$app->bind('path.public', function () {
    return base_path('public');
});