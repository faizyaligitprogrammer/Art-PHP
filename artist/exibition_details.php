<?php include('header.php'); 
include("connect.php");
$usr_id=$_SESSION['user_id'];
$qry=mysqli_query($con,"select * from ag_user_details where login_id='$usr_id'");
$row=mysqli_fetch_array($qry);
$usr_dtls_id=$row['user_details_id'];
$sql=mysqli_query($con,"select * from ag_exibition_notification where requestedby_artist_id='$usr_dtls_id'")
?>	
	
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
				<h3>Event Details</h3>
			</div>
					<div class="col-md-3 about-right">
                <a href="exibition_request.php"><h4>Request New Events</h4></a>
                </div>
                        <br/><br/>
                        <?php 
						$date=date('Y-m-d');
						$i=1;
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
                            <?php while($row=mysqli_fetch_array($sql))
							{ ?>
								<tr>
                                    <td><?php echo $i; ?></td>
                                    <?php $i++; ?>
									<td><?php echo $row['event_name']; ?>
                                    </td>
									<td><?php echo $row['requested_venue']; ?></td>
                                    <td><?php echo $row['requested_date']; ?></td>
                                    
                                    <td>
                                    
                                    <a href="exibition_edit.php?event_id=<?php echo $row['exibition_notification_id']; ?>">Edit</a>&nbsp;&nbsp;
                                    <?php if($row['approove_status']==1 && $date <= $row['requested_date']){
										?>
                                        <span class="label label-success">Event Confirmed</span>
                                        
						                <?php } 
										else if($date > $row['requested_date']){ ?>
                                       <span class="label label-danger">Event Expired</span>
                                        <?php } else{?>
                                        <span class="label label-info">Request Send</span>
                                        <?php } ?>
                                    
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