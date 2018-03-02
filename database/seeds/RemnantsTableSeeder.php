<?php

use Illuminate\Database\Seeder;

class RemnantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('remnants')->insert(array(
                [
                    'idArticle' => 1,
                    'idWarehouse' => 1,
                    'quantity' => 1000
                ],
            [
                'idArticle' => 2,
                'idWarehouse' => 1,
                'quantity' => 1300
            ],
            [
                'idArticle' => 3,
                'idWarehouse' => 1,
                'quantity' => 2300
            ],
            [
                'idArticle' => 4,
                'idWarehouse' => 1,
                'quantity' => 300
            ],
            [
                'idArticle' => 5,
                'idWarehouse' => 1,
                'quantity' => 10
            ]
            ));
    }
}
