<div class="form-group">
    {!! Form::label('name','Nombre:') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('materia','Materia:') !!}
    {!! Form::select('materia',$materias,null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('evaluacion','Evaluación:') !!}
    {!! Form::select('evaluacion',$evaluaciones,null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('mesa','Mesa:') !!}
    {!! Form::text('mesa',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('mensaje','Mensaje:') !!}
    {!! Form::textarea('mensaje',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <a class="btn btn-danger" href="{{ action('BeaconsController@index') }}">
        @lang('button.cancel')
    </a>
    <button type="submit" class="btn btn-success">
        {{ $submitButtonText }}
    </button>
</div>

