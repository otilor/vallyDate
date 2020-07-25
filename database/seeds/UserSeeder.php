<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = \Faker\Factory::create();
    	for ( $i = 0; $i < 10; $i++ )
    	{
	    	User::create([
	     		'name' => $faker->name,
	     		'email' => $faker->email,
	     		'password' => Hash::make('password'),
	     	]);	
    	}
     	
    }
}
