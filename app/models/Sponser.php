<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Sponser extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    public $timestamps = true;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sponsers';
	//Relationship with Vent.
	public function Vents()
	{
		return $this->belongsToMany('Event');
	}
	public function Ismain()
	{
		return $this->main;
	}
    public function timestamp()
    {
        $this->updated_at = time();

        if ( ! $this->exists) $this->created_at = $this->updated_at;
    }
}