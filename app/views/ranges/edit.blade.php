@extends('layouts.scaffold')

@section('main')

<h1>Edit Range</h1>
{{ Form::model($range, array('method' => 'PATCH', 'route' => array('ranges.update', $range->id))) }}
	<ul>
        <li>
            {{ Form::label('range', 'Range:') }}
            {{ Form::text('range') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('ranges.show', 'Cancel', $range->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
