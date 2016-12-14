Intercom
===============

[![Latest Stable Version](http://img.shields.io/github/release/darkin1/intercom.svg)](https://packagist.org/packages/darkin1/intercom) [![Donate](https://img.shields.io/badge/donate-paypal-blue.svg)](https://www.paypal.me/dciesielski)
[![StyleCI](https://styleci.io/repos/54785593/shield?branch=master)](https://styleci.io/repos/54785593)
[![Build Status](https://travis-ci.org/darkin1/intercom.svg?branch=master)](https://travis-ci.org/darkin1/intercom)

Wrapper on the Intercom class provided by Intercom  - with support for Laravel 5.x

Installation
------------

Installation using composer:

```
composer require darkin1/intercom
```


And add the service provider in `config/app.php`:

```php
Darkin1\Intercom\IntercomServiceProvider::class,
```

And add the facade alias in `config/app.php`:

```php
'Intercom'  => Darkin1\Intercom\Facades\Intercom::class,
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


Example
-------------

```php

use Intercom;

$users = Intercom::users()->getUsers([]);

$leads = Intercom::leads()->getLeads([]);

```


Documentation
-------------

[Intercom API](https://github.com/intercom/intercom-php)

