<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'seller',
			'email' => 'seller@seller.com',
            'password' => bcrypt('a'),
        ]);
		DB::table('users')->insert([
            'name' => 'buyer',
			'email' => 'buyer@buyer.com',
            'password' => bcrypt('a'),
        ]);
		
		//asign user roles to user
		DB::table('user_roles')->insert([
            'role_id' => 1,
			'user_id' => 1,
        ]);
		DB::table('user_roles')->insert([
            'role_id' => 2,
			'user_id' => 2,
        ]);
    }
}
