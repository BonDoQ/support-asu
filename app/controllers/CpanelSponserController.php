<?php

class CpanelSponserController extends BaseController
{
    public function index()
    {
      if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
      {
        //Getting data from the database.
        $sponsers = Sponser::all();

        //Directing to the index view.
        return View::make('Cpanel.sponsers', ['sponsers' => $sponsers]);
      }
      else
        return Redirect::to('cpanel');
    }

    public function create()
    {
       if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
        {
            $vents = Event::all();
             return View::make('Cpanel.sponser-create', ['vents' => $vents]);
        }
        else
          return Redirect::to('cpanel');  
    }

    public function store()
    {
        if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
        {
        //Validation.
        $validation = Validator::make(Input::all(), [
            'name' => 'required',
            'slogan' => 'required',
            'information' => 'required'
        ]);

        if($validation->fails())
        {
            return Redirect::back()->withInput()->withErrors($validation->messages());
        }

        //Saveing data.
        $sponser = new Sponser();
        if(Input::get('availibility')=='on') $sponser->availibility = true;
        else $sponser->availibility = false;
        $sponser->name = Input::get('name');
        $sponser->updated_by=Auth::user()->username;
        $sponser->slogan = Input::get('slogan');
        $sponser->website = Input::get('website');
        $sponser->information = Input::get('information');

        //Getting and uploading logo file.
        $img_path = '../../images/sponsors/' ;
        if(Input::hasFile('image_logo'))
        {
            $file = Input::file('image_logo');
            $file_name = $sponser->name . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($img_path, $file_name);
            $sponser->image_logo = '/images/sponsors/' . $file_name;
        } else
        {
            $sponser->image_logo = '/images/sponsors/' . 'default.png';
        }

        $sponser->save();

        //Getting data from the database.
        $vents = Event::all();
        $sponser = Sponser::wherename(Input::get('name'))->first();

        //Collecting the data from the checkboxs and macking relations.
        foreach ($vents as $vent) 
        {
            if (Input::get($vent->id))
            {
                if(!$sponser->Vents->contains($vent->id)) $sponser->Vents()->attach($vent->id);
            } 
        }

        //Directing to the index route.
        return Redirect::route('cpanel.sponsors.index');
       }
       else
          return Redirect::to('cpanel'); 
    }

    public function edit($sponser_id)
    {
      if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
        {
            //Getting data from the database.
            $vents = Event::all();
            $sponser = Sponser::whereid($sponser_id)->first();
            $ventsofsponser = $sponser->Vents()->get();

            //Directing to the edit route with forwarding the data arrays.
            return View::make('Cpanel.sponser-edit')->with([
                'sponser' => $sponser, 
                'vents' => $vents,
                'ventsofsponser' => $ventsofsponser
                ]);
        }
        else
          return Redirect::to('cpanel');
    }

    public function update($sponser_id)
    {
        if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
        {
            //Validation.
            $validation = Validator::make(Input::all(), [
                'name' => 'required',
                'slogan' => 'required',
                'information' => 'required'
            ]);

        if($validation->fails())
        {
            return Redirect::back()->withInput()->withErrors($validation->messages());
        }

        //Getting data from the database.
        $vents = Event::all();
        $sponser = Sponser::whereid($sponser_id)->first();

        //Collecting the data from the checkboxs and macking relations.
        foreach ($vents as $vent) 
        {
            if (Input::get($vent->id))
            {
                if(!$sponser->Vents->contains($vent->id)) $sponser->Vents()->attach($vent->id);
            } 
            else $sponser->Vents()->detach($vent->id);
        }

        //Getting data.
        if(Input::get('availibility')=='on') $sponser->availibility = true;
        else $sponser->availibility = false;
        $sponser->name = Input::get('name');
        $sponser->updated_by=Auth::user()->username;
        $sponser->slogan = Input::get('slogan');
        $sponser->website = Input::get('website');
        $sponser->information = Input::get('information');


        //Getting and uploading logo file.
        if(Input::hasFile('image_logo'))
        {
            unlink('../..'.$sponser->image_logo);
            $file = Input::file('image_logo');
            $img_path = '../../images/sponsors/';
            $file_name = $sponser->name . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($img_path, $file_name);
            $sponser->image_logo = '/images/sponsors' . $file_name;
        }

        $sponser->save();

        //Directing to the index route.
        return Redirect::route('cpanel.sponsors.index');
       }
       else
          return Redirect::to('cpanel');
    }

    public function destroy($sponser_id)
    {
      if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
      {
            $sponser = Sponser::find($sponser_id);

            //Detaching..
            $ventsofsponser = $sponser->Vents()->get();
            foreach ($ventsofsponser as $ventofsponser) 
            {
              $sponser->Vents()->detach($ventofsponser->id);
            }

            unlink(public_path() . $sponser->image_logo);

            //Delete.
            $sponser->delete();

            //Directing to the index root.
            return Redirect::route('cpanel.sponsors.index');
       }
    else
        return Redirect::to('cpanel');
    }
}