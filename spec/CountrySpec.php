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

    function it_takes_country_info_from_iso_3166()
    {
        $iso3166 = $this->uk();
        $this->beConstructedWith($iso3166);

        $this->name()->shouldBeLike(new Name('United Kingdom'));
        $this->officialName()->shouldBeLike(new Name('United Kingdom of Great Britain and Northern Ireland'));
    }

    function it_provides_iso_info()
    {
        $iso3166 = $this->uk();
        $this->beConstructedWith($iso3166);
        $this->iso3166()->shouldReturn($iso3166);
    }
}
