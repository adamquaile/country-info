<?php

namespace spec\AdamQuaile\CountryInfo\Exceptions;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CountryNotFoundExceptionSpec extends ObjectBehavior
{
    function it_is_a_runtime_exception()
    {
        $this->beAnInstanceOf('RuntimeException');
    }
    function it_has_nice_message()
    {
        $this->getMessage()->shouldReturn("The country could not be found");
    }
}
