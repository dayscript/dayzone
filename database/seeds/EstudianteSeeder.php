<?php

use App\Estudiante;

class EstudianteSeeder extends DatabaseSeeder {

    public function run()
    {
        DB::table( 'estudiantes' )->delete();
        Estudiante::create( [
            'name'    => 'Juan Carlos',
            'code'=>'645'
        ] );
        Estudiante::create( [
            'name'    => 'Maria Camila',
            'code'    => '646'
        ] );
        Estudiante::create( [
            'name'    => 'Juan Camilo',
            'code'    => '647'
        ] );
    }

}