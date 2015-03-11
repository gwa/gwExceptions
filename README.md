gwExceptions
============

PHP exception classes

## Master

[![Quality Score](https://img.shields.io/scrutinizer/g/gwa/gwExceptions.svg?style=flat-square)](https://scrutinizer-ci.com/g/gwa/gwExceptions/code-structure/master)  [![Build Status](https://api.travis-ci.org/gwa/gwExceptions.svg?branch=master)](https://travis-ci.org/gwa/gwExceptions)

## Composer

Run `composer install` to install dependencies and create autoload files.

## Contributing

All code contributions - including those of people having commit access -
must go through a pull request and approved by a core developer before being
merged. This is to ensure proper review of all the code.

Fork the project, create a feature branch, and send us a pull request.

To ensure a consistent code base, you should make sure the code follows
the [Coding Standards](http://www.php-fig.org/psr/psr-2/)
which we borrowed from PSR-2.

The easiest way to do make sure you're following the coding standard is to run `vendor/bin/php-cs-fixer fix` before committing.

## PHPUnit

Run tests using

~~~~~~~~
phpunit -c tests/phpunit.xml tests
~~~~~~~~