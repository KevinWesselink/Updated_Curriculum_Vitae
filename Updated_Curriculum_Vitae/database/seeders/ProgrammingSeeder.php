<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgrammingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $programmingLanguages = [];

        for ($i = 0; $i < 160; $i++) {
            $programmingLanguages[] = [
                'languageName' => $faker->word,
                'experienceLevel' => $faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
                'smallExplanation1' => $faker->sentence,
                'smallExplanation2' => $faker->sentence,
                'smallExplanation3' => $faker->sentence,
                'smallExplanation4' => $faker->sentence,
                'smallExplanation5' => $faker->sentence,
                'startedWith' => $faker->date,
                'workedWithUntil' => $faker->date,
            ];
        }

        DB::table('programming')->insert($programmingLanguages);
    }
}
