<?php

use Illuminate\Database\Seeder;
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
        $faker = Faker\Factory::create();
        DB::table('users')->delete();

        DB::table('users')->insert(array('code' => 'hboykier',
            'email' => 'boykier@lacaja.com.ar',
            'first_name' => 'hernan',
            'last_name' => 'boykier',
            'password' => Hash::make('henry'),
            'birthdate' => '15-01-1971',
            'image' => 'hb.jpg',
            'created_at' => new DateTime,
            'updated_at' => new DateTime));

        for ($i=0; $i<10; $i++)
        {
            DB::table('users')->insert(array('code' => $faker->userName,
                'email' => $faker->email,
                'first_name' => $faker->firstName,
                'last_name' =>  $faker->lastName,
                'password' => Hash::make('secret'),
                'birthdate' => $faker->dateTime,
                'created_at' => new DateTime,
                'updated_at' => new DateTime));
        }
	}

}
