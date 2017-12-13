<?php

namespace DanielGriffiths\PropertyAmalgamator;

use DanielGriffiths\PropertyAmalgamator\Portals\PortalInterface;

/**
 * @package PropertyAmalgamator
 * @author Daniel Griffiths (daniel-griffiths)
 */
class PropertyAmalgamator 
{
	protected $portals;

	public function __construct(PortalInterface ...$portals)
	{
		$this->portals = $portals;
	}


	public function search()
	{
		return array_map(function($portal){
			return $portal->search();
		}, $this->portals);
	}

	public function details()
	{
		//
	}
}
