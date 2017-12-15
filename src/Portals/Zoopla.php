<?php 

namespace DanielGriffiths\PortalAmalgamator\Portals;

class Zoopla extends AbstractPortal implements PortalInterface 
{
	/**
	 * The base search uri for the portal.
	 * 
	 * @var string
	 */
	protected $baseUri = 'https://www.zoopla.co.uk/to-{{type}}/property/{{location}}/';

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
		->filter('.listing-results-wrapper')->each(function ($node) {
		   return [
				'image' => $node->filter('.photo-hover > img')->attr('src'),
				'title' => $node->filter('a[itemprop="name"]')->text(),
				'address' => $node->filter('.listing-results-address')->text(),
				'description' => $node->filter('p[itemprop="description"]')->text(),
				'price' => $node->filter('.listing-results-price')->text(),
				'link' => 'https://www.zoopla.co.uk' . $node->filter('a')->attr('href'),
				'source' => basename(__CLASS__),
			];
		});
	}

	public function details() : array
	{
		return [];
	}
}