<?php include("header.php");
include("connect.php");
$login_id=$_POST['login_id'];
$category_id=$_POST['category_id'];
$sql=mysqli_query($con,"select * from ag_user_details where login_id='$login_id'");
$res=mysqli_fetch_array($sql);
$user_id=$res['user_details_id'];
$qry=mysqli_query($con,"select * from ag_paintings where categories_id='$category_id' and artist_user_id='$user_id'");
//$row=mysql_fetch_array($qry);
 ?>
<div class="welcome" id="welcome">
		<div class="container">
			<div class="welcome-top heading">
				<h2>Art Gallery</h2>
				<p>Painting Arts By <?php echo $res['user_full_name']; ?></p>
			</div>
            <p class="sn"><a href="art_search.php" style="color:#03F"><h4 style="color:#F9C">Search</a>&nbsp;&nbsp;&nbsp;Paintings By Artist And Categories</h4></p>
			<div class="welcome-bottom">
            <?php while($row=mysqli_fetch_array($qry)){ ?>
				<div class="col-md-4 welcome-left">
					<img src="../artist/upload/<?php echo $row['painting_path']; ?>" alt="" />
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