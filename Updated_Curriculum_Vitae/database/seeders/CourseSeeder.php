<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $courses = [];

        for ($i = 0; $i < 160; $i++) {
            $courses[] = [
                'educatorName' => $faker->company,
                'courseName' => $faker->word,
                'smallExplanation1' => $faker->sentence,
                'smallExplanation2' => $faker->sentence,
                'smallExplanation3' => $faker->sentence,
                'smallExplanation4' => $faker->sentence,
                'smallExplanation5' => $faker->sentence,
                'validityEarned' => $faker->date,
                'validUntil' => $faker->date,
                'certificationLocation' => $faker->city,
            ];
        }
        
        DB::table('courses')->insert($courses);
    }
}
