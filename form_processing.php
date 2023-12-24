<?php

 $mysqli= new mysqli('localhost', 'root','', 'new');
 if($mysqli->connect_error){
      die("Not connecting: " .$mysqli->connect_error);
 }
 $fName= $_POST["fName"];
 $lName=$_POST["lName"];
 $email=$_POST["email"];
 $number=$_POST['number'];
 $location=$_POST['location'];

$query= "INSERT INTO registers(fName, lName, Email, Telnum, YourLocation ) VALUES ('$fName','$lName', '$email', '$number', '$location')";

 if($mysqli->query($query) === TRUE){
      echo "Data inserted successfully in the database!";
 }else{
      echo "Error: " .$query . "<br>" . $mysqli->error;
 }
 $mysqli->close();
?>