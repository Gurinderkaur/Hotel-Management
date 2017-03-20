<?php
	session_start();
	require_once("var.php");
	
	if(!isset($_SESSION["un"]))
	{
		header("location:invaliduser.php");
	}
	
	$utype=$_SESSION["type"];
	if($utype=="normal" or $utype=="admin")
	{
		header("location:invaliduser.php");
	}
if(isset($_POST["menu"]))
{
	$rid=$_POST["rname"];
	$dname=$_POST["dname"];
	$description=$_POST["desc"];
	$discount=$_POST["dis"];
	$rate=$_POST["rate"];
	$errr=$_FILES["img"]["error"];
	if($errr==0)
	{
		$date = date_create();
		$tstamp=date_timestamp_get($date);
		$dpic=$tstamp.$_FILES["img"]["name"];
		$tname=$_FILES["img"]["tmp_name"];
		move_uploaded_file($tname,"uploads/$dpic");
	}
	else
	{
		$dpic="no-image.png";	
	}
	$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
	
	
	$q1="insert into menu(rid,dname,description,discount,rate,dpic) values('$rid','$dname','$description','$discount','$rate','$dpic')";
	mysqli_query($conn,$q1) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		$msg="Menu item added successfully";
	}
	else
	{
		$msg="Problem while adding menu item, please try again";
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
<title>RECEIPES Bootstarp responsive Website Template| Home :: w3layouts</title>
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
<style type="text/css">
body,td,th {
	font-family: "Source Sans Pro", sans-serif;
	font-size: 14px;
}
</style>
<script>
	new WOW().init();
</script>
<script src="js/simpleCart.min.js"> </script>	
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
<meta charset="utf-8">
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
<div class="container">
  <div class="top-header">
			<div class="logo">
					<a href="index.html"><img src="images/logo.png" class="img-responsive" alt="" /></a>
	</div>
				<?php
                
					include_once("ownerheader.php");
				
				?>
            
<form name="form1" method="post" action="">
  <table width="100%" border="0">
    <tr>
      <td align="center"><?php
        require_once("var.php");
		$un=$_SESSION["un"];
		$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
		$q="select * from catres where rusername='$un' limit 4";
		$result=mysqli_query($conn,$q) or die("error in query".mysqli_error($conn));
		$count=mysqli_affected_rows($conn);
		mysqli_close($conn);
		
			if($count==0)
			{
				print"No Record found";	
			}
			
			else
			{
				 print"<table width='100%' border='0' cellspacing='0'>";
					
					$count=1;
					while($x=mysqli_fetch_array($result))
					{
						if($count==1)
						{
							print"<tr>";	
						}
						
			print"<td align='center'>
			
			<a href='restoinfo.php?rid=$x[0]'><img src='uploads/$x[2]' width='180' height='174'><br/></a>
				</td>";
				  
						$count++;
						
						if($count==3)
						{
							print"</tr>";
							$count=1;	
						}
						
					}
					
				 print"</table>";	
			}
		
						
					?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<div class="special-offers-section">
  <table width="100%" border="0">
    <tr>
      <td align="center"><h1><strong>Cuisines Available</strong></h1></td>
    </tr>
  </table>
</div>
<form name="form2" method="post" action="">
  <table width="100%" border="0">
    <tr>
      <td>
      <?php
        require_once("var.php");
		$un=$_SESSION["un"];
		$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
		$q="select * from menu where username='$un' limit 12";
		$result=mysqli_query($conn,$q) or die("error in query".mysqli_error($conn));
		$count=mysqli_affected_rows($conn);
		mysqli_close($conn);
		
			if($count==0)
			{
				print"No Record found";	
			}
			
			else
			{
				 print"<table width='100%' border='0' cellspacing='0'>";
					
					$count=1;
					while($x=mysqli_fetch_array($result))
					{
						if($count==1)
						{
							print"<tr>";	
						}
						
			print"<td align='center'>
			
			<a href='updatingmenu.php?id=$x[pid]'><img src='uploads/$x[dpic]' width='180' height='180'><br/>$x[1]<br/>Rs. $x[4]/-<br/></a>&nbsp;&nbsp;
				</td>";
				  
						$count++;
						
						if($count==5)
						{
							print"</tr>";
							$count=1;	
						}
						
					}
					
				 print"</table>";	
			}
		
						
					?>
      
      </td>
    </tr>
  </table>
</form>
<h3>&nbsp;</h3>
<p>&nbsp;</p>
                        <p>
                          <!-- header-section-ends --></p>
    <div class="content">
	  <div class="ordering-section" id="Order"></div>
	  <div class="service-section">
		  <div class="service-section-top-row">
				<div class="container"></div>
		</div>
			<div class="service-section-bottom-row">
				<div class="container">
				  <div class="clearfix"></div>
				</div>
			</div>
	  </div>
		<div class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Site Links</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">About Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Contact Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Privacy Policy</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Terms of Use</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Site Links</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">About Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Contact Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Privacy Policy</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Terms of Use</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Follow Us On...</h4>
						<ul>
							<li><i class="fb"></i></li>
							<li class="data"> <a href="#">  Facebook</a></li>
						</ul>
						<ul>
							<li><i class="tw"></i></li>
							<li class="data"> <a href="#">Twitter</a></li>
						</ul>
						<ul>
							<li><i class="in"></i></li>
							<li class="data"><a href="#"> Linkedin</a></li>
						</ul>
						<ul>
							<li><i class="gp"></i></li>
							<li class="data"><a href="#">Google Plus</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid nth-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Subscribe Newsletter</h4>
						<p>To get latest updates and food deals every week</p>
						<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						<input type="submit" value="submit">
				  </div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-section-ends -->
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