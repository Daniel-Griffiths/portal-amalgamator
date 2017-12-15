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
	 * @var array
	 */
	protected $properties = [];

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
	 * @return PortalAmalgamator
	 */
	public function search(array $filters = []) : PortalAmalgamator
	{
		$this->properties = array_merge(
			...array_map(function($portal) use ($filters){
				return $this->format(
					$portal->search($filters)
				);
			}, $this->portals)
		);

		return $this;
	}

	/**
	 * Order the property results.
	 * 
	 * @param  string $name 
	 * @return PortalAmalgamator
	 */
	public function orderBy($name) : PortalAmalgamator
	{
		usort($this->properties, function($a, $b) use ($name) {
		    return $a[$name] < $b[$name] ? 1 : -1;
		});

		return $this;
	}

	/**
	 * Return an array of properties.
	 *
	 * @return array
	 */
	public function get() : array
	{
		return $this->properties;
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
