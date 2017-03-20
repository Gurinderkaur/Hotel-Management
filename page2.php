<?php
		session_start();
		require_once("var.php");

$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
				$id=$_GET["rid"];
			$q="select menu.pid,menu.dname,menu.rate,menu.discount,catres.rpic from catres,menu where menu.rid='$id' and menu.rid=catres.rid";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$cnt=mysqli_affected_rows($conn);
			mysqli_close($conn);
			if($cnt==0)
			{
				$msg="No records found";
			}
			else
			{
				$x=mysqli_fetch_array($res);
				$pid=$x["pid"];
				$dname=$x["dname"];
				$rate=$x["rate"];
				$dis=$x["discount"];
				$disamt=($rate*$dis)/100;
				$amt=$rate-$disamt;
				
			}
		
		$total=0;
		
	if(isset($_POST["order"]))
		{
			if(isset($_SESSION["un"]))
			{
				$n=$_POST["qty"];
				$total=$n*$amt;
				$un=$_SESSION["un"];
	   $conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
	   $q1="insert into addtocart(pid,dname,username,rate,grandtotal,qty) values('$pid','$dname','$un','$rate','$total','$n')";
	   $res=mysqli_query($conn,$q1) or die("error in query".mysqli_error($conn));
		
		$count=mysqli_affected_rows($conn);
		mysqli_close($conn);
		
		if($count==1)
		{
			header("location:index.php");	
		}
		
		else
		{
			header("location:register.php");	
		}
			}
			
				
				
			
			else
			{
				header("location:login.php?returnurl=page2.php?rid=$id");
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
                	include_once("header.php");
                ?>
				</div>
<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
		<div class="ordering-section" id="Order">
		  <form name="form1" method="post" action="">
		    <table width="100%" border="0" cellpadding="2" cellspacing="5">
		      <tr>
		        <td width="37" height="35" colspan="3" align="center">
                
                <?php
                	print"<img src='uploads/$x[rpic]' width='200' border='0'>";
				?>
                
                </td>
	          </tr>
		      
		      <tr>
		        <td colspan="3" align="center"><h1>&nbsp;</h1>
	            <p>&nbsp;</p>
	            <p>&nbsp;</p></td>
	          </tr>
		      <td width="20%"></tr>
	        </table>
		  </form>
		  <form name="form2" method="post" action="">
          
          <table width="100%" border="0"  align='center' cellpadding="0" cellspacing="0">
	             
                 
                  <tr  align='center'>
	                <td>
                    <?php
             require_once("var.php");

$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
				$id=$_GET["rid"];
			$q="select catres.rpic,catres.rtype,menu.dpic,menu.dname,menu.discount,menu.description,menu.pid,menu.rate from catres,menu where menu.rid='$id' and menu.rid=catres.rid";
	$result=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$count=mysqli_affected_rows($conn);
			mysqli_close($conn);
		
			if($count==0)
			{
				print"No Record found";	
			}
			
			else
			{
				 print"<table width='100%' border='0' cellpspacing='2'>
				 	<tr>
				 		<th><center><h3><b>Image</b></h3></center></th>
						<th><center><h3><b>Cuisine Name</b></h3></center></th>
						<th><center><h3><b>Cuisine Type</b></h3></center></th>
						<th><center><h3><b>Description</b></h3></center></th>
						<th><center><h3><b>Rate</b></h3></center></th>
						<th><center><h3><b>Discount</b></h3></center></th>
						<th><center><h3><b>Payment </b></h3></center></th>
						<th><center><h3><b>Add To Cart</b></h3></center></th>
				 	</tr>";
					
					while($x=mysqli_fetch_array($result))
					{
						print"
						<tr>	
						<td align='center'><img src='uploads/$x[dpic]' width='140' height='120'></td>
						<td align='center'>$x[dname]</td>
						<td align='center'>$x[rtype]</td>
						<td align='center'>$x[description]</td>
						<td align='center'>Rs. $x[rate]/-</td>
						<td align='center'>$x[discount]%</td>
						<td align='center'>Rs. $amt/-</td>
						<td align='center'>
						<form method='post'>
						<table>
						<tr><td><a href='addtocart.php?id=$x[pid]'>Add To Cart</a></td></tr>
						</table>
						</form>
						</tr>";
					}
					
				 print"</table>";	
			}
		
						
					?>
                    </td>
                  </tr>
                </table>
          
	      </form>
		</div>
		<div class="special-offers-section"></div>
		<div class="popular-restaurents" id="Popular-Restaurants">
			<div class="container">
			  <div class="clearfix"></div>
			</div>
		</div>
		<div class="service-section">
			<div class="service-section-top-row">
				<div class="container">
					<div class="service-section-top-row-grids wow bounceInLeft" data-wow-delay="0.4s">
					<div class="col-md-3 service-section-top-row-grid1">
						<h3>Enjoy Exclusive Food Order any of these</h3>
					</div>
					<div class="col-md-2 service-section-top-row-grid2">
						<ul>
							<li><i class="arrow"></i></li>
							<li class="lists">Party Orders</li>
						</ul>
						<ul>
							<li><i class="arrow"></i></li>
							<li class="lists">Home Made Food</li>
						</ul>
						<ul>
							<li><i class="arrow"></i></li>
							<li class="lists"> Diet Food </li>
						</ul>
					</div>
					<div class="clearfix"></div>
					</div>
				</div>
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