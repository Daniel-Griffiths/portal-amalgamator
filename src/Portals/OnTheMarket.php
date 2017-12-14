<?php 

namespace DanielGriffiths\PortalAmalgamator\Portals;

class OnTheMarket extends AbstractPortal implements PortalInterface 
{
	/**
	 * The base search uri for the portal.
	 * 
	 * @var string
	 */
	protected $baseUri = 'https://www.onthemarket.com/{{type}}/property/bristol/';

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
		// OnTheMarket uses "to" and "for" prefixes depending
		// on the property type. This is a quick fix to make
		// types compatible with OntheMarket.
		if($filters['type'] == 'rent') {
			$filters['type'] = 'to-' . $filters['type'];
		} else {
			$filters['type'] = 'for-' . $filters['type'];
		}

		return $this->request('GET', $this->createQueryString($filters))
		->filter('.property-result')->each(function ($node) {
		    return [
				'image' => $node->filter('.image-wrapper > img')->attr('src'),
				'title' => $node->filter('.title')->text(),
				'address' => $node->filter('.address')->text(),
				'description' => $node->filter('.description')->text(),
				'price' => $node->filter('.price')->text(),
				'link' => $node->filter('.price')->attr('href')
			];
		});
	}

	public function details() : array
	{
		return [];
	}
}