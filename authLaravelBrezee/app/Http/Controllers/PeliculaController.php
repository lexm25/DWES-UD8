<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peliculas;

class PeliculaController extends Controller
{
    protected $peliculas;
    public function __construct(Peliculas $peliculas){
        $this->peliculas = $peliculas;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = $this->peliculas->obtenerPeliculas();
        //el primer parámetro es la ruta y el punto es como una /
        return view('peliculas.peliculas_view', ['peliculas' => $peliculas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peliculas.nuevaPelicula_view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelicula = new Peliculas($request->all());
        $pelicula->save();
        return redirect()->action([PeliculaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($titulo)
    {
        $pelicula = $this->peliculas->obtenerPeliculaPorTitulo($titulo);
        return view('peliculas.pelicula_view', ['pelicula' => $pelicula]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $titulo)
    {
        $pelicula = Libro::find($titulo);
        $pelicula->fill($request->all());
        $pelicula->save();
        return redirect()->action([PeliculaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
