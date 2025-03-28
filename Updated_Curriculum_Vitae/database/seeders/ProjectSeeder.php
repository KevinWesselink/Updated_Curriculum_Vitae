<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $projects = [];

        for ($i = 0; $i < 160; $i++) {
            $projects[] = [
                'projectName' => $faker->word,
                'projectDescription' => $faker->sentence,
                'projectLink' => $faker->url,
                'projectImage' => $faker->imageUrl,
                'projectStartDate' => $faker->date,
                'projectEndDate' => $faker->date,
                'projectRole' => $faker->randomElement(['Developer', 'Designer', 'Manager']),
                'projectType' => $faker->randomElement(['personal', 'group', 'open_source', 'professional']),
                'projectTechnologies' => $faker->sentence,
                'projectTeamSize' => $faker->numberBetween(1, 10),
                'projectClient' => $faker->company,
                'projectLocation' => $faker->city,
                'projectStatus' => $faker->randomElement(['completed', 'in_progress', 'on_hold', 'not_started', 'abandoned']),
            ];
        }

        DB::table('projects')->insert($projects);
    }
}
