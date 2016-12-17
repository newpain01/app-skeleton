<?php

use App\Role;
use Illuminate\Database\Seeder;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Role::create([
          'name'   => 'owner',
          'label'   => 'Owner',
      ]);  
      Role::create([
          'name'   => 'admin',
          'label'   => 'Administrator',
      ]);
      Role::create([
          'name'   => 'editor',
          'label'   => 'Editor',
      ]);
      Role::create([
          'name'   => 'author',
          'label'   => 'Author',
      ]);
      Role::create([
          'name'   => 'contributor',
          'label'   => 'Contributor',
      ]);
      Role::create([
          'name'   => 'subscriber',
          'label'   => 'Subscriber',
      ]);
    }
}
