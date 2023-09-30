<?php
include_once('../private/initialize.php');
require_once VENDOR_PATH . '/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);

$template = $twig->load('homepage.twig');

echo $template->render([
    'page_title' => 'Python 3',
]);
