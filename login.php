<?php include("header.php"); ?>
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
   $("#login").click(function(){
	   
    
        username=$("#username").val();
        password=$("#password").val();
         $.ajax({
            type: "POST",
            url: "login_validation.php",
            data: "name="+username+"&pwd="+password,
		    success: function(data){
				
				//alert(data);
              if(data == 1)
              {
				 // alert("Hereeee");
                 window.location='admin/admin_home.php';
				
			  }
			  else if(data == 2)
              {
				 // alert("Hereeee");
                 window.location='artist/artist_home.php';
				
              }
			  else if(data == 3)
              {
				 // alert("Hereeee");
                 window.location='user/user_home.php';
				
              }
			  
              else
              {
                    $("#add_err").html("Invalid username or password");
              }
            },
            beforeSend:function()
			{  
                 $("#add_err").html("Loading...")
            }
        });
         return false;
    });
});
</script>
	<!--start-breadcrumbs-->
	
	<!--end-breadcrumbs-->
	<!--contact-starts-->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>Login</h3>
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
					<form>
                    <div id="add_err" style="color:#F00;"></div>
	
					<div class="col-md-6 c-left">
						<input type="text" name="username" id="username" placeholder="User Name">
						<input type="password" placeholder="Password" name="password" id="password">
																
					</div>
					
					<div class="clearfix"></div>
					<div class="submit-btn">
							<input type="submit" id="login" value="LogIn">
					</div>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--contact-end-->
	<?php include("footer.php"); ?>