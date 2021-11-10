<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<5;$i++){

            DB::table('phone_numbers')->insert([
                'student_id' => rand(1,6),
                'numbers' => rand(1234567,7654321),
            ]);
        }
    }
}
