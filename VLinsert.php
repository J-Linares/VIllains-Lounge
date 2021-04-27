<?php

include_once 'VLdb.php';
// use our connection file so that our $conn dbms connection variable can be used
// this file will serve as the setting for any database entries.


//once a visitor clicks the submit button on the data entry fields for serverhosting
//requests, the info will be sent directly to the hosting requests database,
// more functionality with this information will be done later to help admins figure out 
//how to best use the information for server hosting decisions.

//server hosting suggestion is connected to the database, and is taking submissions directly from
//the webpage
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

if(isset($_POST["Register"])){
   //the following is a different means of checking within the database if an existing set of credentials 
   //already exist within the existing database.

   $UsernameRequest = $_POST['RequestUsername'];
   $PasswordRequest = $_POST['RequestPassword'];
   $EmailRequest = $_POST['RequestEmail'];

   //run an sql query to verify if the credential submissions dont already exist within the existing
   //set of admin credentials
   // we will be mainly verifying existing usernames and Email addresses 

   $mysqli_conn = new mysqli("localhost", "root", "", "villains lounge dbms");

   $sqlUserCheck = $mysqli_conn->query("SELECT * FROM adminlist WHERE AdminName= '$UsernameRequest'");
   $sqlEmailCheck = $mysqli_conn->query("SELECT * FROM adminlist WHERE AdminEmail= '$EmailRequest'");

   if(mysqli_num_rows($sqlUserCheck) > 0){
      echo "Username already in use, please submit another username.";
   }
   
   else if(mysqli_num_rows($sqlEmailCheck) > 0){
      echo "Email already in use, please use another Email.";
   }

   //if no credentials  arew found within the registered admin list,
   else{
      //if all else of the checks dont trigger, make sure to submit the information
      //hash thee password, always make sure to keep sensitive information private.
      $passwordSubmission = password_hash($PasswordRequest, PASSWORD_DEFAULT);
      $sqlMemberSubmit = "INSERT INTO membershiprequest (RequestName,RequestEmail,RequestPassword) Values('$UsernameRequest','$EmailRequest','$passwordSubmission')";
   
      if(mysqli_query($conn, $sqlMemberSubmit)){
         echo "record submitted";
      }  else{
         echo "error: " . $sqlMemberSubmit . " " . mysqli_error($conn);
      }
   }
$conn->close();
}

?>

