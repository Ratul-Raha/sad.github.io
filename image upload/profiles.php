<?php
  $conn = mysqli_connect("localhost", "root", "", "maindb");
  $results = mysqli_query($conn, "SELECT * FROM users");
  $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
</head>

<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "stylesheet" href= "../css/newsidebar.css">

</head>
<body  style="background-color:white; background-image: url(../img/chess.jpg);  background-repeat:no-repeat; background-size: 1920px 1080px; background-position: 150px 200px" >

<div class="sidebar">
  <a class="active" href="../admin/admindash.php">Home</a>
  <a href="../admin/tendererdetailsnew.php" >TENDERER DETAILS</a> 
  <a href="../admin/vatpayerdetails.php" >VAT PAYER DETAILS</a>
  <a href="../admin/scheduletable.php" >SCHEDULE TABLE</a>
  <a href="../admin/vattable.php" >VAT TABLE</a>
  <a href="../admin/deletestudent.php">PAYMENT HISTORY</a>
  <a href="../image upload/profiles.php">USERS PROFILE</a>
  <a href="../admin/logout.php">LOGOUT</a>
</div>

<div class="header-section jumbotron" style="background-color:black; height:200px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center" style="color:white";>
					WELCOME TO ADMIN DASHBOARD
				</h1>
					<img src="../img/logo.png" style="width:200px;height:200px; margin-top:-150px; margin-left:1200px;">
			</div>
		</div>
	</div>
</div>

  

</body>

<?php include('../footer.php') ?>


<body>
        <a href="form.php" class="btn btn-success" style="margin-left:300px;">Add New profile</a>
        <br>
        <br>
        <table  style="margin-left:300px; height:auto; width:700px; padding:10px; border-style: ridge; border-color: #8ebf42; background-color: white;">
         <thead> 
            <th style="height:20px; width:45px; text-align:center; border-style: ridge; border-color: #8ebf42;">Image</th>
            <th style="height:20px; width:600px; text-align:center;border-style: ridge; border-color: #8ebf42;">Bio</th>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr style="height:50px; ">
                <td> <img src="<?php echo 'images/' . $user['profile_image'] ?>" width="60" height="60" alt="" style="border-radius:50px;"> </td>
                <td style="text-align:center;"> <?php echo $user['bio']; ?> </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
</body>
</html>