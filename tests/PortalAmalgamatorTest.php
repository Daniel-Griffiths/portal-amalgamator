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
    public $searchQuery = [
        'type' => 'rent',
        'location' => 'bristol',
        'maxprice' => 800,
        'minprice' => 1,
        'maxbedrooms' => 2,
        'minbedrooms' => 1,
    ];

    public function testRightmove()
    {
        $portals = new PortalAmalgamator(
            new Rightmove
        );

        $properties = $portals->search($this->searchQuery)->orderBy('price')->get();      

        $this->assertArrayHasKey('image', $properties[0]);
        $this->assertArrayHasKey('title', $properties[0]);
        $this->assertArrayHasKey('address', $properties[0]);
        $this->assertArrayHasKey('description', $properties[0]);
        $this->assertArrayHasKey('price', $properties[0]);  
        $this->assertArrayHasKey('link', $properties[0]);
        $this->assertArrayHasKey('source', $properties[0]);    
    }

    public function testZoopla()
    {
        $portals = new PortalAmalgamator(
            new Zoopla
        );

        $properties = $portals->search($this->searchQuery)->orderBy('price')->get();      

        $this->assertArrayHasKey('image', $properties[0]);
        $this->assertArrayHasKey('title', $properties[0]);
        $this->assertArrayHasKey('address', $properties[0]);
        $this->assertArrayHasKey('description', $properties[0]);
        $this->assertArrayHasKey('price', $properties[0]);  
        $this->assertArrayHasKey('link', $properties[0]);
        $this->assertArrayHasKey('source', $properties[0]);  
    } 

    public function testOnTheMarket()
    {
        $portals = new PortalAmalgamator(
            new OnTheMarket
        );

        $properties = $portals->search($this->searchQuery)->orderBy('price')->get();      

        $this->assertArrayHasKey('image', $properties[0]);
        $this->assertArrayHasKey('title', $properties[0]);
        $this->assertArrayHasKey('address', $properties[0]);
        $this->assertArrayHasKey('description', $properties[0]);
        $this->assertArrayHasKey('price', $properties[0]);  
        $this->assertArrayHasKey('link', $properties[0]);
        $this->assertArrayHasKey('source', $properties[0]);  
    } 
}