<?php

use App\Estudiante;

class EstudianteSeeder extends DatabaseSeeder {

    public function run()
    {
        DB::table( 'estudiantes' )->delete();
        Estudiante::create( [
            'name'    => 'Juan Carlos',
            'code'=>'64509928'
        ] );
        Estudiante::create( [
            'name'    => 'Maria Camila',
            'code'    => '3456842'
        ] );
        Estudiante::create( [
            'name'    => 'Juan Camilo',
            'code'    => '3434567'
        ] );
    }

}