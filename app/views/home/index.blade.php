
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
            {{ link_to_route('applications.index', 'Your Applications') }}
            <p>Current Status: {{ $app->status }}</p>
            <div class="stage">
                Screening
            </div>
            <div class="stage stage-active">
                Phone Interview
            </div>
            <div class="stage">
                PHP Quiz / In-Person Interview
            </div>
            <div class="stage">
                Cultural Interview
            </div>
        </div>
    @endif
</div>

@stop