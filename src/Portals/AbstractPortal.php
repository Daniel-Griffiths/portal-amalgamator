<?php 

namespace DanielGriffiths\PortalAmalgamator\Portals;

abstract class AbstractPortal extends \Goutte\Client
{
	/**
	 * Ensure all request work over SSL. 
	 */
	public function __construct()
	{
		Parent::__construct();
	}

	/**
	 * Create the query string based on the specified filters.
	 * 
	 * @param  array  $filters
	 * @return string
	 */
	protected function createQueryString(array $filters = []) : string 
	{
		foreach($filters as $key => $value) {
			unset($filters[$key]);
			$this->baseUri = str_replace('{'.$key.'}', $value, $this->baseUri);
			$filters[$this->filterAssociations[$key] ?? $key] = $value;
		}

		return $this->baseUri . '?' . http_build_query($filters);
	}
}