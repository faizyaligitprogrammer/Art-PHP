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
            <?php include("connect.php");
			$id=$_GET['id'];
			$sql=mysqli_query($con,"select * from ag_user_details where user_details_id='$id'");
			$rw=mysqli_fetch_array($sql);
			?>
			
            <div class="appearance">
				 <div class="contact-top heading">
				<h3 class="ghj">Paintings By <?php echo $rw['user_full_name'] ?></h3>
			</div>
					<div class="col-md-12">
						<!--<p><a href="categories_add.php">Add New Categories</a></p>-->
                        <br>
                        <?php
						//session_start(); 
						
						$qry="select * from ag_paintings where artist_user_id='$id'";
						//echo $qry;
						$res=mysqli_query($con,$qry);
						$i=1;
						
						//echo $_SESSION['active_status'];
						//$status=$_SESSION['active_status'];
						?>
						  <table class="table table-bordered">
							<thead>
								<tr>
                                    <th>SI NO:</th>
									<th>Painting</th>
									<th>Prize</th>
                                    <th>Diemension</th>
                                    <th>Description</th>
                                    
                                    <th></th>
								</tr>
							</thead>
							<tbody>
                            <?php while($row=mysqli_fetch_array($res))
							{ ?>
								<tr>
                                    <td><?php echo $i; ?></td>
                                    <?php $i++; ?>
									<!--<td><?php //echo $row['user_full_name']; 
									//if($row['user_status']==1){
										?>
                                        <span class="label label-success">Active</span></a>
						                <?php //} else{ ?>
                                        <span class="label label-warning">Blocked</span>
                                        <?php //} ?>
						            </td>-->
                                    <td><img src="../artist/upload/<?php echo $row['painting_path']; ?>" width="50%" height="20%"/>
                                   <?php if($row['active_status']==1){
										?>
                                        <span class="label label-success">Approved</span></a>
						                <?php } else{ ?>
                                        <span class="label label-warning">Blocked</span>
                                        <?php } ?></td>
									<td><?php echo $row['painting_price']; ?></td>
                                    <td><?php echo $row['dimension']; ?></td>
                                    <td><?php echo $row['description']; ?></td>
                                    
                                    <td>
                                    <!--<td><span class="badge badge-primary"><a href="artist_paintings.php?c_id=<?php //echo $row['user_details_id']; ?>" style="color:#FFFFFF">View Paintings</a></span>-->
                                    
									<span class="badge badge-primary"><a href="artist_paintings_status.php?id=<?php echo $row['artist_user_id']; ?>&&p_id=<?php echo $row['paintings_id']; ?>&&sts=<?php echo $row['active_status']; ?>" style="color:#FFFFFF">Update Status</a> 
                                    
                                    </td>
                                    
                                    
                                    
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