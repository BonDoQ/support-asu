<?php

class CpanelMessageController extends BaseController {


	public function index()
	{

		$emails=email::all();
		return View::make('Cpanel.messages',['emails' => $emails]);
	}


	public function destroy($email_id)
	{

		  //Finding the vent.
        $email = email::find($email_id);
        //Deleting.
        $email->delete();
        //Directing to the index root.
        return Redirect::route('cpanel.messages.index');
	}

	public function reply($email_id)
	{     
		$email = email::find($email_id);
        $data = array(
        	 'name'=>$email->sender_name, 
    		'replay'=> Input::get('admin_message')
        	);
        
	$mail_status=Mail::send('emails.mail', $data, function($message)  use ($email){
    $message->to($email->sender_email)->subject('Feedback From Support');
      });
	  if ($mail_status) {
		return Redirect::route('home');
	   }
	  else
	   {
		return Redirect::route('cpanel.messages.index');
	   }
	}
}
