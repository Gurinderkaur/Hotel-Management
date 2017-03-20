
<link href="nav.css" rel="stylesheet" type="text/css" />
</head>
<div class="queries">
					<p>Questions? Call us Toll-free!<span>1800-0000-7777 </span><label>(11AM to 11PM)</label></p>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
		
			
				
					
                    
        <ul id="mynav">
    	<li><a href="ownerhome.php">Home</a></li>
        <li><a href="#">Add/Update</a>
        	<ul>
            <li><a href="addrestaurants.php">Add Restaurant</a></li>
            <li><a href="menuchart.php">Add New Cuisine</a></li>
            <li><a href="productdetails.php">Update Restaurant Info</a></li>
            <li><a href="menuupdate.php">Update Cuisine Info</a></li>
            </ul>
        </li>
        
        <li><a href="showorders.php">Orders</a></li>
        <li><a href="contact2.php">Contact us</a></li>
        <li><a href="feedback2.php">Feedbacks</a></li>
        </ul>
                    
                    
				
				<div class="login-section">
					<ul>
						
                        
                        
                        
                         <?php
                         
						 if(isset($_SESSION["n"]))
						 {
		
							 print $_SESSION['n'];
							 print"&nbsp &nbsp <a href='signout.php'>SignOut</a>";
							 print"&nbsp &nbsp <a href='ownerchangepassword.php'>Change Password</a>"; 
						 }
						 
						 else
						 {
								 	 
							print "<a href='register.php'>Register</a>";
							print"&nbsp &nbsp<a href='login.php'>LogIn</a>";
					   	 }
						 ?>
                        
						`
                        </div>