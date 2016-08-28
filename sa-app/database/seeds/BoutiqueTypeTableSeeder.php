<?php

use Illuminate\Database\Seeder;

class BoutiqueTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boutique_types')->insert([
            'name' => 'Own-label',
        ]);
        DB::table('boutique_types')->insert([
            'name' => 'Pre-owned',
        ]);
        DB::table('boutique_types')->insert([
            'name' => 'Multi-brand',
        ]);
    }
}
