@extends('layouts.scaffold')

@section('main')

<h1>Show Range</h1>

<p>{{ link_to_route('ranges.index', 'Return to all ranges') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Range</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $range->range }}}</td>
                    <td>{{ link_to_route('ranges.edit', 'Edit', array($range->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('ranges.destroy', $range->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
