Gantigol - Preorder Module
=======================

### Getting Started
Register the Preorder service provider in the config/app.php, add it to the array:

```
'providers' => [
    // Other Service Providers

    Modules\Preorder\Providers\PreorderServiceProvider::class,
],

```
Run this command to update the classes it needs.

```
composer dump-autoload

```