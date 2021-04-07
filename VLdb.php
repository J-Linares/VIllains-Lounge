<?php
//specify any information here to gain access to any specific databases that
//you will be working on
    $servername='localhost';  //hostname for the database
    $username='root';         //username to access tables within the database
                              //you can  specify different credentials for access from within phpmyadmin
                          
    $password='';             //password to gain access to the database, also set through phpmyadmin
    // here we can specify which database we will be working with
    //currently we are running and testing with default credentials just for practice, once we 
    // are confident for deployment SECURE these credentials and hide them from prying eyes
    $dbname = "villains lounge dbms";

    //specify the current database that we will be working under

    //this next function displays an error message if any issues with the 
    //previous variables prevent a connection from being established.
    //we will declare $conn to represent our established connection with the sql database
    //using the previous variables as arguments for our paramters for connection
    // from this point on $conn will serve as our variable to establish a connection to 
    //a database whenever we need to complete any actions in relation to the database
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect to MySql Server:' .mysql_error());
        }

    
?>