<?php
 class CpanelUserAccount extends BaseController
 {
    public function getlogin($messages=null)
    {
      if($messages!=null)
        return View::make('Cpanel.login',$messages);
      else  
    	 return View::make('Cpanel.login');
    }
     public function welcome()
     {
      return View::make('Cpanel.welcome');
     }
    public function postlogin()
    {
        $validate=Validator::make(Input::all(),array(
          'username'=>'required',
          'password'=>'required'
          ));
        if($validate->fails())
           return Redirect::action('getlogin')->withErrors($validate->messages())->withInput();
        
         if(Input::get('remember')=='on')
          $remember=true;
         else
          $remember=false;
          $auth=Auth::attempt(array(
              'username'=>Input::get('username'),  //username or Email
              'password'=>Input::get('password')
            ),$remember);
          if($auth)
              return View::make('Cpanel.welcome');  // should redirect to welcome page
            else
            {
              $auth=Auth::attempt(array(
                  'email'=>Input::get('username'),  //username or Email
                  'password'=>Input::get('password')
                 ),$remember);
              if($auth)
              return View::make('Cpanel.welcome');  // should redirect to welcome page
            }
          return Redirect::action('getlogin')->with('fail','Make Sure that the Password or Username are Typed Correctly');

   }

   public function getcreate($messages=null)
   {
    if(Auth::user()->position=="President"||Auth::user()->position=="Vice President")
    {
       if($messages!=null)
         return View::make('Cpanel.create-account',$messages);
       else
   	     return View::make('Cpanel.create-account');
   }
   else
    App::abort(404); //throw 404
   }

    public function postcreate()
    {
      if(Auth::user()->position=="President"||Auth::user()->position=="Vice President")
       {
      $validate=Validator::make(Input::all(),array(
       'email'=>'required|email|unique:users',
       'username'=>'required|unique:users',
       'password'=>'required|min:6',
       'position'=>'required',
      ));
        if($validate->fails())
           return Redirect::action('getcreate')->withErrors($validate->messages());
      else
      {
          $user=new User();
          $user->username= Input::get('username');
          $user->password= Hash::make(Input::get('password'));
          $user->email   = Input::get('email');
          $user->position=Input::get('position');          
      }
      if($user->save())

        return Redirect::route('getcreate');

      else
        return 'an error occured during save into database';
    }
    else
      App::abort(404);
   }
    public function logout()
     {
      Auth::logout();
      return Redirect::to('home');
     }
     public function GetChange()
     {
      return View::make('Cpanel.change-password');
     }
     public function PostChange()
     {
      //var_dump("expression");
       if(Input::get('email')!=Auth::user()->email)
       {
         $validate=Validator::make(Input::all(),array(
          'email'=>'required|email|unique:users',
          'password'=>'required|min:6',
         ));
        if($validate->fails())
           return Redirect::action('getchange')->withErrors($validate->messages());
       }
       else if(Input::get('email')==Auth::user()->email)
       {
         $validate=Validator::make(Input::all(),array(
          'password'=>'required|min:6',
         ));
        if($validate->fails())
           return Redirect::action('getchange')->withErrors($validate->messages());
       }

          $user=User::whereusername(Auth::user()->username)->first();
          $user->password= Hash::make(Input::get('password'));
          if((Input::get('email')) !=(Auth::user()->email))
          $user->email   = Input::get('email'); 

          $user->save();
           return Redirect::to('cpanel')->withSuccess('Your profile has been Updated !'); //flash message
     }
 }