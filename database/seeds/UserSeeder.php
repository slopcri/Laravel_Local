<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        for($i=0; $i<20;$i++){

            \DB::table('users')->insert(array(
                'name'=> $faker->name,  
                'password'=> '55555',
                'type'=> 'User'
            ));
        }
        
    }
}
