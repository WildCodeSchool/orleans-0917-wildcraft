<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 18/01/18
 * Time: 09:55
 */
chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$map = new \App\Map([
    [1,1,1,1],
    [1,1,1,1],
    [1,1,1,1],
    [1,1,1,1],
]);

$loader = new Twig_Loader_Filesystem('src/View');
$twig = new Twig_Environment($loader);
$template = $twig->load('index.html');

echo $template->render(['map' => $map->render()]);
