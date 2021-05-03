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
	$qry="select * from ag_categories";
	$res=mysqli_query($con,$qry);
	$u_id=$_SESSION['user_id'];
	//echo $u_id;
	
	?>
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>Upload Paintings</h3>
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
					<form name="Upload Paintings" action="paintings_add_process.php" method="post" enctype="multipart/form-data">	
                       
					<div class="col-md-6 c-left">
                         Select Category:
                         <select  style=" width:100%; padding:5px 8px; margin-top:2px" name="category_id">
                         <?php while($row=mysqli_fetch_array($res)){?>
                         <option value="<?php echo $row['categories_id']; ?>"><?php echo $row['categories_name']; ?></option>
                         <?php } ?>
                         </select>
                         <?php
						 $sql="select * from ag_user_details where login_id='$u_id'";
						 $result=mysqli_query($con,$sql);
						 $rw=mysqli_fetch_array($result);
						  ?>
                         <br>
                         <br>
                         <input type="hidden" name="u_id" value="<?php echo $rw['user_details_id']; ?>"/>
                         Art Name:
                         <input type="text" placeholder="Art Name" name="art_name" required>
                        
                         Upload Painting:
                         <input type="file" name="PF_file" id="PF_file"><br> 
                         Painting Dimension:
                         <input type="text" placeholder="Painting Dimension" name="dimension" required>
                         Painting Prize:
                         <input type="text" placeholder="Prize" name="prize" required>
                         Description:
                         <textarea placeholder="Description" name="desc" required></textarea>
                         			
					</div>
					<!--<div class="col-md-6 c-left">					
							<textarea placeholder="Message" required></textarea>
					</div>-->
					<div class="clearfix"></div>
					<div class="submit-btn">
							<input type="submit" value="Upload">
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