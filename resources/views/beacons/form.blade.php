<div class="form-group">
    {!! Form::label('name','Nombre:') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('materia','Materia:') !!}
    {!! Form::select('materia',$materias,null,['class' => 'form-control']) !!}
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
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>

