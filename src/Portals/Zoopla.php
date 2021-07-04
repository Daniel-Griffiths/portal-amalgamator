<?php 

namespace DanielGriffiths\PortalAmalgamator\Portals;

class Zoopla extends AbstractPortal implements PortalInterface 
{
	/**
	 * The base search uri for the portal.
	 * 
	 * @var string
	 */
	protected $baseUri = 'https://www.zoopla.co.uk/to-{type}/property/{location}/';

	/**
	 * Associate the portals query string parameters with our custom filters.
	 * 
	 * @var Array
	 */
	protected $filterAssociations = [
		'maxprice' => 'price_max',
		'minprice' => 'price_min',
		'maxbedrooms' => 'beds_max',
		'minbedrooms' => 'beds_min',
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
		->filter('[data-testid="extended-search-result"] > div:nth-child(2) > div > div:not(:first-child)')->each(function ($node) {
		   return [
				'image' => $node->filter('[data-testid="listing-details-image-link"] > img')->attr('src'),
				'title' => $node->filter('[data-testid="listing-details-link"] > h2')->text(),
				'address' => $node->filter('[data-testid="listing-details-link"] > p')->text(),
				'description' => "",
				'price' => $node->filter('p[size=6]')->text(),
				'link' => 'https://www.zoopla.co.uk' . $node->filter('a')->attr('href'),
				'source' => basename(__CLASS__),
			];
		});
	}
}