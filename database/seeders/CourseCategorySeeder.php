<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseCategory;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseCategory::create([
            'name' => 'Kötelező',
        ]);

        CourseCategory::create([
            'name' => 'Kötelezően választott',
        ]);

        CourseCategory::create([
            'name' => 'Szabadon választott',
        ]);
    }
}
