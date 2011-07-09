<?php

define('ROOT', __DIR__ . '/..');

require_once ROOT . '/src/bootstrap.php';

use Loveboard\Loveboard;

$loveboard = new Loveboard(DB_FILE);
echo json_encode($loveboard->addLove($_POST));
