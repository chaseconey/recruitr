
@section('content')

<h1>All Applications</h1>

<p>{{ link_to_route('applications.create', 'Add new application') }}</p>

@if ($applications->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>First_name</th>
				<th>Last_name</th>
				<th>About</th>
				<th>Career</th>
				<th>Project</th>
				<th>Resume_loc</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($applications as $application)
				<tr>
					<td>{{{ $application->first_name }}}</td>
					<td>{{{ $application->last_name }}}</td>
					<td>{{{ $application->about }}}</td>
					<td>{{{ $application->career }}}</td>
					<td>{{{ $application->project }}}</td>
					<td>{{{ $application->resume_loc }}}</td>
                    <td>{{ link_to_route('applications.edit', 'Edit', array($application->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('applications.destroy', $application->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no applications
@endif

@stop
