<?php
$connect = mysqli_connect("localhost", "root", "", "maindb");
if(isset($_POST["name"]))
{
 $name = mysqli_real_escape_string($connect, $_POST["name"]);
 $total_schedule = mysqli_real_escape_string($connect, $_POST["total_schedule"]);
 $completed = mysqli_real_escape_string($connect, $_POST["completed"]);
 $incomplete = $total_schedule-$completed; 
 $total_payment = mysqli_real_escape_string($connect, $_POST["total_payment"]);
 $paid = mysqli_real_escape_string($connect, $_POST["paid"]);
 $due = $total_payment-$paid;
 $remarks = mysqli_real_escape_string($connect, $_POST["remarks"]);
 
 
 $query = "INSERT INTO tenderer_history (name,total_schedule, completed, incomplete, total_payment, paid, due, remarks) VALUES ('$name', '$total_schedule' ,'$completed', '$incomplete','$total_payment', '$paid', '$due', '$remarks' )";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
 
}
?>
