
<html>

 <head>
  <title>S A DOT COM</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:1270px;
   padding:20px;
   background-color:#FFFAFA;
   opacity:0.95;
   border:1px solid #ccc;
   border-radius:5px;
   margin-top:25px;
   box-sizing:border-box;
  }
  </style>
 </head>
 
 <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "stylesheet" href= "../css/newsidebar.css">

</head>
<body style="background-image: url(../img/chess.jpg); background-repeat:no-repeat;">
<div class="sidebar">

  <a class="active" href="admindash.php">Home</a>
  <a href="tendererdetailsnew.php" >TENDERER DETAILS</a> 
  <a href="vatpayerdetails.php" >VAT PAYER DETAILS</a>
  <a href="scheduletable.php" >SCHEDULE TABLE</a>
  <a href="vattable.php" >VAT TABLE</a>
  <a href="deletestudent.php">PAYMENT HISTORY</a>
  <a href="../image upload/profiles.php">USERS PROFILE</a>
  <a href="logout.php">LOGOUT <i class="fa fa-fw fa-user"></i></a>
</div>

<div class="header-section jumbotron" style="background-image: url(../img/head3.png); opacity:0.8; margin-left:200px; height:156px; width:1720px;">

	<div class="container">
		<div class="row">
			<div class="col-md-12" style="margin-top:-20px;">
				<h1 class="text-center" style="color:white";>
					
				</h1>
					
			</div>
		</div>
	</div>
</div>  
</body>
 <body style="background-color:white; background-color:white; background-image: url(../img/chess.jpg); background-repeat:no-repeat;">
  <div class="container box" style="margin-left:425px;">
   <div class="table-responsive">
   <br />
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-info">Add New VAT Payer</button>
    </div>
    <br />
    <div id="alert_message"></div>
    <table id="user_data" class="table table-bordered table-striped" style="border-radius:20px;">
     <thead style="text-align: left; background-color: #4CAF50; color: white; height:20px; width:40px;">
      <tr>
	   <th>ID</th>
       <th>Vat Payer Name</th>
       <th>VAT ID</th>
	   <th>VAT PASSWORD</th>
	   <th>Phone Number</th>
	   <th>Add</th>
	   <th>Delete</th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetchvatpayer.php",
     type:"POST"
    }
   });
  }
  
  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"updatevatpayer.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  };

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  });
  
  $('#add').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data1"></td>';
   html += '<td contenteditable id="data2"></td>';
   html += '<td contenteditable id="data3"></td>';
   html += '<td contenteditable id="data4"></td>';
   html += '<td contenteditable id="data5"></td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '<td><button type="button" name="delete" id="delete" class="btn btn-success btn-xs">Delete</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   
   var name = $('#data2').text();
   var vat_id= $('#data3').text();
   var vat_password = $('#data4').text();
   var phone_number = $('#data5').text();
   
   if( name != '')
   {
    $.ajax({
     url:"insertvatpayer.php",
     method:"POST",
     data:{name: name, vat_id:vat_id, vat_password, vat_password:vat_password, phone_number:phone_number},
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("All fields are required");
   }
  });
  
  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"deletevatpayer.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });
 });
</script>
