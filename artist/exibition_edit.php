<?php include('header.php'); 
include("connect.php");
$event_id=$_GET['event_id'];
$qry=mysqli_query($con,"select * from ag_exibition_notification where exibition_notification_id='$event_id'");
$row=mysqli_fetch_array($qry);
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
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>Update Event</h3>
			</div>
			
			<div class="contact-bottom">
				<div class="col-md-4 contact-left">
					<!--<h2>How to contact</h2>
					<p>Donec vehicula nisi vel tortor semper vehicula. Phasellus ac bibendum sapien, vel pulvinar nibh.</p>
					<div class="add">						
						<h5>Address</h5>
							<address>
								<strong>Company name.</strong><br>
								795 Folsom Ave, Suite 600<br>
								San Francisco, CA 94107
							</address>					
					</div>-->
				</div>
				<div class="col-md-8 contact-right">
					<form name="Events Edit" action="exibition_edit_process.php" method="post">	
                       
					<div class="col-md-6 c-left">
                         Event Name:
                         <input type="text" value="<?php echo $row['event_name'] ?>" name="event_name" required>
                         <input type="hidden" value="<?php echo $row['exibition_notification_id'] ?>" name="event_id">
                         Event Venue:
                         <input type="text" value="<?php echo $row['requested_venue'] ?>" name="event_venue" required>
                         Event Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <input type="date" value="<?php echo $row['requested_date'] ?>" name="event_date" required>						
					</div>
					<!--<div class="col-md-6 c-left">					
							<textarea placeholder="Message" required></textarea>
					</div>-->
					<div class="clearfix"></div>
					<div class="submit-btn">
							<input type="submit" value="Update">
					</div>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
            
		</div>
	</div>
	<!--contact-end-->
	<!--footer-starts-->
<?php include('footer.php'); ?>