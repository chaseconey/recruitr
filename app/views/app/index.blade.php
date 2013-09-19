

@section('content')
<!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Contact Details -->
    <div class="large-9 columns">

      <h4>Step 1: Simple Questions</h4>

      <form>
          <fieldset>
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

          </fieldset>
        </form>



    </div>
    <!-- End Contact Details -->


    <!-- Sidebar -->
    <div class="large-3 columns">
        <h3>Progress</h3>
        <ul class="no-bullet">
            <li>Simple Questions</li>
            <li>Some Technical Questions</li>
            <li>Upload Resume</li>
        </ul>
    </div>
    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->

@stop