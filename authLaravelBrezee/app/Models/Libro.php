<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model{
    use HasFactory;
    protected $table = 'libros';
    protected $fillable = ['ISBN', 'titulo', 'autor', 'idioma', 'publicacion','editorial'];
    protected $primaryKey = 'ISBN';

    public function obtenerLibros(){
        return Libro::all();
    }

    public function obtenerLibroPorISBN($isbn){
        return Libro::find($isbn);
    }
}
