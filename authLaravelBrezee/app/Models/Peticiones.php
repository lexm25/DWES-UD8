<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peticiones extends Model{
    use HasFactory;
    protected $table = 'peticiones';
    protected $fillable = ['nombreApe','email', 'titulo',];

    public function obtenerPeticiones(){
        return Peticiones::all();
    }
}
