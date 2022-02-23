<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('Libro')->insert([
            'ISBN' => '1859846661642',
            'titulo' => 'Harry Potter y la piedra filosofal',
            'autor' => 'J. K. Rowling',
            'idioma' => 'spanish',
            'publicacion' => '1997-06-30',
            'editorial' => 0,
        ]);

        DB::table('Libro')->insert([
            'ISBN' => '0822579499647',
            'titulo' => 'Harry Potter y la cámara secreta',
            'autor' => 'J. K. Rowling',
            'idioma' => 'spanish',
            'publicacion' => '1998-07-02',
            'editorial' => 0,
        ]);

        DB::table('Libro')->insert([
            'ISBN' => '9788478885190',
            'titulo' => 'Harry Potter y el prisionero de Azkaban',
            'autor' => 'J. K. Rowling',
            'idioma' => 'spanish',
            'publicacion' => '1999-07-08',
            'editorial' => 0,
        ]);

        DB::table('Libro')->insert([
            'ISBN' => 'Harry Potter y el cáliz de fuego',
            'titulo' => '9788478886456',
            'autor' => 'J. K. Rowling',
            'idioma' => 'spanish',
            'publicacion' => '2000-07-08',
            'editorial' => 0,
        ]);
        
        DB::table('Libro')->insert([
            'ISBN' => 'Harry Potter y la Orden del Fénix',
            'titulo' => '9788478887422',
            'autor' => 'J. K. Rowling',
            'idioma' => 'spanish',
            'publicacion' => '2003-06-21',
            'editorial' => 0,
        ]);

        DB::table('Libro')->insert([
            'ISBN' => '8478889906564',
            'titulo' => 'Harry Potter y el misterio del príncipe',
            'autor' => 'J. K. Rowling',
            'idioma' => 'spanish',
            'publicacion' => '2005-07-16',
            'editorial' => 0,
        ]);

        DB::table('Libro')->insert([
            'ISBN' => '8498381401645',
            'titulo' => 'Harry Potter y las reliquias de la Muerte',
            'autor' => 'J. K. Rowling',
            'idioma' => 'spanish',
            'publicacion' => '2007-07-21',
            'editorial' => 0,
        ]);
    }
}
