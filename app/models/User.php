<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $softDelete = true;

	protected $fillable = array('username', 'password', 'image_name');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');


	public function role() {
		return $this->belongsTo('Role');
	}


	public static $loginRules = array(
		'username'=>'required',
		'password'=>'required');
    
    public static function validateLogin($data) {
		return Validator::make($data, static::$loginRules);
	}


	public static $registerRules = array(
		'username'=>'unique:users|required',
		'password'=>'required',
		'name'=>'alpha');
    
    public static function validateRegister($data) {
		return Validator::make($data, static::$registerRules);
	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}