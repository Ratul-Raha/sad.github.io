<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>
<link rel="stylesheet" href="../css/sidebar.css" />

<div class="header-section jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">
					WELCOME TO ADMIN DASHBOARD
					<span><a href="logout.php" class="btn btn-success" style="float: right;">LOGOUT</a><span>
				</h2>	
			</div>
		</div>
	</div>
</div>

<nav>
  <ul>
    <li><span>Home</span></a>
    <li><span>Products</span></li>
    <li><span>Services</span></li>
    <li><span>Contact</span></li>
  </ul>
</nav>





<?php include('../footer.php') ?>
