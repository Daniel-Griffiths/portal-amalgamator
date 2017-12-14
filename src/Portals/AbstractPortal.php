<?php 

namespace DanielGriffiths\PortalAmalgamator\Portals;

abstract class AbstractPortal extends \Goutte\Client
{
	/**
	 * Create the query string based on the specified filters.
	 * 
	 * @param  array  $filters
	 * @return string
	 */
	protected function createQueryString(array $filters = []) : string 
	{
		foreach ($filters as $key => $value) {
			unset($filters[$key]);
			$filters[$this->filterAssociations[$key] ?? $key] = $value;
		}

		return $this->baseUri . http_build_query($filters);
	}
}