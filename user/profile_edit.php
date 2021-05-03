<?php include('header.php'); 
include("connect.php");
$user_id=$_GET['user_id'];
$qry=mysqli_query($con,"select * from ag_user_details where user_details_id='$user_id'");
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
				<h3>Edit Profile</h3>
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
					<form name="artist profile edit" action="profile_edit_process.php" method="post">	
                       
					<div class="col-md-6 c-left">
                         User Name:
                         <input type="text" value="<?php echo $row['user_full_name']; ?>" name="name" required>
                         <input type="hidden" value="<?php echo $user_id; ?>" name="user_id">
                         address:
                         <textarea name="address" required><?php echo $row['user_address']; ?></textarea>
                         Phone:
                         <input type="text" value="<?php echo $row['user_contact_num']; ?>" name="phone" required>
                         Email:
                         <input type="text" value="<?php echo $row['user_email']; ?>" name="email" required>
                         
                         
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