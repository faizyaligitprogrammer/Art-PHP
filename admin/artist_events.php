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
						//session_start(); 
						include("connect.php");
						$user_id=$_GET['id'];
						$qry="select * from ag_exibition_notification where requestedby_artist_id='$user_id'";
						$res=mysqli_query($con,$qry);
						$i=1;
						$date=date('Y-m-d');
						
						//echo $_SESSION['active_status'];
						//$status=$_SESSION['active_status'];
						?>
						  <table class="table table-bordered">
							<thead>
								<tr>
                                    <th>SI NO:</th>
									<th>Event Name</th>
									<th>Event Venue</th>
                                    <th>Event Date</th>
                                    
                                    <th></th>
								</tr>
							</thead>
							<tbody>
                            <?php while($row=mysqli_fetch_array($res))
							{ ?>
								<tr>
                                    <td><?php echo $i; ?></td>
                                    <?php $i++; ?>
									<td><?php echo $row['event_name']; 
									if($row['approove_status'] == 1 && $date <= $row['requested_date']){
										?>
                                        <span class="label label-success">Request Confirm</span></a>
						                <?php } else if($date > $row['requested_date']){ ?>
                                       <span class="label label-danger">Event Expired</span> 
									   <?php } else{ ?>
                                        <span class="label label-warning">Event Blocked</span>
                                        <?php } ?>
						            </td>
									<td><?php echo $row['requested_venue']; ?></td>
                                    <td><?php echo $row['requested_date']; ?></td>
                                    
                                    <td>
                                    <?php if($date > $row['requested_date']){ ?>
                                       <span class="label label-danger">Event Expired</span> 
									   <?php } else{ ?>
									<span class="badge badge-primary"><a href="artist_event_status_update.php?exbtn_id=<?php echo $row['exibition_notification_id']; ?>&&user_id=<?php echo $user_id ?>&&sts=<?php echo $row['approove_status']; ?>" style="color:#FFFFFF">Update Status</a> <?php } ?>
                                    
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