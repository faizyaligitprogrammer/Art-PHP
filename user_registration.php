
<?php 
include('header.php');
//include("connect.php");
?>	
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $("#form_submit").click(function(){
/*   alert('Reached.........');
   return false;*/
	   // var prop = $("#txtProperty").val();     
        var fl_name = $("#txtName").val();
        var usr_adrs = $("#txtAddress").val();
		var ct_num = $("#txtNumber").val();
        var ct_eml = $("#txtEmail").val();
		var name = $("#txtUname").val();
		//var desc = $("#txtdesc").val();
        var usr_pwd = $("#txtPwd").val();
		var re_pwd = $("#txtrePwd").val();
		 var result = isNaN(ct_num);
			//alert("Reached : "+fl_name);	
			
			
	if(fl_name == "" || usr_adrs == "" || ct_num == "" || ct_eml == "" || usr_pwd == "" || re_pwd == "" || name == "" ){
		//alert('Reached.........');
			$("#error_message").html("Must Fill all the fields...");
			return false;
			}else if(!validateEmail(ct_eml)){
				$("#error_message").html("Enter a valid Email...");
				return false;
				}
				else if (result || ct_num.length < 10) {
							$("#error_message").html("please enter a valid contact number");
							return false;
						    }
							else if(usr_pwd != re_pwd)
	{
		$("#error_message").html("Password Mismatching");
		return false;
	}

         //return false;
    });
});

function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

$(document).ready(function(){
   $("#txtUname").change(function(){
    //alert('Reached.........');

		var uname = $("#txtUname").val();
			      // alert("Reached : "+email);	
		$.ajax({
            type: "POST",
            url: "check_uname.php",
            data: "uname="+uname,
            success: function(uname_sts){
				//alert(emil_sts);
				if(uname_sts == 1){
					alert("This Username is used by someone else...Please Try Another.");
					//$("#error_message").html("Email is used by someone...");
					return false;
					}
            },
        });
    });
});
</script>

	
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
				<h3>User Registration</h3>
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
					<form name="user registration form"  method="post" action="user_registration_process.php">	
                       
					<div class="col-md-6 c-left">
                         User Full Name
                         <input type="text" placeholder="User Name" name="name" id="txtName" required>
                         address
                         <textarea placeholder="Address" name="address" id="txtAddress" required></textarea>
                         Phone
                         <input type="text" placeholder="Phone " name="phone" id="txtNumber" required>
                         Email
                         <input type="text" placeholder="Email " name="email" id="txtEmail" required>
                         
                         User Name
						 <input type="text" placeholder="User Name" name="username" id="txtUname" required>
                         Password
						<input  type="password" width="100%" placeholder="Password" name="password" id="txtPwd" required>
                        Confirm Password
						<input  type="password" width="100%" placeholder="Password" name="repassword" id="txtrePwd" required>
                        <div class="error-box" id="error-box"></div>							
					</div>
					<!--<div class="col-md-6 c-left">					
							<textarea placeholder="Message" required></textarea>
					</div>-->
					<div class="clearfix"></div>
                    <div id="error_message" style="color:#F00; width:70%; text-align:center;"></div>
					<div class="submit-btn">
							<input type="submit" value="Register" id="form_submit" name="form_submit">
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