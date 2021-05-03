<?php 
include("header.php"); 
include("connect.php");
$art_id=$_GET['art_id'];
$qry=mysqli_query($con,"select * from ag_paintings where paintings_id='$art_id'");
$row=mysqli_fetch_array($qry);
?>
<div class="blog">
		<div class="container">
			<!--<div class="blog-top heading">
				<h3>Blog</h3>
				<p>Mauris malesuada mi sit amet quam euismod auctor quis quis urna. Cras a maximus ex. Vestibulum vitae vestibulum lectus, at maximus libero.</p>
			</div>-->
			<div class="blog-bottom">
				<div class="col-md-4 blog-centre">
					<div class="blog-one">
						<!--<a href="single.html" >
							<img class="img-responsive" src="images/b1.jpg" alt=""  />
						</a>-->
						<div class="blog-btm">
							<h2>Order Placed Successfully</h2>
							<p><label style="color: #FF33FF">Product Name: </label><?php echo $row['painting_name'] ?></p>
                            <p><label style="color: #FF33FF">Tottal Price: </label><?php echo $row['painting_price'] ?></p>
                            <p><label style="color: #FF33FF">Painting Dimension: </label><?php echo $row['dimension'] ?></p>
                            <p><label style="color: #FF33FF">Description: </label><?php echo $row['description'] ?></p>
							
							<div class="b-btn">
								<a href="art_booking_details.php">All Purchases</a>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
    <?php include("footer.php"); ?>