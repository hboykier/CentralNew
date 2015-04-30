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
                {!! Form::model ($domain, array('route'=>[$route, $id], 'method'=>'DELETE')) !!}
                {!! Form::button('No', ['class'=>'btn btn-default', 'data-dismiss'=>'modal'])!!}
                {!! Form::submit('Si', ['class'=>'btn btn-danger'])!!}
                {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>
