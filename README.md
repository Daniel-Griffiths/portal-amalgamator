# Portal Amalgamator

A library to search and amalgamate property information from several property portals. 

Caution: This library scrapes the property portals for information, be aware that it could cease to work if the property portals update their website structure.

## Why Use This?

This library was initially created to help aid my search for a new home. I used it to periodically search for new properties and to send me a 
Slack message once new properties became available. Rental properties go like hot cakes, so this gave me a way to book viewings early. 😎 

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
## Filters

Various filters can be passed into the `search` method, These can be used to narrow your search
and to only return properties based on the criteria specified.

A full list of supported filters can be found below:-

| Filter      | Type   | Valid Values                     | Example   |
|-------------|--------|----------------------------------|-----------|
| type        | string | "rent" or "sale"                 | "rent"    |
| location    | string | Any UK location                  | "bristol" |
| maxprice    | int    | Any number greater than 0        | 900 	  |
| minprice    | int    | Any number greater than 0        | 100       |
| maxbedrooms | int    | Any number greater than 0        | 3         | 
| minbedrooms | int    | Any number greater than 0        | 1         | 

## Property Response Format

After searching for properties you will receive an array of properties. I have included an example property below for reference (encoded as json).

```JSON
{
	"image": "https://lid.zoocdn.com/354/255/abddb686034ea1ff19b6c0de370b8362520a88c2.jpg",
	"title": "1 bed flat to rent",
	"address": "Alma Road, Clifton, Bristol BS8",
	"description": "A one bedroom unfurnished apartment in clifton. A lovely light first floor flat with a large lounge and dining room area. Double bedroom. Separate kitchen with fridge/freezer, cooker and washing machine supplied. Bathroom with shower. Large storage ...",
	"price": "£800 pcm (£185 pw)",
	"link": "https://www.zoopla.co.uk/to-rent/details/45972752?search_identifier=cca03c7417fcf5ebf0b2af63779d4678",
	"source": "Zoopla"
}
```
