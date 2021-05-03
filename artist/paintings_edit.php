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
	$p_id=$_GET['p_id'];
	$c_id=$_GET['c_id'];
	$qry="select * from ag_categories where categories_id='$c_id'";
	$res=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($res);
	$u_id=$_SESSION['user_id'];
	//echo $u_id;
	$sql=mysqli_query($con,"select * from ag_paintings where paintings_id='$p_id'");
	$rw=mysqli_fetch_array($sql);
	
	?>
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>Edit Painting Details</h3>
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
					<form name="Edit Paintings" action="paintings_edit_process.php" method="post">	
                       
					<div class="col-md-6 c-left">
                         Category Name:
                         <input type="text" placeholder="<?php echo $row['categories_name'] ?>" readonly required>
                         <!--<select  style=" width:100%; padding:5px 8px; margin-top:2px" name="category_id">
                         <?php //while($row=mysql_fetch_array($res)){?>
                         <option value="<?php// echo $row['categories_id']; ?>"><?php// echo $row['categories_name']; ?></option>
                         <?php //} ?>
                         </select>-->
                         <?php
						 /*$sql="select * from ag_user_details where login_id='$u_id'";
						 $result=mysql_query($sql);
						 $rw=mysql_fetch_array($result);*/
						  ?>
                         <br>
                         <br>
                         <input type="hidden" name="p_id" value="<?php echo $rw['paintings_id']; ?>"/>
                         Art Name:
                         <input type="text" placeholder="<?php echo $rw['painting_name']; ?>" value="<?php echo $rw['painting_name']; ?>" name="art_name" required>
                        
                         
                         Painting Dimension:
                         <input type="text" placeholder="<?php echo $rw['dimension']; ?>" value="<?php echo $rw['dimension']; ?>" name="dimension" required>
                         Painting Price:
                         <input type="text" placeholder="<?php echo $rw['painting_price']; ?>" value="<?php echo $rw['painting_price']; ?>" name="prize" required>
                         Description:
                         <textarea placeholder="<?php echo $rw['description']; ?>" name="desc" required><?php echo $rw['description']; ?></textarea>
                         			
					</div>
					<!--<div class="col-md-6 c-left">					
							<textarea placeholder="Message" required></textarea>
					</div>-->
					<div class="clearfix"></div>
					<div class="submit-btn">
							<input type="submit" value="Edit">
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