@extends('app_layout')

@section('panel title')
    <a class="btn btn-default" role="button" href="{{route('domains.create')}}" title="Nuevo">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    </a>
    Dominios

@endsection

@section('panel body')
<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Código</th>
        <th>Descripción</th>
        <th></th>
    </tr>
    @foreach($domains as $domain)
        <tr>
            <td>{{$domain->id}}</td>
            <td>{{$domain->code}}</td>
            <td>{{$domain->name}}</td>
            <td>
                <a class="btn btn-default" href="{{route('domains.edit', $domain)}}" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
{{--                <a class="btn btn-default confirModal" href="{{route('domains.destroy', $domain)}}" title="Eliminar" data-confirm-title="Eliminar {{$domain->code}}?" data-confirm-message="Confirmá presionando Sí" data-confirm-ok="Sí" data-confirm-cancel="NO"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>--}}
            </td>
        </tr>
    @endforeach
</table>
{!! $domains->render() !!}

@endsection
