Gantigol - Customers Module
=======================

### Getting Started

Register the Customers service provider in the config/app.php, add it to the array:

```
'providers' => [
    // Other Service Providers

    Modules\Customers\Providers\CustomerServiceProvider::class,
],

```
Run this command to update the classes it needs.

```
composer dump-autoload

```

### Module Dependencies

* Modules\Product\Product;
* Modules\Product\ProductVariant;

### Feature
#### List Customers
Open in your browser and go to this link [http://localhost:8000/admin/list-customer](http://localhost:8000/admin/list-customer)
#### Api Customers
Open in your browser and go to this link [http://localhost:8000/api-customer/customers](http://localhost:8000/api-customer/customers)