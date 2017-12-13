<?php 

namespace DanielGriffiths\PropertyAmalgamator\Portals;

interface PortalInterface 
{
	public function search(array $filters = []) : array; 
	public function details() : array;
}

