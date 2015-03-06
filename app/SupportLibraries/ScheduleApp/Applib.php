<?php


function getAllSessions($year){

/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

        $response = array();
        
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            ///printf("Connect failed: %s\n", mysqli_connect_error());
           ///exit();

        $response["success"] = 0;
        $response["message"] = "Connection failed: " +  mysqli_connect_error();
 
        return json_encode($response);
        }

       // mysqli_query($con, 'CREATE TEMPORARY TABLE `table`');
        // Connecting to mysql database
       // $con = mysql_connect('localhost', DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
      //  $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

/*the follwing code will list all the sessions*/

//array for JSON response
///$response = array();

if($year != null){

    // get all sessions from sessions table
    ///$result = mysql_query("SELECT * FROM Session where year = '$year' ") or die(mysql_error());
    
    $str="SELECT * FROM Session where year = '$year'";
    $result=$con->query($str);

    

    // check for empty result
    if (mysqli_num_rows ($result)!=0) {
        if ($result->num_rows > 0) {
            
            //$result = $result->fetch_assoc();

        // looping through all results
        // sessions node
    	    $response["sessions"] = array();
    	    while ($row = mysqli_fetch_array($result)) {
        		// temp user array
        		$session = array();
                $session["sessionId"] = $row["sessionId"];
        		$session["subject"] = $row["subject"];
        		$session["year"] = $row["year"];
        		$session["beginTime"] = $row["beginTime"];
                $session["finishTime"] = $row["finishTime"];
        		$session["day"] = $row["day"];
        		$session["SLFlag"] = $row["SLFlag"];
        		$session["sectionNumber"] = $row["sectionNumber"];
        		$session["instructorId"] = $row["instructorId"];
        		$session["placeId"] = $row["PlaceId"];
        		
                // push single session into final response array
                array_push($response["sessions"], $session);
    		}
    		 // success
    		$response["success"] = 1;
    		
    		// echoing JSON response
    		return json_encode($response);
    	   }
        } 
    	else
    	{
        // no products found
        $response["success"] = 0;
        $response["message"] = "No products found";

        // echo no users JSON
        return json_encode($response);
    }
}else{
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    return json_encode($response);
}
}

function getAllNotes($userId){
 /*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

 
// array for JSON response

        $response = array();
        
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            ///printf("Connect failed: %s\n", mysqli_connect_error());
           ///exit();

        $response["success"] = 0;
        $response["message"] = "Connection failed: " +  mysqli_connect_error();
 
        return json_encode($response);
        }


/*
 * Following code will list all the notes
 */

 if($userId != null){

    // get all notes from Notes table

    $str="SELECT * FROM Note WHERE userId = '$userId'";
    $result=$con->query($str);
     
    // check for empty result
    if (mysqli_num_rows($result) > 0) {
        // looping through all results
        // notes node
        $response["notes"] = array();
     
        while ($row = mysqli_fetch_array($result)) {
            // temp user array
            $notes = array();
            $notes["id"] = $row["id"];
            $notes["content"] = $row["content"];
            $notes["Time"] = $row["Time"];
            $notes["day"] = $row["day"];
            $notes["userId"] = $row["userId"];
            $notes["Title"] = $row["Title"];
            // push single note into final response array
            array_push($response["notes"], $notes);
        }
        // success
        $response["success"] = 1;
        // echoing JSON response
        return json_encode($response);
        
    } else {
        // no notes found
        $response["success"] = 0;
        $response["message"] = "No notes found";    
        return json_encode($response);
        }
}else{
     
         // required field is missing
        $response["success"] = 0;
        $response["message"] = "Required field(s) is missing";
     
        // echoing JSON response
        return json_encode($response);
} 
}

function deleteNote($userId){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

// array for JSON response

        $response = array();
        
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            ///printf("Connect failed: %s\n", mysqli_connect_error());
           ///exit();

        $response["success"] = 0;
        $response["message"] = "Connection failed: " +  mysqli_connect_error();
 
        return json_encode($response);
        }


/*
 * Following code will delete a Note from table
 * A Note is identified by user id (userId)
 */
 
 
