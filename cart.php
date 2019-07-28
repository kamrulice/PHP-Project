<?php include"inc/header.php";?>
  <?php include"lib/Database.php";?>
   
  	<?php
  		if(isset($_GET['cartId'])){
  			$id=$_GET['cartId'];
  			
                  $db = new Database();
                    	$query = "SELECT * FROM tbl_book WHERE id='$id'";
                    	$result = $db->select($query);

                    	}


         			?>


                    <h2 style="text-align:center; margin-bottom:10px; margin-top:20px;">Your Card</h2>

						<table class="table table-striped">
							<tr>
								<th width="5%">SL</th>
								<th width="20%">Title</th>
								<th width="15%">Author</th>
								<th width="15%">ISBN_Number</th>
								<th width="20%">Publisher</th>
								<th width="15%">Edition</th>
								<th width="15%">Price</th>
								<th width="10%">Action</th>
							</tr>
							 <?php
							 	if(isset($result)){
							 		$i=0;
							 		foreach($result as $value){
							 ?>
							 
							
							<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $value['title'];?></td>
								<td><?php echo $value['author'];?></td>
								<td><?php echo $value['isbn_number'];?></td>
								<td><?php echo $value['publisher'];?></td>
								<td><?php echo $value['edition'];?></td>
								<td><?php echo $value['price'];?></td>
								<td>
									 
									 
										<a href="cart.php? cartId=<?php echo $value['id'];?>"><input type="submit" class="btn btn-primary" value="Delete"></a>
								 
								</td>
								 
							</tr>
						<?php } } ?>
							
							
						</table>
						<div style="text-align:center; margin-top:108px; margin-left:30px;">
						<a href="payment.php"><img src="check.png"></a>
					</div>
						 
 