<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Courses;
use App\Models\Internship;
use App\Models\SoftSkills;
use App\Models\Programming;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserLinkSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            DB::table('user_links')->insert([
                'user_id' => $user->id,
                'experience_id' => Experience::inRandomOrder()->first()?->id,
                'education_id' => Education::inRandomOrder()->first()?->id,
                'courses_id' => Courses::inRandomOrder()->first()?->id,
                'internship_id' => Internship::inRandomOrder()->first()?->id,
                'programming_id' => Programming::inRandomOrder()->first()?->id,
                'softskills_id' => SoftSkills::inRandomOrder()->first()?->id,
                'project_id' => Project::inRandomOrder()->first()?->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
