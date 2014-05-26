<?php

class UserGroup extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['user_id', 'group_id'];

	public function User()
	{
		return $this->belongsTo('User');
	}

	public function Group()
	{
		return $this->belongsTo('Group');		
	}

}