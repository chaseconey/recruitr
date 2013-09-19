@extends('layouts.scaffold')

@section('main')

<h1>Edit App</h1>
{{ Form::model($app, array('method' => 'PATCH', 'route' => array('apps.update', $app->id))) }}
	<ul>
        <li>
            {{ Form::label('first_name', 'First_name:') }}
            {{ Form::text('first_name') }}
        </li>

        <li>
            {{ Form::label('last_name', 'Last_name:') }}
            {{ Form::text('last_name') }}
        </li>

        <li>
            {{ Form::label('about', 'About:') }}
            {{ Form::textarea('about') }}
        </li>

        <li>
            {{ Form::label('career', 'Career:') }}
            {{ Form::textarea('career') }}
        </li>

        <li>
            {{ Form::label('project', 'Project:') }}
            {{ Form::textarea('project') }}
        </li>

        <li>
            {{ Form::label('resume_loc', 'Resume_loc:') }}
            {{ Form::text('resume_loc') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('apps.show', 'Cancel', $app->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
