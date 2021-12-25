<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);

        $admin->assignRole('admin');

        // $user = User::create([
        //     'email' => 'pengelola1@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);

        // $user->assignRole('staff');
    }
}