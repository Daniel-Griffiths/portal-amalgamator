<?php 

namespace DanielGriffiths\PortalAmalgamator\Portals;

interface PortalInterface 
{
	public function search(array $filters = []) : array; 
	public function details() : array;
}

