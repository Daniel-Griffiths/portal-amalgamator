<?php 

namespace DanielGriffiths\PortalAmalgamator\Portals;

class Zoopla extends AbstractPortal implements PortalInterface 
{
	/**
	 * Search for properties based on the specified filters.
	 *
	 * @param  array $filters
	 * @return array
	 */	
	public function search(array $filters = []) : array 
	{
		return [];
	}

	public function details() : array
	{
		return [];
	}
}