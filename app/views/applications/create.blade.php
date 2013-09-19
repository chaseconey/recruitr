
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

        {{ Form::open(array('route' => 'applications.store')) }}
        <fieldset>

        <legend>Application</legend>

        <div class="row">
            <div class="large-6 small-12 columns">
              <label>First Name</label>
              <input type="text" name="first_name">
            </div>
            <div class="large-6 small-12 columns">
              <label>Last Name</label>
              <input type="text" name="last_name">
            </div>
        </div>

        <div class="row">
            <div class="large-12 small-12 columns">
                <label>Tell me a bit about yourself</label>
                <textarea name="about"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="large-12 small-12 columns">
                <label>What are you looking for in the next 1-2 years career-wise?</label>
                <textarea name="career"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="large-12 small-12 columns">
                <label>Tell me about a large web-related project you worked on recently? What technologies were used, what process did you use to complete the project, etc?</label>
                <textarea name="project"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="large-12 small-12 columns">
                <label for="resume_loc">Resume</label>
                {{ Form::file('resume_loc') }}
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


