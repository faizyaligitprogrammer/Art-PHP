<?php include('header.php'); 
include("connect.php");
//$login_id=$_SESSION['user_id'];
//$qry=mysql_query("select * from ag_user_details where login_id='$login_id'");
//$res=mysql_fetch_array($qry);
//$user_id=$res['user_details_id'];
//$user_id=$_GET['user_id'];
//$art_id=$_GET['art_id'];
//$purchased_user_id=$_GET['purchased_user_id'];
//$sql=mysql_query("select * from ag_exibition_notification,ag_artist where ag_exibition_notification.requestedby_artist_id=ag_artist.user_details_id and ag_exibition_notification.approove_status='1'");
$sql=mysqli_query($con,"select * from ag_exibition_notification,ag_artist,ag_user_details where ag_exibition_notification.requestedby_artist_id=ag_artist.user_details_id and ag_artist.user_details_id=ag_user_details.user_details_id and ag_exibition_notification.approove_status='1'");
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
					<!--<div class="col-md-3 about-right">
                <a href="exibition_request.php"><h4>Request New Events</h4></a>
                </div>
                       --> <br/><br/>
                        <?php 
						$i=1;
						?>
						  <table class="table table-bordered">
							<thead>
								<tr>
                                    <th>SI NO:</th>
									<th>Artist Name</th>
									<th>Event Name</th>
                                    <th>Event Venue</th>
                                    <th>Event Date</th>
                                    <th>Status</th>
								</tr>
							</thead>
							<tbody>
                            <?php while($row=mysqli_fetch_array($sql))
							{ ?>
								<tr>
                                    <td><?php echo $i; ?></td>
                                    <?php $i++; ?>
                                    <td><?php echo $row['user_full_name']; ?>
                                    </td>
									<td><?php echo $row['event_name']; ?>
                                    </td>
									<td><?php echo $row['requested_venue']; ?></td>
                                    <td><?php echo $row['requested_date']; ?></td>
                                    <td><!--<a href="exibition_edit.php?event_id=<?php //echo $row['exibition_notification_id']; ?>">Edit</a>&nbsp;&nbsp;-->
                                    <?php //if($row['request_status']==1){
										?>
                                        <a href="#"><span class="label label-success">Event Confirmed</span></a>
                                        
						                <?php //} else{ 
										?>
                                        <!--<a href="#"><span class="label label-info">Purchase Request Send</span></a>-->
                                       <!--<a href="#"><span class="label label-info">Purchase Request Send</span></a>-->
                                        <?php // } ?>
                                    
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