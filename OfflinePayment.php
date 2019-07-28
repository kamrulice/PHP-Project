
<?php include'inc/header.php';?>
<?php include'inc/sidebar.php';?>
<div style="max-width:500px; margin:0 auto; margin-top:30px;">

<form action="success.php" method="post">
		<div class="form-group">
			<label for="name">Bekash</label>
			<input type="text" name="name" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control"/>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">submit</button>
	</form>
</div>