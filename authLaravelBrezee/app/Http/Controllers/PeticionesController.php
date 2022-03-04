<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peticiones;
use App\Mail\NotifyMail;
use Illuminate\Support\Facades\Mail;


class PeticionesController extends Controller{
    protected $peticiones;
    public function __construct(Peticiones $peticiones){
        $this->peticiones = $peticiones;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $peticiones = $this->peticiones->obtenerPeticiones();
        return view('emails.peticiones_view', ['peticiones' => $peticiones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('emails.formularioMail_view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $peticion = new Peticiones($request->all());
        $peticion->save();
        Mail::to($peticion->email)->send(new NotifyMail($peticion));
        return redirect()->action([PeticionesController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
