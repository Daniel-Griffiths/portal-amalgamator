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

        [$property] = $portals->search($this->searchQuery)->orderBy('price')->get();      

        $this->assertArrayHasKey('image', $property);
        $this->assertArrayHasKey('title', $property);
        $this->assertArrayHasKey('address', $property);
        $this->assertArrayHasKey('description', $property);
        $this->assertArrayHasKey('price', $property);  
        $this->assertArrayHasKey('link', $property);
        $this->assertArrayHasKey('source', $property);    
    }

   

    public function testOnTheMarket()
    {
        $portals = new PortalAmalgamator(
            new OnTheMarket
        );

        [$property] = $portals->search($this->searchQuery)->orderBy('price')->get();      

        $this->assertArrayHasKey('image', $property);
        $this->assertArrayHasKey('title', $property);
        $this->assertArrayHasKey('address', $property);
        $this->assertArrayHasKey('description', $property);
        $this->assertArrayHasKey('price', $property);  
        $this->assertArrayHasKey('link', $property);
        $this->assertArrayHasKey('source', $property);  
    } 
}