<?php

class Role extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roles';

	// protected $softDelete = true;

	protected $fillable = array('title', 'notes');


	public function users() {
		return $this->hasMany('User');
	}

}