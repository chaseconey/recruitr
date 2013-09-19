<?php

class App extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'first_name' => 'required',
		'last_name' => 'required',
		'about' => 'required',
		'career' => 'required',
		'project' => 'required',
		'resume_loc' => 'required'
	);
}
