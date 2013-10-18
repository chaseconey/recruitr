@section('content')
    <ul>
        @foreach($applications as $app)
            <li>{{ $app->first_name . " " . $app->last_name }} - {{ $app->stage->friendly }}</li>
        @endforeach
    </ul>
@stop