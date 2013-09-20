<?php

class Application extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'first_name' => 'required',
		'last_name' => 'required',
		'about' => 'required',
		'career' => 'required',
		'project' => 'required',
		'resume_name' => 'required'
	);
}
