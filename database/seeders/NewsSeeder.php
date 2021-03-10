<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('news')->insert([[
            'id' => '1',
            'title' => 'Marble Educational Kids',
            'content' => 'Hunter'
        ],[
            'id' => '2',
            'title' => 'What is Covid 19?',
            'content' => 'CNI News'
        ],[
            'id' => '3',
            'title' => 'Program Kerja',
            'content' => 'Part Time'
        ]]);
    }
}
