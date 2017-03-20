<?php
session_start();
require_once("var.php");
if(isset($_POST["order"]))
{
	if(isset($_SESSION["un"]))
	{
		$rid=$_POST["rest"];
		$pid=$_POST["pid"];
		$id=implode(",",$pid);
		$name=$_POST["cuisine"];
		$dname=implode(",",$name);
		$address=$_POST["userlocation"];
		$dte=$_POST["datepicker"];
		$quan=$_POST["qty"];
		$cname=$_SESSION["un"];
	
	
$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
		$q="insert into ordertable(rid,dname,address,date,quantity,customername,status) values('$rid','$dname','$address','$dte','$quan','$cname','Order recieved.')";
		$result=mysqli_query($conn,$q) or die("error in query".mysqli_error($conn));
		$count=mysqli_affected_rows($conn);
		mysqli_close($conn);
		
			if($count==0)
			{
				print"No Record found";	
			}
			
			else
			{
				header("location:ordersucc.php");
			}
	}
	
	else
	{
		header("location:login.php");
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
<html><head>
<title>RECEIPES Bootstarp responsive Website Template| order page :: w3layouts</title>
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
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
 $(window).load(function(){
      $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:false,
          waitBannerAnimation:false,
        progressBar:false
      })  
      });
      
     $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
      visible : {min: 1,
       max: 4
},
height: 'auto',
 width: 240,

    }, responsive: false, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: false, onTouch: false}});
    
    
    });      

     </script>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/simpleCart.min.js"> </script>	

<script type="text/javascript">
function xyz()
{
	if (document.form1.rest.selectedIndex == 0) 
	{
 		alert('please choose Restaurant');
		return false;
	}
	
	if (document.form1.cuisine.selectedIndex == 0) 
	{
 		alert('please choose Cuisine');
		return false;
	}
	
	if(document.form1.userlocation.value.length<6)
	{
		alert("please fill your Address");
		return false;
	}
	
	if(document.form1.datepicker.value.length<1)
	{
		alert("please fill order date");
		return false;
	}
	
	if (document.form1.qty.selectedIndex == 0) 
	{
 		alert('please choose qty');
		return false;
	}
}
</script>
<link rel="stylesheet" href="css/pikaday.css">
    <link rel="stylesheet" href="css/site.css">
    
    
    
    

</head>
<body>
    <!-- header-section-starts -->
    <div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>
				</div>
	<?php
    
		include_once("header.php");
	
	?>
        
				<div class="clearfix"></div>
</div>
		</div>
	</div>
	
	<!-- header-section-ends -->
    <div class="order-section-page">
		<div class="ordering-form">
			<div class="container">
			<div class="order-form-head text-center wow bounceInLeft" data-wow-delay="0.4s">
	
						<h3>Restaurant Order Form</h3>
						<p>Ordering Food Was Never So Simple !!!!!!</p>
					</div>
                    <form method="post" name="form1" id="form1" onSubmit="return  xyz()">
                    
				<div class="col-md-6 order-form-grids">
					
					<div class="order-form-grid  wow fadeInLeft" data-wow-delay="0.4s">
						<h5>Order Information</h5>
								<span>Restaurant </span>
					  <div class="dropdown-button">           			
            			<p>
            			  <select name="rest" class="dropdown" id="rest" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			    
            			    <option>Select Restaurant</option>
            			    <?php
			require_once("var.php");
		$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
	
	$q="select * from catres";
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
			if(isset($_POST["next"]))
			{
				$id=$_POST["rest"];
				
				if($x[0]==$id)
				{
					print "<option value='$x[rid]' selected='selected'>$x[1]</option>";	
				}
				
				else
				{
					print "<option value='$x[rid]'>$x[1]</option>";	
				}
			}
			
			else
			{
				print "<option value='$x[rid]'>$x[1]</option>";	
			}
		}
	}
			
			?>
            			    
          			    </select>
            			  <input type="submit" name="next" id="next" value="GO">
          			  </p>
            			<p>&nbsp;</p>
					  </div>
					  <div class="dropdown-button wow"></div>
					  <h4><strong>Cuisine-name</strong></h4>
					  <p>
					    <select name="cuisine[]"  multiple="multiple"  id="cuisine[]" tabindex="9" data-settings='{"wrapperClass":"flat"}' >
					      <option>----------------------Select Cuisine-----------------</option>
					      <?php
			require_once("var.php");
					
			if(isset($_POST["next"]))
			{		
				$restid=$_POST["rest"];
	$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
	$q="select * from menu where rid=$restid"; 
		$result=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$count=mysqli_affected_rows($conn);
			mysqli_close($conn);
	
	if($cnt==0)
	{
		print "<option>Choose Restaurant</option>";
	}
	
	else
	{
		while($y=mysqli_fetch_array($result))
		{
			print "<option value='$y[dname]'>$y[dname]</option>";
		}
	}
}
				
		?>
				        </select>
					  </p>
					  
                     
					  <div class="dropdown-button"></div>
					  <h3><strong>Addresss</strong></h3>
					  <div class="dropdown-button">           			
            			<p>
            			  <input name="userlocation" type="text" class="text" id="userlocation" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Time';}">
            			</p>
            			<h4><strong>Order Date</strong></h4>
				      </div>
					  <p>
					    <input name="datepicker" type="text" class="text" id="datepicker" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Time';}" readonly>
					    
					    <script src="moment.min.js"></script>
					    <script src="pikaday.js"></script>
					    
					    <script>

    var picker = new Pikaday(
    {
        field: document.getElementById('datepicker'),
		format: 'YYYY-MM-DD',
        firstDay: 1,
        minDate: new Date(),
        maxDate: new Date(2020, 12, 31),
        yearRange: [2000,2020],
		
    });

                        </script>
					    
					    <br/>
				      </p>
					  <div class="dropdown-button">
					    <p>&nbsp;</p>
					    <h4><strong>Quantity</strong></h4>
					    <p>
					      <label for="qty"></label>
					      <select name="qty"   id="qty">
					       
					        <?php
                            	for($c=1;$c<=15;$c++)
								{
									if($c==1)
									{
										print"<option>$c plate</option>";	
									}
									else
									{
										print"<option>$c plates</option>";
									}
								}
							?>
				          </select>
					    </p>
				      </div>
              
					  <p><br/>
				      </p>
					  <div class="wow swing animated" data-wow-delay= "0.4s">
					<input name="order" type="submit" id="order" value="order now">
					</div>
					</div>
				</div>
               </form>
				<div class="col-md-6 ordering-image wow bounceIn" data-wow-delay="0.4s">
					<img src="images/order.jpg" class="img-responsive" alt="" />
				</div>
			</div>
		</div>
<div class="special-offers-section">
			<div class="container">
				<div class="special-offers-section-head text-center dotted-line">
					<h4>Special Offers</h4>
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