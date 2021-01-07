<?php
$connect = mysqli_connect("localhost", "root", "", "maindb");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM tenderer_details WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>