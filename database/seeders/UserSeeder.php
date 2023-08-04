<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $admin->assignRole('admin');

        $contibutor = User::create([
            'name' => 'contributor',
            'email' => 'contributor@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $contibutor->assignRole('contributor');
    }
}
