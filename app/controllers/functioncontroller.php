<?php

class functioncontroller extends BaseController 
{
  public function addevent()
  {
  	Session::put('event','Add event');
  	return View::make('html.events');
  }
    public function editevent()
  {
  	Session::put('event','Edit event');
  	return View::make('html.events');
  }
  public function postaddevent()
  {
  	      $event=new Events();
          $event->name= Input::get('eventname');
          $event->subDescription= Input::get('subdescription');
          $event->description   = Input::get('description');
      if($event->save())
        return Redirect::route('getaddevent')->with('success',Input::get('eventname'));
      else
        return Redirect::route('addevent')->with('fail','Fatal Error has been occured there is something wrong on database');
  }
}