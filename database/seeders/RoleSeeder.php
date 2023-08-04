<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //membuat role untuk user
        $admin = Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $contributor = Role::create([
            'name' => 'contributor',
            'guard_name' => 'web',
        ]);
    }
}
