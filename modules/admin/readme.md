Gantigol - Admin Module
=================

### Getting Started
migrate
```php
php artisan migrate:refresh
```
run Superuser seeder
```php
php artisan db:seed --class=Modules\\Admin\\Seeders\\SuperuserAdminsTableSeeder
```
publish public asset
```php
php artisan vendor:publish --tag=admin:public
```


### Privileges and Privilege Category

define privileges by creating a seeder
```php
php artisan make:seeder EditorPrivilegesTableSeeder
```


###Optional:Role
create a new seeder
```php
php artisan make:seeder EditorRolesTableSeeder
```

define pivot
```php
php artisan make:seeder 
```