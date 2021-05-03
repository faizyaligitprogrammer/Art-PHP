<?php 
include("header.php"); 
include("connect.php");
$date=date('Y-m-d');
$qry=mysqli_query($con,"select * from ag_exibition_notification,ag_user_details where ag_exibition_notification.requestedby_artist_id=ag_user_details.user_details_id and ag_exibition_notification.approove_status='1' and ag_exibition_notification.requested_date >= '$date'");

?>
<div class="welcome" id="welcome">
		<div class="container">
			<div class="welcome-top heading">
				<h2>Events</h2>
				
			</div>
            
			<div class="welcome-bottom">
            
            <?php while($row=mysqli_fetch_array($qry)) { ?>
				<div class="col-md-4 welcome-left">
                <div class="blog-btm">
					<h2><?php echo $row['event_name'] ?></h2>
							<p><label style="color: #FF33FF">Conducted By: </label><?php echo $row['user_full_name'] ?></p>
                            <p><label style="color: #FF33FF">Event Venue: </label><?php echo $row['requested_venue'] ?></p>
                            <p><label style="color: #FF33FF">Event Date: </label><?php echo $row['requested_date'] ?></p>
                            
							<!--<div class="b-btn">
								<a href="Login.php">For Apply And More Details</a>
							</div>-->
                            </div>
				</div>
                
                <?php } ?>
                
				
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
    <?php include("footer.php"); ?>