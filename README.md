Intercom
===============

[![Latest Stable Version](http://img.shields.io/github/release/darkin1/intercom.svg)](https://packagist.org/packages/darkin1/intercom) 

[![Donate](https://img.shields.io/badge/donate-paypal-blue.svg)](https://www.paypal.me/dciesielski)


Wrapper on the Intercom class provided by Intercom  - with support for Laravel 5.x

Installation
------------

Installation using composer:

```
composer require darkin1/intercom
```


And add the service provider in `config/app.php`:

```php
Darkin1\Intercom\IntercomServiceProvider::class,,
```

Configuration
-------------

Change your default settings in `app/config/intercom.php`:

```php
<?php
return [
    'app_id' => env('INTERCOM_APP_ID', '****'),
    'api_key' => env('INTERCOM_API_KEY', '********'),
];
```


Documentation
-------------

[Intercom API](https://github.com/intercom/intercom-php)

