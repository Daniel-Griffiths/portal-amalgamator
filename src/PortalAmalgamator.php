<?php

namespace DanielGriffiths\PortalAmalgamator;

use DanielGriffiths\PortalAmalgamator\Portals\PortalInterface;

/**
 * @package PortalAmalgamator
 * @author Daniel Griffiths (daniel-griffiths)
 */
class PortalAmalgamator 
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
