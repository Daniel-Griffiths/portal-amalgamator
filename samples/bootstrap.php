<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
set_time_limit(0);

require __DIR__.'/../vendor/autoload.php';

use DanielGriffiths\PortalAmalgamator\{
	PortalAmalgamator,
	Portals\OnTheMarket,
	Portals\Rightmove,
	Portals\Zoopla
};

$portals = new PortalAmalgamator(
    new OnTheMarket,
    new Rightmove,
    new Zoopla
);

echo json_encode(
	$portals->search([
	    'type' => 'rent',
	    'location' => 'REGION^219'
	])
, JSON_PRETTY_PRINT);
