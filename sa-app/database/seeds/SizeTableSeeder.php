<?php

use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            'title' => 'XS',
            'status' => '1',
        ]);
        DB::table('sizes')->insert([
            'title' => 'S',
            'status' => '1',
        ]); 
        DB::table('sizes')->insert([
            'title' => 'M',
            'status' => '1',
        ]); 
        DB::table('sizes')->insert([
            'title' => 'L',
            'status' => '1',
        ]); 
        DB::table('sizes')->insert([
            'title' => 'XL',
            'status' => '1',
        ]); 
        DB::table('sizes')->insert([
            'title' => 'XXL',
            'status' => '1',
        ]); 
   
    }
}
