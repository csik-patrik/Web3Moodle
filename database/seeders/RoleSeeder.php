<?php

namespace Database\Seeders;

use App\Models\Role;
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
        Role::firstOrCreate(
            ['name' => 'student'],
            ['name' => 'student']
        );

        Role::firstOrCreate(
            ['name' => 'teacher'],
            ['name' => 'teacher']
        );

        Role::firstOrCreate(
            ['name' => 'admin'],
            ['name' => 'admin']
        );
    }
}
