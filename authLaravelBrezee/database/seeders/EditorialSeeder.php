<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('Editorial')->insert([
            'id' => 0,
            'nombre' => 'Bloomsbury Publishing',
            'nacionalidad' => 'Inglesa'
        ]);
    }
}
