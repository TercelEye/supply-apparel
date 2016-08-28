<?php

use Illuminate\Database\Seeder;

class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
            'name' => 'Men',
            'icon' => 'men',
        ]);
        DB::table('product_types')->insert([
            'name' => 'Women',
            'icon' => 'women',
        ]);
	 	DB::table('product_types')->insert([
            'name' => 'Kids',
            'icon' => 'kids',
        ]);
        DB::table('product_types')->insert([
            'name' => 'All',
            'icon' => 'RolesTableSeeder.php',
        ]);
    }
}
