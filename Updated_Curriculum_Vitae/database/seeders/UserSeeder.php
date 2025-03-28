<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $users = [];

        for ($i = 0; $i < 80; $i++) {
            $users[] = [
                'userName' => $faker->userName,
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'sex' => Arr::random(['male', 'female', 'preferNotToSay']),
                'telephoneNumber' => strval(rand(1000000000, 9999999999)),
                'address' => $faker->streetAddress,
                'postalCode' => $faker->postcode,
                'city' => $faker->city,
                'country' => DB::table('countries')->inRandomOrder()->value('countryName'),
                'dateOfBirth' => $faker->date,
                'currentProfession' => $faker->jobTitle,
                'notifications' => $faker->boolean,
                'email_notifications' => $faker->boolean,
                'profile_visibility' => $faker->boolean,
                'email' => $faker->safeEmail,
                'password' => Hash::make('password'),
            ];
        }

        DB::table('users')->insert($users);
    }
}
