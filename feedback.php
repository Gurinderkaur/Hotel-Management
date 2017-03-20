<?php
include_once("var.php");

	session_start();
	


	if(isset($_POST["go"]))
	{
		$n=$_POST["name"];
		$email=$_POST["email"];
		$ph=$_POST["number"];
		$rw=$_POST["ratewebsite"];
		$rs=$_POST["rateservice"];
		$sug=$_POST["sug"];
		
		
		$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
$q="insert into feedback(name,email,phone,ratewebsite,rateservice,suggestion)
values('$n','$email','$ph','$rw','$rs','$sug')";
	mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$count=mysqli_affected_rows($conn);
	mysqli_close($conn);
	
	if($count==1)
	{
		$msg="Thank you for Feedback..!";	
	}
	
	else
	{
		$msg="Try again for Feedback..!";	
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
	if(document.form2.name.value.length<4)
	{
		alert("please fill your name");
		return false;
	}
	

	if(document.form2.email.value.length<1||document.form1.email.value.indexOf("@")<3||document.form1.email.value.indexOf(".")<4)
	{
		alert("please fill proper email id");
		return false;
	}
	
	if(document.form2.number.value.length<1)
	{
		alert("please fill subject");
		return false;
	}
	
	if(document.form2.ratewebsite[0].checked==false&&document.form2.ratewebsite[1].checked==false&&document.form2.ratewebsite[2].checked==false&&document.form2.ratewebsite[3].checked==false)
	{
		alert("Rate Website");
		return false;
	}
	
	
	if(document.form2.rateservice[0].checked==false&&document.form2.rateservice[1].checked==false&&document.form2.rateservice[2].checked==false&&document.form2.rateservice[3].checked==false)
	{
		alert("Rate our service");
		return false;
	}
	


if(document.form2.sug.value.length<4)
	{
		alert("please give suggestions..");
		return false;
	}

}
</script>
	
</head>
<body>
    <!-- header-section-starts -->
	<?php
    
	include_once("header.php");
	
	?>			<div class="clearfix"></div>
			</div>
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
		  <form name="form2" method="post" action="">
		    <table width="100%" border="0">
		      <tr>
		        <td width="33%">&nbsp;</td>
		        <td width="67%"><h1><strong>Feedback</strong></h1></td>
	          </tr>
	        </table>
	      </form>
		  <h1>&nbsp;</h1>
		  <form action="" method="post" name="form2" id="form2" onSubmit="return xyz()">
		    <table width="100%" border="0">
		      <tr>
		        <td width="14%" align="left">&nbsp;</td>
		        <td width="36%" height="40" align="left"><h3><strong>Name</strong></h3></td>
		        <td width="50%"><label>
		          <input name="name" type="text" id="name" size="50">
	            </label></td>
	          </tr>
		      <tr>
		        <td align="left">&nbsp;</td>
		        <td height="39" align="left"><h3><strong>Email ID</strong></h3></td>
		        <td><label>
		          <input name="email" type="text" id="email" size="50">
	            </label></td>
	          </tr>
		      <tr>
		        <td align="left">&nbsp;</td>
		        <td height="35" align="left"><h3><strong>Phone Number</strong></h3></td>
		        <td><input name="number" type="text" id="number" size="50"></td>
	          </tr>
		      <tr>
		        <td align="left">&nbsp;</td>
		        <td height="55" align="left"><h3><strong>Rate our Website</strong></h3></td>
		        <td><p>
		          <label>
		            <input type="radio" name="ratewebsite" value="excellent" id="ratewebsite_0">
		            Excellent</label>
		          <label>
		            <input type="radio" name="ratewebsite" value="good" id="ratewebsite_1">
	              Good</label>
		          <label>
		            <input type="radio" name="ratewebsite" value="fair" id="ratewebsite_2">
	              Fair</label>
		          <label>
		            <input type="radio" name="ratewebsite" value="notbad" id="ratewebsite_3">
	              Not Bad</label>
		          <br>
	            </p></td>
	          </tr>
		      <tr>
		        <td align="left">&nbsp;</td>
		        <td height="56" align="left"><h3><strong>Rate our Service(out of 5)</strong></h3></td>
		        <td><p>
		          <label>
		            <input type="radio" name="rateservice" value="5" id="rateservice_0">
		            5</label>
		          <label>
		             <input type="radio" name="rateservice" value="4" id="rateservice_1">
	              4</label>
		          <label>
		            <input type="radio" name="rateservice" value="3" id="rateservice_2">
	              3</label>
		          <label>
		            <input type="radio" name="rateservice" value="2" id="rateservice_3">
	              2</label><br>
	            </p></td>
	          </tr>
		      <tr>
		        <td align="left">&nbsp;</td>
		        <td align="left"><h3><strong>Any Suggestion</strong></h3></td>
		        <td><textarea name="sug" id="sug"></textarea></td>
	          </tr>
		      <tr>
		        <td align="center">&nbsp;</td>
		        <td align="center">&nbsp;</td>
		        <td>&nbsp;</td>
	          </tr>
		      <tr>
		        <td align="center">&nbsp;</td>
		        <td align="center">&nbsp;</td>
		        <td><input type="submit" name="go" id="go" value="GO"></td>
	          </tr>
		      <tr>
		        <td align="center">&nbsp;</td>
		        <td align="center">&nbsp;</td>
		        <td>&nbsp;</td>
	          </tr>
		      <tr>
		        <td align="center">&nbsp;</td>
		        <td align="center">&nbsp;</td>
		        <td>
                <?php
                if(isset($msg))
				{
					
					print $msg;	
				}
				
				?>
                
                </td>
	          </tr>
	        </table>
	      </form>
		  <p><strong></strong></p>
		</div>

	</div>
	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
			<p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; 2014  All rights  Reserved | Template by &nbsp;<a href="http://w3layouts.com" target="target_blank">W3Layouts</a></p>
		</div>
	</div>
	
</body>
</html>