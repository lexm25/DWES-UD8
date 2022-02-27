<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model{
    use HasFactory;
    protected $table = 'editoriales';
    protected $fillable = ['id', 'nombre', 'nacionalidad'];
    protected $primaryKey = 'id';

    public function obtenerEditoriales(){
        return Editorial::all();
    }

    public function obtenerEditorialPorId($id){
        return Editorial::find($id);
    }
}
