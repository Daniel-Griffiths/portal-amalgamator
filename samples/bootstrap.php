<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__.'/../vendor/autoload.php';

use DanielGriffiths\PortalAmalgamator\PortalAmalgamator;
use DanielGriffiths\PortalAmalgamator\Portals\OnTheMarket;
use DanielGriffiths\PortalAmalgamator\Portals\Rightmove;
use DanielGriffiths\PortalAmalgamator\Portals\Zoopla;

$portals = new PortalAmalgamator(
    new OnTheMarket,
    new Rightmove,
    new Zoopla
);


echo json_encode(
    $portals->search([
        'type' => 'rent',
        'location' => 'REGION^219'
    ]), JSON_PRETTY_PRINT);
