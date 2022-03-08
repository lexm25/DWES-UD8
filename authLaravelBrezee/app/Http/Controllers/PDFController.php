<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Barryvdh\DomPDF\Facade as PDF;
use PDF;
use App\Models\Libro;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guardarTodosPDF(){
        $data = [
            'libros' => Libro::all()
        ];
           
        $pdf = PDF::loadView('testPDF', $data);
     
        return $pdf->download('tutsmake.pdf');
    }

    public function guardarUnoPDF($isbn)
    {
        $data = [
            'libro' => Libro::find($isbn)
        ];
           
        $pdf = PDF::loadView('testPDFUno', $data);
     
        return $pdf->download('tutsmake.pdf');
    }
}