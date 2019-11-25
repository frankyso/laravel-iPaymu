# Laravel iPaymu
This is [iPaymu-php](https://github.com/frankyso/iPaymu) for Laravel Framework

## Installation
The best way to use this package is using [composer](https://getcomposer.org/)
```
composer require frankyso/ipaymu
```

## Usage

### Initialization
```php
<?php
use frankyso\iPaymu\iPaymu;

$iPaymu = new iPaymu('your-api-key', ['ureturn','unotify','ucancel']);
```
### Set UReturn URL
```php
<?php
use frankyso\iPaymu\iPaymu;

$iPaymu = new iPaymu('your-api-key');
$iPaymu->setUreturn('https://your-website');
```

### Set Unotify URL
```php
<?php
use frankyso\iPaymu\iPaymu;

$iPaymu = new iPaymu('your-api-key');
$iPaymu->setUnotify('https://your-website');
```

### Set UCancel URL
```php
<?php
use frankyso\iPaymu\iPaymu;

$iPaymu = new iPaymu('your-api-key');
$iPaymu->setUcancel('https://your-website');
```

### Check Balance
```php
<?php
use frankyso\iPaymu\iPaymu;

$iPaymu = new iPaymu('your-api-key');
$iPaymu->checkBalance();
```

### Check API Key Validity
```php
<?php
use frankyso\iPaymu\iPaymu;

$iPaymu = new iPaymu('your-api-key');
$iPaymu->isApiKeyValid();
```

### Add Product to Cart
```php
<?php
use frankyso\iPaymu\iPaymu;

$iPaymu = new iPaymu('your-api-key');
$cart = $iPaymu->cart()->add("id","product-name", 'product-quantity','product-price');
```

### Remove Product From Cart
```php
<?php
use frankyso\iPaymu\iPaymu;

$iPaymu = new iPaymu('your-api-key');
$cart = $iPaymu->cart();
$cart->remove('product-id');
```

### Checkout Transaction
in this package we use cart type transaction so you must checkout after adding your product 
```php
<?php
use frankyso\iPaymu\iPaymu;

$iPaymu = new iPaymu('your-api-key');
$cart = $iPaymu->cart()->add("id","product-name", 'product-quantity','product-price');


$cart->checkout();
```

### ~~Check Transaction Status - @deprecated~~
To checking your account transaction status (deposit, transfer, send money).

to be honest, this endpoint still working, but somehow i cannot find `transaction-id` from any other endpoint.

```php
<?php
use frankyso\iPaymu\iPaymu;

$iPaymu = new iPaymu('your-api-key');
$iPaymu->checkTransaction("transaction-id");
```

## Authors

* **Franky So** - *Initial work* - [Konnco](https://github.com/konnco)

See also the list of [contributors](https://github.com/frankyso/iPaymu/contributors) who participated in this project.