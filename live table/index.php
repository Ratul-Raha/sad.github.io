<?php 
include("../dbcon.php");
include('header2.php');

?>
<script type="text/javascript" src="jquery.tabledit.js"></script>

<?php
//include header part of html

  ?>
            

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 jumbotron">
                            <h2 style="text-align: center;">
                                Schedule Table
                                
                            </h2>
                    </div>
                </div>
            </div>

            <div class="student-info text-center">
                <div class="container-fluid">
                    <div class="row">
                        
                    </div>
                </div>
            </div>




<!--include header part of html-->
<?php include('footer.php') ?>

<div class="container home">	

			 
	<table id="data_table" class="table table-striped table-bordered table-responsive text-center">
		<thead>
			<tr>
				
				<th>Name</th>
				<th>Date</th>
				<th>Total schedule</th>
				<th>Completed Schedule</th>
				<th>Incomplete Schedule</th>	
				<th>Total Payment</th>
				<th>Paid</th>
				<th>Due</th>
				<th>Total Paid</th>
				<th>Total due</th>
				
				
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql_query = "SELECT * FROM `tenderer history`";
			$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $developer = mysqli_fetch_assoc($resultset) ) {
			?>
			   <td><?php echo $developer ['name']; ?></td>
			   <td><?php echo $developer ['date']; ?></td>
			   <td><?php echo $developer ['total schedule']; ?></td>
			   <td><?php echo $developer ['completed']; ?></td>
			   <td><?php echo $developer ['incomplete']; ?></td>
			   <td><?php echo $developer ['total payment']; ?></td>   
			   <td><?php echo $developer ['paid']; ?></td>
			   <td><?php echo $developer ['due']; ?></td>   
			   <td><?php echo $developer ['total paid']; ?></td>
			   <td><?php echo $developer ['total due']; ?></td>			   
			   
			<?php } ?>
		</tbody>
    </table>	
	
</div>
<script type="text/javascript" src="custom_table_edit.js"></script>
<?php include('footer.php');?>
 



                                                                                                       