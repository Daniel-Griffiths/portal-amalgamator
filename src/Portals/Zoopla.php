<?php 

namespace DanielGriffiths\PortalAmalgamator\Portals;

class Zoopla extends AbstractPortal implements PortalInterface 
{
	/**
	 * The base search uri for the portal.
	 * 
	 * @var string
	 */
	protected $baseUri = 'https://www.zoopla.co.uk/to-rent/property/bristol/';

	/**
	 * Associate the portals query string parameters with our custom filters.
	 * 
	 * @var Array
	 */
	protected $filterAssociations = [

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
		->filter('.listing-results-wrapper')->each(function ($node) {
		    return [
				'image' => $node->filter('.photo-hover > img')->attr('src'),
				// 'title' => $node->filter('.propertyCard-title')->text(),
				'address' => $node->filter('.listing-results-address')->text(),
				// 'description' => $node->filter('.propertyCard-description')->text(),
				// 'price' => $node->filter('.propertyCard-priceValue')->text(),
				// 'link' => $node->filter('.propertyCard-link')->attr('href')
			];
		});
	}

	public function details() : array
	{
		return [];
	}
}