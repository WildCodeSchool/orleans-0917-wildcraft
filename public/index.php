<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 18/01/18
 * Time: 09:55
 */
chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$bilbo = new \App\Hero('bilbo', 'hero.png');

$x = $_GET['x'] ?? 0;
$y = $_GET['y'] ?? 0;
$direction = $_GET['direction'] ?? 'right';

$bilbo->setCoordinates([$x, $y]);
$bilbo->setDirection($direction);

$map = new \App\Map(
    [
        [1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1],
    ],
    [$bilbo]
);


$loader = new Twig_Loader_Filesystem('src/View');
$twig = new Twig_Environment($loader);
$template = $twig->load('index.html');


echo $template->render([
        'map' => $map->render(),
        'x'   => $x,
        'y'   => $y,
    ]
);
