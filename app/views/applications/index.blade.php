
@section('content')
<h2>Your Applications</h2>

@if ($applications->count())
	<table class="large-12">
		<thead>
			<tr>
				<th>First_name</th>
				<th>Last_name</th>
				<th>About</th>
				<th>Career</th>
				<th>Project</th>
				<th>Resume</th>
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
					<td>{{ link_to('/resumes/'.$application->resume_hash, $application->resume_name) }}</td>
                    <!-- <td>{{ link_to_route('applications.edit', 'Edit', array($application->id)) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('applications.destroy', $application->id))) }}
                            {{ Form::submit('Delete', array('class' => 'button')) }}
                        {{ Form::close() }}
                    </td> -->
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no applications
@endif

@stop
