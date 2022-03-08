<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    use HasFactory;
    protected $table = 'peliculas';
    protected $fillable = ['titulo', 'duracion', 'email'];
    protected $primaryKey = 'titulo';

    public function obtenerPeliculas(){
        return Peliculas::all();
    }

    public function obtenerPeliculaPorTitulo($titulo){
        return Peliculas::find($titulo);
    }
}
