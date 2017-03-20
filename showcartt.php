

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
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
		<div class="ordering-section" id="Order">
		  
		</div>
		<div class="special-offers-section">
			<div class="container">
			  <div class="special-offers-section-head text-center dotted-line">
					<h4>Your Food Cart</h4>
			  </div>
		      <form name="form1" method="post" action="">
		        <table width="100%" border="0">
		          <tr>
		            <td colspan="2" align="center">&nbsp;</td>
	              </tr>
		          <tr>
		            <td colspan="2" align="left"><h2><strong>YOUR ORDER..</strong></h2></td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td>&nbsp;</td>
	              </tr>
		          <tr>
		            <td width="50%"><h1>&nbsp;</h1></td>
		            <td width="50%">
                    
                   
                    
                     <?php
                         
             require_once("var.php");
			$un=$_SESSION["un"];
$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
			$q="select * from addtocart where username='$un'";
	$result=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$count=mysqli_affected_rows($conn);
			
			$final=0;
			$tqty=0;
			
				 print"<table width='50%' border='0' cellpspacing='0'>
				 	<tr>
				 		<th><center><h3><b>Cuisine Name</b></h3></center></th>
						<th><center><h3><b>Quantity</b></h3></center></th>
						<th><h3><b>Rate</b></h3></th>
						
					</tr>";
					
					while($x=mysqli_fetch_array($result))
					{
						
						print"
						<tr>	
						<td align='center'>$x[dname]</td>
						<td align='center'>$x[qty]</td>
						<td align='center'>$x[grandtotal]</td>
						<td align='center'><a href='deletecartitem.php?id=$x[cartid]'>Delete</a></td>
						</tr>";
						
						$final=$final+$x["grandtotal"];
						$tqty=$tqty+$x["qty"];
					}
						?>
                    </td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td>&nbsp;</td>
	              </tr>
		          <tr>
		            <td>Delivery Address</td>
		            <td><textarea name="add" cols="50" id="add"></textarea></td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td>&nbsp;</td>
	              </tr>
		          <tr>
		            <td>Total Payment</td>
		            <td><label>
		              <input name="total" type="text" id="total" readonly value="<?php print "Rs. $final/-"; ?>">
	                </label></td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td>&nbsp;</td>
	              </tr>
		          <tr>
		            <td>Total Quantity</td>
		            <td><label for="50"></label>
	                <input name="50" type="text" id="50" readonly; value="<?php print $tqty; ?>"></td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td>&nbsp;</td>
	              </tr>
		          <tr>
		            <td>Choose Date</td>
		            <td><label for="dt"></label>
		              <label for="dt"></label>
		              <label for="dt"></label>
		              <input type="text" name="dt" id="dt"></td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td>&nbsp;</td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td><label>
		              <input type="radio" name="radio" id="cod" value="cod">
	                Cash On Delivery </label></td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td>&nbsp;</td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td><input type="submit" name="done" id="done" value="Place Order">
                    <?php
                    if(isset($_POST["done"]))
					{
						require_once("var.php");
						$un=$_SESSION["un"];
						$name=$x["dname"];
						$add=$_POST["add"];
						$dat=$_POST["dt"];
						
$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
			$q2="select * from addtocart where username='$un'";
			$resullt=mysqli_query($conn,$q2) or die("Error in query" . mysqli_error($conn));
			$count=mysqli_affected_rows($conn);
			//mysqli_close($conn);
			
				while($x=mysqli_fetch_array($resullt))
				{
					$q3="insert into ordertable(rid,dname,address,date,quantity,customername,status) values('$x[rid]','$x[dname]','$add','$dat','$tqty','$un','Order Recieved')";
					mysqli_query($conn,$q3) or die("Error in query".mysqli_error($conn));
				}
				$qd="delete from addtocart where username='$un'";
	mysqli_query($conn,$qd) or die("Error in query" . mysqli_error($conn));
	mysqli_close($conn);
				header("location:thanks.php");
				
			}
					
					?>
                    </td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td></td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td></td>
	              </tr>
	            </table>
		      </form>
		  </div>
		</div>
		<div class="popular-restaurents" id="Popular-Restaurants">
			<div class="container">
				<div class="col-md-4 top-restaurents">
					<div class="top-restaurent-head">
						<h3>Top Restaurants</h3>
					</div>
					<div class="top-restaurent-grids">
						<div class="top-restaurent-logos">
							<div class="res-img-1 wow bounceIn" data-wow-delay="0.4s">
								<img src="images/restaurent-1.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-2.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-3.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-4.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-1 nth-grid1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-5.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 nth-grid1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-6.jpg" class="img-responsive" alt="" />
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-8 top-cuisines">
					<div class="top-cuisine-head">
						<h3>Top Cuisines</h3>
					</div>
					<div class="top-cuisine-grids">
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine1.jpg" class="img-responsive" alt="" /> </a>
							<label>Cuisine Name</label>
					    </div>
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine2.jpg" class="img-responsive" alt="" /> </a>
							<label>Cuisine Name</label>
					    </div>
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine3.jpg" class="img-responsive" alt="" /> </a>
							<label>Cuisine Name</label>
					    </div>
						<div class="top-cuisine-grid nth-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine4.jpg" class="img-responsive" alt="" /> </a>
							<label>Cuisine Name</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine5.jpg" class="img-responsive" alt="" /> </a>
							<label>Cuisine Name</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine6.jpg" class="img-responsive" alt="" /> </a>
							<label>Cuisine Name</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine7.jpg" class="img-responsive" alt="" /> </a>
							<label>Cuisine Name</label>
					    </div>
						<div class="top-cuisine-grid nth-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine8.jpg" class="img-responsive" alt="" /> </a>
							<label>Cuisine Name</label>
					    </div>
						<div class="clearfix"></div>
					</div>
				</div>
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
					<div class="col-md-5 service-section-top-row-grid3">
						<img src="images/lunch.png" class="img-responsive" alt="" />
					</div>
					<div class="col-md-2 service-section-top-row-grid4 wow swing animated" data-wow-delay= "0.4s">
						<a href="order.html"><input type="submit" value="Order Now"></a>
					</div>
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