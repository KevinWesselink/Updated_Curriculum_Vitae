<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Countries;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CountrySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(InternshipSeeder::class);
        $this->call(SoftSkillSeeder::class);
        $this->call(ProgrammingSeeder::class);
        $this->call(ProjectSeeder::class);
    }
}
