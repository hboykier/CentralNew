@extends('app_layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dominios</div>

                    <div class="panel-body">
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
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {!! $domains->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
