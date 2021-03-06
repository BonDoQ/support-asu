<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','WebsiteController@landing');
Route::get('/landing','WebsiteController@landing');

Route::get('/mini-jam/team/register',array(/*'uses'=>'RegistrationController@registerMiniJamTeam'*/ function () { return "Sorry registration for this event ended on 17 Dec 2015."; }, 'as'=>'getRegistrationMiniJamTeam'));
Route::post('/mini-jam/team/register',array('uses'=>'RegistrationController@submitMiniJamTeam', 'as'=>'postRegistrationMiniJamTeam'));

Route::get('/mini-jam/register',array(/*'uses'=>'RegistrationController@registerMiniJam'*/ function () { return "Sorry registration for this event ended on 17 Dec 2015."; }, 'as'=>'getRegistrationMiniJam'));
Route::post('/mini-jam/register',array('uses'=>'RegistrationController@submitMiniJam', 'as'=>'postRegistrationMiniJam'));


// Route::get('/','WebsiteController@home');
// Route::get('/home','WebsiteController@home');
// Route::get('/events','WebsiteController@events');
// Route::get('events/{event_id}', 'WebsiteController@subevent');
// Route::get('/about','WebsiteController@about');
// Route::post('/contactus','WebsiteController@contactus');
// Route::get('events','WebsiteController@events');
// Route::get('sponsors','WebsiteController@sponsors');
// Route::get('/ScheduleApp','WebsiteController@ScheduleApp');

// Route::get('/registration',array('uses'=>'WebsiteController@register','as'=>'getregistration'));
// Route::post('/registration',array('uses'=>'WebsiteController@submit','as'=>'postregistration'));
//Route::post('/submit',array('uses'=>'WebsiteController@submit','as'=>'submit'));
// Route::get('/get_days/{workshop}', 'CpanelRegController@get_days');
// Route::get('/get_time/{workshop}/{day}', 'CpanelRegController@get_time');


//workshops registration
//Route::get('/workshops/register',array('uses'=>'RegistrationController@register', 'as'=>'getRegistrationForm'));
//Route::post('/workshops/register',array('uses'=>'RegistrationController@submit', 'as'=>'postRegistrationForm'));

// Route::get('/recruitment/register',array('uses'=>'RegistrationController@registerrecruit', 'as'=>'getRegistrationFormrecruit'));
// Route::post('/recruitment/register',array('uses'=>'RegistrationController@submitrecruit', 'as'=>'postRegistrationFormrecruit'));




//App Links
Route::get('XXXXXXXXXXXXXXXXXXXGetAllNotes/{userId}','AppController@getAllNotes');
Route::get('XXXXXXXXXXXXXXXXXXXGetAllSessions/{year}','AppController@GetAllSessions');
Route::get('XXXXXXXXXXXXXXXXXXXLogin/{email}/{password}','AppController@Login');
Route::get('XXXXXXXXXXXXXXXXXXXGetAllInstructors/{year}','AppController@GetAllInstructors');
Route::get('XXXXXXXXXXXXXXXXXXXgetAllPlaces','AppController@GetAllPlaces');
Route::get('XXXXXXXXXXXXXXXXXXXRegistration/{userName}/{year}/{e_mail}/{password}/{phone}/{avatarNum}','AppController@Registration');
Route::get('XXXXXXXXXXXXXXXXXXXDeleteNote/{userid}','AppController@DeleteNote');
Route::get('XXXXXXXXXXXXXXXXXXXUpdateUser/{userId}/{new_userName}/{oldPassword}/{newPassword}','AppController@UpdateUser');
Route::get('XXXXXXXXXXXXXXXXXXXUploadNote/{content}/{Time}/{day}/{userId}/{Title}','AppController@UploadNote');
Route::get('XXXXXXXXXXXXXXXXXXXUploadUserSession/{userid}/{sessionid}','AppController@UploadUserSession');
Route::get('XXXXXXXXXXXXXXXXXXXUserDetails/{usrid}','AppController@UserDetails');
Route::get('XXXXXXXXXXXXXXXXXXXDeleteUserSession/{userid}','AppController@DeleteUserSession');
Route::get('XXXXXXXXXXXXXXXXXXXDownloadUserSession/{userid}','AppController@DownloadUserSession');
Route::get('XXXXXXXXXXXXXXXXXXXGetDBVersion','AppController@GetDBVersion');
//end of App links


//Images Directory

// Route::get('images/sliders/{image}', function($image = null)
// {
//     $path = '../../images/sliders/'.$image; 
//          return Response::download($path);
// });
// Route::get('images/events/{image}', function($image = null)
// {
//     $path = '../../images/events/'.$image;
//          return Response::download($path);
    
// });
// Route::get('images/sponsors/{image}', function($image = null)
// {
//     $path = '../../images/sponsors/'.$image;
//          return Response::download($path);
// });
// Route::get('images/profiles/{image}', function($image = null)
// {
//     $path = '../../images/profiles/'.$image;
//          return Response::download($path);
// });               


 //Cpanel Routes
//useraccount

// Route::group(array('before'=>'guest'),function()
//  {   
//     Route::get('cpanel/login',array('uses' =>'CpanelUserAccount@getlogin','as'=>'getlogin'));
//      Route::group(array('before'=>'csrf'), function()
//      {
//         Route::post('cpanel/login',array('uses' =>'CpanelUserAccount@postlogin','as'=>'postlogin'));    
//      });
// });
 
// Route::group(array('before'=>'auth'),function()
// {
//     Route::get('/workshops/QWERTYUIOPASDFGHJKL/{workshop}/applicants/table', 'RegistrationController@table');
//     Route::get('/workshops/QWERTYUIOPASDFGHJKL/applicants/download', 'RegistrationController@downloadworkshops');
//     Route::get('/recruitment/QWERTYUIOPASDFGHJKL/applicants/table/{day}', 'RegistrationController@tablerecruitday');
//     Route::get('/recruitment/QWERTYUIOPASDFGHJKL/{committee}/applicants/table', 'RegistrationController@tablerecruit');

//     Route::get('/recruitment/QWERTYUIOPASDFGHJKL/applicants/download', 'RegistrationController@downloadrecruit');

//     Route::get('cpanel/','CpanelUserAccount@welcome');
//     Route::get('cpanel/logout','CpanelUserAccount@logout');
//     Route::get('cpanel/create-account',array('uses' =>'CpanelUserAccount@getcreate','as'=>'getcreate')); 
//     Route::post('cpanel/create-account',array('uses' =>'CpanelUserAccount@postcreate','as'=>'postcreate'));
//     Route::resource('cpanel/sliders','CpanelSliderController');
//     Route::resource('cpanel/sponsors', 'CpanelSponserController');
//     Route::resource('cpanel/events','CpanelEventController');
//     Route::resource('cpanel/messages', 'CpanelMessageController');
//     Route::post('cpanel/messages/reply/{email_id}', 'CpanelMessageController@reply');
//     Route::get('cpanel/change',array('uses' =>'CpanelUserAccount@GetChange','as'=>'getchange'));
//     Route::post('cpanel/change',array('uses' =>'CpanelUserAccount@PostChange','as'=>'postchange'));
    
    
//     // Route::get('cpanel/applicants/download', 'CpanelRegController@DownloadApllicantsData');
//     // Route::get('cpanel/applicants/profile/{id}', 'CpanelRegController@profile');
//     // Route::resource('cpanel/applicants', 'CpanelRegController');
// });

