<?php

 include_once'menu_bar.php';
session_start();
?>

<html>
	<title>Supplier Ad</title>
	<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></head>
   <body>
<?php
if(isset($_POST["btnSubmit"]))
{
include("dbcon.php");

$title=$_POST["txttitle"];
$details=$_POST["txtdetails"];
$photo=$_POST["image_file"];
$category=$_POST["category"];
$price=$_POST["txtprice"];
$date=$_POST["txtdate"];
$district=$_POST["district"];
$place=$_POST["txtplace"];
$phone=$_POST["txtphone"];
$email=$_POST["txtemail"];
$sids=$_SESSION['supplier'];

$sql="INSERT INTO `tbl_supplier_ad`(`sid`, `title`, `details`,`photo`,`category`,`price`,`date`,`district`,`place`,`phone`,`email`) VALUES ($sids,'$title','$details','$photo','$category','$price','$date','$district','$place','$phone','$email')";
echo $sql;
mysqli_query($conn,$sql);
}
?>
   
   
   <div class="col-md-4 col-md-offset-4" style="margin-top:55px;">
		<form class="form-horizontal" method="post">
			
				
			<h1> Supplier's Ad</h1>
			<br>
			<br>
			
			
			
			<div class="form-group">
				<label for="inputLocation" class="col-sm-2 control-label">Title</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPassword3" name="txttitle" placeholder="Title" required>
			</div>
			</div>
			<div class="form-group">
				<label for="inputName" class="col-sm-2 control-label">Details</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" name="txtdetails" placeholder="Details" required>
			</div>
			</div>
			
			
			<div class="form-group">
			  <label for="inputName" class="col-sm-2 control-label">Photo</label>
			  <!--<input type="hidden" name="photo" value="<?php echo $photo; ?>" />-->
			<div class="col-sm-10">
			   <input type="file" id="image_file" name="image_file" class="form-control">
			</div>
			</div>
			
			<div class="form-group">
			  <label for="inputName" class="col-sm-2 control-label">Category</label>
			  <div class="col-sm-10">
			  				                <select name="category" id="category" class="form-control"required="required">
                                	<option value="1">Choose</option>
                                    <?php while($row = mysqli_fetch_array($itemCatRes)){?>    												                                     <option value="<?php  echo $row[0];?>" <?php echo($row[0]==$category?'selected="selectd"':''); ?>><?php echo $row[1];?></option>
                                    <?php }?>
                                </select>
				</div>
			</div>
			
		<div class="form-group">
				<label for="inputName" class="col-sm-2 control-label">Price</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" name="txtprice" placeholder="Price" required>
			</div>
			</div>
			
			<div class="form-group">
				<label for="inputName" class="col-sm-2 control-label">Expected Date</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" name="txtdate" placeholder="Date" required>
			</div>
			</div>
			
			<div class="form-group">
				<label for="inputName" class="col-sm-2 control-label">District</label>
			<div class="col-sm-10">
			<select name="district" id="district" class="form-control">
                                	<option value="1">Choose</option>
                                    <?php while($row = mysqli_fetch_array($distRes)){?>    												                                     <option value="<?php  echo $row[0];?>" <?php echo($row[0]==$district?'selected="selectd"':'');?>><?php echo $row[1];?></option>
                                    <?php }?>
                               </select>
			</div>
			</div>
			
			<div class="form-group">
				<label for="inputName" class="col-sm-2 control-label">Place</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" name="txtplace" placeholder="Place" required>
			</div>
			</div>
			
			
			<div class="form-group">
				<label for="inputPhoneNo" class="col-sm-2 control-label">Phone</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="txtphone" id="inputEmail3" placeholder="Phone" required>
			</div>
			</div>
			
				<div class="form-group">
				<label for="inputPhoneNo" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="txtemail" id="inputEmail3" placeholder="Email" required>
			</div>
			</div>
			
			
			
			
			
			
			
			
		
				<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" name="btnSubmit" class="btn btn-success"><?php echo $_SESSION['supplier']; ?></button>
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