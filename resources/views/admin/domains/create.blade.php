@extends('app_layout')

@section('panel title')
    Nuevo Dominio
@endsection

@section('panel body')
    {!! Form::open (array('route'=>'domains.store', 'method'=>'POST')) !!}
    <div class="form-group">
        {!!Form::label('code', 'Código', ['class'=>'col-sm-1 control-label']);!!}
        {!!Form::text('code', null, ['class'=>'control-label']);!!}
    </div>
    <div class="form-group">
        {!!Form::label('name', 'Nombre', ['class'=>'col-sm-1 control-label']);!!}
        {!!Form::text('name', null, ['class'=>'control-label']);!!}
    </div>
    <div class="form-group">
        {!!Form::submit('Aceptar', ['class'=>'btn btn-default col-sm-1 col-sm-offset-1 ']);!!}
    </div>
    {!! Form::close();!!}
@endsection
