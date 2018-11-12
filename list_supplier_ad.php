<html>
	<title>Supplier's ad list</title>
	<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></head>
   <body>
 <!--  
<?php
if(isset($_POST["btnSubmit"]))
{
include("dbcon.php");

$username=$_POST["txtusername"];
$email=$_POST["txtemail"];
$password=$_POST["txtPassword"];


$sql="INSERT INTO `tbl_supplierreg`(`Sname`, `Semail`, `Spassword`) VALUES ('$username','$email','$password')";
echo $sql;
mysqli_query($conn,$sql);
}
?>
-->
   
   
   <div class="col-md-4 col-md-offset-4" style="margin-top:55px;">
		<form class="form-horizontal" method="post">
			
				
			<h1> Supplier's Ad</h1>
			<br>
			<br>
			
			
			<table class="table">
              <thead>
              <tr>
                  <th>#</th>
                  <th class="col-sm-2">Title</th>
                  <th class="col-sm-2">Photo</th>
                  <th class="col-sm-2">Category</th>
                  <th class="col-sm-1">Price</th>
                  <th class="col-sm-2">Phone</th>
				   <th class="col-sm-2">Email</th>
                  <th class="col-sm-2">Date</th>
                  <th class="col-sm-1">Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
			  </table>
			
			
			
			
			
			
			
			
			
		</form>

	</div>

	</body>







</html>