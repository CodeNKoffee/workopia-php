<?php

require '../helpers.php';

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// inspect($uri);
// inspect($method);

require basePath('router.php');
