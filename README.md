# Portal Amalgamator

A library to search and amalgamate property information from several property portals.

## Currently Supported Portals

- RightMove
- Zoopla
- OnTheMarket

## Installation

```
composer require daniel-griffiths/portal-amalgamator
```

## Usage

```PHP
<?php

require __DIR__.'/../vendor/autoload.php';

use DanielGriffiths\PortalAmalgamator\{
	PortalAmalgamator,
	Portals\OnTheMarket,
	Portals\Rightmove,
	Portals\Zoopla
};

// create a new instance of the amalgamator
// feel free to add or remove portals as needed
$portals = new PortalAmalgamator(
    new OnTheMarket,
    new Rightmove,
    new Zoopla
);

// search across all portals using an array 
// of search parameters
$properties = $portals->search([
    'type' => 'rent',
    'location' => 'bristol'
]);

// we now have an array of properties from every portal
var_dump($properties);
```