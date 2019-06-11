Gantigol - Shipment Module
=======================

### Getting Started
Register the Shipment service provider in the config/app.php, add it to the array:

```
'providers' => [
    // Other Service Providers

    Modules\Shipment\Providers\ShipmentServiceProvider::class,
],

```
Run this command to update the classes it needs.

```
composer dump-autoload

```