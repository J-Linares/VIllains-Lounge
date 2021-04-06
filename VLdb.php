<?php
//specify any information here to gain access to any specific databases that
//you will be working on
    $servername='localhost';
    $username='root';
    $password='';
    // here we can specify which database we will be working with
    $dbname = "villains lounge dbms";
    //this next function displays an error message if any issues with the 
    //previous variables prevent a connection from being established.
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect to MySql Server:' .mysql_error());
        }
?>