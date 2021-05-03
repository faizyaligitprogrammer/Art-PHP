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
				<h3 class="ghj">User Feedbacks</h3>
			</div>
					<div class="col-md-12">
						
                        <br>
                        <?php 
						include("connect.php");
						$qry=mysqli_query($con,"select * from ag_comments,ag_paintings,ag_user_details where ag_comments.painting_id=ag_paintings.paintings_id and ag_comments.user_details_id=ag_user_details.user_details_id");
						//$res=mysql_query($qry);
						$i=1;
						?>
						  <table class="table table-bordered">
							<thead>
								<tr>
                                    <th>SI NO:</th>
									<th>User Full Name</th>
									<th>Painting Name</th>
                                    <th>Comment</th>
                                    <th></th>
								</tr>
							</thead>
							<tbody>
                            <?php while($row=mysqli_fetch_array($qry))
							{ ?>
								<tr>
                                    <td><?php echo $i; ?></td>
                                    <?php $i++; ?>
									<td><?php echo $row['user_full_name']; ?>
                                    </td>
									<td><?php echo $row['painting_name']; ?></td>
                                    <td><?php echo $row['comments']; ?></td>
                                    <td>
                                    <?php if($row['display_status']==1){
										?>
                                        <span class="label label-success">Active</span></a>
						                <?php } else{ ?>
                                        <span class="label label-warning">Blocked</span>
                                        <?php } ?>
                                    <span class="badge badge-primary"><a href="comments_status_update.php?c_id=<?php echo $row['comments_id']; ?>&&sts=<?php echo $row['display_status']; ?>" style="color:#FFFFFF">Update Status</a></td>
                                    
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