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

##Usage

```PHP
<?php

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

var_dump(
	$portals->search([
	    'type' => 'rent',
	    'location' => 'bristol'
	])
);
```