<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<?php include('admin.header.php') ?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "stylesheet" href= "../css/newsidebar.css">

</head>
<body>

<div class="sidebar" style="margin-top:-195px;">
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

<div class="container jumbotron" style="background-color:#E5E4E2;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">ADD VAT PAYER DETAILS</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  
				  <div class="form-group">
				    
				    Full Name:<input type="text" class="form-control" name="fullname" placeholder="VAT payer name" required>
				  </div>
				   <div class="form-group">
				      VAT ID: <input type="text" class="form-control" name="vatid" placeholder="Vat ID" required>
				  </div>
				  <div class="form-group">
				      VAT Password: <input type="text" class="form-control" name="vatpassword" placeholder="Email Id" required>
				  </div>
				  <div class="form-group">
				    Phone number:<input type="text" class="form-control" name="phonenumber" placeholder="Phone number" required>
				  </div>   

				  <button type="submit" name="submit" class="btn btn-success btn-lg">INSERT</button>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['fullname']) && !empty($_POST['vatid']) && !empty($_POST['vatpassword']) && !empty($_POST['phonenumber'])  ) {
		
			include ('../dbcon.php');
			$name=$_POST['fullname'];
			$vatid=$_POST['vatid'];
			$vatpassword=$_POST['vatpassword'];
			$phonenumber=$_POST['phonenumber'];
			
			

			$sql = "INSERT INTO `vat payer details`( `name`, `vat id`, `vat password`,`phone number`) VALUES ('$name', '$vatid','$vatpassword','$phonenumber')";
			
			
			

			$run = mysqli_query($conn,$sql);

			if ($run == true) {
				
				?>
				<script>
					alert("Data Inserted Successfully");
				</script>
				<?php
			} else {
				echo "Error : ".$sql."<br>". mysqli_error($conn); 
			}
		} else {
				?>
				<script>
					alert("Fill up all the boxes");
				</script>
				<?php
		}


	}

 ?>








