<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

<<<<<<< HEAD
use App\Models\Attendance;
=======
use App\Models\Committee;
use App\Models\Member;
use App\Models\User;
>>>>>>> f28e61515969cec0f0976b3719b09695a262c8f0
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

<<<<<<< HEAD
        Attendance::factory(30)->create();
=======
        User::factory(30)->create();
        Member::factory(30)->create();
        Committee::factory(10)->create();
>>>>>>> f28e61515969cec0f0976b3719b09695a262c8f0
    }
}
