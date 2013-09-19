
@section('content')

<div class="row">
    @if(count($app) < 1)
        <div class="columns large-12 text-center">
            <p class="marketing">You don't appear to have any applications with us currently. That is no problem, just click below to Apply!</p>
            <button class="text-center large button">Apply Now!</button>
        </div>

    @else
        <div class="columns large-12">
            <h3>It appears you already have an application with us...</h3>
            {{ link_to('/application/' . $app->id, 'Your Application') }}
            <p>Current Status: {{ $app->status }}</p>
            <div class="stage">
                Stage 1
            </div>
            <div class="stage">
                Stage 1
            </div>
            <div class="stage">
                Stage 1
            </div>
            <div class="stage">
                Stage 1
            </div>
        </div>
    @endif
</div>

@stop