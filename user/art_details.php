<?php include("header.php"); 
include("connect.php");
$log_id=$_SESSION['user_id'];
$sq=mysqli_query($con,"select * from ag_user_details where login_id='$log_id'");
$result=mysqli_fetch_array($sq);
$purchased_user_id=$result['user_details_id'];
$art_id=$_GET['art_id'];
$user_id=$_GET['user_id'];
$qry=mysqli_query($con,"select * from ag_paintings where paintings_id='$art_id'");
$row=mysqli_fetch_array($qry);
$sql=mysqli_query($con,"select * from ag_user_details where user_details_id='$user_id'");
$res=mysqli_fetch_array($sql);
$query=mysqli_query($con,"select * from ag_comments,ag_paintings,ag_user_details where ag_comments.painting_id=ag_paintings.paintings_id and ag_comments.user_details_id=ag_user_details.user_details_id and ag_comments.painting_id='$art_id' and ag_comments.display_status=1");
$count=mysqli_num_rows($query);

?>
<div class="single">
		<div class="container">
			<div class="single-top">
				<img class="img-responsive" src="../artist/upload/<?php echo $row['painting_path']; ?>" alt="" />
			</div>
			<div class="single-bottom">
				<h4><?php echo $row['painting_name']; ?></h4><br/>
				<h4 class="media-heading">Artist Name:&nbsp;&nbsp;</h4><p class="sn"><?php echo $res['user_full_name']; ?> <!--<a href="#">Admin</a> March 02, 2015  <a href="#">5 comments</a>--></p>
                <h4 class="media-heading">Painting Price:&nbsp;&nbsp;</h4><p class="sn"><?php echo $row['painting_price']; ?> <!--<a href="#">Admin</a> March 02, 2015  <a href="#">5 comments</a>--></p>
				<p class="one">
                <?php echo $row['description']; ?>
				</p>
			</div><br/><br/>
            <div class="b-btn">
								<a href="art_booking_process.php?user_id=<?php echo $user_id; ?>&&art_id=<?php echo $art_id; ?>&&purchased_user_id=<?php echo $purchased_user_id; ?>">Purchase Now</a>
							</div>
                            
                            
                            <div class="comments heading">
				<h2>Comments</h2>
                <?php if($count == 0) {?>
                <p class="one">No Comments</p>
                <?php }  else { ?>
                <?php while($data=mysqli_fetch_array($query)){ ?>
				<div class="media">
					<div class="media-left">
						<a href="#"><img src="images/si1.png" alt=""></a>
					</div>
					<div class="media-body">
						<h4 class="media-heading"><?php echo $data['user_full_name']; ?></h4>
						<!--<h5 class="reply"> <a href="#">Reply</a></h5>-->
						<div class="clearfix"> </div>
						<p><?php echo $data['comments']; ?></p>
					</div>
				</div>
                <?php }  } ?>
			</div>
                            
                            
                            <div class="rly heading">
				<h3>Leave A Comment</h3>
					<div class="rly-top">
						<form name="Feedback Form" action="feedback_send.php" method="post">							
					
							<textarea  placeholder="Message" name="message" required></textarea>
                            <input type="hidden" name="user_id" value="<?php echo $purchased_user_id; ?>" />
                            <input type="hidden" name="art_id" value="<?php echo $art_id; ?>" />
                            <input type="hidden" name="artist_id" value="<?php echo $user_id; ?>" />
							<input type="submit" value="Send">
						</form>
					</div>
			</div>
		</div>
	</div>
    
    <?php include("footer.php"); ?>