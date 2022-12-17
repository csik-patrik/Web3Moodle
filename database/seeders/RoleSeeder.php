<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

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
            [ 'name' => 'student' ],
            [ 'name' => 'student' ]);
        
        Role::firstOrCreate(
            [ 'name' => 'teacher' ],
            [ 'name' => 'teacher' ]);

        Role::firstOrCreate(
                [ 'name' => 'admin' ],
                [ 'name' => 'admin' ]);
    }
}
