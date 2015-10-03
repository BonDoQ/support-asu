<?php
 class WebsiteController extends BaseController
 {
 	public function home()
 	{
         $sliders=Slider::where('availibility','=',true)->get();
 		return View::make('SupportWebsite.home',['sliders' => $sliders]);
 	}

 	public function about()
 	{
      $sliders=Slider::where('availibility','=',true)->get();
 		return View::make('SupportWebsite.about',['sliders' => $sliders]);
 	}
 	public function supportians()
 	{
 		return View::make('SupportWebsite.home');
 	}
  public function ScheduleApp()
  {
    return View::make('SupportWebsite.apppage');
  }
  
 	public function contactus()
     {
     $secret   = '6LcvEQITAAAAALomfCLMsWcFDzxeanqhb4_BTQW7'; 
      $response = Input::get('g-recaptcha-response');
      $url      = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$response;
      $jsonObj  = file_get_contents($url);
      $json     = json_decode($jsonObj, true);

       if ($json['success']==false) {
        return Redirect::back ()->with('fail','Please Verify that you are not a Robot !');
    }

      $valid = Validator::make(Input::all(),array(
        'sender_name'=>'required',
        'sender_email'=>'required|email',
        'sender_subject'=>'required',
        'sender_message'=>'required',
	));
    if($valid->fails())
    {
      // return 'invalid';
	     return Redirect::back()->withErrors($valid)->withInput();
    }
    else
    {
    $email =new Email();
    $email->sender_name=Input::get('sender_name');
    $email->sender_email=Input::get('sender_email');
    $email->sender_subject=Input::get('sender_subject');
    $email->sender_message=Input::get('sender_message');
    $email->save();
    if($email)
    {
      /*$r=array("Saved");
       return Response::json($r);*/
       return Redirect::back()->with('success','Your Message has been Sent Successfully'); //successful message
    }
    else
      return Redirect::back()->with('fail','Oops, Somthing Went Wrong !');
      //return 'unsaved';
 }
}
    // public function register()
    // {        
    //     return View::make('SupportWebsite.register');
    // }
    // public function submit()
    // {
    //   $validation = Validator::make(Input::all(), [
    //         'name' => 'required',
    //         'email' => 'required',
    //         'mobile' => 'required',
    //         'birthday' => 'required',
    //         'address' => 'required',
    //         'year' => 'required',
    //     ]);

    //   if ($validation->fails()
    //       || strchr(Input::get('oldposition'), "Choose")
    //       || strchr(Input::get('newposition'), "Choose")
    //       || strchr(Input::get('newcommittee'), "Choose")
    //       || strchr(Input::get('oldcommittee'), "Choose")
    //       || Input::get('newcommittee')=="IT- Web Committee"&&strchr(Input::get('newteams'), "Choose")
    //       || Input::get('newcommittee')=="Media"&&strchr(Input::get('newteams'), "Choose")
    //       || Input::get('oldcommittee')=="IT- Web Committee"&&strchr(Input::get('oldteams'), "Choose")
    //       || Input::get('oldcommittee')=="Media"&&strchr(Input::get('oldteams'), "Choose")
    //       || strchr(Input::get('day'), "Choose")
    //       || strchr(Input::get('time'), "Choose")        
    //       ) {
    //     return Redirect::back()->withInput()->with('fail', 'Make sure you filled all fields');
    //   }
    //   else
    //   {
    //     $register = new Register();
    //     $register->name = Input::get('name');
    //     $register->email = Input::get('email');
    //     $register->mobile = Input::get('mobile');
    //     $register->year = Input::get('year');
    //     $register->address=Input::get('address');
    //     $register->birthday = Input::get('birthday');
    //     $register->oldcommittee = Input::get('oldcommittee');
    //     $register->newcommittee = Input::get('newcommittee');
    //     if(Input::get('oldcommittee')=="IT- Web Committee"||Input::get('oldcommittee')=="Media")
    //       $register->oldteam=Input::get('oldteams');
    //     if(Input::get('newcommittee')=="IT- Web Committee"||Input::get('newcommittee')=="Media")
    //       $register->newteam=Input::get('newteams');

    //     $register->oldposition = Input::get('oldposition');
    //     $register->newposition = Input::get('newposition');

    //     if(Input::hasFile('image'))
    //     {
    //       $name=time() . '.' .Input::file('image')->getClientOriginalName();
    //       Input::file('image')->move('../../images/profiles',$name);
    //       $register->imagepath='/images/profiles/' . $name;
    //     }
        
    //     $register->comments = Input::get('comments');

    //     if ($register->save()) {
    //       return View::make('SupportWebsite.Thankyou');
    //       return Redirect::to('/home')->with('success', 'Your Application has been Sent Successfully, Thank You!');
    //     }
    //     else
    //     {
    //       return Redirect::back()->withInput()->with('fail', 'There is a problem in saving your data, please try again or contact IT-members.');
    //     }
    //   }
    // }

    public function events()
    {
        //Getting data from the database.
         $vents = Event::where('availibility','=',true)->orderBy('ve_year','DESC')->get();

         $sliders=Slider::where('availibility','=',true)->get();       
        return View::make('SupportWebsite.events', ['vents' => $vents],['sliders' => $sliders]);
    }

    public function sponsors()
    {
        //Getting data from the database.
        //$mainsponsers = Sponser::where('availibility','=',true)->where('main','=',false)->get();//get all main sponsors
        $sponsers = Sponser::where('availibility','=',true)->get();  // get normal sponsors
        $sliders=Slider::where('availibility','=',true)->get();
        //Directing to the index view.
        return View::make('SupportWebsite.sponsers', ['sponsers' => $sponsers],['sliders' => $sliders]);
    }

    public function subevent($event_name)
    {
        $thisvent = Event::where('name', '=', $event_name)->first();
        if($thisvent->availibility==true)
        {
            $years=Event::select('ve_year')->orderBy('ve_year','DESC')->distinct()->get();
            $eventobj=new Event();
            foreach ($years as $year) {
                $events[$year->ve_year]=$eventobj->getevents($year->ve_year);
                }
         return View::make('SupportWebsite.subevent',['thisvent' => $thisvent],['events' =>$events]);   
        }
        else
            App::abort(404);
    }









    //this part is related to the latest '16 workshops registration





 }