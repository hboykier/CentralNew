@extends('app_layout')

@section('panel title')
    @if($action=='create')
        Crear
    @else
        Editar
    @endif
    Dominio
@endsection

@section('panel body')
    @if($action=='create')
        {!! Form::model ($domain, array('route'=>'domains.store', 'method'=>'POST')) !!}
    @else
        {!! Form::model ($domain, array('route'=>['domains.update', $domain], 'method'=>'PUT')) !!}
    @endif
    <div class="form-group">
        {!!Form::label('code', 'Código', ['class'=>'col-sm-2 control-label'])!!}
        {!!Form::text('code', null, ['class'=>'control-label',  'autofocus'=>'autofocus'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('name', 'Nombre', ['class'=>'col-sm-2 control-label'])!!}
        {!!Form::text('name', null, ['class'=>'control-label'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('description', 'Descripcion', ['class'=>'col-sm-2 control-label'])!!}
        {!!Form::textarea('description', null, ['class'=>'control-label'])!!}
    </div>

    <div class="btn-group col-sm-offset-1 " role="group" aria-label="...">
        @if($action=='create')
            {!!Form::submit('Aceptar', ['class'=>'btn btn-default', 'name' => 'save'])!!}
            {!!Form::submit('Seguir', ['class'=>'btn btn-default', 'name' => 'continue'])!!}
        @else
            {!!Form::submit('Modificar', ['class'=>'btn btn-default', 'name' => 'save'])!!}
            {!!Form::button('Eliminar', ['class'=>'btn btn-default', 'data-toggle'=>'modal', 'data-target'=>'#modal-delete'])!!}
        @endif

        <a class="btn btn-default" role="button" href="{{route('domains.index')}}" title="Volver">
            Volver
        </a>
    </div>
    {!! Form::close()!!}

    @include('modal_delete', ['entity' => 'el dominio', 'value' => $domain->code, 'route'=>'domains.destroy', 'id'=>$domain->id])

@endsection
