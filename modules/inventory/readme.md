Gantigol - Inventory Module
=======================

### Getting Started

Register the inventory service provider in the config/app.php, add it to the array:

```
'providers' => [
    // Other Service Providers

    Modules\Inventory\Providers\InventoryServiceProvider::class,
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
#### Adjustment
Open in your browser and go to this link [http://localhost:8000/admin/adjustment](http://localhost:8000/admin/adjustment)
#### StockOpname
Open in your browser and go to this link [http://localhost:8000/admin/stockopname](http://localhost:8000/admin/stockopname)