<?php
include_once("var.php");

	session_start();
	


	if(isset($_POST["submit"]))
	{
		$n=$_POST["name"];
		$email=$_POST["email"];
		$sub=$_POST["subject"];
		$msg=$_POST["msg"];
		date_default_timezone_set("Asia/Kolkata");
		$dt=date('Y-m-d  h:i:s');
		
		$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
$q="insert into contactus(name,email,subject,message,msgdate)
values('$n','$email','$sub','$msg','$dt')";
	mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$count=mysqli_affected_rows($conn);
	mysqli_close($conn);
	
	if($count==1)
	{
		header("location:nextcontact.php");	
	}
	
	else
	{
		header("location:error.php");	
	}
	
	
	}
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>RECEIPES Bootstarp responsive Website Template| contact :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
<script src="js/simpleCart.min.js"> </script>	

<script type="text/javascript">
function xyz()
{
	if(document.form1.name.value.length<2)
	{
		alert("please fill your name");
		return false;
	}
	

	if(document.form1.email.value.length<1||document.form1.email.value.indexOf("@")<3||document.form1.email.value.indexOf(".")<4)
	{
		alert("please fill proper email id");
		return false;
	}
	
	if(document.form1.subject.value.length<2)
	{
		alert("please fill subject");
		return false;
	}
	
	if(document.form1.msg.value.length<4)
	{
		alert("Please write message..!");
		return false;
	}
	
}




</script>

</head>
<body>
    <!-- header-section-starts -->
	<?php
    
	include_once("ownerheader.php");
	
	?>
    </div>
	<!-- header-section-ends -->
    
	<div class="contact-section-page">
		<div class="contact-head">
		    <div class="container">
				<h3>Contact</h3>
				<p>Home/Contact</p>
			</div>
		</div>
        
		<div class="contact_top">
			 		<div class="container">
			 			<div class="col-md-6 contact_left wow fadeInRight" data-wow-delay="0.4s">
			 				<h4>Contact Form</h4>
			 				<p>Lorem ipsum dolor sit amet, adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.</p>
							  <form method="post" name="form1" id="form1" onSubmit="return xyz()">
								 <div class="form_details">
					                 <p>
					                   <input name="name" type="text" class="text" id="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" value="Name">
					                   <input name="email" type="text" class="text" id="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" value="Email Address">
				                   </p>
					                 <p>
					                   <input name="subject" type="text" class="text" id="subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" value="Subject">
					                   <textarea name="msg" id="msg" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" value="Message">Message</textarea>
				                   </p>
					                 <div class="clearfix"> </div>
									 <div class="sub-button wow swing animated" data-wow-delay= "0.4s">
									 	<input name="submit" type="submit" value="Send message">
									 </div>
					            </div>
						       </form>
					        </div>
					        <div class="col-md-6 company-right wow fadeInLeft" data-wow-delay="0.4s">
					        	<div class="contact-map"><img src="Img2/Contact-Us.png" height="400"></div>
					        	<div class="follow-us">
								  <h3>follow us on</h3>
										<a href="#"><i class="facebook"></i></a>
										<a href=""><i class="twitter"></i></a>
										<a href="#"><i class="google-pluse"></i></a>
							  </div>
			
							
					  </div>
						</div>
					</div>

	</div>
	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
			<p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; 2014  All rights  Reserved | Template by &nbsp;<a href="http://w3layouts.com" target="target_blank">W3Layouts</a></p>
		</div>
	</div>
	<!-- footer-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>