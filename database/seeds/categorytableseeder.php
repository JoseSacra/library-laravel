<?php

use Illuminate\Database\Seeder;

class categorytableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
        	'nombre'=> 'Negocios',
        	'descripcion'=> 'Alamcena los libros relacionados con tecnicas de negocios',
        ]);
        DB::table('categorias')->insert([
            'nombre'=> 'TI',
            'descripcion'=> 'Alamcena los libros relacionados con siencias de la computación',
        ]);
    }
}
