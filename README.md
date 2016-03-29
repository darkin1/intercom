Intercom
===============

Wrapper on the Intercom class provided by Intercom  - with support for Laravel 5.x

Installation
------------

Installation using composer:

```
composer require darkin1/intercom
```


And add the service provider in `config/app.php`:

```php
App\Custom\Intercom\IntercomServiceProvider::class,
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
