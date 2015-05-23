<?php

namespace AdamQuaile\CountryInfo;

use AdamQuaile\CountryInfo\Iso\Iso3166\Entry;

class Country
{

    /**
     * @var Entry
     */
    private $iso3166;

    public function __construct(Entry $iso3166)
    {
        $this->iso3166 = $iso3166;
    }

    /**
     * @return Entry
     */
    public function iso3166()
    {
        return $this->iso3166;
    }

    public function name()
    {
        return $this->iso3166->name();
    }

    public function officialName()
    {
        return $this->iso3166->officialName();
    }
}
