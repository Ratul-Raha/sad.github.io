<?php session_start();?>

<html>



<?php include('header.php') ?>

<body style="background-image: url(img/chess.jpg);">      
            <div class="" style="margin-top:300px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 jumbotron" style="background-color:black; opacity:0.8;">
                            <form action="login.php" method="post">
								<h2 style="color:white; text-align:center;">S A DOT COM ADMIN LOGIN<h2>
                              <div class="form-group" style="color:white;" >
                                  Username:<input type="text" class="form-control" name="user" placeholder=" Enter Username" required>
                              </div>
                            <div class="form-group" style="color:white;">
                                  Password:<input type="password" class="form-control" name="password" placeholder="Enter Passoword" required>
                            </div>
                              <div class="form-group">
                                  <input type="submit" name="login" value="LOGIN" class="btn btn-success btn-block text-center" style="background-color:#43C6DB;" > 
                              </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</body>
            
<?php						
    include ('dbcon.php');

    if (isset($_POST['login'])) {

        $user = $_POST['user'];
        $password = $_POST['password'];
        $qry = "SELECT * FROM admin WHERE username='$user' AND password='$password'";
        
        $run  = mysqli_query($conn, $qry);

       $row = mysqli_num_rows($run);

        if($row > 0) {
         $data = mysqli_fetch_assoc($run);
                    $id= $data['id'];
                    $_SESSION['uid'] = $id;
                    header('location:admin/admindash.php');

           
        } else {
      ?>             
    <script>
        alert('username or passoword invalid');
        window.open('login.php','_self');
    </script>
    <?php
                   
                }

}
?>

<?php include('footer.php') ?>

