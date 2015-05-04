<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ping;
use Illuminate\Http\Request;

class PingsController extends Controller {

    public function __construct()
    {
        $this->materias = [
            '1' => 'Analisis Microeconomico',
            '2' => 'Calculo Diferencial',
            '3' => 'Introduccion a la Administracion',
            '4' => 'Simulacion Gerencial',
            '5' => 'Practica Profesional'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pings = Ping::latest()->get();

        return view( 'pings.index', compact( 'pings' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create( Request $request )
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show( $id )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit( $id )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update( $id )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy( $id )
    {
        //
    }

}
