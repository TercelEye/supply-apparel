<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ShopTableSeeder::class);

       //  $this->call(PlansTableSeeder::class);
       //  $this->call('CountriesSeeder');
       //  $this->command->info('Seeded the countries!'); 

       //  $this->call(RolesTableSeeder::class);
       //  $this->call(BoutiqueTypeTableSeeder::class);
       //  $this->call(ProductTypeTableSeeder::class);
        
       // $this->call(UsersTableSeeder::class);
       
       //   $this->call(SizeTableSeeder::class);
       
    }
}
