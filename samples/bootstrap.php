<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__.'/../vendor/autoload.php';

use DanielGriffiths\PortalAmalgamator\{
	PortalAmalgamator,
	Portals\OnTheMarket,
	Portals\Rightmove,
	Portals\Zoopla
};

$portals = new PortalAmalgamator(
    new OnTheMarket,
    new Rightmove
    // new Zoopla
);

var_dump(
	$portals->search([
	    'type' => 'rent',
	    'location' => 'REGION^219'
	])
);
