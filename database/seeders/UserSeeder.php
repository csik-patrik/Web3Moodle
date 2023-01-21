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
        User::firstOrCreate(
            ['email' => 'patrik.csik@gmail.com'],
            [
                'name' => 'Patrik Csik',
                'email' => 'patrik.csik@gmail.com',
                'password' => Hash::make('Debianlinux1'),
                'role_id' => '3',
            ]
        );

        User::firstOrCreate(
            ['email' => 'pista.kiss@gmail.com'],
            [
                'name' => 'Pista Kiss',
                'email' => 'pista.kiss@gmail.com',
                'password' => Hash::make('Debianlinux1'),
                'role_id' => '2',
            ]
        );

        User::firstOrCreate(
            ['email' => 'jeno.polgar@gmail.com'],
            [
                'name' => 'Jenő Polgár',
                'email' => 'jeno.polgar@gmail.com',
                'password' => Hash::make('Debianlinux1'),
                'role_id' => '1',
            ]
        );
    }
}
