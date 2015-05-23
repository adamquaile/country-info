<?php

namespace spec\AdamQuaile\CountryInfo;

use AdamQuaile\CountryInfo\Iso\Iso3166\Alpha2Code;
use AdamQuaile\CountryInfo\Iso\Iso3166\Alpha3Code;
use AdamQuaile\CountryInfo\Iso\Iso3166\Entry;
use AdamQuaile\CountryInfo\Iso\Iso3166\Name;
use AdamQuaile\CountryInfo\Iso\Iso3166\NumericCode;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CountrySpec extends ObjectBehavior
{
    private function uk()
    {
        return new Entry(
            new Alpha2Code('GB'),
            new Alpha3Code('GBR'),
            new NumericCode('826'),
            null,
            new Name('United Kingdom'),
            new Name('United Kingdom of Great Britain and Northern Ireland')
        );
    }

    private function moldova()
    {
        return new Entry(
            new Alpha2Code('MD'),
            new Alpha3Code('MDA'),
            new NumericCode('498'),
            new Name('Moldova'),
            new Name('Moldova, Republic of'),
            new Name('Republic of Moldova')
        );
    }

    function it_takes_country_info_from_iso_3166()
    {
        $this->beConstructedWith($this->uk());

        $this->name()->shouldBeLike(new Name('United Kingdom'));
    }

    function it_provides_iso_info()
    {
        $iso3166 = $this->uk();
        $this->beConstructedWith($iso3166);
        $this->iso3166()->shouldReturn($iso3166);
    }

    function it_returns_common_name_before_name()
    {
        $this->beConstructedWith($this->moldova());
        $this->name()->shouldBeLike(new Name('Moldova'));
    }
}
