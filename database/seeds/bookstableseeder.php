<?php

use Illuminate\Database\Seeder;

class bookstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'nombre'=> 'Negociando como un Fenicio',
        	'autor'=> 'Dr Abib Chamoun Nicola',
        	'categoria'=> '1',
        	'publicacion'=> '2011',
        ]);

        DB::table('users')->insert([
            'nombre'=> 'Biblia de C Sharp',
            'autor'=> 'Seballos',
            'categoria'=> '2',
            'user'=> '1',
            'publicacion'=> '2008',
        ]);
    }
}
