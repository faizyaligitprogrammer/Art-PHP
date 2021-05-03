<?php include("header.php");
include("connect.php");
$qry=mysqli_query($con,"select * from ag_paintings where active_status='1'");
//$row=mysql_fetch_array($qry);
 ?>
<div class="welcome" id="welcome">
		<div class="container">
			<div class="welcome-top heading">
				<h2>Art Gallery</h2>
				<p>Discover the world of Indian Art & Collectibles</p>
			</div>
			<div class="welcome-bottom">
            <?php while($row=mysqli_fetch_array($qry)){ ?>
				<div class="col-md-4 welcome-left">
					<img src="artist/upload/<?php echo $row['painting_path']; ?>" alt="" />
					<div class="welcome-btm">
						<a href="art_details.php?art_id=<?php echo $row['paintings_id']; ?>&&user_id=<?php echo $row['artist_user_id']; ?>">More Details <span class="arw"> </span></a>
					</div>
				</div>
                <?php } ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
    <?php include("footer.php"); ?>