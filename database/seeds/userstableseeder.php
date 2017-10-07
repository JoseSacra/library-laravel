<?php

use Illuminate\Database\Seeder;

class userstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=> 'José Sacramento',
        	'apellido'=> 'Muñoz Pérez',
        	'email'=> 'sacra.isc@hotmail.com',
        	'password'=> bcrypt('1234567'),
        ]);
    }
}
