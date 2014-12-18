<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Slider extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sliders';
    public $timestamps = true;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
     public function timestamp()
    {
        $this->updated_at = time();

        if ( ! $this->exists) $this->created_at = $this->updated_at;
    }
    public function IsEnable()
    {

    	return $this->availibility;
    }
    public function IsEventSlider()
    {
    	return $this->eventslider;
    }
    public function IsDescriptionNull()
    {
    	return $this->description;
    }
}