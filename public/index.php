<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);

$template = $twig->load('homepage.twig');

echo $template->render([
    'page_title' => 'Python 3',
]);
