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
			<h2 class="text-center">ADD TENDERER DETAILS</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  
				  <div class="form-group">
				    
				    Full Name:<input type="text" class="form-control" name="fullname" placeholder="Tenderer Name" required>
				  </div>
				   <div class="form-group">
				      Phone Number: <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
				  </div>
				  <div class="form-group">
				      Email ID: <input type="text" class="form-control" name="id" placeholder="Email Id" required>
				  </div>
				  <div class="form-group">
				    Email Password:<input type="text" class="form-control" name="emailpass" placeholder="Email Password" required>
				  </div>
				  <div class="form-group">
				    E-gp Password.:<input type="text" class="form-control" name="egppass" placeholder="E-gp Password." required>
				  </div>
				  
				   

				  <button type="submit" name="submit" class="btn btn-success btn-lg">INSERT</button>
			</form>
		</div>
	</div>
</div>


<?php include('../footer.php') ?>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['fullname']) && !empty($_POST['phone']) && !empty($_POST['id']) && !empty($_POST['emailpass']) && !empty($_POST['egppass'])  ) {
		
			include ('../dbcon.php');
			$name=$_POST['fullname'];
			$phone=$_POST['phone'];
			$email=$_POST['id'];
			$emailpass=$_POST['emailpass'];
			$egppass=$_POST['egppass'];
			

			$sql = "INSERT INTO `tenderer details 2`( `name`, `phone number`, `email`,`emailpass`, `egppass`) VALUES ('$name', '$phone','$email','$emailpass','$egppass')";
			
			

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








