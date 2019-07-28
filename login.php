<?php include'inc/header.php';?>
<?php include'inc/sidebar.php';?>
 <?php include"lib/Database.php";?>
 <?php include"lib/Session.php";
  		Session::init();
  ?>


<div style="max-width:500px; margin:0 auto; margin-top:30px;">

	<?php
		if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
			$db= new Database();

			$name = mysqli_real_escape_string($db->link, $_POST['name']);
			$password = mysqli_real_escape_string($db->link, $_POST['password']);
			 
			 if($name=='' || $password==''){
			 		echo"<span class='alert alter-danger'>Field must not be empty!</span";
			 }else{

			 $query = "SELECT * FROM tbl_registration WHERE name='$name' AND password='$password'";
			 $result = $db->select($query);
			 if($result){
			 		$value = mysqli_fetch_array($result);
 				    $row = mysqli_num_rows($result);
 				if($row > 0){
 				Session::set("customerLogin",true);
 				Session::set("customerId",$value['id']);
 				Session::set("name",$value['name']);
 					header('location:index.php');
 				
 				
 			}else{
 				echo "<span class='alter alter-danger'>Email and password is not match!</span>";
 			}
			 } 
	      }
        }


	?>
	<form action="" method="post">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control"/>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">submit</button>
	</form>
</div>