// check for required fields
if ($userId != null) {
 
    // mysql delete row with matched userId
    $result=$con->query("DELETE FROM Note WHERE userId = '$userId'");


    // check if row deleted or not
    if (mysqli_affected_rows() > 0) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "Note successfully deleted";
 
        // echoing JSON response
        return json_encode($response);
    } else {
        // no Note found
        $response["success"] = 0;
        $response["message"] = "No Notes found";
 
        // echo no users JSON
        return json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    return json_encode($response);
}

}

function login($e_mail,$password){
/*
 * All database connection variables
 */
    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server
 

// array for JSON response
        $response = array();
        
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            ///printf("Connect failed: %s\n", mysqli_connect_error());
           ///exit();

        $response["success"] = 0;
        $response["message"] = "Connection failed: " +  mysqli_connect_error();
 
        return json_encode($response);
        }



/*the following code will check if the mail and password are correct or not, if correct, returns them*/

// array for JSON response
$response = array();

// check for required fields

if($e_mail!=null && $password!=null){

//var_dump($e_mail . " " .$password);
 // connecting to db
   // $db = new DB_CONNECT();

    // mysql update row with matched e_mail and password
   // $result = mysql_query("SELECT userId , avatarNum , userName , e_mail , password , year FROM User WHERE e_mail = '$e_mail' AND password = '$password'");
    $str="SELECT userId , avatarNum , userName , e_mail , password , year FROM User WHERE e_mail = '$e_mail' AND password = '$password' ";
    $result=$con->query($str);
 // var_dump($result);
  // check for empty result
     //var_dump($result);
    if (mysqli_num_rows ($result)!=0) {
        if ($result->num_rows > 0) {
            
            $result = $result->fetch_assoc();

            $user = array();
            $user["userId"] = $result["userId"];
            $user["userName"] = $result["userName"];
            $user["avatarNum"] = $result["avatarNum"];
            $user["e_mail"] = $result["e_mail"];
            $user["password"] = $result["password"];
            $user["year"] = $result["year"];

            // user node
            $response["user"] = array();
 
            array_push($response["user"], $user);
 
            // successfully updated
            $response["success"] = 1;
            $response["message"] = "Loged in successfully.";
 
            // echoing JSON response
            return json_encode($response);
        }
    }
    else{
        //didn't update
        $response["success"] = 0;
        $response["message"] = "email or password are wrong.";

        // echoing JSON response
        return json_encode($response);
    }

} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    return json_encode($response);
}

}

function registration($userName, $year, $e_mail, $password, $phone, $avatarNum){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server


        // Connecting to mysql database
       $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
/*
 * Following code will create a new User row
 * All User details are read from HTTP Post Request
 */
 
// array for JSON response
$response = array();
 
// check for required fields
if ($userName!=null && $year!= null && $e_mail != null && $password != null && $phone != null && $avatarNum!= null) {
 
   // mysql inserting a new row
     $result=$con->query("INSERT INTO User(avatarNum , userName, year, e_mail , password , phone) VALUES('$avatarNum','$userName', '$year', '$e_mail' , '$password' , '$phone')");

    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "User successfully created.";
 
        // echoing JSON response
        return json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
 
        // echoing JSON response
        return json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    return json_encode($response);
}
}

function update_user($userId, $new_userName, $oldPassword, $newPassword){
/*
 * All database connection variables
 */
    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server
 
// array for JSON response
$response = array();
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            ///printf("Connect failed: %s\n", mysqli_connect_error());
           ///exit();

        $response["success"] = 0;
        $response["message"] = "Connection failed: " +  mysqli_connect_error();
 
        return json_encode($response);
        }

/*the following code will update the username given the email and password*/
// check for required fields

if($userId != null && $new_userName != null && $oldPassword != null && $newPassword != null){
    
    // mysql update row
     $result=$con->query("UPDATE User SET userName = '$new_userName', password = '$newPassword' WHERE userId = '$userId' And password = '$oldPassword'");
   

    // check if row inserted or not
    if (mysql_affected_rows() !== 0) {
            // successfully updated
            $response["success"] = 1;
            $response["message"] = "user successfully updated.";
 
            // echoing JSON response
            return json_encode($response);
    }
    else{
        //didn't update
        $response["success"] = 0;
        $response["message"] = "user unfotunately didn't updated.";

        // echoing JSON response
        return  json_encode($response);
    }

}
else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    return  json_encode($response);
}


}

