<?php 

namespace DanielGriffiths\PortalAmalgamator\Portals;

class Zoopla extends AbstractPortal implements PortalInterface 
{
	public function search(array $filters = []) : array 
	{
		return [];
	}

	public function details() : array
	{
		return [];
	}
}