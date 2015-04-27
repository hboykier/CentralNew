@extends('app_layout')

@section('panel title')
    Nuevo Dominio
@endsection

@section('panel body')
    {!! Form::open (array('route'=>'domains.store', 'method'=>'POST')) !!}
    <div class="form-group">
        {!!Form::label('code', 'Código', ['class'=>'col-sm-1 control-label'])!!}
        {!!Form::text('code', null, ['class'=>'control-label',  'autofocus'=>'autofocus'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('name', 'Nombre', ['class'=>'col-sm-1 control-label'])!!}
        {!!Form::text('name', null, ['class'=>'control-label'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('description', 'Descripcion', ['class'=>'col-sm-1 control-label'])!!}
        {!!Form::textarea('description', null, ['class'=>'control-label'])!!}
    </div>

    <div class="btn-group col-sm-offset-1 " role="group" aria-label="...">
        {!!Form::submit('Aceptar', ['class'=>'btn btn-default', 'name' => 'save'])!!}
        {!!Form::submit('Seguir', ['class'=>'btn btn-default', 'name' => 'continue'])!!}
        <a class="btn btn-default" role="button" href="{{route('domains.index')}}" title="Volver">
            Volver
        </a>
    </div>
    {!! Form::close()!!}
@endsection
