@extends('app_layout')

@section('panel title')
    <a class="btn btn-default" role="button" href="{{route('domains.create')}}" title="Nuevo" accesskey="N">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    </a>
    Dominios

@endsection

@section('panel body')
<table class="table table-striped">
    <tr>
        <th>Código</th>
        <th>Descripción</th>
        <th>Email</th>
        <th></th>
    </tr>
    @foreach($domains as $domain)
        <tr>
            <td>{{$domain->code}}</td>
            <td>{{$domain->name}}</td>
            <td>{{$domain->name}}</td>
            <td>
                <a class="btn btn-default" href="{{route('domains.edit', $domain)}}" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
        </tr>
    @endforeach
</table>
{!! $domains->render() !!}
@endsection
