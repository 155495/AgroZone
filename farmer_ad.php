<?php session_start();

 include_once'menu_bar.php';
 include_once'dbcon.php';
 
 
 function get_all_dist()
{	include("dbcon.php");
	$a=0;
	$typ=array();
	$sql="SELECT * FROM `tbl_dist` ORDER BY `tbl_dist`.`id` ASC";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result))
	{
		$typ[$a]=array();
		$typ[$a]['id']=$row['id'];
		$typ[$a]['dist']=stripslashes($row['dist']);
		$a++;
	}
	return $typ;
}

function get_all_catgry()
{	include("dbcon.php");
	$a=0;
	$typ=array();
	$sql="SELECT * FROM `tbl_category` ORDER BY `tbl_category`.`id` ASC";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result))
	{
		$typ[$a]=array();
		$typ[$a]['id']=$row['id'];
		$typ[$a]['category']=stripslashes($row['category']);
		$a++;
	}
	return $typ;
}
 
 
 
 
?>
<html>
	<title>Farmer Ad</title>
	<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></head>
			<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
			<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
			<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
			<meta charset=utf-8 />
   <body>
  
<?php
if(isset($_POST["btnSubmit"]))
{
include("dbcon.php");

$title=$_POST["txttitle"];
$details=$_POST["txtdetails"];
//$photo=$_POST["image_file"];
$category=$_POST["category"];
$price=$_POST["txtprice"];
$district=$_POST["district"];
$place=$_POST["txtplace"];
$phone=$_POST["txtphone"];
$email=$_POST["txtemail"];
$fids=$_SESSION['farmer'];



$imgTp=$_FILES["img"]["type"];

if($imgTp=="image/jpeg"||$imgTp=="image/png"||$imgTp=="image/gif")
	{ 
		$ret=rand('2000001','8000000');
		$rnam=".jpg";
		$path="uploads/images/";
		$img=$_FILES['img']['tmp_name'];
		$name="Agrozone_$ret$rnam";
		$filename=move_uploaded_file($img,$path.$name);
		$pathname="uploads/images/$name";	
	 }
		$imgs=addslashes($pathname);


$sql="INSERT INTO `tbl_farmer_ad`(`fid`, `title`, `details`,`photo`,`category`,`price`,`district`,`place`,`phone`,`email`) VALUES ($fids,'$title','$details','$imgs','$category','$price','$district','$place','$phone','$email')";
//echo $sql;
//mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}
?>

   
   
   <div class="col-md-4 col-md-offset-4" style="margin-top:55px;">
		<form class="form-horizontal" method="post" enctype="multipart/form-data">
			
				
			<h1> Farmer's Ad</h1>
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
			   <input name="img" id="changename" type="file" onchange="readURL(this); " id="img" class="form-control btn-success" accept="image/gif, image/jpeg, image/png" required />               
				

			</div>
			</div>
			
			<div class="form-group">
			  <label for="inputName" class="col-sm-2 control-label">Category</label>
			  <div class="col-sm-10">
				<select name="category" id="category" class="form-control"required="required">
				<?php
					$pgs1=get_all_catgry();
					$pCnt1=count($pgs1);

				for($a=0;$a<$pCnt1;$a++){?>
						<option value="<?php echo $pgs1[$a]['id']; ?>"><?php echo $pgs1[$a]['category']; ?></option>
						<?php }?>
					</select>
				</div>
			</div>
			
				<div class="form-group">
				<label for="inputName" class="col-sm-2 control-label">Price</label>
			<div class="col-sm-10">
				<input type="number" class="form-control" id="inputEmail3" name="txtprice" placeholder="Price" required>
			</div>
			</div>
			
			<div class="form-group">
			  <label for="inputName" class="col-sm-2 control-label">District</label>
			  <div class="col-sm-10">
				<select name="district" id="district" class="form-control"required="required">
				<?php
					$pgs=get_all_dist();
					$pCnt=count($pgs);

				for($a=0;$a<$pCnt;$a++){?>
						<option value="<?php echo $pgs[$a]['id']; ?>"><?php echo $pgs[$a]['dist']; ?></option>
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
				<input type="tel" pattern="[6789][0-9]{9}" class="form-control" name="txtphone" id="inputEmail3" placeholder="Phone" required>
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
				<button type="submit" name="btnSubmit" class="btn btn-success">Save</button>
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
	<div class="col-md-4">
	<img id="blah" src="" alt="" style="margin:10px;" class="img-responsive" required /> 
	</div>
		<script>
						function readURL(input) {
							if (input.files && input.files[0]) {
								var reader = new FileReader();

								reader.onload = function (e) {
									$('#blah')
										.attr('src', e.target.result)
										
								};
								reader.readAsDataURL(input.files[0]);
							}
						}
		</script>
	</body>







</html>