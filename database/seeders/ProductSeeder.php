<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('products')->insert([[
            'id' => '1',
            'nameProduct' => 'Marbel - Educational Games'
        ],[
            'id' => '2',
            'nameProduct' => 'Marbel & Friends - Kids Games'
        ],[
            'id' => '3',
            'nameProduct' => 'Kolak - Kids Songs'
        ],[
            'id' => '4',
            'nameProduct' => 'Riri - Story Books'
        ]]);
}
}