function uploadNote($content, $Time, $day, $userId, $Title){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

 
 // array for JSON response
        $response = array();
        
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            ///printf("Connect failed: %s\n", mysqli_connect_error());
           ///exit();

        $response["success"] = 0;
        $response["message"] = "Connection failed: " +  mysqli_connect_error();
 
        return json_encode($response);
        }

/*
 * Following code will create a new Note for User 
 */

// check for required fields
if ($content != null&& $Time != null&& $day != null&& $userId != null&& $Title != null) {
    
    // mysql inserting a new row

     $result=$con->query("INSERT INTO Note(content, Time, day, userId, Title) VALUES('$content', '$Time', '$day', '$userId', '$Title')");


    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Note successfully created.";
 
        // echoing JSON response
        return json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred, failed to inser a row.";
 
        // echoing JSON response
        return json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    return json_encode($response);
}
}

function UploadUserSession($userId, $sessionId){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

    
    // array for JSON response
        $response = array();
        
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            ///printf("Connect failed: %s\n", mysqli_connect_error());
           ///exit();

        $response["success"] = 0;
        $response["message"] = "Connection failed: " +  mysqli_connect_error();
 
        return json_encode($response);
        }

/*
 * Following code will create a new UserSession for User 
 */
 
// check for required fields
if ($userId != null && $sessionId != null) {
    
    // mysql inserting a new row
     $result=$con->query("INSERT INTO User_Session(userId, sessionId) VALUES('$userId', '$sessionId')");


    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "User_Session successfully created.";
 
        // echoing JSON response
        return json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
 
        // echoing JSON response
        return json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    return json_encode($response);
}
}

function userDetails($userId){
/*
 * All database connection variables
 */
    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server
// array for JSON response
$response = array();
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            ///printf("Connect failed: %s\n", mysqli_connect_error());
           ///exit();

        $response["success"] = 0;
        $response["message"] = "Connection failed: " +  mysqli_connect_error();
 
        return json_encode($response);
        }


 
        
 
/*the following code will update the username given the email and password*/


// check for required fields

if($userId != null){

 
    // mysql update row with matched e_mail and password
    
    $result=$con->query("SELECT userName FROM User WHERE userId = '$userId'");


// check if row inserted or not
     if (!empty($result)) {
        if (mysql_num_rows($result) > 0) {

            $result = mysql_fetch_array($result);
            // user node
            $response["userName"] = $result["userName"];
 
            // successfully updated
            $response["success"] = 1;
            $response["message"] = "user successfully found.";
 
            // echoing JSON response
            echo json_encode($response);

    }
}
    else{
        //didn't update
        $response["success"] = 0;
        $response["message"] = "user unfotunately didn't found.";

        // echoing JSON response
        echo json_encode($response);
    }

}
else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
}

function deleteUserSession($userId){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

/*
 * Following code will delete a UserSessions from table
 * A UserSession is identified by user id (userId)
 */
 
// array for JSON response
$response = array(); 
 
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            ///printf("Connect failed: %s\n", mysqli_connect_error());
           ///exit();

        $response["success"] = 0;
        $response["message"] = "Connection failed: " +  mysqli_connect_error();
 
        return json_encode($response);
        } 
 
 
// check for required fields
if ($userId != null) {
    
    // mysql delete row with matched userId
    $result = mysql_query("DELETE FROM User_Session WHERE userId = '$userId' ");
 
    // check if row deleted or not
    if (mysql_affected_rows() > 0) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "UserSession successfully deleted";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // no UserSession found
        $response["success"] = 0;
        $response["message"] = "No UserSessionfound";
 
        // echo no users JSON
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
}

function DownloadUserSession(){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

 
// array for JSON response
$response = array();
 
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            ///printf("Connect failed: %s\n", mysqli_connect_error());
           ///exit();

        $response["success"] = 0;
        $response["message"] = "Connection failed: " +  mysqli_connect_error();
 
        return json_encode($response);
        } 

		/*
 * Following code will Download UserSession
 */
 
