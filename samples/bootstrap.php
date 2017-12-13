<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/../vendor/autoload.php';

use DanielGriffiths\PortalAmalgamator\{
	PortalAmalgamator,
	Portals\Rightmove,
	Portals\Zoopla
};

$portals = new PortalAmalgamator(
	new Rightmove,
	new Zoopla
);


echo json_encode(
	$portals->search([
		'type' => 'rent'
	])
, JSON_PRETTY_PRINT);