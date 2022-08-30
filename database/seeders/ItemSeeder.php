<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'マグロ丼',
                'memo' => 'マグロ丼説明',
                'price' => '800'
            ],
            [
                'name' => 'エイヒレ',
                'memo' => 'エイヒレ説明',
                'price' => '500'
            ],
            [
                'name' => 'たこわさ',
                'memo' => 'たこわさ説明',
                'price' => '350'
            ],
        ]);
    }
}
