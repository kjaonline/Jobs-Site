<?php

use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//
		
		DB::table('jobs')->insert([
			'name'=>Str::random(10),
			'description'=>Str::random(100),
			'salary'=>12354
		]);
    }
}
