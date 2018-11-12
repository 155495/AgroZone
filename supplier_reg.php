<?php
include_once'head1.php';
 include_once'menu_bar.php';
 ?>


<html>
	<title>Supplier Registration</title>
	<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></head>
   <body>
   
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
   
   
   <div class="col-md-4 col-md-offset-4" style="margin-top:55px;">
		<form class="form-horizontal" method="post">
			
				
			<h1> Supplier Registration</h1>
			<br>
			<br>
			
			
			
			<div class="form-group">
				<label for="inputLocation" class="col-sm-2 control-label">Username</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPassword3" name="txtusername" placeholder="username" required>
			</div>
			</div>
			<div class="form-group">
				<label for="inputName" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" name="txtemail" placeholder="email" required>
			</div>
			</div>
			<div class="form-group">
				<label for="inputPhoneNo" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" name="txtPassword" id="inputEmail3" placeholder="password" required>
			</div>
			</div>
			
			
			
			
			
			
			
		
			<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" name="btnSubmit" class="btn btn-success">REGISTER</button>
			</div>
			</div>
			
			
			
			
			<!--<div class="visible">
				<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox1" value="option1"> FOOD
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox2" value="option2"> CLOTH
				</label><br/>
				<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox1" value="option1"> WATER
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox2" value="option2"> MEDICINE
				</label>
				<div class="form-group">
				<label for="inputOTHERS" class="col-sm-2 control-label">OTHERS</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" placeholder="OTHERS">
			</div>
			</div>-->
			
			
			
			
			
		</form>

	</div>

	</body>







</html>