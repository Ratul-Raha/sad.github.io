<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>


<?php include('../header.php') ?>

<?php include('tendererdetailsheader.php') ?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "stylesheet" href= "../css/newsidebar.css">

</head>
<body>

<div class="sidebar" style="margin-top: -225px;">
  <a class="active" href="admindash.php">Home</a>
  <a href="addtenderer.php">ADD NEW TENDERER</a>
  <a href="addvatpayer.php" >ADD NEW VAT PAYER</a>
  <a href="vatpayerdetails.php" >VAT PAYER DETAILS</a>
  <a href="tendererdetails.php" >TENDERER DETAILS</a> 
  <a href="scheduletable.php" >SCHEDULE TABLE</a>
  <a href="deletestudent.php" >VAT TABLE</a>
  <a href="deletestudent.php">PAYMENT HISTORY</a>
  <a href="logout.php">LOGOUT</a>
</div>
</body>
<div style="width:1920px; height:50px; background-color:#3BB9FF; margin-top:-30px;">
<form action="searchtenderer.php" method="post" style="float:right;">
        <input type="text" name="name" placeholder="Search tenderer by name" style="width: 240px;height: 35px;">
		<input type="submit" name="show" value="search" class="btn btn-success text-center" style="margin-left: 30px;" >  		
</form>

<div style="margin-left:200px">
<table id='data_table' class="table table-striped table-bordered table-responsive text-center">
    <tr >
        <th class="text-center">SL No.</th>
        <th class="text-center">Tenderer Name</th>
		<th class="text-center">Phone Number</th>
        <th class="text-center">Email ID</th>
        <th class="text-center">email password</th>
		<th class="text-center">e-gp password</th>
		<th class="text-center">Schedule Complete?</th>
		<th class="text-center">Payment Complete?</th>
        
    </tr>
	<script type="text/javascript" src="admin/custom_table_edit.js"></script>
</div>
<?php 
    include('../dbcon.php');
    if (isset($_POST['show'])) {

        $name = $_POST['name'];
       

        $sql = "SELECT * FROM `tenderer details 2` WHERE `name` = '$name'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
                $id = $DataRows['sl'];
                $Name = $DataRows['name'];
				$Phone = $DataRows ['phone number'];
                $Email = $DataRows['email'];
				$Emailpass = $DataRows['emailpass'];
                $Egppass = $DataRows['egppass'];
				$ScheduleCompletion = $DataRows['schedule completion'];
				$PaymentCompletion = $DataRows['payment completion'];
                ?>
                <tbody>
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $Name;?></td>
					<td><?php echo $Phone;?></td>
                    <td><?php echo $Email; ?></td>
					<td><?php echo $Emailpass; ?></td>
                    <td><?php echo $Egppass; ?></td>
					<td><?php echo $ScheduleCompletion; ?></td>
					<td><?php echo $PaymentCompletion; ?></td>
                    
                    
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

