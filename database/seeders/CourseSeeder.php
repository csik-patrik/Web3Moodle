<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'code' => '8E1NKM6N',
            'name' => 'Webprogramozás 3',
            'category_id' => '1',
            'owner_id' => '2',
        ]);
        Course::create([
            'code' => '97MKNC01',
            'name' => 'Magasszintű programozási nyelvek 2',
            'category_id' => '1',
            'owner_id' => '2',
        ]);
        Course::create([
            'code' => 'W4ZQEHOK',
            'name' => 'Robotika',
            'category_id' => '1',
            'owner_id' => '2',
        ]);
        Course::create([
            'code' => '1FF8SFSC',
            'name' => 'Algoritmusok 2',
            'category_id' => '1',
            'owner_id' => '2',
        ]);
    }
}
