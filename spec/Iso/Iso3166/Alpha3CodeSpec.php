<?php

namespace spec\AdamQuaile\CountryInfo\Iso\Iso3166;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Alpha3CodeSpec extends ObjectBehavior
{
    function it_can_be_used_as_string()
    {
        $this->beConstructedWith('GBR');
        $this->__toString()->shouldReturn('GBR');
    }

    function it_only_allows_3_letters()
    {
        $this->shouldThrow()->during('__construct', ['GR']);
        $this->shouldThrow()->during('__construct', ['12']);
        $this->shouldThrow()->during('__construct', ['A12']);
        $this->shouldThrow()->during('__construct', ['A.']);
        $this->shouldThrow()->during('__construct', ['GBRE']);
    }
}
