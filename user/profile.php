<?php include("header.php"); 
include("connect.php");
$log_id=$_SESSION['user_id'];
$qry=mysqli_query($con,"select * from ag_user_details where login_id='$log_id'");
$row=mysqli_fetch_array($qry);
$user_id=$row['user_details_id'];
?>
<div class="features">
		<div class="container">
			<div class="features-top heading">
				<h3>User Profile</h3>
				
			</div>
			<div class="features-bottom">
				<!--<div class="col-md-6 festure-left">
					<div class="f-left">
						<a href="single.html"><img src="images/f-1.jpg" alt="" /></a>
					</div>
					<div class="f-right">
						<ul>
							<li><a href="#">Curabitur vitae nisi ut eros</a></li>
							<li><a href="#">Donec sagittis interdum tellus</a></li>
							<li><a href="#">In neque arcu vulputate vitae</a></li>
							<li><a href="#">Cum sociis natoque penatibus</a></li>
							<li><a href="#">Vestibulum congue turpis ac</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>-->
				
                    <div class="col-md-9 festure-left">
					<div class="f-right">
						<ul>
							<li><label style="color: #C3C">Full Name:</label>&nbsp;&nbsp;</label><?php echo $row['user_full_name']; ?></li>
							<li><label style="color:#C3C">Address:</label>&nbsp;&nbsp;<?php echo $row['user_address']; ?></li>
							<li><label style="color:#C3C">Contact:</label>&nbsp;&nbsp;<?php echo $row['user_contact_num']; ?></li>
							<li><label style="color:#C3C">Email:</label>&nbsp;&nbsp;<?php echo $row['user_email']; ?></li>
							
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
                
                    
				<div class="clearfix"></div>
                <div class="b-btn" align="center">
								<a href="profile_edit.php?user_id=<?php echo $user_id; ?> ">Edit Profile</a>
							</div>
			</div>
		</div>
	</div><br/><br/>
    <?php include("footer.php"); ?>