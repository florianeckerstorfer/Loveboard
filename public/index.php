<?php

define('ROOT', __DIR__ . '/..');

require_once ROOT . '/src/bootstrap.php';

use Loveboard\Loveboard;

$loveboard = new Loveboard(DB_FILE);

$template = $twig->loadTemplate('index.html');
$template->display(array('likes' => $loveboard->getLoves()));