<?php

use AdamQuaile\CountryInfo\Countries;
use AdamQuaile\CountryInfo\Iso\Iso3166\Iso3166;

require_once __DIR__ . '/vendor/autoload.php';

$countries = Countries::all();

foreach ($countries as $country) {
    echo "{$country->iso3166()->alpha2Code()}: {$country->name()} \n";
}