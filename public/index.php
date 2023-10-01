<?php
include_once('../private/initialize.php');
require_once VENDOR_PATH . '/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);

include(SHARED_PATH . '/header.php');

// include(SHARED_PATH . '/dashboard.php');

$template = $twig->load('dashboard.twig');

echo $template->render([
    // 'page_title' => 'Python 3',
]);

include(SHARED_PATH . '/footer.php');