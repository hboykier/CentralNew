@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <p>Por favor revisá los siguientes errores:</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
