<?php
 class validationcontroller extends BaseController
 {
 	 public function getlogin()
   {
    return View::make('html.login');
   }
    public function getregister()
   {
    return View::make('html.register');
  }
     public function postlogin()
   {
     $validate=Validator::make(Input::all(),array(
       'username'=>'required',
       'password'=>'required'
      ));
        if($validate->fails())
           return Redirect::route('getlogin')->withErrors($validate)->withInput();
    
          $remember=(Input::has('remember'))? true :false;
          $auth=Auth::attempt(array(
              'username'=>Input::get('username'),  //username or Email
              'password'=>Input::get('password')
            ),$remember);
          if($auth)
            {
              Session::put('position',Auth::user()->committee);
              return Redirect::intended('admin/home');
            }
          else
             return Redirect::route('getlogin')->with('fail','this user name donsn`t exit');

   }
    public function postregister()
   {
    $validate=Validator::make(Input::all(),array(
       'email'=>'required|email|unique:users',
       'username'=>'required|unique:users|min:3',
       'password'=>'required|min:3',
       'phone'=>'required',
       'college'=>'required',
       'committee'=>'required',
      ));
        if($validate->fails())
           return Redirect::route('getregister')->with('error','Please Make Sure that all Fields are Filled ')->withInput();
      else
      {
          $user=new User();
          $user->username= Input::get('username');
          $user->password= Hash::make(Input::get('password'));
          $user->email   = Input::get('email');
          $user->phonenumber=Input::get('phone'); 
          $user->college=Input::get('college');
          $user->committee=Input::get('committee');
          
      }
      if($user->save())
      {

        return Redirect::route('getregister')->with('success',Input::get('username'));
      }
      else
        return Redirect::route('getregister')->with('fail','Fatal Error has been occured there is something wrong on database');
   }
   public function logout()
   {
        Auth::logout();
      return Redirect::to('home');
   }
  public function verify()
  {

    return View::make('html.loggedin');
  }

 }