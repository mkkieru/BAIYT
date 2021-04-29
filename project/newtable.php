<?php



$connection = mysqli_connect("localhost","root",""); 
$db =mysqli_select_db($connection,'rentals'); 

$table = $_POST['newtable'];

$query = "CREATE TABLE $table ( fname varchar(64) , lname varchar(64) , ID int, phoneNo int )";

$query_run = mysqli_query($connection,$query) or die($query); 



?>