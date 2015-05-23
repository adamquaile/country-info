# Country Info (PHP)

This package provides country information based on the ISO-3166 standard and imported from the debian isocodes repository at git://git.debian.org/git/iso-codes/iso-codes.git . 

## Installation

## Usage

### Retrieving a country list

```php
$countries = AdamQuaile\CountryInfo\Countries::all(); // alias for AdamQuaile\CountryInfo\Iso\Iso3166::allEntries();
```

This will return an array of countries (of type `AdamQuaile\CountryInfo\Iso\Iso3166\Entry`)

### Retrieving a specific country

```php
$uk = AdamQuaile\CountryInfo\Country::fromIso3166Alpha2('GB');
```

# Design goals

 - Low memory footprint
 - One (small) repository to get info and update list periodically
 - No dependencies for packages which require it
 