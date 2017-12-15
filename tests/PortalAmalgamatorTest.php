<?php

use PHPUnit\Framework\TestCase;
use DanielGriffiths\PortalAmalgamator\{
    PortalAmalgamator,
    Portals\OnTheMarket,
    Portals\Rightmove,
    Portals\Zoopla
};

class PortalAmalgamatorTest extends TestCase
{   
    public function testDataHasCorrectKeys()
    {
        $portals = new PortalAmalgamator(
            new OnTheMarket,
            new Rightmove,
            new Zoopla
        );

        $properties = $portals->search([
            'type' => 'rent',
            'location' => 'bristol',
            'maxprice' => 800,
            'minprice' => 1,
            'maxbedrooms' => 2,
            'minbedrooms' => 1,
        ])->orderBy('price')->get();      

        $this->assertArrayHasKey('image', $properties[0]);
        $this->assertArrayHasKey('title', $properties[0]);
        $this->assertArrayHasKey('address', $properties[0]);
        $this->assertArrayHasKey('description', $properties[0]);
        $this->assertArrayHasKey('price', $properties[0]);  
        $this->assertArrayHasKey('link', $properties[0]);
        $this->assertArrayHasKey('source', $properties[0]);      
    } 
}