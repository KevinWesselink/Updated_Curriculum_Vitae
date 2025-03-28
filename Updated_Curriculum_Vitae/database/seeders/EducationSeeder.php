<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $educations = [];

        for ($i = 0; $i < 160; $i++) {
            $educations[] = [
                'schoolName' => $faker->company, 
                'educationName' => $faker->word, 
                'smallExplanation1' => $faker->sentence,
                'smallExplanation2' => $faker->sentence,
                'smallExplanation3' => $faker->sentence,
                'smallExplanation4' => $faker->sentence,
                'smallExplanation5' => $faker->sentence,
                'yearsFollowed' => strval(rand(1, 10)),
                'status' => $faker->randomElement(['active', 'inactive']), 
                'schoolLocation' => $faker->city,
            ];
        }

        DB::table('education')->insert($educations);
    }
}
