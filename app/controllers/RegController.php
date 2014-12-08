<?php
 class RegController extends BaseController
 {
 	public function getreg()
 	{
 		return View::make('html.reg');
 	}
 	public function postreg()
 	{

 		$validate=Validator::make(Input::all(),array(
       'email'=>'required|email',
       'name'=>'required|unique:applicant',
       'mobile'=>'required',
       'university'=>'required',
       'faculty'=>'required',
       'committee'=>'required',
       'day'=>'required',
       'time'=>'required',
      ));

        if($validate->fails())
           return 'fatal error has been occured';
      else
      {
          $applicant=new Applicant();
          $applicant->name= Input::get('name');
          $applicant->email= Input::get('email');
          $applicant->mobile  = Input::get('mobile');
          $applicant->university=Input::get('university'); 
          $applicant->faculty=Input::get('faculty');
          $applicant->comment=Input::get('comment');
          $applicant->cv=Input::get('cv');
          
          //$interviewTime = new InterviewTime();
          $applicant->day=Input::get('day');
          $applicant->time=Input::get('time');
          $applicant->committee=Input::get('committee');
          //id       
      }
      
      if($applicant->save() )
      {
        return "enta 7lw";
      }
      else
        return "enta w7sh | enta 2lbk 2asi awii awii";
 	}
 }