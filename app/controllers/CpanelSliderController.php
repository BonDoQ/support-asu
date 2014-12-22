<?php
 class CpanelSliderController extends BaseController
 {
    public function index()
    {
      if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
        {
        	$sliders=Slider::all();
        	return View::make('Cpanel.slider',compact('sliders'));
        }
        else
          return Redirect::to('cpanel');
    }
    public function create()
    {
      if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
        {

          return View::make('Cpanel.slider-create');
        }
      else
        return Redirect::to('cpanel');
    }
    public function store()
    {
      if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
      {
    	$validate=Validator::make(Input::all(),array(
       'name'=>'required',
       'image'=>'required',
      ));
		 if($validate->fails())
		 	return "failed !";
		 else
		 {

		 	      $slider=new Slider();    
            $slider->name=Input::get('name');
            $slider->updated_by=Auth::user()->username;
            
		      $name=$slider->name . '-' . time() . '.' .Input::file('image')->getClientOriginalName();
		      Input::file('image')->move('images/sliders',$name);
		      $slider->imgPath='images/sliders/' . $name;
          if(Input::get('description')==null)
		 	        $slider->description=null;
          else
            $slider->description=Input::get('description');
		  	  if(Input::get('availibility')=='on')
		 	       $slider->availibility=true;
		      else
		 	       $slider->availibility=false;
          if(Input::get('EventSlider')=='on')
             $slider->eventslider=true;
          else
             $slider->eventslider=false;
		  }

		 if($slider->save())
        	return Redirect::to('cpanel/sliders');
        else
        	return "an fatel error has been occuered !";
      }
      else
        return Redirect::to('cpanel');

    }
    public function update($id)
    {
     if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
      {
    	$validate=Validator::make(Input::all(),array(
       'name'=>'required',
      ));
		 if($validate->fails())
		 	return Redirect::to('cpanel/sliders/$id')->withErrors($validate->messages());
		 else
		 {
		 	  $slider = Slider::find($id);
		 	  $slider->name=Input::get('name');
		 	  $slider->updated_by=Auth::user()->username;

          if(Input::get('description')==null)
              $slider->description=null;
          else
            $slider->description=Input::get('description');

		 	  if(Input::get('availibility')=='on')
		 	   $slider->availibility=true;
		    else
		    	$slider->availibility=false;

        if(Input::get('EventSlider')=='on')
             $slider->eventslider=true;
          else
             $slider->eventslider=false;
		    if(Input::hasFile('image'))
		    {
		      //unlink(public_path() . $slider->imaPath);
		      $name=$slider->name . '-' . time() . '.' .Input::file('image')->getClientOriginalName();
		      Input::file('image')->move('images/sliders',$name);
		      $slider->imgPath='images/sliders/' . $name;
		    }
		 }
		 if($slider->save())
        	return Redirect::to('cpanel/sliders');
        else
        	return "an fatel error has been occured";
      }
      else
        return Redirect::to('cpanel');
    }
    public function edit($id)
    {
       if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
       {
    	    $slider = Slider::find($id);		 
		      return View::make('Cpanel.slider-edit',compact('slider'));
       }
      else
       return Redirect::to('cpanel');
    }
    public function destroy($id)
    {
       if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
       {
          $deletedrow = Slider::find($id);
          //unlink(public_path() . $deletedrow->imaPath);
          $deletedrow->delete();
		      if($deletedrow)
		    	   return Redirect::to('cpanel/sliders');
		      else
			       return "an error has been occured" ;
      }
      else
        return Redirect::to('cpanel');
    }
 }