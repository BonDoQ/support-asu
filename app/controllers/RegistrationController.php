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
      			//return View::make('SupportWebsite.thankyouv2');
            return Redirect::back()->with('success', 'Success.');

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

		if($workshop == "all" || $workshop == "All")
		{
			$records = Regrecord1::all();

		} else
		{
			$records = Regrecord1::where('workshop', '=', $workshop)->get();
		}
		return View::make('else.table')->with(['records' => $records, 'workshop' => $workshop, 'color' => $color]);
	}







  function registerrecruit()
  {
    return View::make('SupportWebsite.recruitment-reg');
  }

  function submitrecruit()
  {
    $validation = Validator::make(Input::all(), [
          'name' => 'required',
          'email' => 'required',
          'mobile' => 'required',
          'uni_fac' => 'required'
        ]);

        if ($validation->fails()
          || Input::get('academicyear') == "-Choose Academic Year-"
          || Input::get('committee') == "-Choose Committee-"
          || Input::get('day') == "-Choose Interview Day-"
          || Input::get('time') == "-Choose Interview Time-"
        ){
        return Redirect::back()->with('fail', 'Make sure you filled required fields');

        } else
        {
          $record = new Regrecord2();
          $record->name = Input::get('name');
          $record->email = Input::get('email');
          $record->mobile = Input::get('mobile');
          $record->university = Input::get('uni_fac');
          $record->academic_year = Input::get('academicyear');
          $record->committee = Input::get('committee');
          $record->day = Input::get('day');
          $record->time = Input::get('time');
          $record->comments = Input::get('comments');

          if ($record->save())
          {
            //return View::make('SupportWebsite.thankyouv2');
            return Redirect::back()->with('success', 'Success.');

          } else
          {
            return Redirect::back()->with('fail', 'There was a problem saving your data, please try again or contact IT-members.');
          }
        }

  }


  function tablerecruitday($day)
  {
    $data=Regrecord2::where('day', '=', $day)->get();
    $output = implode(
      ",",
         array('Name',
          'Email',
          'Mobile',
          'University',
          'Academic Year',
          'Committee',
          'Day',
          'Time', 
          'Comments'
          )
    );

    $output.="\n";

    foreach ($data as $row)
    {

      $output.=implode(
        ",", 
        array(
          $row->name, 
          $row->email,
          $row->mobile,
          $row->university,
          $row->academic_year,
          $row->committee,
          $row->day ,
          $row->time,
          $row->comments
        )
      );

      $output.="\n";

    }

    // headers used to make the file "downloadable", we set them manually
    // since we can't use Laravel's Response::download() function
    $headers = array(
      'Content-Type' => 'text/csv',
      'Content-Disposition' => 'attachment; filename="RecruitmentApplicants.csv" ',
    );
    return Response::make($output, 200, $headers);
  }



  function tablerecruit($committee)
  {
    $colors = array("green", "blue", "");
    $color = $colors[rand(0, 2)];

    if($committee == "all" || $committee == "All")
    {
      $records = Regrecord2::all();

    } else
    {
      $records = Regrecord2::where('committee', '=', $committee)->get();
    }
    return View::make('else.table2')->with(['records' => $records, 'committee' => $committee, 'color' => $color]);
  }



  public function downloadrecruit()
  {
    $data=Regrecord2::all();
    $output = implode(
      ",",
         array('Name',
          'Email',
          'Mobile',
          'University',
          'Academic Year',
          'Committee',
          'Day',
          'Time', 
          'Comments'
          )
    );

    $output.="\n";

    foreach ($data as $row)
    {

      $output.=implode(
        ",", 
        array(
          $row->name, 
          $row->email,
          $row->mobile,
          $row->university,
          $row->academic_year,
          $row->committee,
          $row->day ,
          $row->time,
          $row->comments
        )
      );

      $output.="\n";

    }

    // headers used to make the file "downloadable", we set them manually
    // since we can't use Laravel's Response::download() function
    $headers = array(
      'Content-Type' => 'text/csv',
      'Content-Disposition' => 'attachment; filename="RecruitmentApplicants.csv" ',
    );
    return Response::make($output, 200, $headers);
  }




  public function downloadworkshops()
  {
    $data=Regrecord1::all();
    $output = implode(
      ",",
         array('Name',
          'Email',
          'Mobile',
          'Academic Year',
          'Workshop',
          'Comments'
          )
    );

    $output.="\n";

    foreach ($data as $row)
    {

      $output.=implode(
        ",", 
        array(
          $row->name, 
          $row->email,
          $row->mobile,
          $row->academic_year,
          $row->workshop,
          $row->comments
        )
      );

      $output.="\n";

    }

    // headers used to make the file "downloadable", we set them manually
    // since we can't use Laravel's Response::download() function
    $headers = array(
      'Content-Type' => 'text/csv',
      'Content-Disposition' => 'attachment; filename="WorkshopsApplicants.csv" ',
    );
    return Response::make($output, 200, $headers);
  }










//miniJam registeration
  function registerMiniJamTeam()
  {
    return View::make('SupportWebsite.mini-jam-reg');
  }

  function submitMiniJamTeam()
  {
    
    
    
    $validation = Validator::make(Input::all(), [
          'team_name' => 'required',
      
          'name1' => 'required',
          'uni_fac1' => 'required',
          
          'name2' => 'required',
          'uni_fac2' => 'required',
          
          'name3' => 'required',
          'uni_fac3' => 'required',
          
          'email' => 'required',
          'mobile' => 'required'
        ]);

        if ($validation->fails()){
          return Redirect::back()->with('fail', 'Make sure you filled required fields');
          
        } else
        {
          $record = new RegrecordMiniJamTeam();
          
          $record->team_name = Input::get('team_name');
          
          $record->name1 = Input::get('name1');
          $record->university1 = Input::get('uni_fac1');
          
          $record->name2 = Input::get('name2');
          $record->university2 = Input::get('uni_fac2');
          
          $record->name3 = Input::get('name3');
          $record->university3 = Input::get('uni_fac3');
          
          $record->name4 = Input::get('name4');
          $record->university4 = Input::get('uni_fac4');
          
          $record->name5 = Input::get('name5');
          $record->university5 = Input::get('uni_fac5');
          
          $record->email = Input::get('email');
          $record->mobile = Input::get('mobile');
          $record->comments = Input::get('comments');

          if ($record->save())
          {
            return Redirect::to('/')->with('success', 'Success.');

          } else
          {
            return Redirect::back()->with('fail', 'There was a problem saving your data, please try again or contact IT-members.');
          }
        }

  }

  function registerMiniJam()
  {
    return View::make('SupportWebsite.mini-jam-reg1');
  }

  function submitMiniJam()
  {
     $validation = Validator::make(Input::all(), [
          'name' => 'required',
          'uni_fac' => 'required',
          
          'email' => 'required',
          'mobile' => 'required'
        ]);

        if ($validation->fails()){
          return Redirect::back()->with('fail', 'Make sure you filled required fields');
          
        } else
        {
          $record = new RegrecordMiniJam();
          
          $record->name = Input::get('name');
          $record->university = Input::get('uni_fac');
          $record->email = Input::get('email');
          $record->mobile = Input::get('mobile');
          $record->comments = Input::get('comments');

          if ($record->save())
          {
            return Redirect::to('/')->with('success', 'Success.');

          } else
          {
            return Redirect::back()->with('fail', 'There was a problem saving your data, please try again or contact IT-members.');
          }
        }
  }

}
?>