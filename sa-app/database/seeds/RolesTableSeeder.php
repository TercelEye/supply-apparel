<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'Can do everythings',
        ]);
        DB::table('roles')->insert([
            'name' => 'seller',
            'description' => 'Can sell product online & buy',
        ]);
	 	DB::table('roles')->insert([
            'name' => 'buyer',
            'description' => 'Can buy product online',
        ]);
    }
}
