<?php

namespace Database\Seeders;

use App\Models\CourseCategory;
use Illuminate\Database\Seeder;

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
