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
 	public function contactus()
     {
      $valid = Validator::make(Input::all(),array(
        'sender_name'=>'required',
        'sender_email'=>'required|email',
        'sender_subject'=>'required',
        'sender_message'=>'required',
	));
    if($valid->fails())
    {

	return Redirect::route('home')->withErrors($valid)->withInput();
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
        
       return Redirect::back()->with('success','Your Message has been Sent Successfully'); //successful message
    }
 }
}
public function events()
    {
        //Getting data from the database.
         $vents = Event::where('availibility','=',true)->get();

         $sliders=Slider::where('availibility','=',true)->get();       
        return View::make('SupportWebsite.events', ['vents' => $vents],['sliders' => $sliders]);
    }

    public function sponsors()
    {
        //Getting data from the database.
        $sponsers = Sponser::where('availibility','=',true)->get();
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
 }