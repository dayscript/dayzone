@extends('admin/layouts/default')
@section('title')
    Editar Beacon
    @parent
@stop

@section('content')
    <div class="container">
        <h1>Editar: {!! $beacon->name !!}</h1>
        <hr/>
        {!! Form::model($beacon,['method' => 'PATCH', 'action' => ['BeaconsController@update',$beacon->id]]) !!}
        @include('beacons.form',['submitButtonText' => 'Actualizar Beacon'])
        {!! Form::close() !!}
    </div>
@stop