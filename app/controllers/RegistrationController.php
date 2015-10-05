<?php
class RegistrationController extends BaseController
{
	function register()
	{
		return View::make('SupportWebsite.workshops-reg');
	}

	function submit()
	{
		$validation = Validator::make(Input::all(), [
	        'name' => 'required',
	        'email' => 'required',
	        'mobile' => 'required'
        ]);

        if ($validation->fails()
          || Input::get('academicyear') == "-Choose Academic Year-"
          || Input::get('workshop') == "-Choose Workshop-"
          || Input::get('workshop-experience') == "-Select-"
          || Input::get('programming-experience') == "-Select-"
        ){
    		return Redirect::back()->with('fail', 'Make sure you filled required fields');

      	} else
      	{
      		$record = new Regrecord1();
      		$record->name = Input::get('name');
      		$record->email = Input::get('email');
      		$record->mobile = Input::get('mobile');
      		$record->academic_year = Input::get('academicyear');
      		$record->workshop = Input::get('workshop');
      		$record->ws_exp = Input::get('workshop-experience');
      		$record->prog_exp = Input::get('programming-experience');
      		$record->comments = Input::get('comments');

      		if ($record->save()) 
      		{
      			return View::make('SupportWebsite.thankyouv2');

      		} else
      		{
      			return Redirect::back()->with('fail', 'There was a problem saving your data, please try again or contact IT-members.');
      		}
      	}

	}

	function table($workshop)
	{
		$colors = array("green", "blue", "");
		$color = $colors[rand(0, 2)];

		if($workshop == "all")
		{
			$records = Regrecord1::all();

		} else
		{
			$records = Regrecord1::where('workshop', '=', $workshop)->get();
		}
		return View::make('else.table')->with(['records' => $records, 'workshop' => $workshop, 'color' => $color]);
	}

}
?>