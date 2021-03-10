<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;

class ProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('programs')->insert([[
            'id' => '1',
            'nameProgram' => 'Program Karir'
        ],[
            'id' => '2',
            'nameProgram' => 'Program Magang'
        ],[
            'id' => '3',
            'nameProgram' => 'Program Kunjungan Industri'
        ]]);
    }
}
