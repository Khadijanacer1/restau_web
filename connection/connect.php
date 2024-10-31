<?php
/*!
 *  Author Name: KHADIJA NACER.
 *  GitHub Link: https://github.com/Khadijanacer1

 */
//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "code_camp_bd_fos";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting
// Check connection
if (!$db) {       //checking connection to DB
    die("Connection failed: " . mysqli_connect_error());
}
/*!
 *  Author Name: KHADIJA NACER.
 *  GitHub Link: https://github.com/Khadijanacer1

      */
?>
