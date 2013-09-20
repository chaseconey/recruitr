
@section('content')
<!-- Main Page Content and Sidebar -->

<div class="row">

    <!-- Contact Details -->
    <div class="large-9 columns">

        @if ($errors->any())
            <ul>
              {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
        @endif

        {{ Form::open(array('route' => 'applications.store', 'files' => true)) }}
        <fieldset>

        <legend>Application</legend>

        <div class="row">
            <div class="large-6 small-12 columns">
              {{ Form::label('first_name', 'First Name') }}
              {{ Form::text('first_name') }}
            </div>
            <div class="large-6 small-12 columns">
              {{ Form::label('last_name', 'Last Name') }}
              {{ Form::text('last_name') }}
            </div>
        </div>

        <div class="row">
            <div class="large-12 small-12 columns">
                {{ Form::label('about', 'Tell me a bit about yourself') }}
                {{ Form::textarea('about') }}
            </div>
        </div>

        <div class="row">
            <div class="large-12 small-12 columns">
                {{ Form::label('career', 'What are you looking for in the next 1-2 years career-wise?') }}
                {{ Form::textarea('career') }}
            </div>
        </div>

        <div class="row">
            <div class="large-12 small-12 columns">
                {{ Form::label('project', 'Tell me about a large web-related project you worked on recently? What technologies were used, what process did you use to complete the project, etc?') }}
                {{ Form::textarea('project') }}
            </div>
        </div>

        <div class="row">
            <div class="large-12 small-12 columns">
                {{ Form::label('resume_name', 'Resume') }}
                {{ Form::file('resume_name') }}
            </div>
        </div>

        <button type="submit" class="right">Submit</button>
</fieldset>

{{ Form::close() }}

</div>
<!-- End Contact Details -->


<!-- Sidebar -->
<div class="large-3 columns">
    <h3>Questions?</h3>

</div>
<!-- End Sidebar -->
</div>

<!-- End Main Content and Sidebar -->

@stop


