<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Regrecord1 extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
    public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'regform1';

	public function timestamp()
    {
        if (!$this->exists) $this->registered_at = time();
    }

}