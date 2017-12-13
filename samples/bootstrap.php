<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/../vendor/autoload.php';

use DanielGriffiths\PropertyAmalgamator\PropertyAmalgamator;
use DanielGriffiths\PropertyAmalgamator\Portals\Rightmove;
use DanielGriffiths\PropertyAmalgamator\Portals\Zoopla;

$portals = new PropertyAmalgamator(
	new Rightmove,
	new Zoopla
);

var_dump($portals->search([
	'type' => 'rent'
]));