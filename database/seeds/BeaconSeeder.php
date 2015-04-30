<?php

use App\Beacon;

class BeaconSeeder extends DatabaseSeeder {

    public function run()
    {
        DB::table( 'beacons' )->delete();
        Beacon::create( [
            'name'    => 'Azul - Icy Marshmallow',
            'uuid'    => '11EFEBC8-CD29-11E3-B415-1A514932AC01',
            'major'   => '2258',
            'minor'   => '35537',
            'materia' => 1,
            'mesa'    => 54,
            'image'   => '/assets/img/beacons/ice.png'
        ] );
        Beacon::create( [
            'name'    => 'Morado - Blueberry Pie',
            'uuid'    => '11EFEBC8-CD29-11E3-B415-1A514932AC01',
            'major'   => '2258',
            'minor'   => '35538',
            'materia' => 2,
            'mesa'    => 23,
            'image'   => '/assets/img/beacons/blueberry.png'
        ] );
        Beacon::create( [
            'name'  => 'Verde - Mint Cocktail',
            'uuid'  => '11EFEBC8-CD29-11E3-B415-1A514932AC01',
            'major' => '2258',
            'minor' => '35536',
            'image' => '/assets/img/beacons/mint.png'
        ] );
        Beacon::create( [
            'name'  => 'Azul 2 - Icy Marshmallow',
            'uuid'  => '11EFEBC8-CD29-11E3-B415-1A514932AC01',
            'major' => '2258',
            'minor' => '35539',
            'image' => '/assets/img/beacons/ice.png'
        ] );
        Beacon::create( [
            'name'  => 'Morado 2 - Blueberry Pie',
            'uuid'  => '11EFEBC8-CD29-11E3-B415-1A514932AC01',
            'major' => '2258',
            'minor' => '35540',
            'image' => '/assets/img/beacons/blueberry.png'
        ] );
        Beacon::create( [
            'name'  => 'Verde 2 - Mint Cocktail',
            'uuid'  => '11EFEBC8-CD29-11E3-B415-1A514932AC01',
            'major' => '2258',
            'minor' => '35541',
            'image' => '/assets/img/beacons/mint.png'
        ] );
    }

}