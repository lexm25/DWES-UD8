<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;

class EditorialController extends Controller{
    protected $editoriales;
    public function __construct(Editorial $editoriales){
        $this->editoriales = $editoriales;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $editoriales = $this->editoriales->obtenerEditoriales();
        return view('editoriales.editoriales_view', ['editoriales' => $editoriales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('editoriales.nuevaEditorial_view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $editorial = new Editorial($request->all());
        $editorial->save();
        return redirect()->action([EditorialController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $editorial = $this->editoriales->obtenerEditorialPorId($id);
        return view('editoriales.editorial_view', ['editorial' => $editorial]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $editorial = $this->editoriales->obtenerEditorialPorId($id);
        return view('editoriales.editarEditorial_view', ['editorial' => $editorial]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $editorial = Editorial::find($id);
        $editorial->fill($request->all());
        $editorial->save();
        return redirect()->action([EditorialController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        
    }
}
