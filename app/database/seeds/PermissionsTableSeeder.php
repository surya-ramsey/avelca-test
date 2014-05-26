<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PermissionsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('groups')->delete();
		Group::create(array('name'=>'CEO','permissions'=>'1','created_at'=>'','updated_at'=>''));
		Group::create(array('name'=>'cashier','permissions'=>'2','created_at'=>'','updated_at'=>''));
	}

}