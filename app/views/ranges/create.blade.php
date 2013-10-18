@extends('layouts.scaffold')

@section('main')

<h1>Create Range</h1>

{{ Form::open(array('route' => 'ranges.store')) }}
	<ul>
        <li>
            {{ Form::label('range', 'Range:') }}
            {{ Form::text('range') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


