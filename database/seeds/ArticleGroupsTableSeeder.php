<?php

use Illuminate\Database\Seeder;

class ArticleGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artGroups')->insert(array(
            [
                'name'=>'Бытовая техника'
            ],
            [
                'name'=>'Смартфоны'
            ],
            [
                'name'=>'Аудио-видео'
            ]
        ));
    }
}
