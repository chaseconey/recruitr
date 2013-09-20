
@section('content')
<div class="row">

<div class="large-12 columns">
    <h2 class="subheader">{{ $application->first_name . " " . $application->last_name }}</h2>

    <div class="row">
        <div class="large-6 small-12 columns">
            <h5 class="subheader">Tell me a bit about yourself</h5>
            <p>{{ $application->project }}</p>
        </div>
        <div class="large-6 small-12 columns">
            <h5 class="subheader">What are you looking for in the next 1-2 years career-wise?</h5>
            <p>{{ $application->career }}</p>
        </div>
    </div>

    <div class="row">
        <div class="large-12 small-12 columns">
            <h5 class="subheader">Tell me about a large web-related project you worked on recently? What technologies were used, what process did you use to complete the project, etc?</h5>
            <p>{{ $application->project }}</p>
        </div>
    </div>
</div>
</div>
@stop
