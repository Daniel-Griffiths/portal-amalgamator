<?php 

namespace DanielGriffiths\PropertyAmalgamator\Portals;

interface PortalInterface 
{
	public function search() : array; 
	public function details() : array;
}

