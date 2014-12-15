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

Route::get('/','WebsiteController@home');
Route::get('/home','WebsiteController@home');
Route::get('/events','WebsiteController@events');
Route::get('/about','WebsiteController@about');
Route::post('/contactus','WebsiteController@contactus');
Route::get('events','WebsiteController@events');
Route::get('sponsors','WebsiteController@sponsors');
Route::get('events/{event_id}', 'WebsiteController@subevent');
                  //Cpanel Routes
//useraccount

Route::group(array('before'=>'guest'),function()
 {   
    Route::get('cpanel/login',array('uses' =>'CpanelUserAccount@getlogin','as'=>'getlogin'));
     Route::group(array('before'=>'csrf'), function()
     {
        Route::post('cpanel/login',array('uses' =>'CpanelUserAccount@postlogin','as'=>'postlogin'));    
     });
});
Route::group(array('before'=>'auth'),function()
{
    Route::get('cpanel/','CpanelUserAccount@welcome');
    Route::get('cpanel/logout','CpanelUserAccount@logout');
    Route::get('cpanel/create-account',array('uses' =>'CpanelUserAccount@getcreate','as'=>'getcreate')); 
    Route::post('cpanel/create-account',array('uses' =>'CpanelUserAccount@postcreate','as'=>'postcreate'));
    Route::resource('cpanel/sliders','CpanelSliderController');
    Route::resource('cpanel/sponsors', 'CpanelSponserController');
    Route::resource('cpanel/events','CpanelEventController');
    Route::resource('cpanel/messages', 'CpanelMessageController');
    Route::post('cpanel/messages/reply/{email_id}', 'CpanelMessageController@reply');
    Route::get('cpanel/change',array('uses' =>'CpanelUserAccount@GetChange','as'=>'getchange'));
    Route::post('cpanel/change',array('uses' =>'CpanelUserAccount@PostChange','as'=>'postchange'));
    
});

