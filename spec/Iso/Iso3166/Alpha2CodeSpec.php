<?php

namespace spec\AdamQuaile\CountryInfo\Iso\Iso3166;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Alpha2CodeSpec extends ObjectBehavior
{
    function it_can_be_used_as_string()
    {
        $this->beConstructedWith('GB');
        $this->__toString()->shouldReturn('GB');
    }

    function it_only_allows_2_letters()
    {
        $this->shouldThrow()->during('__construct', ['GBR']);
        $this->shouldThrow()->during('__construct', ['12']);
        $this->shouldThrow()->during('__construct', ['A1']);
        $this->shouldThrow()->during('__construct', ['A.']);
    }
}
