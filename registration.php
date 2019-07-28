<?php include'inc/header.php';?>
<?php include'inc/sidebar.php';?>
 <?php include"lib/Database.php";?>
 
<div style="max-width:500px; margin:0 auto; margin-top:30px;">
	<?php
		if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
			$db= new Database();

			$name = mysqli_real_escape_string($db->link, $_POST['name']);
			$address = mysqli_real_escape_string($db->link, $_POST['address']);
			$number = mysqli_real_escape_string($db->link, $_POST['number']);
			$login = mysqli_real_escape_string($db->link, $_POST['login']);
			$password = mysqli_real_escape_string($db->link, $_POST['password']);
			 
			 if($name=='' || $address=='' || $number=='' || $login=='' || $password==''){
			 		echo"<span class='alert alter-danger'>Field must not be empty!</span";
			 }else{

			 $query = "INSERT INTO tbl_registration(name,address,number,login,password) VALUES('$name','$address','$number','$login','$password')";
			 $result = $db->insert($query);
			 if($result){
			 		echo"<span class='alert alter-success'>Registration Successfull!</span";
			 			header("location:login.php");
			 }else{
			 	echo"<span class='alert alter-danger'>Data insert Failed!</span";
			 
		}
	}
}


	?>
	<form action="" method="post">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control" placeholder="Enter Your Name"/>
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" name="address" class="form-control" placeholder="Enter Your Address"/>
		</div>
		<div class="form-group">
			<label for="number">Contact Number</label>
			<input type="text" name="number" class="form-control" placeholder="Enter Contact Number" />
		</div>
		<div class="form-group">
			<label for="login">LoginID</label>
			<input type="text" name="login" class="form-control" placeholder="Enter Your LoginID"/>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control" placeholder="Enter your Password"/>
		</div>
		<input type="submit" class="btn btn-primary" name="submit" value="submit"/>
	</form>
</div>