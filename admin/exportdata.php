<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "maindb");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM tenderer_history";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>SL</th>  
                         <th>Name</th>  
                         <th>Date</th>  
						 <th>Total Schedule</th>
						 <th>Completed</th>
						 <th>Incomplete</th>
						 <th>Total Payment</th>
						 <th>Paid</th>
						 <th>Due</th>
						 <th>Remarks</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["date"].'</td>  
						 <td>'.$row["total_schedule"].'</td>  
						 <td>'.$row["completed"].'</td>
						 <td>'.$row["incomplete"].'</td>
						 <td>'.$row["total_payment"].'</td>
						 <td>'.$row["paid"].'</td>
						 <td>'.$row["due"].'</td>
						 <td>'.$row["remarks"].'</td>
	</tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>