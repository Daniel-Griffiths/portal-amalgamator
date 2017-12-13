<?php 

namespace DanielGriffiths\PortalAmalgamator\Portals;

class Rightmove extends AbstractPortal implements PortalInterface 
{
	/**
	 * Search for properties based on the specified filters.
	 *
	 * @param  array $filters
	 * @return array
	 */	
	public function search(array $filters = []) : array 
	{
		return $this->request('GET', 'http://www.rightmove.co.uk/property-to-rent/find.html?searchType=RENT&locationIdentifier=REGION^219')
		->filter('.is-list:not(.is-hidden) .propertyCard:not(.propertyCard--featured)')->each(function ($node) {
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

