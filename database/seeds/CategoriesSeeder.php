<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Category = Category::create([
            'id' => '1',
            'name' => 'サッカー'
        ]);
        $Category = Category::create([
            'id' => '2',
            'name' => '野球'
        ]);
        $Category = Category::create([
            'id' => '3',
            'name' => 'バスケ'
        ]);
        $Category = Category::create([
            'id' => '4',
            'name' => '軽音'
        ]);
        $Category = Category::create([
            'id' => '5',
            'name' => 'イベント'
        ]);
        $Category = Category::create([
            'id' => '6',
            'name' => 'バレー'
        ]);
    }
}
