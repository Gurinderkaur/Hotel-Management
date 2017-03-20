<?php
session_start();
$tim=$_GET["tmm"];
$un=$_SESSION["un"];
require_once("var.php");
$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
			$q="select orderid from ordertable where customername='$un' and timeslot='$tim'";
	$result=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	while($x=mysqli_fetch_array($result))
				{
					$msg=$x["orderid"];
				}
			$count=mysqli_affected_rows($conn);
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
	<table width="100%" border="0">
	  <tr>
	    <td align="center"><div class="order-section-page">
	      <div class="ordering-form">
	        <h1><strong>Order Successfully Placed..!!</strong></h1>
	        <h1><strong><br>
            Thanks for placing Order..</strong></h1>
	        <h1><strong>Have a nice day</strong></h1>
            <form name="form1" method="post" action="">
              <table width="100%" border="0">
                <tr>
                  <td><h1>&nbsp;</h1></td>
                </tr>
                <tr>
                  <td>
                  <?php
                  	if(isset($msg))
					{
						print "<h1><center>Your Order Id is : $msg</center></h1>";			  
					}
				  ?>
                  
                  </td>
                </tr>
              </table>
            </form>
	      </div>
        </div></td>
      </tr>
</table>
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