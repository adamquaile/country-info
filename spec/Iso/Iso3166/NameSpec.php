<?php

namespace spec\AdamQuaile\CountryInfo\Iso\Iso3166;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NameSpec extends ObjectBehavior
{
    function it_can_be_used_as_string()
    {
        $this->beConstructedWith('United Kingdom');
        $this->__toString()->shouldReturn('United Kingdom');
    }

    function it_only_accepts_non_empty_strings()
    {
        $this->shouldThrow()->during('__construct', ['']);
        $this->shouldThrow()->during('__construct', [34]);
        $this->shouldThrow()->during('__construct', [34.2]);
        $this->shouldThrow()->during('__construct', [[]]);
    }
}
