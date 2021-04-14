<?php

include_once 'VLdb.php';
// use our connection file so that our $conn dbms connection variable can be used
// this file will serve as the setting for any database entries.


//once a visitor clicks the submit button on the data entry fields for serverhosting
//requests, the info will be sent directly to the hosting requests database,
// more functionality with this information will be done later to help admins figure out 
//how to best use the information for server hosting decisions.
if(isset($_POST['submit']))
{    
     $GameName = $_POST['GameName'];
     $ServerLocation = $_POST['ServerLocation'];

     $sql = "INSERT INTO serverhosting (GameName,ServerLocation)
     VALUES ('$GameName','$ServerLocation')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        
        header("Location: http://localhost/Villains%20Lounge/villainsLoungeMain.php");
        exit;
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
// find means of displaying information on the main page whether or not a request has been processed
// successfully

//the data entry cannot be completed in the same manner as the previous server hosting
// we must enforce unique usernames so that no 2 user can request the same username with any admins
// or requesting users

//ensure

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['RequestUsername'], $_POST['RequestPassword'], $_POST['RequestEmail'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}

// Make sure the submitted registration values are not empty.
if (empty($_POST['RequestUsername']) || empty($_POST['RequestPassword']) || empty($_POST['RequestEmail'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}


if(isset($_POST['Register'])){    // we are taking in the info from the entry fields for registration
     // we are placing the data from user input into the verify variables
     // we must then use those verify variables to cross reference their values within the database
     // $VerifyUsername = $_POST['RequestUsername'];
     // find a way to hash this information, passwrods in plain text are a HUGE ISSUE.
     // $VerifyEmail = $_POST['RequestEmail'];

     //query the information to verify if it exists already within the database
     //verify information from both the requested Username and emails and Admin username/emails
     
     if($stmt = $conn->prepare('SELECT RequestPassword FROM membershiprequest WHERE RequestUsername = ?' )){
        //obtain the credentials for membership from user input,
        //store them from POST into a variable that can be input into php and sent into our SQL database
        $stmt->bind_param('s', $_POST['RequestUsername']);
        $stmt->execute();
        $stmt->store_result();
        // store the requested username so we can check it against current requested/verified admins
        if($stmt->num_rows > 0){
           //username is found, ensure that a message is displayed to thew user
           echo 'Username already exists in Membership Requests,use another Username.';
        }
        else {
           //a username is not found in the requests database, therefore we can add it
           //to the request database

           //after we ensure that requested usernames are uunique, compare them against any 
           //registered ADMIN user names and EMAILS
            if($stmt = $conn->prepare('INSERT INTO membershiprequests(RequestUsername, RequestPassword, RequestEmail) VALUES(?,?,?)')){
               $VerifyPassword = password_hash($_POST['RequestPassword'], PASSWORD_DEFAULT);
               $stmt->bind_param('sss', $_POST['RequestUsername'], $VerifyPassword, $_POST['RequestEmail']);
               $stmt->execute();
               echo "Your Account has been submitted for Admin Approval" ;
            }
        }
        
        $stmt->close();
     } else {
        //verify no issues arise with our SQL statements
        echo 'could not prepare statement!';
     }

     /*
     $query = "SELECT RequestUsername 
               FROM  adminList
               WHERE RequestUsername = '$VerifyUsername' ;";

      if($query = true){
         echo "username/email found, use another";
      }

      else {
         echo "$VerifyUsername $VerifyEmail";
         echo " username + email registered";
      }
      */

      /*
     $sql = "INSERT INTO membershiprequest (RequestUsername,RequestPassword,RequestEmail)
             VALUES ('$RequestUsername','$RequestPassword','$RequestEmail')";
     if (mysqli_query($conn, $sql)) {
        echo "New admin application has been sent successfully !";
        
        header("Location: http://localhost/Villains%20Lounge/villainsLoungeMain.php");
        exit;
     } else {
        //figure out a way to redirect back to the main page, or prevent users from entering
        //faulty information before, display some kind of information or notification to alert users
        //of the data entry issue
        echo "credentials are not valid, use a different username or password.";
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     */
}
$conn->close();
?>

