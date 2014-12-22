<?php

class CpanelMessageController extends BaseController {


	public function index()
	{
	 if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
      {
		$emails=Email::all();
		return View::make('Cpanel.messages',['emails' => $emails]);
	  }
	   else
        return Redirect::to('cpanel');
	}


	public function destroy($email_id)
	{
      if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
      {
		  //Finding the vent.
        $email = Email::find($email_id);
        //Deleting.
        $email->delete();
        //Directing to the index root.
        return Redirect::route('cpanel.messages.index');
      }
         else
                return Redirect::to('cpanel');
	}

	public function reply($email_id)
	{     
	 if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
            ||Auth::user()->position=="PR Head"||Auth::user()->position=="PR Member")
	   {
			$email = Email::find($email_id);
        	$data = array(
        	 'name'=>$email->sender_name, 
    		'replay'=> Input::get('admin_message')
        	);
        
			$mail_status=Mail::send('emails.mail', $data, function($message)  use ($email){
    		$message->to($email->sender_email)->subject('Feedback From Support');
      		});
	  	if ($mail_status)
				return Redirect::route('home');
	  	else
			return Redirect::route('cpanel.messages.index');
	     
	  }
	    else
            return Redirect::to('cpanel');
	}
}
