<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TypesTableSeeder extends Seeder {

	public function run()
	{		
		DB::table('types')->delete();
		Type::create(array('name' =>  'product', 'created_at'=>'', 'updated_at'=>'' ));
		Type::create(array('name' =>  'service', 'created_at'=>'', 'updated_at'=>''));
	}

}