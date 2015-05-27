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
        <th>Nombre</th>
        <th>Email</th>
        <th></th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->code}}</td>
            <td>{{$user->fullname}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a class="btn btn-default" href="{{route('users.edit', $user)}}" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
        </tr>
    @endforeach
</table>
{!! $users->render() !!}
@endsection
