<?php include('header.php'); ?>	
	
	<!--script-for-menu-->
	<!--start-breadcrumbs-->
	<!--<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Contact</li>
				</ol>
			</div>
		</div>
	</div>-->
	<!--end-breadcrumbs-->
	<!--contact-starts-->
	<!--<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3 class="ghj">Categories Insertion</h3>
			</div>
			-->
			
            <div class="appearance">
				 <div class="contact-top heading">
				<h3 class="ghj">Categories Details</h3>
			</div>
					<div class="col-md-12">
						<p><a href="categories_add.php">Add New Categories</a></p>
                        <br>
                        <?php 
						include("connect.php");
						$qry="select * from ag_categories";
						$res=mysqli_query($con,$qry);
						$i=1;
						?>
						  <table class="table table-bordered">
							<thead>
								<tr>
                                    <th>SI NO:</th>
									<th>Category Name</th>
									<th>Category Details</th>
                                    <th></th>
								</tr>
							</thead>
							<tbody>
                            <?php while($row=mysqli_fetch_array($res))
							{ ?>
								<tr>
                                    <td><?php echo $i; ?></td>
                                    <?php $i++; ?>
									<td><?php echo $row['categories_name']; ?>
                                    <?php if($row['category_status']==1){
										?>
                                        <span class="label label-success">Active</span></a>
						                <?php } else{ ?>
                                        <span class="label label-warning">Blocked</span>
                                        <?php } ?></td>
									<td><?php echo $row['categories_details']; ?></td>
                                    <td><a href="categories_edit.php?c_id=<?php echo $row['categories_id']; ?>">Edit</a>
                                    <span class="badge badge-primary"><a href="categories_status_update.php?c_id=<?php echo $row['categories_id']; ?>&&sts=<?php echo $row['category_status']; ?>" style="color:#FFFFFF">Update Status</a></td>
                                    
								</tr>
								<?php } ?>
							</tbody>
						</table>                    
					</div>
					
				   <div class="clearfix"> </div>
				</div>
		<!--</div>
	</div>-->
	<!--contact-end-->
	<!--footer-starts-->
<?php include('footer.php'); ?>