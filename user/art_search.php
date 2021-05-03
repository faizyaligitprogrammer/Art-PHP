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
    <?php
	$qry=mysqli_query($con,"select * from ag_categories where category_status='1'");
	
	//$u_id=$_SESSION['user_id'];
	//echo $u_id;
	$sql=mysqli_query($con,"select * from ag_user_login where user_type_id='2' and active_status='1'");
	
	
	?>
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>Search Paintings</h3>
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
					<form name="Search Arts" action="art_search_gallery.php" method="post">	
                       
					<div class="col-md-6 c-left">
                         Select Artist:
                         <select  style=" width:100%; padding:5px 8px; margin-top:2px" name="login_id">
                         <option value="0">Select</option>
                         <?php while($res=mysqli_fetch_array($sql)){?>
                         <option value="<?php echo $res['login_id']; ?>"><?php echo $res['login_name']; ?></option>
                         <?php } ?>
                         </select><br/><br/>
                         Select Category:
                         <select  style=" width:100%; padding:5px 8px; margin-top:2px" name="category_id">
                         <option value="0">Select</option>
                         <?php while($row=mysqli_fetch_array($qry)){?>
                         <option value="<?php echo $row['categories_id']; ?>"><?php echo $row['categories_name']; ?></option>
                         <?php } ?>
                         </select>
                         
                        
                         
                         			
					</div>
					<!--<div class="col-md-6 c-left">					
							<textarea placeholder="Message" required></textarea>
					</div>-->
					<div class="clearfix"></div>
					<div class="submit-btn">
							<input type="submit" value="Search">
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