
@section('content')

<div class="row">
    @if(count($app) < 1)
        <div class="columns large-12 text-center">
            <p class="marketing">You don't appear to have any applications with us currently. That is no problem, just click below to Apply!</p>
            <a class="text-center large button" href="{{ route('applications.create') }}">Apply Now!</a>
        </div>

    @else
        <div class="columns large-12">
            <h3>It appears you already have an application with us...</h3>
            {{ link_to_route('applications.show', 'Your Current Application', $app->id) }}
            <p>Current Status: {{ $app->stage->friendly }}</p>

            @foreach($stages as $stage)
                <div class="@if($stage->id === $app->stage->id) stage-active @else stage @endif">
                    {{ $stage->friendly }}
                </div>
            @endforeach
        </div>
    @endif
</div>

@stop