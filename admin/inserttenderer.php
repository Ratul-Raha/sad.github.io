<?php
$connect = mysqli_connect("localhost", "root", "", "maindb");
if(isset($_POST["name"]))
{
 $name = mysqli_real_escape_string($connect, $_POST["name"]);
 $phone_number = mysqli_real_escape_string($connect, $_POST["phone_number"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
  $egp_pass = mysqli_real_escape_string($connect, $_POST["egp_pass"]);
 $email_pass = mysqli_real_escape_string($connect, $_POST["email_pass"]);
 $query = "INSERT INTO tenderer_details (name, phone_number, email, egp_pass, email_pass) VALUES ('$name', '$phone_number' ,'$email','$egp_pass', '$email_pass' )";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
 
}
?>
