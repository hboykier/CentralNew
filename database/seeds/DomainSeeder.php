<?php

use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('domains')->delete();
        DB::table('domains')->insert(array('code'=>'PAIS', 'name'=>'Pais de origen','created_at' => new DateTime,'updated_at' => new DateTime));
        DB::table('domains')->insert(array('code'=>'GROUP_DEFAULT', 'name'=>'Grupo Default','created_at' => new DateTime,'updated_at' => new DateTime));
	}

}
