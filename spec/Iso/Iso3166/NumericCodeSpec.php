<?php

namespace spec\AdamQuaile\CountryInfo\Iso\Iso3166;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumericCodeSpec extends ObjectBehavior
{
    function it_can_be_used_as_string()
    {
        $this->beConstructedWith('826');
        $this->__toString()->shouldReturn('826');
    }

    function it_only_accepts_3_digit_numeric_strings()
    {
        $this->shouldThrow()->during('__construct', [826]);
        $this->shouldThrow()->during('__construct', ['82']);
        $this->shouldThrow()->during('__construct', ['8265']);
        $this->shouldThrow()->during('__construct', ['8.5']);
    }
}
