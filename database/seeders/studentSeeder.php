<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<5;$i++){

            DB::table('students')->insert([
                'name' => Str::random(10),
                'dob' => rand(2000, 2012)."-".\rand(1,12)."-".\rand(1,28),
            ]);
        }
    }
}
