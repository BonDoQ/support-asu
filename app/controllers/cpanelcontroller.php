<?php

class cpanelcontroller extends BaseController 
{

	public function view()
	{
		$sliders=Sliders::all();
		return View::make('html.cpanel.slider',compact('sliders'));
	}

	public function getcreate()
	{
		return View::make('html.cpanel.create');
	}

	public function postcreate()
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

		 	$slider=new Sliders();    
            $slider->name=Input::get('name');
		    $name=Input::file('image')->getClientOriginalName();
		    Input::file('image')->move('images/sliders',$name);
		    $slider->imgPath='images/sliders' . $name;
		 	$slider->link=Input::get('link');
		 	$slider->description=Input::get('description');
		 	if(Input::get('availibility')=='on')
		 	$slider->IsEnable=true;
		    else
		 	$slider->IsEnable=false;
		 }

		 if($slider->save())
        	return Redirect::to('cpanel/slider');
        else
        	return "an fatel error has been occuered !";
        
	}

	public	function delete($id)
	{

		    $deletedrow = Sliders::find($id)->delete();
		    if($deletedrow)
		    	return Redirect::to('cpanel/slider');
		    else
			    return "an error has been occured" ;
	   
	}
//,'image',$slider->imgPath,'link',$slider->link,'description',$slider->description,'isenable',$slider->IsEnable
	public function getupdate($id)
	{
		 $slider = Sliders::find($id);		 
		return View::make('html.cpanel.update',compact('slider'));

	}

	public function postupdate($id)
	{
		$validate=Validator::make(Input::all(),array(
       'name'=>'required',
       'link'=>'required',
       'description'=>'required',
      ));
		 if($validate->fails())
		 	return Redirect::route('getupdate',array($id));
		 else
		 {
		 	$slider = Sliders::find($id);
		 	$slider->name=Input::get('name');
		 	$slider->link=Input::get('link');
		 	$slider->description=Input::get('description');
		 	if(Input::get('availibility')=='on')
		 	$slider->IsEnable=true;
		    else
		 	$slider->IsEnable=false;
		    if(Input::hasFile('image'))
		    {
		      $name=Input::file('image')->getClientOriginalName();
		      Input::file('image')->move('images/sliders',$name);
		      $slider->imgPath='images/sliders' . $name;
		    }
		 }

		 if($slider->save())
        	return Redirect::to ('cpanel/slider');
        else
        	return "an fatel error has been occured";

	}
}