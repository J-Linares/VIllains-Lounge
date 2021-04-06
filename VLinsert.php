<?php

include_once 'VLdb.php';
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


if(isset($_POST['Register']))
{    
     $RequestUsername = $_POST['RequestUsername'];
     $RequestPassword = $_POST['RequestPassword'];
     $RequestEmail = $_POST['RequestEmail'];

     $sql = "INSERT INTO membershiprequest (RequestUsername,RequestPassword,RequestEmail)
     
     VALUES ('$RequestUsername','$RequestPassword','$RequestEmail')";
     if (mysqli_query($conn, $sql)) {
        echo "New admin application has been sent successfully !";
        
        header("Location: http://localhost/Villains%20Lounge/villainsLoungeMain.php");
        exit;
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>