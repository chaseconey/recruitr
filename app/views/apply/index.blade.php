

@section('content')
<!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Contact Details -->
    <div class="large-9 columns">

      @include('apply.step'.$step)

    </div>
    <!-- End Contact Details -->


    <!-- Sidebar -->
    <div class="large-3 columns">
        <h3>Progress</h3>
        <ul class="no-bullet">
            <li @if($step === 1) class="current-step" @endif>Simple Questions</li>
            <li @if($step === 2) class="current-step" @endif>Some Technical Questions</li>
            <li @if($step === 3) class="current-step" @endif>Upload Resume</li>
        </ul>
    </div>
    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->

@stop