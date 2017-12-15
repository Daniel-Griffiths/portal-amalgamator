# Portal Amalgamator

A library to search and amalgamate property information from several property portals.

Caution: This library scrapes the property portals for information, be aware that it could cease to work if the property portals update their website structure.

## Currently Supported Portals

- RightMove
- Zoopla
- OnTheMarket

## Installation

```
composer require daniel-griffiths/portal-amalgamator dev-master
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
	'location' => 'bristol',
	'maxprice' => 800,
	'minprice' => 1,
	'maxbedrooms' => 2,
	'minbedrooms' => 1,
])->orderBy('price')->get();

// we now have an array of properties from every portal
var_dump($properties);
```