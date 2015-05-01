@extends('admin/layouts/default')
@section('title')
    Crear Beacon
    @parent
@stop

@section('content')
    <div class="container">
        <h1>Crear Nuevo Beacon</h1>
        <hr/>
        {!! Form::model( $beacon = new \App\Beacon, ['url' => 'beacons'] ) !!}
        @include('beacons.form',['submitButtonText' => 'Agregar Beacon'])
        {!! Form::close() !!}
    </div>
@stop