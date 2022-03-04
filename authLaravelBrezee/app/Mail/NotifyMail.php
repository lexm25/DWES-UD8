<?php

namespace App\Mail;

use App\Models\Peticiones;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyMail extends Mailable{
    use Queueable, SerializesModels;
    public $peticion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos){
        $this->peticion = $datos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->view('emails.demoMail');
    }
}
