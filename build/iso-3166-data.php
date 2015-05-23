<?php

$sourceInfoFile = __DIR__ . '/../vendor/debian/isocodes/iso_3166/iso_3166.xml';
$dataTemplateFile = __DIR__ . '/iso-3166-data-template';

$iso3166 = simplexml_load_file($sourceInfoFile);

$infoByAlpha2Code = [];
foreach ($iso3166->xpath('//iso_3166_entry') as $entry) {
    $attributes = (array)$entry->attributes();
    $attributes = $attributes['@attributes'];

    $infoByAlpha2Code[$attributes['alpha_2_code']] = [
        $attributes['alpha_2_code'],
        $attributes['alpha_3_code'],
        $attributes['numeric_code'],
        (array_key_exists('common_name', $attributes) && !empty($attributes['common_name']))
            ? $attributes['common_name']
            : null,
        $attributes['name'],
        (array_key_exists('official_name', $attributes) && !empty($attributes['official_name']))
            ? $attributes['official_name']
            : null
    ];
}

echo str_replace(
    [
        '%%comments%%',
        '%%infoByAlpha2Code%%'
    ],
    [
        '/* This file is generated. Edits made here will be lost. See README.md for details */',
        var_export($infoByAlpha2Code, true)
    ],
    file_get_contents($dataTemplateFile)
);
