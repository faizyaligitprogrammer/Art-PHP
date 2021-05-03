<?php include('header.php'); 
include("connect.php");
$login_id=$_SESSION['user_id'];
$qry=mysqli_query($con,"select * from ag_user_details where login_id='$login_id'");
$res=mysqli_fetch_array($qry);
$user_id=$res['user_details_id'];
//$user_id=$_GET['user_id'];
//$art_id=$_GET['art_id'];
//$purchased_user_id=$_GET['purchased_user_id'];
$sql=mysqli_query($con,"select * from ag_purchase_request,ag_paintings where ag_purchase_request.painting_id=ag_paintings.paintings_id and ag_purchase_request.user_details_id='$user_id'");
?>	
	
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
	<!--<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3 class="ghj">Categories Insertion</h3>
			</div>
			-->
			
            <div class="appearance">
				 <div class="contact-top heading">
				<h3>Purchase Details</h3>
			</div>
					<!--<div class="col-md-3 about-right">
                <a href="exibition_request.php"><h4>Request New Events</h4></a>
                </div>
                       --> <br/><br/>
                        <?php 
						$i=1;
						?>
						  <table class="table table-bordered">
							<thead>
								<tr>
                                    <th>SI NO:</th>
									<th>Product Name</th>
									<th>Product Prize</th>
                                    <th>Booking Date</th>
                                    <th>Status</th>
								</tr>
							</thead>
							<tbody>
                            <?php while($row=mysqli_fetch_array($sql))
							{ ?>
								<tr>
                                    <td><?php echo $i; ?></td>
                                    <?php $i++; ?>
									<td><?php echo $row['painting_name']; ?>
                                    </td>
									<td><?php echo $row['painting_price']; ?></td>
                                    <td><?php echo $row['requested_date']; ?></td>
                                    <td><!--<a href="exibition_edit.php?event_id=<?php //echo $row['exibition_notification_id']; ?>">Edit</a>&nbsp;&nbsp;-->
                                    
                                        <span class="label label-success">Product Delivered</span>
                                        
						                
                                        <!--<a href="#"><span class="label label-info">Purchase Request Send</span></a>-->
                                       
								</tr>
								<?php } ?>
							</tbody>
						</table>                    
					</div>
					
				   <div class="clearfix"> </div>
				</div>
		<!--</div>
	</div>-->
	<!--contact-end-->
	<!--footer-starts-->
<?php include('footer.php'); ?>