<?php

use App\Beacon;

class BeaconSeeder extends DatabaseSeeder {

    public function run()
    {
        DB::table( 'beacons' )->delete();
        Beacon::create( [
            'name'    => 'Demo - Blueberry 1',
            'uuid'    => '11EFEBC8-CD29-11E3-B415-1A514932AC01',
            'major'   => '2258',
            'minor'   => '1',
            'materia' => 2,
            'mesa'    => 23,
            'image'   => '/assets/img/beacons/blueberry.png'
        ] );
        Beacon::create( [
            'name'    => 'Demo - Ice 1',
            'uuid'    => '11EFEBC8-CD29-11E3-B415-1A514932AC01',
            'major'   => '2258',
            'minor'   => '2',
            'materia' => 1,
            'mesa'    => 54,
            'image'   => '/assets/img/beacons/ice.png',
            'mensaje'=>'Recuerda que tienes un 15% de descuento para tu posgrado de Gerencia Estratégica del Diseño.

Para ver todas las opciones de posgrados haz click a continuación.',
            'evaluacion'=>'Ninguna'
        ] );
        Beacon::create( [
            'name'  => 'Demo - Mint 1 - Corferias',
            'uuid'  => '11EFEBC8-CD29-11E3-B415-1A514932AC01',
            'major' => '2258',
            'minor' => '3',
            'image' => '/assets/img/beacons/mint.png'
        ] );
        Beacon::create( [
            'name'  => 'Demo - Ice 2',
            'uuid'  => '11EFEBC8-CD29-11E3-B415-1A514932AC01',
            'major' => '2258',
            'minor' => '4',
            'image' => '/assets/img/beacons/ice.png'
        ] );
        Beacon::create( [
            'name'  => 'Demo - Blueberry 2',
            'uuid'  => '11EFEBC8-CD29-11E3-B415-1A514932AC01',
            'major' => '2258',
            'minor' => '5',
            'image' => '/assets/img/beacons/blueberry.png'
        ] );
        Beacon::create( [
            'name'  => 'Demo - Mint 2',
            'uuid'  => '11EFEBC8-CD29-11E3-B415-1A514932AC01',
            'major' => '2258',
            'minor' => '6',
            'image' => '/assets/img/beacons/mint.png'
        ] );
    }

}