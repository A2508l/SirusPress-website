<?php 

    // Enable us to use Headers
    ob_start();

    // Set sessions
    if(!isset($_SESSION)) {
        $_SESSION=NULL;
        session_start();
        
    }

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "siruspress";
    
    $connection = mysqli_connect($hostname, $username, $password, $dbname) ;
    if ( mysqli_connect_errno() ) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

?>