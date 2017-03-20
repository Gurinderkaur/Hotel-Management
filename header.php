
<div class="queries">
					<p>Questions? Call us Toll-free!<span>1800-0000-7777 </span><label>(11AM to 11PM)</label>             <a href="showcart.php"><img src="Img2/cart.png"></a></p>
                    
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li><a href="home.php">Home</a></li>|
						<li><a href="afterlogin.php">Popular Restaurants</a></li>|
                        <li><a href="searchcuisin.php">Search Cuisine</a></li>|
						<li><a href="order.php">Order</a></li>|
						<li><a href="contact.php">contact Us</a></li>|
                        <li><a href="feedback.php">Feedbacks</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						
                         <?php
                         
						 if(isset($_SESSION["n"]))
						 {
		
							 print $_SESSION['n'];
							 print"&nbsp &nbsp <a href='signout.php'>SignOut</a>";
							 print"&nbsp &nbsp <a href='changepassword.php'>Change Password</a>";
							 print"&nbsp &nbsp <a href='orderhistory.php'>Order History</a>";	 
						 }
						 
						 else
						 {
								 	 
							print "<a href='register.php'>Register</a>";
							print"&nbsp &nbsp<a href='login.php'>LogIn</a>";
						
					   	 }
						 ?>
                        
						
                        </div>
        </div>