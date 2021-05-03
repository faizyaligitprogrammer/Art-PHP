<?php
include("connect.php");
session_start();
if($_SESSION['user_name']==NULL)
{
   header("location:../login.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
<title>Art Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Decolux Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<!--start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
        <script>
         $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
	 dateFormat: 'yy-mm-dd',
	 yearRange: '1940:2018',
    });
  });
  </script>
<!--start-smoth-scrolling-->
</head>
<body>
	<!--header-top-->
	<div class="header-top" id="home">
		<div class="container">
			<div class="head-main">
				<div class="col-md-4 head-left">
					<ul>
						<!--<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="twit"> </span></a></li>
						<li><a href="#"><span class="pin"> </span></a></li>
						<li><a href="#"><span class="rss"> </span></a></li>-->
					</ul>
				</div>
				<div class="col-md-4 head-middle">
					<h1><a href="user_home.php">Art Gallery User</a></h1>
				</div>
				<!--<div class="col-md-4 head-right">
					<a href="blog.html" style="color:#FFFFFF">Login</a>
				</div>-->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
    
	<!--header-top-->
	<!--search-scripts-->
	<script src="js/classie.js"></script>
	<script src="js/uisearch.js"></script>
		<script>
			new UISearch( document.getElementById( 'sb-search' ) );
		</script>
	<!--//search-scripts-->
	<!--navigation-starts-->
	<div class="navigation">
		<span class="menu"></span> 
			<ul class="navig cl-effect-16">
				<li class="active"><a href="user_home.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="art_gallery.php">Art Gallery</a></li>
				<!--<li><a href="typo.html">Short Codes</a></li>-->
				
				<li><a href="art_booking_details.php">Purchases</a></li>
                <li><a href="event_details.php">Events</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
                
			</ul>
	</div>
	<!--navigation-end-->
	<!--script-for-menu-->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!--script-for-menu-->