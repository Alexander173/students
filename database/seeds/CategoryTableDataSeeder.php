<?php

use Illuminate\Database\Seeder;

class CategoryTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name' => 'root',
        	'description' => 'Main categories root-element'
        ]);
    }
}
