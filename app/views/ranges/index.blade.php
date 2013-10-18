@extends('layouts.scaffold')

@section('main')

<h1>All Ranges</h1>

<p>{{ link_to_route('ranges.create', 'Add new range') }}</p>

@if ($ranges->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Range</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($ranges as $range)
				<tr>
					<td>{{{ $range->range }}}</td>
                    <td>{{ link_to_route('ranges.edit', 'Edit', array($range->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('ranges.destroy', $range->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no ranges
@endif

@stop
