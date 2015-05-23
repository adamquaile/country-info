<?php

namespace AdamQuaile\CountryInfo;

use AdamQuaile\CountryInfo\Iso\Iso3166\Alpha2Code;
use AdamQuaile\CountryInfo\Iso\Iso3166\Alpha3Code;
use AdamQuaile\CountryInfo\Iso\Iso3166\Data;
use AdamQuaile\CountryInfo\Iso\Iso3166\Entry;
use AdamQuaile\CountryInfo\Iso\Iso3166\Name;
use AdamQuaile\CountryInfo\Iso\Iso3166\NumericCode;

class Countries
{
    public static function all()
    {
        return new \ArrayIterator(
            array_map(
                function($countryInfo) {
                    return new Country(
                        new Entry(
                            new Alpha2Code($countryInfo[0]),
                            new Alpha3Code($countryInfo[1]),
                            new NumericCode($countryInfo[2]),
                            $countryInfo[3] ? new Name($countryInfo[3]) : null,
                            new Name($countryInfo[4]),
                            $countryInfo[5] ? new Name($countryInfo[5]) : null
                        )
                    );
                },
                Data::$infoByAlpha2Code
            )
        );
    }
}