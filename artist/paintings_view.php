<?php include("header.php"); ?>
<?php 
include("connect.php");
$usr_id=$_SESSION['user_id'];
$qry=mysqli_query($con,"select * from ag_user_details where login_id='$usr_id'");
$row=mysqli_fetch_array($qry);
$usr_dtls_id=$row['user_details_id'];
$sql=mysqli_query($con,"select * from ag_paintings where artist_user_id='$usr_dtls_id'")
?>
<div class="blog">
		<div class="container">
			<div class="blog-top heading">
				<h3>Paintings</h3>
                
				<!--<p>Mauris malesuada mi sit amet quam euismod auctor quis quis urna. Cras a maximus ex. Vestibulum vitae vestibulum lectus, at maximus libero.</p>-->
                <div class="col-md-3 about-right">
                <a href="paintings_add.php"><h4>Upload Paintings</h4></a>
                </div>
			</div><br>
			<div class="blog-bottom">
            <?php while ($rw=mysqli_fetch_array($sql)){ ?>
				<div class="col-md-4 blog-left">
					<div class="blog-one">
						<!--<a href="single.html" >-->
							<img class="img-responsive" src="upload/<?php echo $rw['painting_path']; ?>" alt=""  />
						<!--</a>-->
						<div class="blog-btm">
							<a href=""><h2><?php echo $rw['painting_name']; ?></h2></a>
                            <?php if ($rw['active_status']==1) {?>
							<p style="color:#FF3399">Approved By Admin</p> <!--<a href="#">Admin</a> March 02, 2015  <a href="#">5 comments</a></p>-->
                            <?php } else {?>
								 <p style="color:#FF3399">Admin Not Approved</p>
								<?php } ?>
                                <p class="one">Price:<?php echo $rw['painting_price']; ?></p>
							<p class="one"><?php echo $rw['description']; ?></p>
							<div class="b-btn">
								<a href="paintings_edit.php?p_id=<?php echo $rw['paintings_id']; ?>&&c_id=<?php echo $rw['categories_id'] ?>">Edit Details</a>
							</div>
                            
						</div>
					</div>
                    </div>
                    <?php } ?>
                    
                    
				
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
    <?php include("footer.php"); ?>