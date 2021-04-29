<?php
 $id = $_POST['id'];
 $fname = $_POST['fname']; 
 $password = $_POST['password']; 
 $email = $_POST['email']; 


 $connection = mysqli_connect("localhost","root",""); 
 $db =mysqli_select_db($connection,'rentals'); 
   
//$id = $_POST['id'];

$table = $_POST['insert'];

$query = "UPDATE `$table` SET fname = '$_POST[fname]',lname= '$_POST[lname]',id = '$_POST[id]' , phoneNo = '$_POST[phone]' where id = '$_POST[id]' "; 

//$query_run = mysqli_query($connection,$query); 

$query_run = mysqli_query($connection,$query) or die($query); 
?>