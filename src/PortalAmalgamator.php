<?php

namespace DanielGriffiths\PortalAmalgamator;

use DanielGriffiths\PortalAmalgamator\Portals\PortalInterface;

/**
 * @package PortalAmalgamator
 * @author Daniel Griffiths (daniel-griffiths)
 */
class PortalAmalgamator 
{
	/**
	 * @var PortalInterface
	 */
	protected $portals;

	/**
	 * Create a new PortalAmalgamator instance.
	 * 
	 * @param PortalInterface $portals
	 */
	public function __construct(PortalInterface ...$portals)
	{
		$this->portals = $portals;
	}

	/**
	 * Search for properties based on the specified filters.
	 *
	 * @param  array $filters
	 * @return array
	 */
	public function search(array $filters = []) : array
	{
		return array_merge(
			...array_map(function($portal) use ($filters){
				return $this->format(
					$portal->search($filters)
				);
			}, $this->portals)
		);
	}

	/**
	 * Correctly format the scraped property data.
	 * 
	 * @param  array $data 
	 * @return array
	 */
	protected function format(array $data) : array
	{
		return array_map(function($properties){
			return array_map(function($property){
				return trim($property);
			}, $properties);
		}, $data);
	}
}
