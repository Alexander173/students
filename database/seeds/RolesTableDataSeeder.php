<?php

use Illuminate\Database\Seeder;

class RolesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'role' => 'admin'
        ]);

        DB::table('roles')->insert([
        	'role' => 'user'
        ]);

        DB::table('roles')->insert([
        	'role' => 'guest'
        ]);
    }
}
