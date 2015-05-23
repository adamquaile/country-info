<?php

namespace AdamQuaile\CountryInfo\Iso\Iso3166;

class Alpha3Code
{
    /**
     * @var string
     */
    private $code;

    public function __construct($code)
    {
        $codeRequirement = 'ISO 3166 Alpha 3 codes must be 3 alphabetical characters';
        if (strlen($code) != 3) {
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
