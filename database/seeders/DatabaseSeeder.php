<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('mgwinthu'),
            'provider' => 'simple',
            'role' => 'admin'
        ]);

        CourseCategory::factory()->create([
            'category_name' => 'Language Learning'
        ]);
        CourseCategory::factory()->create([
            'category_name' => 'Science & Engineering'
        ]);
        CourseCategory::factory()->create([
            'category_name' => 'Career Development'
        ]);
        CourseCategory::factory()->create([
            'category_name' => 'Business & Finance'
        ]);

        Course::factory()->create([
            'course_name' => 'English',
            'course_category_id' => '1',
            'description' => "Unlock the door to global communication with our comprehensive English learning courses. Whether you're a beginner aiming to build foundational skills or an advanced learner seeking to refine your fluency, our courses are designed to meet your needs.",
            'image' => '6759f00c230d2_english course.jpg'
        ]);
        Course::factory()->create([
            'course_name' => 'Video Editing',
            'course_category_id' => '3',
            'description' => "Unlock the door to global communication with our comprehensive English learning courses. Whether you're a beginner aiming to build foundational skills or an advanced learner seeking to refine your fluency, our courses are designed to meet your needs.",
            'image' => '6759f83b6ba88_maxresdefault.jpg'
        ]);
        Course::factory()->create([
            'course_name' => 'Math',
            'course_category_id' => '2',
            'description' => "Unlock the door to global communication with our comprehensive English learning courses. Whether you're a beginner aiming to build foundational skills or an advanced learner seeking to refine your fluency, our courses are designed to meet your needs.",
            'image' => '6759fb02e7abe_math course.jpg'
        ]);
        Course::factory()->create([
            'course_name' => 'Web Development',
            'course_category_id' => '3',
            'description' => "Unlock the door to global communication with our comprehensive English learning courses. Whether you're a beginner aiming to build foundational skills or an advanced learner seeking to refine your fluency, our courses are designed to meet your needs.",
            'image' => '6759fb9f33291_web-dev-img.jpeg.jpg'
        ]);
        Course::factory()->create([
            'course_name' => 'Business Management',
            'course_category_id' => '4',
            'description' => "Unlock the door to global communication with our comprehensive English learning courses. Whether you're a beginner aiming to build foundational skills or an advanced learner seeking to refine your fluency, our courses are designed to meet your needs.",
            'image' => '6759fbd9c1e29_bussiness_management.jpg'
        ]);
    }
}
