<?php include"inc/header.php";?>
  <?php include"lib/Database.php";?>
   

                  <?php   	
                  $db = new Database();
                    	$query = "SELECT * FROM tbl_book";
                    	$result = $db->select($query);
                    	


         			?>


                    <h2 style="text-align:center; margin-bottom:10px; margin-top:20px;">Book List</h2>

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
							 	if($result){
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
									 
									 
										<a href="cart.php? cartId=<?php echo $value['id'];?>"><input type="submit" class="btn btn-primary" value="Buy Now"></a>
								 
								</td>
								 
							</tr>
						<?php } } ?>
							
						 
							
						</table>
						 
 