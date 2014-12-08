<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Event extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'events';
    public $timestamps = true;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public function Sponsers()
	{
		return $this->belongsToMany('Sponser');
	}
    public function getevents($year)
    {
    	return $this->where('ve_year','=',$year)->orderBy('date','DESC')->where('availibility', '=', true)->get();
    }
    public function timestamp()
    {
        $this->updated_at = time();

        if ( ! $this->exists) $this->created_at = $this->updated_at;
    }
}