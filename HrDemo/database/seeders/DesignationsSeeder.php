<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DesignationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('designations')->insert([
            'id' => 1,
            'name' => 'manager',
            'created_at' => Carbon::now(),
        ]);
        DB::table('designations')->insert([
            'id' => 2,
            'name' => 'sr.devloper',
            'created_at' => Carbon::now(),
        ]);
        DB::table('designations')->insert([
            'id' => 3,
            'name' => 'software devloper',
            'created_at' => Carbon::now(),
        ]);
        DB::table('designations')->insert([
            'id' => 4,
            'name' => 'tester anylist',
            'created_at' => Carbon::now(),
        ]);
        DB::table('designations')->insert([
            'id' => 5,
            'name' => 'sales fresher',
            'created_at' => Carbon::now(),
        ]);
    }
}
