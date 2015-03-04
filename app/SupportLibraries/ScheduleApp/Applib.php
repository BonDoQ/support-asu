<?php


function getAllSessions(){

/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server


        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

/*the follwing code will list all the sessions*/

//array for JSON response
$response = array();

if(isset($_GET['year'])){

    $year = $_GET['year'];

    // get all sessions from sessions table
    $result = mysql_query("SELECT * FROM Session where year = '$year' ") or die(mysql_error());


    // check for empty result
    if (mysql_num_rows($result) > 0) {
        // looping through all results
        // sessions node
    	    $response["sessions"] = array();
    	    while ($row = mysql_fetch_array($result)) {
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
    		echo json_encode($response);
    	} 
    	else
    	{
        // no products found
        $response["success"] = 0;
        $response["message"] = "No products found";

        // echo no users JSON
        echo json_encode($response);
    }
}else{
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
}

function getAllNotes(){
 /*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server


        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());


/*
 * Following code will list all the notes
 */
 
// array for JSON response
$response = array();

 if(isset($_GET["userId"])){

    $userId = $_GET['userId'];
     
    // get all notes from Notes table
    $result = mysql_query("SELECT * FROM Note WHERE userId = '$userId'") or die(mysql_error());
     
    // check for empty result
    if (mysql_num_rows($result) > 0) {
        // looping through all results
        // notes node
        $response["notes"] = array();
     
        while ($row = mysql_fetch_array($result)) {
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
        echo json_encode($response);
        
    } else {
        // no notes found
        $response["success"] = 0;
        $response["message"] = "No notes found";    
        echo json_encode($response);
        }
}else{
     
         // required field is missing
        $response["success"] = 0;
        $response["message"] = "Required field(s) is missing";
     
        // echoing JSON response
        echo json_encode($response);
} 
}
function deleteNote(){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

/*
 * Following code will delete a Note from table
 * A Note is identified by user id (userId)
 */
 
// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['userId'])) {
    $userId = $_POST['userId'];
 
    // mysql delete row with matched userId
    $result = mysql_query("DELETE FROM Note WHERE userId = '$userId' ");
 
    // check if row deleted or not
    if (mysql_affected_rows() > 0) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "Note successfully deleted";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // no Note found
        $response["success"] = 0;
        $response["message"] = "No Notes found";
 
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
function login(){
/*
 * All database connection variables
 */
    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server
 

        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());



/*the following code will check if the mail and password are correct or not, if correct, returns them*/

// array for JSON response
$response = array();

// check for required fields

if(isset($_GET['e_mail']) and isset($_GET['password'])){
$e_mail = $_GET['e_mail'];
$password = $_GET['password'];


 // connecting to db
    $db = new DB_CONNECT();

    // mysql update row with matched e_mail and password
    $result = mysql_query("SELECT userId , avatarNum , userName , e_mail , password , year FROM User WHERE e_mail = '$e_mail' AND password = '$password'");
  // check for empty result
    if (!empty($result)) {
        if (mysql_num_rows($result) > 0) {
            
            $result = mysql_fetch_array($result);

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
            echo json_encode($response);
        }
    }
    else{
        //didn't update
        $response["success"] = 0;
        $response["message"] = "email or password are wrong.";

        // echoing JSON response
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
function registration(){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server


        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

/*
 * Following code will create a new User row
 * All User details are read from HTTP Post Request
 */
 
// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['userName']) && isset($_POST['year']) && isset($_POST['e_mail']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['avatarNum'])) {
 
    $userName = $_POST['userName'];
    $year = $_POST['year'];
    $e_mail = $_POST['e_mail'];
    $password = $_POST['password']; 
    $phone = $_POST['phone'];
    $avatarNum = $_POST['avatarNum'];
 
 
   // mysql inserting a new row
    $result = mysql_query("INSERT INTO User(avatarNum , userName, year, e_mail , password , phone) VALUES('$avatarNum','$userName', '$year', '$e_mail' , '$password' , '$phone')");
 
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "User successfully created.";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
 
        // echoing JSON response
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
function update_user(){
/*
 * All database connection variables
 */
    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server
 
 //connect file
 class DB_CONNECT {

    // constructor
    function __construct() {
        // connecting to database
        $this->connect();
    }

    // destructor
    function __destruct() {
        // closing db connection
        $this->close();
    }

    /**
     * Function to connect with database
     */
    function connect() {
        // import database connection variables

        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

        // returing connection cursor
        return $con;
    }

    /**
     * Function to close db connection
     */
    function close() {
        // closing db connection
        mysql_close();
    }

}//end of connect file


/*the following code will update the username given the email and password*/

// array for JSON response
$response = array();

// check for required fields

if(isset($_POST['userId']) && isset($_POST['userName']) && isset($_POST['oldPassword']) && isset($_POST['newPassword'])){

    $userId = $_POST['userId'];
    $new_userName = $_POST['userName'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];

 // connecting to db
    $db = new DB_CONNECT();

    // mysql update row
    $result = mysql_query("UPDATE User SET userName = '$new_userName', password = '$newPassword' WHERE userId = '$userId' And password = '$oldPassword'");
    // check if row inserted or not
    if (mysql_affected_rows() !== 0) {
            // successfully updated
            $response["success"] = 1;
            $response["message"] = "user successfully updated.";
 
            // echoing JSON response
            echo json_encode($response);
    }
    else{
        //didn't update
        $response["success"] = 0;
        $response["message"] = "user unfotunately didn't updated.";

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
function uploadNote(){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

/**
 * A class file to connect to database
 */
class DB_CONNECT {

    // constructor
    function __construct() {
        // connecting to database
        $this->connect();
    }

    // destructor
    function __destruct() {
        // closing db connection
        $this->close();
    }

    /**
     * Function to connect with database
     */
    function connect() {

        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

        // returing connection cursor
        return $con;
    }

    /**
     * Function to close db connection
     */
    function close() {
        // closing db connection
        mysql_close();
    }

}

/*
 * Following code will create a new Note for User 
 */
 
// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['content']) && isset($_POST['Time'])&& isset($_POST['day'])&& isset($_POST['userId'])&& isset($_POST['Title'])) {
 
    $content = $_POST['content'];
    $Time = $_POST['Time'];
    $day = $_POST['day'];
    $userId = $_POST['userId'];
    $Title = $_POST['Title'];
    
 
    // connecting to db
    $db = new DB_CONNECT();
 
    // mysql inserting a new row
    $result = mysql_query("INSERT INTO Note(content, Time, day, userId, Title) VALUES('$content', '$Time', '$day', '$userId', '$Title')");
 
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Note successfully created.";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred, failed to inser a row.";
 
        // echoing JSON response
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
function UploadUserSession(){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

    
        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

    
/*
 * Following code will create a new UserSession for User 
 */
 
// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['userId']) && isset($_POST['sessionId'])) {
 
    $userId = $_POST['userId'];
    $sessionId = $_POST['sessionId'];
 
    
    // mysql inserting a new row
    $result = mysql_query("INSERT INTO User_Session(userId, sessionId) VALUES('$userId', '$sessionId')");
 
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "User_Session successfully created.";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
 
        // echoing JSON response
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

function userDetails(){
/*
 * All database connection variables
 */
    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server
 
        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

 
/*the following code will update the username given the email and password*/

// array for JSON response
$response = array();

// check for required fields

if(isset($_GET['userId'])){

    $userId = $_GET['userId'];

 
    // mysql update row with matched e_mail and password
    $result = mysql_query("SELECT userName FROM User WHERE userId = '$userId'");
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
function deleteUserSession(){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

/**
 * A class file to connect to database
 */
class DB_CONNECT {

    // constructor
    function __construct() {
        // connecting to database
        $this->connect();
    }

    // destructor
    function __destruct() {
        // closing db connection
        $this->close();
    }

    /**
     * Function to connect with database
     */
    function connect() {

        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

        // returing connection cursor
        return $con;
    }

    /**
     * Function to close db connection
     */
    function close() {
        // closing db connection
        mysql_close();
    }

}

/*
 * Following code will delete a UserSessions from table
 * A UserSession is identified by user id (userId)
 */
 
// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['userId'])) {
    $userId = $_POST['userId'];
 
    // connecting to db
    $db = new DB_CONNECT();
 
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

        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());
 
/*
 * Following code will Download UserSession
 */
 
// array for JSON response
$response = array();
 
// check for post data
if (isset($_GET["userId"])) {

    $userId = $_GET['userId'];
 
    // get a UserSession from UserSession table
    $result = mysql_query("SELECT * FROM User_Session WHERE userId = '$userId' ");
 
    if (!empty($result)) {
        // check for empty result
        if (mysql_num_rows($result) > 0) {

            // UserSession node
            $response["userSession"] = array();
 
            while ($row = mysql_fetch_array($result)){
 
                $UserSession = array();
                $UserSession["userId"] = $row["userId"];
                $UserSession["sessionId"] = $row["sessionId"];
                
                array_push($response["userSession"], $UserSession);
            }
            // success
            $response["success"] = 1;

            // echoing JSON response
            echo json_encode($response);
        } else {
            // no UserSession found
            $response["success"] = 0;
            $response["message"] = "No UserSession found";
 
            // echo no users JSON
            echo json_encode($response);
        }
    } else {
        // no UserSession found
        $response["success"] = 0;
        $response["message"] = "No UserSession found";
 
        // echo no UserSessions JSON
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
function getAllInstructors(){
/*
 * All database connection variables
 */

    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server

    
        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

/*
 * Following code will list all the instructors
 */
 
// array for JSON response
$response = array();
 

if(isset($_GET['year'])){
    
     $year = $_GET['year'];
    // get all instructors from instructor table
    $result = mysql_query("SELECT i.instructorId , i.name FROM Instructor i inner Join Instructor_year y on i.instructorId=y.instructorId where y.year = '$year' ") or die(mysql_error());
     
    // check for empty result
    if (mysql_num_rows($result) > 0) {
        // looping through all results
        // instructors node
        $response["instructors"] = array();
     
        while ($row = mysql_fetch_array($result)) {
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
        echo json_encode($response);
    } else {
        // no instructors found
        $response["success"] = 0;
        $response["message"] = "No instructors found";
     
        // echo no users JSON
        echo json_encode($response);
    }
}else{

    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
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

        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

 
/*
 * Following code will list all the places
 */
 
// array for JSON response
$response = array();
// get all places from Session_Place table
$result = mysql_query("SELECT *FROM Session_Place") or die(mysql_error());
 
 
// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // places node
    $response["places"] = array();
 
    while ($row = mysql_fetch_array($result)) {
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
    echo json_encode($response);
} else {
    // no places found
    $response["success"] = 0;
    $response["message"] = "No instructors found";
 
    // echo no users JSON
    echo json_encode($response);
}
}
function getDBVersion(){
    define('DB_USER', "supportUser"); // db user
    define('DB_PASSWORD', "supportPass123"); // db password (mention your db password here)
    define('DB_DATABASE', "support"); // database name
    define('DB_SERVER', "178.62.208.34"); // db server


    // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

/*
 * Following code will list all the notes
 */
 
// array for JSON response
$response = array();
 
 
 ///////////if(isset($_GET["userId"])){

    //////////////$userId = $_GET['userId'];
     
    // get all version from DB_Version table
    $result = mysql_query("SELECT version FROM DB_Version") or die(mysql_error());
     
    // check for empty result
    if (mysql_num_rows($result) > 0) {
        // looping through all results
        
        $response["versions"] = array();
     
        while ($row = mysql_fetch_array($result)) {
            // temp user array
            $version = array();
            $version["version"] = $row["version"];
            
            // push single version into final response array
            array_push($response["versions"], $version);
        }
        // success
        $response["success"] = 1;
        // echoing JSON response
        echo json_encode($response);
        
    } else {
        // no version found
        $response["success"] = 0;
        $response["message"] = "No versuib found";    
        echo json_encode($response);
        }
        }
?>