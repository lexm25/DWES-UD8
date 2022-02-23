<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('Libro', function (Blueprint $table) {
            $table->id();
            $table->string('ISBN',13);
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->timestamps('updated_at');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('Libro');
    }
}
