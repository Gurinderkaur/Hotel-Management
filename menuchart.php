<?php

	session_start();
	
if(!isset($_SESSION["un"]))
	{
		header("location:invaliduser.php");
	}
	
	$utype=$_SESSION["type"];
	if($utype=="normal" or $utype=="admin")
	{
		header("location:invaliduser.php");
	}
require_once("var.php");
if(isset($_POST["menu"]))
{
	$rid=$_POST["rname"];
	$dname=$_POST["dname"];
	$description=$_POST["desc"];
	$discount=$_POST["dis"];
	$rate=$_POST["rate"];
	$err=$_FILES["img3"]["error"];
	if($err==0)
	{
		$date = date_create();
		$tstamp=date_timestamp_get($date);
		$dpic=$tstamp.$_FILES["img3"]["name"];
		$tname=$_FILES["img3"]["tmp_name"];
		move_uploaded_file($tname,"uploads/$dpic");
	}
	else
	{
		$dpic="no-image.png";	
	}
	$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
	
	$un=$_SESSION["un"];
	$q="insert into menu(rid,dname,description,discount,rate,dpic,username) values('$rid','$dname','$description','$discount','$rate','$dpic','$un')";
	mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
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
<title>RECEIPES Bootstarp responsive Website Template| login page :: w3layouts</title>
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
                ?></div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
	<div class="container">
		<div class="login-page">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Login
                    </li>
                </ul>
                 <p>&nbsp;</p>
                 <p>&nbsp;</p>
                 <ul class="previous">
                   <li></li>
                 </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			     <div class="clearfix"> </div>
			 </div>
		   </div>
</div>
<div class="special-offers-section">
			<div class="container">
				<div class="special-offers-section-head text-center dotted-line">
					<h4>Add Restaurants Type.. </h4>
					<p>&nbsp; </p>
					<form action="" method="post" enctype="multipart/form-data" name="form1">
					  <table width="100%" border="0">
					    <tr>
					      <td width="28%" align="center">&nbsp;</td>
					      <td width="72%">&nbsp;</td>
				        </tr>
					    <tr>
					      <td align="center"><strong>
					        <h3><b>Restaurant Name</b></h3>
					        </strong></td>
					      <td><label>
					        <select name="rname" id="rname">
					          <option>Select Restaurant</option>
			<?php
			require_once("var.php");
		$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
	$un=$_SESSION["un"];
	$q="select * from catres where rusername='$un'";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==0)
	{
		print "<option>No Categories</option>";
	}
	else
	{
		while($x=mysqli_fetch_array($res))
		{
			print "<option value='$x[0]'>$x[1]</option>";
		}
	}
			
			?>
                            </select>
				          </label></td>
				        </tr>
					    <tr>
					      <td align="center">&nbsp;</td>
					      <td>&nbsp;</td>
				        </tr>
					    <tr>
					      <td align="center"><h3> Cuisine Name</h3></td>
					      <td valign="middle"><label>
					        <input name="dname" type="text" id="dname" size="100">
				          </label></td>
				        </tr>
					    <tr>
					      <td align="center">&nbsp;</td>
					      <td valign="middle">&nbsp;</td>
				        </tr>
					    <tr>
					      <td align="center"><h3>Description</h3></td>
					      <td valign="middle"><label>
					        <input name="desc" type="text" id="desc" size="100">
				          </label></td>
				        </tr>
					    <tr>
					      <td align="center">&nbsp;</td>
					      <td valign="middle">&nbsp;</td>
				        </tr>
					    <tr>
					      <td align="center"><h3>Discount</h3></td>
					      <td valign="middle"><label>
					        <input name="dis" type="text" id="dis" size="100">
				          </label></td>
				        </tr>
					    <tr>
					      <td align="center">&nbsp;</td>
					      <td valign="middle">&nbsp;</td>
				        </tr>
					    <tr>
					      <td align="center"><h3>Rate</h3></td>
					      <td valign="middle"><label>
					        <input name="rate" type="text" id="rate3" size="100">
					        </label></td>
				        </tr>
					    <tr>
					      <td align="center">&nbsp;</td>
					      <td valign="middle">&nbsp;</td>
				        </tr>
					    <tr>
					      <td align="center"><strong><h3><b>Restaurant Pic</b></h3></strong></td>
					      <td valign="middle"><label>
					        <input name="img3" type="file" id="img3">
				          </label></td>
				        </tr>
					    <tr>
					      <td align="center">&nbsp;</td>
					      <td valign="middle">&nbsp;</td>
				        </tr>
					    <tr>
					      <td height="45" align="center">&nbsp;</td>
					      <td valign="middle"><input type="submit" name="menu" id="menu" value="Prepare Menu"></td>
				        </tr>
					    <tr>
					      <td align="center">&nbsp;</td>
					      <td valign="middle">&nbsp;</td>
				        </tr>
					    <tr>
					      <td align="center">&nbsp;</td>
					      <td valign="middle">
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
					<p>&nbsp; </p>
					<p>
					  </p>
				  </p>
			      <h3>&nbsp;</h3>
</div>
				<div class="special-offers-section-grids">
				 <div class="m_3"><span class="middle-dotted-line"> </span> </div>
				   <div class="container">
					  <ul id="flexiselDemo3">
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p1.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Olister Combo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p3.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Crab Combo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
					    </li>
					 </ul>
				 <script type="text/javascript">
					$(window).load(function() {
						
						$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				    </script>
				    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				</div>
			</div>
		</div>
		</div>
<div class="clearfix"></div>
		<div class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
					<div class="col-md-3 contact-section-grid">
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
					<div class="col-md-3 contact-section-grid">
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
					<div class="col-md-3 contact-section-grid">
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
					<div class="col-md-3 contact-section-grid nth-grid">
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