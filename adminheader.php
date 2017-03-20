
<link href="nav.css" rel="stylesheet" type="text/css" />
</head>
<div class="queries">
					<p>Questions? Call us Toll-free!<span>1800-0000-7777 </span><label>(11AM to 11PM)</label></p>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
		
			
				
					
                    
        <ul id="mynav">
    	<li><a href="myAdmin.php">Home</a></li>
        <li><a href="restaurantname.php">Restaurants</a>
        </li>
        <li><a href="#">Search</a>
        	<ul>
            <li><a href="search.php">Search User</a></li>
            <li><a href="userdetails.php">List of Users</a></li>
            <li><a href="ownerdetails.php">List of Restaurant Users</a></li>
            </ul>
        </li>
        <li><a href="#">Orders</a></li>
        <li><a href="showmsg.php">Messages</a></li>
        <li><a href="showfeedback.php">Feedbacks</a></li>
        </ul>
                    
                    
				
				<div class="login-section">
					<ul>
						
                        
                        
                        
                         <?php
                         
						 if(isset($_SESSION["n"]))
						 {
		
							 print $_SESSION['n'];
							 print"&nbsp &nbsp <a href='signout.php'>SignOut</a>";	 
						 }
						 
						 else
						 {
								 	 
							print "<a href='register.php'>Register</a>";
							print"&nbsp &nbsp<a href='login.php'>LogIn</a>";
					   	 }
						 ?>
                        
						<li><a href="#">Help</a></li>
                        </div>