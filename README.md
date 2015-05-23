# Country Info (PHP)

This package provides country information based on the ISO-3166 standard and imported from the debian isocodes repository at git://git.debian.org/git/iso-codes/iso-codes.git . 

## Installation

## Usage

### Retrieving a country list

```php
$countries = AdamQuaile\CountryInfo\Countries::all(); // alias for AdamQuaile\CountryInfo\Iso\Iso3166\Iso3166::allEntries();
```

This will return an array of countries (of type `AdamQuaile\CountryInfo\Iso\Iso3166\Iso3166Entry`)

### Retrieving a specific country

```php
$uk = AdamQuaile\CountryInfo\Iso\Iso3166\Iso3166::fromAlpha2('GB');
$uk = AdamQuaile\CountryInfo\Iso\Iso3166\Iso3166::fromAlpha2('GBR');
$uk = AdamQuaile\CountryInfo\Iso\Iso3166\Iso3166::fromNumericCode('826');
$uk = AdamQuaile\CountryInfo\Iso\Iso3166\Iso3166::fromName('United Kingdom');
```

# Design goals

 - Low memory footprint
 - One (small) repository to get info and update list periodically
 - No dependencies for packages which require it
 