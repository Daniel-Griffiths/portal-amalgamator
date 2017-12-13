<?php 

namespace DanielGriffiths\PropertyAmalgamator\Portals;

class Rightmove extends AbstractPortal implements PortalInterface 
{
	public function search() : array 
	{
		return $this->request('GET', 'http://www.rightmove.co.uk/property-to-rent/find.html?searchType=RENT&locationIdentifier=REGION%5E219&insId=2&radius=0.0&minPrice=&maxPrice=&minBedrooms=&maxBedrooms=&displayPropertyType=&maxDaysSinceAdded=&sortByPriceDescending=&_includeLetAgreed=on&primaryDisplayPropertyType=&secondaryDisplayPropertyType=&oldDisplayPropertyType=&oldPrimaryDisplayPropertyType=&letType=&letFurnishType=&houseFlatShare=false')
		->filter('.propertyCard:not(.propertyCard--featured)')->each(function ($node) {
		    return [
				'image' => $node->filter('.propertyCard-img > img')->attr('src'),
				'title' => $node->filter('.propertyCard-title')->text(),
				'address' => $node->filter('.propertyCard-address')->text(),
				'description' => $node->filter('.propertyCard-description')->text(),
				'price' => $node->filter('.propertyCard-priceValue')->text(),
				'link' => $node->filter('.propertyCard-link')->attr('href')
			];
		});
	}

	public function details() : array
	{
		return [];
	}
}

