<?php

define('SRC', ROOT . '/src');
define('DB_FILE', ROOT . '/data/Loveboard.db');

require_once ROOT . '/data/pusher.php';

require_once ROOT . '/src/vendors/Twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem(ROOT . '/templates');
$twig = new Twig_Environment($loader, array(
  'cache' => false, //ROOT . '/cache/twig',
));

require_once SRC . '/Loveboard/Loveboard.php';
require_once SRC . '/vendors/Pusher-PHP/lib/Pusher.php';
