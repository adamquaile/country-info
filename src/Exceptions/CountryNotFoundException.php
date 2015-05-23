<?php

namespace AdamQuaile\CountryInfo\Exceptions;

class CountryNotFoundException extends \RuntimeException
{
    public function __construct()
    {
        return parent::__construct('The country could not be found');
    }
}
