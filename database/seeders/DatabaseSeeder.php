<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Gender::factory()->create([
            'gender' => 'Male'
        ]);

        \App\Models\Gender::factory()->create([
            'gender' => 'Female'
        ]);
        
        \App\Models\User::factory()->create([
            'user_image' => null,
            'first_name' => 'Ezra Tiffany',
            'middle_name' => null,
            'last_name' => 'Bartolo',
            'suffix_name' => null,
            'birth_date' => fake()->date(),
            'gender_id' => 1,
            'address' => fake()->streetAddress(),
            'contact_number' => '09123456789',
            'email_address' => fake()->safeEmail(),
            'username' => 'ezra',
            'password' => bcrypt('ezra')
        ]);

        \App\Models\User::factory(100)->create();


    }
}
