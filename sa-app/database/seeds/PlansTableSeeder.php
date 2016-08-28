<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => 'Free',
            'price' => '0',
            'look_books' => 1,
            'support' => '9am - 6pm customer support',
            'commission' => '20',
        ]);
        DB::table('plans')->insert([
            'name' => 'Monthly 10',
            'price' => '10',
            'look_books' => 3,
            'support' => '24 x 7 customer support',
            'commission' => '15',
        ]);
        DB::table('plans')->insert([
            'name' => 'Monthly 30',
            'price' => '30',
            'look_books' => 0,
            'support' => '24 x 7 customer support',
            'commission' => '0',
        ]);
    }
}
