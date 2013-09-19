<h4>Step 1: Simple Questions</h4>

{{ Form::open(array('action' => 'ApplicationsController@store', 'method' => 'POST')) }}
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
      <button type="submit" class="right">Next</button>
    </fieldset>
{{ Form::close() }}
