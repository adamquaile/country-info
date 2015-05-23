<?php

class CountriesTest extends PHPUnit_Framework_TestCase
{
    public function testCountriesAreReturned()
    {
        \AdamQuaile\CountryInfo\Countries::all();
    }
    public function testThereAre249Countries()
    {
        $this->assertEquals(249, count(\AdamQuaile\CountryInfo\Countries::all()));
    }
    public function testCountryCanBeLookedUpFromAlpha2Code()
    {
        $uk = AdamQuaile\CountryInfo\Countries::fromIso3166Alpha2('GB');
        $this->assertEquals('United Kingdom', (string) $uk->name());
    }

    /**
     * @expectedException AdamQuaile\CountryInfo\Exceptions\CountryNotFoundException
     */
    function testExceptionIsThrownWhenCountryNotFound()
    {
        \AdamQuaile\CountryInfo\Countries::fromIso3166Alpha2('XX');
    }

}