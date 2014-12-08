<?php
 class CpanelSliderController extends BaseController
 {
    public function index()
    {
    	$sliders=Slider::all();
    	return View::make('Cpanel.slider',compact('sliders'));
    }
    public function create()
    {
        return View::make('Cpanel.slider-create');
    }
    public function store()
    {
    	$validate=Validator::make(Input::all(),array(
       'name'=>'required',
       'image'=>'required',
       'link'=>'required',
       'description'=>'required',
      ));
		 if($validate->fails())
		 	return "failed !";
		 else
		 {

		 	$slider=new Slider();    
            $slider->name=Input::get('name');
            $slider->updated_by=Auth::user()->username;
		    $name=Input::file('image')->getClientOriginalName();
		    Input::file('image')->move('images/sliders',$name);
		    $slider->imgPath='images/sliders/' . $name;
		 	  $slider->link=Input::get('link');
		 	  $slider->description=Input::get('description');
		  	if(Input::get('availibility')=='on')
		 	    $slider->availibility=true;
		    else
		 	    $slider->availibility=false;
		  }

		 if($slider->save())
        	return Redirect::to('cpanel/sliders');
        else
        	return "an fatel error has been occuered !";
        

    }
    public function update($id)
    {
    	$validate=Validator::make(Input::all(),array(
       'name'=>'required',
       'link'=>'required',
       'description'=>'required',
      ));
		 if($validate->fails())
		 	return Redirect::to('cpanel/sliders/$id')->withErrors($validate->messages());
		 else
		 {
		 	$slider = Slider::find($id);
		 	$slider->name=Input::get('name');
		 	$slider->link=Input::get('link');
		 	$slider->updated_by=Auth::user()->username;
		 	$slider->description=Input::get('description');
		 	if(Input::get('availibility')=='on')
		 	$slider->availibility=true;
		    else
		 	$slider->availibility=false;
		    if(Input::hasFile('image'))
		    {
		      unlink(public_path() . $slider->imaPath);
		      $name=Input::file('image')->getClientOriginalName();
		      Input::file('image')->move('images/sliders',$name);
		      $slider->imgPath='images/sliders/' . $name;
		    }
		 }

		 if($slider->save())
        	return Redirect::to('cpanel/sliders');
        else
        	return "an fatel error has been occured";
    }
    public function edit($id)
    {
    	$slider = Slider::find($id);		 
		return View::make('Cpanel.slider-edit',compact('slider'));
    }
    public function destroy($id)
    {
      $deletedrow = Slider::find($id);
      unlink(public_path() . $deletedrow->imaPath);
      $deletedrow->delete();
		    if($deletedrow)
		    	return Redirect::to('cpanel/sliders');
		    else
			    return "an error has been occured" ;
    }
 }