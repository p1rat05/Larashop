<?php

use Illuminate\Database\Seeder;

class WarehouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouse')->insert(array(
            [
                'name' => 'zona 51',
                'headName' => 'John Smith',
                'phone' => '153',
                'address' => 'пустыня Сахара, где-то посередине, №1'
            ]
        ));
    }
}
