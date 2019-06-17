Gantigol - Admin Module
=======================

### Getting Started
migrate
```php
php artisan migrate:refresh
```

### Create Superuser account
run Superuser seeder
```php
php artisan db:seed --class=Modules\\Admin\\Seeders\\SuperuserForAdminsTableSeeder
```
once done with this step, proceed to open **/admin** route
Please login with the following email/password :  
```php
admin@mail.com
Open1234
```

### Publish public asset
```php
php artisan vendor:publish --tag=admin:public
```

### Authorization
#### Privileges and Privilege Category

Create privilege category and its privileges using Laravel seeder
```shell
php artisan make:seeder BlogForPrivilegesTableSeeder
```
move the file from `database/seeds/` folder to **module folder**, change its namespace, then copy and paste these codes below
```php
// create a category
DB::table('privilege_categories')->insert(['name'=>'Blog']);

// get the id of the category you've just created
$blogPrivilegeCategoryId = DB::table('privilege_categories')->where('name','Blog')->value('id');
DB::table('privileges')->insert([
	['name'=>'Add post', 'privilege_category_id'=>$blogPrivilegeCategoryId],
	['name'=>'Edit post', 'privilege_category_id'=>$blogPrivilegeCategoryId],
	['name'=>'Delete post', 'privilege_category_id'=>$blogPrivilegeCategoryId],
	['name'=>'Publish post', 'privilege_category_id'=>$blogPrivilegeCategoryId]
]);
```
don't forget to run the seeder
```shell
php artisan db:seed --class=\\Module\\YourModule\\BlogForPrivilegesTableSeeder
```

#### Role (optional)
create a new seeder
```shell
php artisan make:seeder NewsEditorForRolePrivilegeTableSeeder
```
again, move the file from `database/seeds/` folder to **module folder**, change its namespace, and then copy and paste these codes below
```php
// create role
DB::table('roles')->insert(['name'=>'News Editor'])
$role = DB::table('roles')->where('name', 'News Editor')->value('id');
$privileges = [
	'Add post',
	'Edit post',
	'Delete post',
	'Publish post'
];
// 
DB::table('role_privilege')->insert(
	DB::table('privileges')
		->selectRaw('? as role_id, id', [$role])
		->whereIn('name', $privileges)
		->get()
		->map(function ($privilege) use ($timestamp) {
			return array_merge(['role_id'=>$privilege->role_id,'privilege_id'=>$privilege->id], $timestamp);
		})->all()
);
```
run the seeder
```shell
php artisan db:seed --class=\\Module\\YourModule\\NewsEditorForRolePrivilegeTableSeeder
```