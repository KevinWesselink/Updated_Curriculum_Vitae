<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $experiences = [];

        for ($i = 0; $i < 160; $i++) {
            $experiences[] = [
                'companyName' => $faker->company,
                'jobTitle' => $faker->jobTitle,
                'smallExplanation1' => $faker->sentence,
                'smallExplanation2' => $faker->sentence,
                'smallExplanation3' => $faker->sentence,
                'smallExplanation4' => $faker->sentence,
                'smallExplanation5' => $faker->sentence,
                'yearsWorked' => strval(rand(1, 10)),
                'companyLocation' => $faker->city,
            ];
        }

        DB::table('experience')->insert($experiences);
    }
}
