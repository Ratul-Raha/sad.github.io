<?php
$connect = mysqli_connect("localhost", "root", "", "maindb");
if(isset($_POST["name"]))
{
 $name = mysqli_real_escape_string($connect, $_POST["name"]);
 $vat_id = mysqli_real_escape_string($connect, $_POST["vat_id"]);
 $vat_password = mysqli_real_escape_string($connect, $_POST["vat_password"]);
 $phone_number = mysqli_real_escape_string($connect, $_POST["phone_number"]);
 
 $query = "INSERT INTO vat_payer_details (name, vat_id, vat_password, phone_number) VALUES ('$name', '$vat_id' ,'$vat_password', '$phone_number')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
 
}
?>
