<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            'id' => 1,
            'name' => 'manager',
            'created_at' => Carbon::now(),
        ]);
        DB::table('departments')->insert([
            'id' => 2,
            'name' => 'devloper',
            'created_at' => Carbon::now(),
        ]);
        DB::table('departments')->insert([
            'id' => 3,
            'name' => 'testing',
            'created_at' => Carbon::now(),
        ]);
        DB::table('departments')->insert([
            'id' => 4,
            'name' => 'sales',
            'created_at' => Carbon::now(),
        ]);
    }
}
