<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin',
            'password' => Hash::make('admin@123')
        ]);

        DB::table('members')->insert([
            'member_id' => 1,
            'type' => true,
            'name' => 'Dr. Faizan',
            'designation' => 'Manager',
            'department' => 'Civil',
            'organization' => 'Atmiya',
            'email' => 'koypan@gmail.com',
            'mobile' => '+91000xxxx888',
            'address' => 'Raiya road',
            'is_admin' => true
        ]);
    }
}
