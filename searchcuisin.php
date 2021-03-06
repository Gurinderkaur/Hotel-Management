<?php
	session_start();
	
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
                	include_once("header.php");
                ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1>Network of over 5000 Restaurants</h1>
						<div class="line">
							<h2> To Order Online</h2>
						</div>
					</div>
					<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
						<form method="post">
						  <p><span>Cuisine Name</span>
						    <input name="dish" type="text" class="text" id="dish" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Swagath Grand';}" value="Cheese Pizza">
						    <input type="submit" name="search" id="search" value="Search">
						  </p>
						  <p>&nbsp;	 </p>
						  <ul class="navmain">
			<li></li>
							
						  </ul>
					  </form>
						</div>
					<!-- start search-->
		 
	    
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
    
    
<div class="content"></div>
<div class="popular-restaurents" id="Popular-Restaurants">
	<div class="container">
	  <div class="clearfix"></div>
  </div>
</div>
		<div class="service-section">
			<div class="service-section-top-row">
				<div class="container">
					<div class="service-section-top-row-grids wow bounceInLeft" data-wow-delay="0.4s">
					  <form name="form2" method="post" action="">
					    <table width="100%" border="0">
					      <tr>
					        <td>&nbsp;</td>
				          </tr>
					      <tr>
					        <td>
                            <?php
	
	require_once("var.php");
	
	if(isset($_POST["search"]))
	{
		
		$c=$_POST["dish"];
		
		$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
		$q="select * from menu where dname like '%$c%'";
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
						
			print"<td align='center'>&nbsp;&nbsp;
			
			<a href='page2.php?rid=$x[0]'><img src='uploads/$x[dpic]' width='200' height='200'><br/></a> $x[dname]<br/>Rs. $x[rate]/-
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
		
	}


?>
                            
                            
                            </td>
				          </tr>
				        </table>
				      </form>
					  <div class="clearfix"></div>
				  </div>
				</div>
			</div>
			<div class="service-section-bottom-row">
				<div class="container">
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon1.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>100% Service Guarantee</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon2.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Fully Secure Payment</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon3.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Track Your Order</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>
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