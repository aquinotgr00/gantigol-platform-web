Gantigol - Media Library Module
=======================

### Getting Started
migrate
```php
php artisan migrate:refresh
```

### Create default content
run Content seeder
```php
php artisan db:seed --class=ContentSeeder
```

### Publish public asset
```php
php artisan vendor:publish --tag=media:public
```