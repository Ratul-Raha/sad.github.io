
<?php
//include header part of html
 include('../header.php')
  ?>
            

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 jumbotron">
                            <h2 style="text-align: center;">
                                S A DOT COM
                             
                            </h2>
                    </div>
                </div>
            </div>

            <div class="student-info text-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 jumbotron">
                            <h2>VAT PAYER DETAILS</h2>
                            
                        </div>
                    </div>
                </div>
            </div>

<table id='data_table' class="table table-striped table-bordered table-responsive text-center">
    <tr >
        <th class="text-center">SL No.</th>
        <th class="text-center">Name</th>
		<th class="text-center">VAT ID</th>
        <th class="text-center">VAT PASSWORD</th>
        <th class="text-center">Phone Number</th>
		
    </tr>
<?php 
    include('../dbcon.php');
    if (isset($_POST['show'])) {

        $name = $_POST['name'];
       

        $sql = "SELECT * FROM `vat payer details` WHERE `name` = '$name'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
              $id = $DataRows['sl'];
                $name = $DataRows['name'];
				$vatid = $DataRows ['vat id'];
                $vatpassword = $DataRows['vat password'];
				$phonenumber = $DataRows['phone number'];
		
                ?>
				<tbody>
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $name;?></td>
					<td><?php echo $vatid;?></td>
                    <td><?php echo $vatpassword; ?></td>
					<td><?php echo $phonenumber; ?></td>
                </tr>
				</tbody>
                <?php
                
            }
            
        } else {
            echo "<tr><td colspan ='7' class='text-center'>No Record Found</td></tr>";
        }
    }

 ?>
    


<!--include header part of html-->
<?php include('../footer.php') ?>