// check for post data
if ($userId !=null) {

    // get a UserSession from UserSession table
    
    $result=$con->query("SELECT * FROM User_Session WHERE userId = '$userId' ");
 
    if (!empty($result)) {
        // check for empty result
        if (mysqli_num_rows($result) > 0) {

            // UserSession node
            $response["userSession"] = array();
 
            while ($row = mysqli_fetch_array($result)){
 
                $UserSession = array();
                $UserSession["userId"] = $row["userId"];
                $UserSession["sessionId"] = $row["sessionId"];
                
                array_push($response["userSession"], $UserSession);
            }
            // success
            $response["success"] = 1;

            // echoing JSON response
            return json_encode($response);
        } else {
            // no UserSession found
            $response["success"] = 0;
            $response["message"] = "No UserSession found";
 
            // echo no users JSON
            return json_encode($response);
        }
    } else {
        // no UserSession found
        $response["success"] = 0;
        $response["message"] = "No UserSession found";
 
        // echo no UserSessions JSON
        return json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    return json_encode($response);
}
}

function getAllInstructors($year){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

/*
 * Following code will list all the instructors
 */
 
// array for JSON response
$response = array();

        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            ///printf("Connect failed: %s\n", mysqli_connect_error());
           ///exit();

        $response["success"] = 0;
        $response["message"] = "Connection failed: " +  mysqli_connect_error();
 
        return json_encode($response);
        } 

if($year != null){
    
     // get all instructors from instructor table
    $result=$con->query("SELECT i.instructorId , i.name FROM Instructor i inner Join Instructor_year y on i.instructorId=y.instructorId where y.year = '$year' ");
     
    // check for empty result
    if (mysqli_num_rows($result) > 0) {
        // looping through all results
        // instructors node
        $response["instructors"] = array();
     
        while ($row = mysqli_fetch_array($result)) {
            // temp user array
            $instructor = array();
            $instructor["instructorId"] = $row["instructorId"];
            $instructor["name"] = $row["name"];
     
            // push single instructors into final response array
            array_push($response["instructors"], $instructor);
        }
        // success
        $response["success"] = 1;
     
        // echoing JSON response
        return json_encode($response);
    } else {
        // no instructors found
        $response["success"] = 0;
        $response["message"] = "No instructors found";
     
        // echo no users JSON
        return json_encode($response);
    }
}else{

    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    return json_encode($response);
}
}

function getAllPlaces(){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

 
// array for JSON response
$response = array();

        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            ///printf("Connect failed: %s\n", mysqli_connect_error());
           ///exit();

        $response["success"] = 0;
        $response["message"] = "Connection failed: " +  mysqli_connect_error();
 
        return json_encode($response);
        } 
 
/*
 * Following code will list all the places
 */
 // get all places from Session_Place table
    $result=$con->query("SELECT * FROM Session_Place");
 
 
// check for empty result
if (mysqli_num_rows($result) > 0) {
    // looping through all results
    // places node
    $response["places"] = array();
 
    while ($row = mysqli_fetch_array($result)) {
        // temp user array
        $place = array();
        $place["placeId"] = $row["placeId"];
        $place["name"] = $row["name"]; 
        $place["address"] = $row["address"];
        // push single place into final response array
        array_push($response["places"], $place);
    }
    // success
    $response["success"] = 1;
 
    // echoing JSON response
    return json_encode($response);
} else {
    // no places found
    $response["success"] = 0;
    $response["message"] = "No instructors found";
 
    // echo no users JSON
    return json_encode($response);
}
}

function getDBVersion(){
    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server


	
	
// array for JSON response
$response = array();

        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            ///printf("Connect failed: %s\n", mysqli_connect_error());
           ///exit();

        $response["success"] = 0;
        $response["message"] = "Connection failed: " +  mysqli_connect_error();
 
        return json_encode($response);
        } 
 
 
/*
 * Following code will list all the notes
 */

 
 ///////////if(isset($_GET["userId"])){

    //////////////$userId = $_GET['userId'];
     
    // get all version from DB_Version table
    $result=$con->query("SELECT version FROM DB_Version");
     
    // check for empty result
    if (mysqli_num_rows($result) > 0) {
        // looping through all results
        
        $response["versions"] = array();
     
        while ($row = mysqli_fetch_array($result)) {
            // temp user array
            $version = array();
            $version["version"] = $row["version"];
            
            // push single version into final response array
            array_push($response["versions"], $version);
        }
        // success
        $response["success"] = 1;
        // echoing JSON response
        return json_encode($response);
        
    } else {
        // no version found
        $response["success"] = 0;
        $response["message"] = "No versuib found";    
        return json_encode($response);
        }
        }
?>