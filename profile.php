<?php include"inc/header.php";?>
<?php include'inc/sidebar.php';?>
 <?php include"lib/Database.php";?>
 <?php include"lib/Session.php";
  		Session::init();
  ?>

<?php 
	$login = Session::get('customerLogin');
	if($login==false){
		header("location:login.php");
	}

?>
<div style="max-width:550px; margin-top:40px; margin-bottom:20px; margin:0 auto;">
	
	<?php
		$db = new Database();
		$id = Session::get('customerId');
		$query = "SELECT * FROM tbl_registration WHERE  id='$id'";
		$result = $db->select($query);
		if($result){
			foreach($result as $value){

	?>
<table class="table table-striped" style="text-align:justify; border:2px solid #E0E1E1;">
		<tr>
			<td colspan="3"><h2 style="text-align:center;">Customer Profile</h2></td>
		</tr>
	<tr>
		<td width="20%">Name</td>
		<td width="5%">:</td>
		<td><?php echo $value['name'];?></td>

	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><?php echo $value['password'];?></td>

	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><?php echo $value['number'];?></td>
		 

	</tr>

</table>
<?php } } ?>
</div>









 