<?php
include_once(__DIR__ . '/../private/initialize.php');
require_once __DIR__ . '/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);

$template = $twig->load('homepage.twig');

echo $template->render([
    'page_title' => 'Python 3',
]);
