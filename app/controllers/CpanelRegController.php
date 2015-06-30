<?php

class CpanelRegController extends BaseController {



	public function index()
	{
	 if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
           ||Auth::user()->position=="HR Head"||Auth::user()->position=="HR Member"||Auth::user()->position=="Adviser Head")
        {
			$apps = Register::all();
			 return View::make('Cpanel.register', ['apps' => $apps]);
	    }
	    else
	    	return Redirect::to('/cpanel');
	}
	public function DownloadApllicantsData()
	{
		$data=Register::all();
        $output = implode(",", array('Name', 'Email','Mobile','Address','Date of Birth','Participation Year','Old Committee', 'Old Team', 'Old Position','New Committee', 'New Team', 'New Position','Comments'));
        $output.="\n";
   		 foreach ($data as $row)
    	 {
        	$output.=implode(",", array($row->name, $row->email,$row->mobile ,$row->address,
              $row->birthday,$row->year,$row->oldcommittee , $row->oldteam,$row->oldposition." ".$row->newcommittee,$row->newteam,$row->newposition,$row->comments));
        	$output.="\n";
         }
        // headers used to make the file "downloadable", we set them manually
        // since we can't use Laravel's Response::download() function
       $headers = array(
          'Content-Type' => 'text/csv',
          'Content-Disposition' => 'attachment; filename="Applicants Data.csv" ',
         );
      return Response::make($output, 200, $headers);
	}
	public function profile($id)
	{
		$user_profile_data=Register::where('id','=',$id)->first();
		//var_dump($user_profile_data);
		return View::make('Cpanel.profile',['profile'=>$user_profile_data]);
	}

	public function update($app_id)
	{
		if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
           ||Auth::user()->position=="HR Head"||Auth::user()->position=="HR Member")
        {
		$app = Register::where('id', '=', $app_id)->first();

		if(Input::get('status')=='A') $app->status = 1;
  		elseif(Input::get('status')=='R') $app->status = 2;
  		else $app->status = 0;

        // if($option=='A') $app->status = 1;
        // elseif($option=='R') $app->status = 2;

        $app->save();

        //Directing to the index route.
        return Redirect::route('cpanel.applicants.index');
       }
       else
         return Redirect::to('/cpanel');
	}

	public function destroy($app_id)
	{
         if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
           ||Auth::user()->position=="HR Head")
        {
		  //Finding the vent.
        $app = Register::find($app_id);
			CpanelRegController::remove($app->workshop, $app->day, $app->time);
        		// return Redirect::back()->with('fail', 'Applican was not removed due to a problem.');
	        if($app->delete())
	        {
	        	return Redirect::back()->with('warn', 'Applicant was Deleted Successfully.');
	        }
	        else
	        {
	        	return Redirect::back()->with('fail', 'Applican was not removed due to a problem.');
	        }
	    }
	    else
	       return Redirect::to('/cpanel')->with('warn', 'You don`t have Authority to do it!');
	}

	public static function get_days($workshop)
	{
	    // $compelte="tttttt";
	    $compelte = "6660666";
	    $days=array();
	    $day = Reg::where('workshop', '=', $workshop)->first();
	    $on = 0;
	      if($day->Wednesday!=$compelte)
	     {
	      $days[$on]="Wednesday";
	      $on ++;
	     }
	     if ($day->Thursday!=$compelte)
	     {
	      $days[$on]="Thursday";
	      $on ++;
	     }
	     

	     return Response::json($days);

	}

	public static function get_time($workshop, $day)
	{
		// $counter_data = Reg::select($day)->where('workshop', '=', 'counter')->first();
		$time_data = Reg::select($day)->where('workshop', '=', $workshop)->first();

		$time = $time_data[$day];
		// $counter = $counter_data[$day];

		 $times = array();
		 $t = "9";
		 $M = "AM";
		 $on = 0;
		 for ($i = 0; $i < 7; $i++)
		 {
		 	if ($time[$i] < "3" && $i != 3) //the i != 3 thing is for the break
		 	{
		 		if ($t < "10")
		 			$times[$on] = "0" . $t . ":00 " . $M;
		 		else
					$times[$on] = $t . ":00 " . $M;
				$on ++;
		 	}
		 	$t++;
		 	if ($t == "12") $M = "PM";
		 	if ($t > "12") $t = "1";
		 }

		 return Response::json($times);
	}

	public static function add($workshop, $day, $time)
	{

		// $res = Reg::where('workshop', '=', $workshop)->first();
		// $day_hours = $res[$day];

		// $counter = Reg::where('workshop', '=', 'counter')->first();
		// $cur_counter = $counter[$day];

		$counter = Reg::where('workshop', '=', $workshop)->first();
		$cur_counter = $counter[$day];

		$M = substr($time, -2);
	    $time_trun = substr($time, 0, 2);
	    if ($M == "AM") {
	    	$time_index = (int)$time_trun - 9;
	    } else if ($M == "PM") {
	    	$time_index = (int)$time_trun - 9 + 12;
	    }
      	

      	/*$hours2 = str_split($day_hours);
		$hours2[$time_index] += 1;
		$hours2_str = "";
		foreach ($hours2 as $hour) {
			$hours2_str = $hours2_str . $hour;
		}
		$res->$day = $hours2_str;*/

		$preco = substr($cur_counter, 0, $time_index);
		$itco = substr($cur_counter, $time_index, 1);
		$postco = substr($cur_counter, $time_index+1, 7-$time_index);
		$num = ord($itco) + 1;
		$itco = chr($num);
		$count2_str = $preco . $itco . $postco;
		$counter->$day = $count2_str;

		//$res->save();
		$counter->save();
	}

	public static function remove($workshop, $day, $time)
	{

		// $res = Reg::where('workshop', '=', $workshop)->first();
		// $day_hours = $res[$day];

		// $counter = Reg::where('workshop', '=', 'counter')->first();
		// $cur_counter = $counter[$day];

		$counter = Reg::where('workshop', '=', $workshop)->first();
		$cur_counter = $counter[$day];

		$M = substr($time, -2);
	    $time_trun = substr($time, 0, 2);
	    if ($M == "AM") {
	    	$time_index = (int)$time_trun - 9;
	    } else if ($M == "PM") {
	    	$time_index = (int)$time_trun - 9 + 12;
	    }
      	

      	/*$hours2 = str_split($day_hours);
		$hours2[$time_index] -= 1;
		$hours2_str = "";
		foreach ($hours2 as $hour) {
			$hours2_str = $hours2_str . $hour;
		}
		$res->$day = $hours2_str;*/

		$preco = substr($cur_counter, 0, $time_index);
		$itco = substr($cur_counter, $time_index, 1);
		$postco = substr($cur_counter, $time_index+1, 7-$time_index);
		$num = ord($itco) - 1;
		$itco = chr($num);
		$count2_str = $preco . $itco . $postco;
		$counter->$day = $count2_str;

		//$res->save();
		$counter->save();
	}
}
