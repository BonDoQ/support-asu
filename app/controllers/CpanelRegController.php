<?php

class CpanelRegController extends BaseController {



	public function index()
	{
	 if(Auth::user()->position=="President"||Auth::user()->position=="Vice President"
           ||Auth::user()->position=="HR Head"||Auth::user()->position=="HR Member")
        {
		$apps = Register::all();
		return View::make('Cpanel.register', ['apps' => $apps]);
	    }
	    else
	    	return Redirect::to('/cpanel');
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

	public static function get_days()
	{
	    $compelte="tttttttt";
	    $days=array();
	    $day = Reg::where('workshop', '=', 'counter')->first();
	    $on = 0;
	      if($day->Monday!=$compelte)
	     {
	      $days[$on]="Monday";
	      $on ++;
	     }
	     if ($day->Tuesday!=$compelte)
	     {
	      $days[$on]="Tuesday";
	      $on ++;
	     }
	     

	     return Response::json($days);

	}

	public static function get_time($day)
	{
		$counter_data = Reg::select($day)->where('workshop', '=', 'counter')->first();
		//$time_data = Reg::select($day)->where('workshop', '=', $workshop_name)->first();

		//$time = $time_data[$day];
		$counter = $counter_data[$day];

		 $times = array();
		 $t = "9";
		 $M = "AM";
		 $on = 0;
		 for ($i = 0; $i < 8; $i++)
		 {
		 	if (($counter[$i] < "t"))
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

	public static function add($day, $time)
	{

		//$res = Reg::where('workshop', '=', $workshop_name)->first();
		//$day_hours = $res[$day];

		$counter = Reg::where('workshop', '=', 'counter')->first();
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

		return true;
	}

	public static function remove($day, $time)
	{

		/*$res = Reg::where('workshop', '=', $workshop_name)->first();
		$day_hours = $res[$day];*/

		$counter = Reg::where('workshop', '=', 'counter')->first();
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

		return true;
	}
}
