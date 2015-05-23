# Country Info (PHP)

This WIP package provides simply accessible country information such as country codes, names and international dialing codes.

As it is in development, if you spot any issues such as incorrect data or bugs please give feedback or contribute. Also, suggestions are very welcome.

## Planned features

 - Incorporate international dialling codes, possibly from [ITU (E.164)](http://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-11-2011-PDF-E.pdf) or other good source
 - Support for the unicode codes to display the flags (system/font dependent)

## Installation

    composer require adamquaile/country-info

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
 

## Where does this information come from? 
Country names and codes come from the ISO-3166 standard and are imported from the debian isocodes repository at git://git.debian.org/git/iso-codes/iso-codes.git .
