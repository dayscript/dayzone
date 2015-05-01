<?php namespace App\Http\Controllers;

use App\Beacon;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BeaconsController extends Controller {

    public $materias;

    public function __construct()
    {
        $this->materias = [
            '1' => 'Analisis Microeconomico',
            '2' => 'Calculo Diferencial',
            '3' => 'Introduccion a la Administracion',
            '4' => 'Simulacion Gerencial',
            '5' => 'Practica Profesional'
        ];
        $this->evaluaciones = [
            '0'=> 'Ninguna',
            '1' => 'Pregunta rápida',
            '2' => 'Quiz (varias preguntas)',
            '3' => 'Trabajo en grupo',
            '4' => 'Pregunta individual',
            '5' => 'Otra'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $beacons = Beacon::latest()->get();
        $materias = $this->materias;
        $evaluaciones = $this->evaluaciones;

        return view( 'beacons.index', compact( 'beacons', 'materias','evaluaciones' ) );
    }

    /**
     * Display the specified resource.
     *
     * @param Beacon $beacon
     * @return Response
     * @internal param int $id
     */
    public function show( Beacon $beacon )
    {
        if ( $beacon->materia && isset( $this->materias[ $beacon->materia ] ) )
            $beacon->nombremateria = $this->materias[ $beacon->materia ];
        else
            $beacon->nombremateria = "";

        if ( $beacon->evaluacion && isset( $this->evaluaciones[ $beacon->evaluacion ] ) )
            $beacon->evaluacion = $this->evaluaciones[ $beacon->evaluacion ];
        else
            $beacon->evaluacion = "";

        return $beacon;
        //return view( 'beacons.show', compact( 'beacon' ) );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Beacon $beacon
     * @return Response
     * @internal param int $id
     */
    public function edit( Beacon $beacon )
    {
        $materias = $this->materias;
        $evaluaciones = $this->evaluaciones;

        return view( 'beacons.edit', compact( 'beacon', 'materias','evaluaciones' ) );
    }

    public function update( Beacon $beacon, Request $request )
    {
        $beacon->update( $request->all() );

        return redirect( 'admin/beacons' );
    }

    public function create()
    {
        $materias = $this->materias;
        $evaluaciones = $this->evaluaciones;
        return view('beacons.create',compact('materias','evaluaciones'));
    }


}
