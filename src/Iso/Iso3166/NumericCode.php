<?php

namespace AdamQuaile\CountryInfo\Iso\Iso3166;

class NumericCode
{
    /**
     * @var string
     */
    private $code;

    public function __construct($code)
    {
        $requirement = 'ISO 3166 numeric codes must be 3 digit long strings, with trailing 0s if needed';
        if (!is_string($code)) {
            throw new \DomainException($requirement);
        }

        if (strlen($code) != 3) {
            throw new \DomainException($requirement);
        }

        foreach (str_split($code) as $char) {
            if (!in_array($char, ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'])) {
                throw new \DomainException($requirement);
            }
        }

        $this->code = $code;
    }

    public function __toString()
    {
        return $this->code;
    }
}
