<?php

 class CpanelEventController extends BaseController
 {
 	public function index()
    {
        if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
            {
              //Getting data from the database.
              $vents = Event::all();

              //Directing to the index view.
                return View::make('Cpanel.events', ['vents' => $vents]);
            }
            else
                return Redirect::to('cpanel');
    }

    public function create()
    {
        if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
            {
                 return View::make('Cpanel.event-create');
            }
        else
                return Redirect::to('cpanel');
    }

    public function store()
    {
        if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
            {
        $validation = Validator::make(Input::all(), [
            'name' => 'required',
            'slogan' => 'required',
            'short_description'=>'required',
            'date'=>'required'
        ]);

        if($validation->fails())
        {
            return Redirect::back()->withInput()->withErrors($validation->messages());
        }
        
        $vent = new Event();        
        if(Input::get('availibility')=='on') $vent->availibility = true;
        else $vent->availibility = false;
        $vent->name=Input::get('name');
        $vent->slogan=Input::get('slogan');
        $vent->updated_by=Auth::user()->username;
        $vent->short_description=Input::get('short_description');
        $vent->description=Input::get('description');
        $vent->date=Input::get('date');
        $date = DateTime::createFromFormat('Y-m-d', $vent->date);
        $vent->ve_year = $date->format('Y');

        //Getting and uploading logo file.
        $img_path = '/images/events/';
        if(Input::hasFile('image_logo'))
        {
            $file = Input::file('image_logo');
            $file_name = $vent->name . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . $img_path, $file_name);
            $vent->image_logo = $img_path . $file_name;
        } else
        {
            $vent->image_logo = $img_path . 'default.png';
        }

        $vent->save();
            
        //Directing to the index route.
        return Redirect::route('cpanel.events.index');
      }
      else
        return Redirect::to('cpanel');
    }

    public function edit($event_id)
    {
        if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
            {
                $vent = Event::whereid($event_id)->first();
        
                 return View::make('Cpanel.event-edit', ['vent' => $vent]);
            }
            else
                return Redirect::to('cpanel');
    }

    public function update($event_id)
    {
        if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
        {
        $validation = Validator::make(Input::all(), [
            'name' => 'required',
            'slogan' => 'required',
            'short_description'=>'required',
            'date'=>'required'
        ]);

        if($validation->fails())
        {
            return Redirect::back()->withInput()->withErrors($validation->messages());
        }
        
        $vent=Event::whereid($event_id)->first();
        
        if(Input::get('availibility')=='on') $vent->availibility = true;
        else $vent->availibility = false;
        $vent->name=Input::get('name');
        $vent->slogan=Input::get('slogan');
        $vent->updated_by=Auth::user()->username;
        $vent->short_description=Input::get('short_description');
        $vent->description=Input::get('description');
        $vent->date=Input::get('date');
        $date = DateTime::createFromFormat('Y-m-d', $vent->date);
        $vent->ve_year = $date->format('Y');

        //Getting and uploading logo file.
        if(Input::hasFile('image_logo'))
        {
            //unlink(public_path() . $vent->image_logo);
            $file = Input::file('image_logo');
            $img_path = '/images/events/';
            $file_name = $vent->name . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . $img_path, $file_name);
            $vent->image_logo = $img_path . $file_name;
        }

        $vent->save();
        //Directing to the index route.
        return Redirect::route('cpanel.events.index');
        }
        else
             return Redirect::to('cpanel');
    }

    public function destroy($vent_id)
    {
        if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
        {
        //Finding the vent.
        $vent = Event::find($vent_id);

        //Detaching..
        $sponsersofvent = $vent->Sponsers()->get();
        foreach ($sponsersofvent as $sponserofvent)
        {
            $vent->Sponsers()->detach($sponserofvent->id);
        }

        //unlink(public_path() . $vent->image_logo);

        //Deleting.
        $vent->delete();

        //Directing to the index root.
        return Redirect::route('cpanel.events.index');
          } 
          else
             return Redirect::to('cpanel');
    }

}

 	
 