<p align="center"><a href="https://laravel.com" target="_blank"><img width="150"src="https://laravel.com/laravel.png"></a></p>

## Laravel App Skeleton which includes authentication, roles and permissions out of the box

## Available Roles in RolesTableSeeder:
  owner,<br>
  admin,<br>
  editor,<br>
  author,<br>
  contributor,<br>
  subscriber<br>

  Note: run 'php artisan db:seed' in order to seed these Roles

## Add/Remove a Role to a User:
  $user->addRole('owner');<br>
  $user->hasRole('admin');<br>
  $user->removeRole('owner');<br>


## Create Permission:
  $permission = new App\Permission;<br>
  $permission->name = 'create_user';<br>
  $permission->label = 'Create User';<br>
  $permission->save();<br>


## Associate a Permission with a Role:
  $role = App\Role::where('name','owner')->first();<br>
  $role->givePermissionTo('create_user');<br>


## Check which Permissions are associated with a Role:
  $role = App\Role::where('name','owner')->first();<br>
  $role->permissions;<br>


## Check which Roles have specific Permission:
  $permission = App\Permission::where('name','create_user')->first();<br>
  $permission->roles;<br>


## Check which Role a User has:
  $user = App\User::first();<br>
  $user->roles;<br>


## Check if the user has permission in Blade:
  @can('create_user')<br>
    You can create new users!<br>
  @endcan<br>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
