<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Attendance;
use App\Models\Committee;
use App\Models\Member;
use App\Models\User;
use App\Models\Agenda;
use App\Models\CommitteeMember;
use App\Models\Meeting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    function csv2Database($tableName){
        $file = file("database/csv/$tableName.csv");

        $fields = explode(',', str_replace('\r\n', ' ', str_replace("\n", "", str_replace("\r", "", $file[0]))));
        $data = [];
        foreach (array_slice($file, 1) as $value) {
            $values = explode(',', str_replace("\n", "", str_replace("\r", "", $value)));

            $tmp = [];
            foreach ($fields as $key => $field) {
                $tmp[$field] = $values[$key];
            }
            $data[] = $tmp;
        }
        
        foreach ($data as $datum) {
            DB::table($tableName)->insert($datum);
        }
    }

    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::factory(30)->create();
        // Member::factory(30)->create();
        // Committee::factory(10)->create();
        // CommitteeMember::factory(50)->create();
        // Meeting::factory(10)->create();
        // Agenda::factory(30)->create();
        // Attendance::factory(30)->create();

        $this->csv2Database('users');
        $this->csv2Database('members');
        $this->csv2Database('committees');
        $this->csv2Database('committee_members');
        $this->csv2Database('meetings');
        $this->csv2Database('agendas');
        $this->csv2Database('attendances');

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@au.com',
            'password' => Hash::make('admin'),
            'is_admin' => true
        ]);
    }
}
