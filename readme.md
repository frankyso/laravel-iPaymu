Laravel iPaymu
==============
This is [iPaymu-php](https://github.com/frankyso/iPaymu) for Laravel Framework

[![Build Status](https://travis-ci.org/frankyso/laravel-ipaymu.svg?branch=master)](https://travis-ci.org/frankyso/laravel-ipaymu)
[![Latest Stable Version](https://poser.pugx.org/frankyso/laravel-ipaymu/v/stable)](https://packagist.org/packages/frankyso/laravel-ipaymu)
[![Total Downloads](https://poser.pugx.org/frankyso/laravel-ipaymu/downloads)](https://packagist.org/packages/frankyso/laravel-ipaymu)
[![Latest Unstable Version](https://poser.pugx.org/frankyso/laravel-ipaymu/v/unstable)](https://packagist.org/packages/frankyso/laravel-ipaymu)
[![License](https://poser.pugx.org/frankyso/laravel-ipaymu/license)](https://packagist.org/packages/frankyso/laravel-ipaymu)

## Installation
The best way to use this package is using [composer](https://getcomposer.org/)
```
composer require frankyso/laravel-ipaymu
```

## Usage

### Initialization
```php
<?php
use iPaymu;

$iPaymu = new iPaymu('your-api-key', ['ureturn','unotify','ucancel']);
```

if you dont use package discovery add this Facade to into your app config aliases
```php
'iPaymu'=>\frankyso\iPaymu\Laravel\iPaymuFacade::class
```

and don't forget to publishing vendor 
```php
php artisan vendor:publish
```

### How to Use

#### With Facade
```php
use iPaymu;

iPaymu::cart()->add("id","product-name", 'product-quantity','product-price');
iPaymu::cart()->checkout("transaction-comment");
```

#### Without Facade
```php

function transaction(iPaymu $iPaymu){
    $iPaymu->cart()->add("id","product-name", 'product-quantity','product-price');
    $iPaymu->cart()->checkout("transaction-comment");
}
```

##### Note
Other function same with origin Library

## Authors

* **Franky So** - *Initial work* - [Konnco](https://github.com/konnco)

See also the list of [contributors](https://github.com/frankyso/iPaymu-laravel/contributors) who participated in this project.
