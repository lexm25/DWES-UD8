<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('Libro', function (Blueprint $table) {
            $table->string('ISBN',13);
            $table->string('titulo');
            $table->string('autor');
            $table->string('idioma');
            $table->date('publicacion');
            $table->integer('editorial');
            $table->timestamps('updated_at');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Libro');
    }
}
