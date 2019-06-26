Gantigol - Product Module
=======================

### Getting Started
Register the Product service provider in the config/app.php, add it to the array:

```
'providers' => [
    // Other Service Providers

    Modules\Product\Providers\ProductServiceProvider::class,
],

```
Run this command to update the classes it needs.

```
composer dump-autoload

```
### Publish public asset
```php
php artisan vendor:publish --tag=product:public
```

### Run Seeder
```
php artisan db:seed --class=\\Modules\\Product\\Seeders\\ProductPrivilagesTableSeeder
```