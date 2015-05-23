<?php

namespace AdamQuaile\CountryInfo\Iso;

use AdamQuaile\CountryInfo\Iso\Iso3166\Alpha2Code;
use AdamQuaile\CountryInfo\Iso\Iso3166\Alpha3Code;
use AdamQuaile\CountryInfo\Iso\Iso3166\Data;
use AdamQuaile\CountryInfo\Iso\Iso3166\Entry;
use AdamQuaile\CountryInfo\Iso\Iso3166\EntryIterator;

final class Iso3166
{
    public function all()
    {
        return new EntryIterator(Data::alpha2Codes());
    }

    public static function fromAlpha2($alpha2Code)
    {
        return new Entry(
            new Alpha2Code($alpha2Code),
            new Alpha3Code(Data::$infoByAlpha2Code[$alpha2Code][0]),
            Data::$infoByAlpha2Code[$alpha2Code][1],
            Data::$infoByAlpha2Code[$alpha2Code][2],
            Data::$infoByAlpha2Code[$alpha2Code][3],
            null
        );
    }
}
