@extends('layouts.scaffold')

@section('main')

<h1>Show App</h1>

<p>{{ link_to_route('apps.index', 'Return to all apps') }}</p>

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
		<tr>
			<td>{{{ $app->first_name }}}</td>
					<td>{{{ $app->last_name }}}</td>
					<td>{{{ $app->about }}}</td>
					<td>{{{ $app->career }}}</td>
					<td>{{{ $app->project }}}</td>
					<td>{{{ $app->resume_loc }}}</td>
                    <td>{{ link_to_route('apps.edit', 'Edit', array($app->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('apps.destroy', $app->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
