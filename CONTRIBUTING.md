# Contributing

I don't claim to be an expert in the relevant standards, so any feedback or contributions really are appreciated.

## Running the tests

There are tests written in both phpunit (installed globally) and phpspec (installed as a composer dependency)

 - `phpunit --bootstrap=vendor/autoload.php tests/`
 - `bin/phpspec run --format=pretty`

## Coding standards

Please keep the following things in mind when contributing:

 - Project uses [PSR-2 Coding Standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)
 - Check scrutinizer and travis results on your PR
 - We use [SemVer v2.0.0](http://semver.org/)