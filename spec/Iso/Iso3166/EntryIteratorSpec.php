<?php

namespace spec\AdamQuaile\CountryInfo\Iso\Iso3166;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EntryIteratorSpec extends ObjectBehavior
{
    function it_provides_value_objects_while_looping()
    {
        $this->beConstructedWith(['AR', 'GB', 'FR']);

//        $this->rewind()->shouldReturn();
//        $this->current()->shouldReturn()
    }
}
