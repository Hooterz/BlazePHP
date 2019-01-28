<?php
require_once(__DIR__ . '/config/configuration.php');
session_start();
require_once(__DIR__ . '/class/core.php');
require_once(__DIR__ . '/class/database.php');
require_once(__DIR__ . '/class/route.php');
require_once(__DIR__ . '/class/template.php');
require_once(__DIR__ . '/class/user.php');
$time = microtime(true);
$core = new Core(new Template(new Route($_SERVER['REQUEST_URI'])));
$core->spitRequest();
echo '<!-- Render time: '.(microtime(true)-$time).' seconds. -->';
?>
