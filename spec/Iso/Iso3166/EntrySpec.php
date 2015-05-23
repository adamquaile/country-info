<?php

namespace spec\AdamQuaile\CountryInfo\Iso\Iso3166;

use AdamQuaile\CountryInfo\Iso\Iso3166\Alpha2Code;
use AdamQuaile\CountryInfo\Iso\Iso3166\Alpha3Code;
use AdamQuaile\CountryInfo\Iso\Iso3166\Name;
use AdamQuaile\CountryInfo\Iso\Iso3166\NumericCode;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EntrySpec extends ObjectBehavior
{
    function it_holds_basic_iso_3166_info()
    {
        $alpha2         = new Alpha2Code('MD');
        $alpha3         = new Alpha3Code('MDA');
        $numericCode    = new NumericCode('498');
        $commonName     = new Name('Moldova');
        $name           = new Name('Moldova, Republic of');
        $officialName   = new Name('Republic of Moldova');

        $this->beConstructedWith($alpha2, $alpha3, $numericCode, $commonName, $name, $officialName);

        $this->alpha2Code()->shouldReturn($alpha2);
        $this->alpha3Code()->shouldReturn($alpha3);
        $this->numericCode()->shouldReturn($numericCode);
        $this->name()->shouldReturn($name);
        $this->commonName()->shouldReturn($commonName);
        $this->officialName()->shouldReturn($officialName);
    }

    function it_accepts_entries_without_common_name()
    {
        $this->beConstructedWith(new Alpha2Code('GB'), new Alpha3Code('GBR'), new NumericCode('826'), null, new Name('United Kingdom'), new Name('United Kingdom of Great Britain and Northern Ireland'));
        $this->commonName()->shouldReturn(null);
    }
    function it_accepts_entries_without_official_name()
    {
        $this->beConstructedWith(new Alpha2Code('BV'), new Alpha3Code('BVT'), new NumericCode('074'), null, new Name('Bouvet Island'));
        $this->officialName()->shouldReturn(null);
    }
}
