<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id'=>'1',
            'name'=>'サッカー'
     ],[
        'id'=>'2',
        'name'=>'野球'
 ],[
    'id'=>'3',
    'name'=>'バスケ'
],[
    'id'=>'4',
    'name'=>'軽音'
],[
    'id'=>'5',
    'name'=>'イベント'
],[
    'id'=>'6',
    'name'=>'バレー'
]);
    }
}
