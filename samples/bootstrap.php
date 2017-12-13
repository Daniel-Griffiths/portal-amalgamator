<?php 

require __DIR__.'/../vendor/autoload.php';

use DanielGriffiths\PropertyAmalgamator\PropertyAmalgamator;
use DanielGriffiths\PropertyAmalgamator\Portals\Rightmove;
use DanielGriffiths\PropertyAmalgamator\Portals\Zoopla;

$lol = new PropertyAmalgamator(
	new Rightmove,
	new Zoopla
);

var_dump($lol);