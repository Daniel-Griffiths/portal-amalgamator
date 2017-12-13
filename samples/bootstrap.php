<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/../vendor/autoload.php';

use DanielGriffiths\PortalAmalgamator\PortalAmalgamator;
use DanielGriffiths\PortalAmalgamator\Portals\Rightmove;
use DanielGriffiths\PortalAmalgamator\Portals\Zoopla;

$portals = new PortalAmalgamator(
	new Rightmove,
	new Zoopla
);

var_dump($portals->search([
	'type' => 'rent'
]));