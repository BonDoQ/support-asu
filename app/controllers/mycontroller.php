<?php
use Facebook\Facebook;
use Facebook\FacebookRequest;
use Facebook\GraphObject;
use Facebook\FacebookRequestException;
use Facebook\FacebookSession;
 class mycontroller extends BaseController
 {

 
    public function home()
   {

   	return View::make('html.home');
   }
   public function about()
   {
    
   	return View::make('html.about');
   }
   public function contact()
   {
     return View::make('html.contact');
   }
    public function index()
  {
    $events = Events::all();
    $sliders = Sliders::all();
    return View::make('html.index', compact('events','sliders'));
  }

  public function show($id)
  {
    $event  = Events::findOrFail($id);
    $events  = Events::orderBy('year', 'desc')->get();
    return View::make('html.show',compact('event','events'));
  }
  public function publish()
  {
   /* $data = file_get_contents('https://graph.facebook.com/4');
     print_r( $data );*/
     $handle=curl_init();
     curl_setopt( $handle, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
     //FacebookSession::enableAppSecretProof(true);

    FacebookSession::setDefaultApplication("824981840865938","0a53ccaacfdb2b1132d37b2f4ae5e87c");

// Use one of the helper classes to get a FacebookSession object.
//   FacebookRedirectLoginHelper
//   FacebookCanvasLoginHelper
//   FacebookJavaScriptLoginHelper
// or create a FacebookSession with a valid access token:
   // $session = new FacebookSession("CAACEdEose0cBAF12ZC9zquUwVBA6UbDt7AZCK2ZANymbNhgzdznM1vxcsJpYEYZCGDIVRMAlnOxQ3ylqbgL46vZBSMZCcV3JIeSb2JIpNa0L3ibWCYNvhZAJnrMueaZAIhof5cIB7IDSm7ZAGKYFQtflGOLYFQtaVQZBP7t1qWAyZCo9FTuOsCUaabeiqWt0scam9ZCFtKcHfVuxoOJ1sAmHpfoN");
    $session=new FacebookSession("CAACEdEose0cBAL4ehhLWKWYZCvxTBolIl1iNSi1d8eOlZALvesQLDzwFPwDEQGnqtQDaVc0GO14bXqZBC6tMsq0AJE8LNS7cIpXg4sIYSkAeOw1YwjwZAfVJmtengsBqeEDOA9yGXNgcuWsispKBdDXAKEq65UVtT38nwZBcDclmRtQXroakOMS1Ui8RNyLbZCJQHGLz3MiW3DqnFh2EYn");
   // $session = FacebookSession::newAppSession("824981840865938","0a53ccaacfdb2b1132d37b2f4ae5e87c");

   $page_id='930563353627018';
          // get page access token
          //print_r($access_token['access_token']) ;
            $access_token = (new FacebookRequest( $session , 'GET', '/me' ))
                   ->execute()->getGraphObject()->asArray();
               // echo $access_token['access_token'];
          // save access token in variable for later use  
            $access_token = $access_token['access_token'];

            $page_post = (new FacebookRequest($session, 'POST', '/me'. '/feed', array(
    'access_token' => $access_token,
    //'name' => 'Facebook API: Posting As A Page using Graph API v2.x and PHP SDK 4.0.x',
    //'link' => 'https://www.webniraj.com/2014/08/23/facebook-api-posting-as-a-page-using-graph-api-v2-x-and-php-sdk-4-0-x/',
    //'caption' => 'The Facebook API lets you post to Pages you administrate via the API. This tutorial shows you how to achieve this using the Facebook PHP SDK v4.0.x and Graph API 2.x.',
    'message' => 'Test 1 of facebook SDK php version',
  ) ))->execute()->getGraphObject()->asArray();
 
// return post_id
print_r( $page_post );
  }
 }
