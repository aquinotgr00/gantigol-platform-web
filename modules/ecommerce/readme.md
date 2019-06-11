Gantigol - Ecommerce Module
=======================

### Getting Started

Register the Ecommerce service provider in the config/app.php, add it to the array:

```
'providers' => [
    // Other Service Providers

    Modules\Ecommerce\Providers\EcommerceServiceProvider::class,
],

```
Run this command to update the classes it needs.

```
composer dump-autoload

```
