<?php

use AdamQuaile\CountryInfo\Iso\Iso3166\Iso3166;

require_once __DIR__ . '/vendor/autoload.php';

$uk = Iso3166::fromAlpha2('GB');

$countries = Countries::all();

print_r($uk);