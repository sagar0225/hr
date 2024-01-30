<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'manager',
            'created_at' => Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'sr.laravel devloper',
            'created_at' => Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'laravel devloper',
            'created_at' => Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'id' => 4,
            'name' => 'mannual teting',
            'created_at' => Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'id' => 5,
            'name' => 'sales executive',
            'created_at' => Carbon::now(),
        ]);
    }
}
