<?php

class Range extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'range' => 'required'
	);
}
