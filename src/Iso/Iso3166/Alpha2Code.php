<?php

namespace AdamQuaile\CountryInfo\Iso\Iso3166;

class Alpha2Code
{
    /**
     * @var string
     */
    private $code;

    public function __construct($code)
    {
        $codeRequirement = 'ISO 3166 Alpha 2 codes must be 2 alphabetical characters';
        if (strlen($code) != 2) {
            throw new \DomainException($codeRequirement);
        }
        $code = strtoupper($code);
        $ordA = ord('A');
        $ordZ = ord('Z');

        foreach (str_split($code) as $char) {
            $ord = ord($char);
            if ($ord > $ordZ || $ord < $ordA) {
                throw new \DomainException($codeRequirement);
            }
        }

        $this->code = $code;
    }

    public function __toString()
    {
        return $this->code;
    }
}
