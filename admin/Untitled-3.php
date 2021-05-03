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
				<h3 class="ghj">Registered Artists</h3>
			</div>
					<div class="col-md-12">
						<!--<p><a href="categories_add.php">Add New Categories</a></p>-->
                        <br>
                        <?php 
						include("connect.php");
						$qry="select * from ag_user_details join ag_arist where ag_user_details.user_details_id=                        ag_artist.user_details_id";
						$res=mysqli_query($con,$qry);
						$i=1;
						?>
						  <table class="table table-bordered">
							<thead>
								<tr>
                                    <th>SI NO:</th>
									<th>Artist Name</th>
									<th>Address</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Specialities</th>
                                    <th>Profile Pic</th>
                                    <th></th>
								</tr>
							</thead>
							<tbody>
                            <?php while($row=mysqli_fetch_array($res))
							{ ?>
								<tr>
                                    <td><?php echo $i; ?></td>
                                    <?php $i++; ?>
									<td><?php echo $row['user_full_name']; ?></td>
									<td><?php echo $row['user_address']; ?></td>
                                    <td><?php echo $row['user_contact_num']; ?></td>
                                    <td><?php echo $row['user_email']; ?></td>
                                    <td><?php echo $row['specilaities']; ?></td>
                                    <td><img src="../upload/<?php echo $row['artist_image']; ?>"/></td>
                                    <td><a href="categories_edit.php?c_id=<?php echo $row['categories_id']; ?>">Edit</a></td>
                                    
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