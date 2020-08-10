<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->role = 'SuperAdmin';
        $role->save();

        $role = new Role();
        $role->role = 'Admin';
        $role->save();
    }
}
