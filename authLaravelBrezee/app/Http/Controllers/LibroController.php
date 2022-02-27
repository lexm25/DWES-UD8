<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller{
    protected $libros;
    public function __construct(Libro $libros){
        $this->libros = $libros;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $libros = $this->libros->obtenerLibros();
        //el primer parámetro es la ruta y el punto es como una /
        return view('libros.libros_view', ['libros' => $libros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('libros.nuevoLibro_view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $libro = new Libro($request->all());
        $libro->save();
        return redirect()->action([LibroController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $isbn
     * @return \Illuminate\Http\Response
     */
    public function show($isbn){
        $libro = $this->libros->obtenerLibroPorISBN($isbn);
        return view('libros.libro_view', ['libro' => $libro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $isbn
     * @return \Illuminate\Http\Response
     */
    public function edit($isbn){
        $libro = $this->libros->obtenerLibroPorISBN($isbn);
        return view('libros.editarLibro_view', ['libro' => $libro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $isbn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $isbn){
        $libro = Libro::find($isbn);
        $libro->fill($request->all());
        $libro->save();
        return redirect()->action([LibroController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $isbn
     * @return \Illuminate\Http\Response
     */
    public function destroy($isbn){
        $libro = Libro::find($isbn);
        $libro->delete();
        return redirect()->action([LibroController::class, 'index']);
    }
}
