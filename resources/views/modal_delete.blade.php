<div class="modal fade" id="modal-delete" tabIndex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Por favor confirmar</h4>
            </div>
            <div class="modal-body">
                <p class="lead">
                    Borrar {{$entity}} "{{$value}}"?
                </p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{URL::route($route, [$id])}}" accept-charset="UTF-8">
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {!! Form::button('No', ['class'=>'btn btn-default', 'data-dismiss'=>'modal'])!!}
                    {!! Form::submit('Si', ['class'=>'btn btn-danger'])!!}
                </form>
            </div>
        </div>
    </div>
</div>
