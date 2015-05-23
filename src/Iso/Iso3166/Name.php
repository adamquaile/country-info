<?php

namespace AdamQuaile\CountryInfo\Iso\Iso3166;

class Name
{
    /**
     * @var string
     */
    private $name;

    public function __construct($name)
    {
        if (!is_string($name) || strlen($name) == 0) {
            throw new \DomainException(
                "Names must be non-empty strings. If name is not known, use null instead of object"
            );
        }
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name;
    }
}
