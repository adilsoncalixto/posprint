<?php
include_once('../bootstrap.php');

use Posprint\Graphics\Graphics;

$graph = new Graphics();

$imgPath = 'tux.png';

$graph->load($imgPath);

$graph->convertBW();

$imgPathBW = 'tuxBW.png';
$graph->save($imgPathBW, 'PNG');