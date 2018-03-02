<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert(array(
            [
                'name' => 'LG'
            ],
            [
                'name' => 'Samsung'
            ],
            [
                'name' => 'DEXP'
            ],
            [
                'name' => 'HTC'
            ],
            [
                'name' => 'Nokia'
            ]
        ));
    }
}
