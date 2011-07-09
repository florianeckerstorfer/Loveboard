<?php

define('ROOT', __DIR__ . '/..');

require_once ROOT . '/src/bootstrap.php';

$template = $twig->loadTemplate('demo.html');
$template->display(array());