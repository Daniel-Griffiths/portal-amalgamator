<?php 

namespace DanielGriffiths\PortalAmalgamator\Portals;

class Rightmove extends AbstractPortal implements PortalInterface 
{
	/**
	 * The base search uri for the portal.
	 * 
	 * @var string
	 */
	protected $baseUri = 'http://www.rightmove.co.uk/property-to-rent/find.html';

	/**
	 * Associate the portals query string parameters with our custom filters.
	 * 
	 * @var Array
	 */
	protected $filterAssociations = [
		'location' => 'locationIdentifier'
	];

	/**
	 * Search for properties based on the specified filters.
	 *
	 * @param  array $filters
	 * @return array
	 */	
	public function search(array $filters = []) : array 
	{
		return $this->request('GET', $this->createQueryString($filters))
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

