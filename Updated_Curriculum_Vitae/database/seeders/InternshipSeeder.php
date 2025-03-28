<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $internships = [];

        for ($i = 0; $i < 160; $i++) {
            $internships[] = [
                'companyName' => $faker->company,
                'companyLocation' => $faker->city,
                'functionName' => $faker->jobTitle,	
                'internshipStartedAt' => $faker->date,
                'internshipEndedAt' => $faker->date,
                'finalAssessment' => $faker->randomElement(['Excellent', 'Good', 'Average', 'Poor']),
                'smallExplanation1' => $faker->sentence,
                'smallExplanation2' => $faker->sentence,
                'smallExplanation3' => $faker->sentence,
                'smallExplanation4' => $faker->sentence,
                'smallExplanation5' => $faker->sentence,
            ];
        }

        DB::table('internships')->insert($internships);
    }
}
