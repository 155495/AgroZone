<?php session_start();?>

<html>
	<title>Supplier's ad list</title>
	<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></head>
   <body>

<?php
if (isset($_SESSION['supplier'])) {
	

	
	
include("dbcon.php");






function get_all_results(){
	$sids=$_SESSION['supplier'];
include("dbcon.php");
	$a=0;
	$typ=array();
	$sql="SELECT * FROM `tbl_supplier_ad` WHERE `sid`='$sids'";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result))
	{
		$typ[$a]=array();
		
		$typ[$a]['title']=stripslashes($row['title']);
		$typ[$a]['details']=stripslashes($row['details']);
		$typ[$a]['photo']=stripslashes($row['photo']);
		$typ[$a]['category']=stripslashes($row['category']);
		$typ[$a]['price']=stripslashes($row['price']);
		$typ[$a]['date']=stripslashes($row['date']);
		$typ[$a]['district']=stripslashes($row['district']);
		$typ[$a]['place']=stripslashes($row['place']);
		$typ[$a]['phone']=stripslashes($row['phone']);
		$typ[$a]['email']=stripslashes($row['email']);
		
	$a++;
	}
	return $typ;
	
	}
	$pgs=get_all_results();
	$pCnt=count($pgs);

 ?>

<div class="table-responsive col-md-10 col-md-offset-1">
  <table class="table table-striped table-bordered" cellspacing="0" width="100%">
   
   
   <thead>
      <tr>
        <th>Title</th>
        <th>Details</th>
		<th>Photo</th>
        <th>Category</th>
		<th>Price</th>
        <th>Date</th>
		<th>District</th>
		<th>Place</th>
		<th>Phone</th>
		<th>Email</th>
		
      </tr>
    </thead>   
    <tbody>
   <?php  for($a=0;$a<$pCnt;$a++){?>
      <tr>
      	<td class="center"><?php echo $pgs[$a]['title']; ?></td>
		<td class="center"><?php echo $pgs[$a]['details']; ?></td>
		<td class="center"><img src ="<?php echo $pgs[$a]['photo']; ?>"/></td>
		<td class="center"><?php echo $pgs[$a]['category']; ?></td>
		<td class="center"><?php echo $pgs[$a]['price']; ?></td>
		<td class="center"><?php echo $pgs[$a]['date']; ?></td>
		<td class="center"><?php echo $pgs[$a]['district']; ?></td>
		<td class="center"><?php echo $pgs[$a]['place']; ?></td>
		<td class="center"><?php echo $pgs[$a]['phone']; ?></td>
		<td class="center"><?php echo $pgs[$a]['email']; ?></td>
		
	
        
      <?php }?>
	     <?php }?>
	</tbody>
   
  </table>
</div>	

















</body>







</html>