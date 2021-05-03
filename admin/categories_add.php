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
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>Categories Insertion</h3>
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
					<form name="Categories Insert" action="category_process.php" method="post">	
                       
					<div class="col-md-6 c-left">
                         Category Name:
                         <input type="text" placeholder="Category Name" name="c_name" required>
                         Category Details:
                         <textarea placeholder="Category Details" name="c_details" required></textarea>
                         
                        							
					</div>
					<!--<div class="col-md-6 c-left">					
							<textarea placeholder="Message" required></textarea>
					</div>-->
					<div class="clearfix"></div>
					<div class="submit-btn">
							<input type="submit" value="Submit">
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