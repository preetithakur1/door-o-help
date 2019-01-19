<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
	background-color: #011215a8;
    border-radius:5px;
    margin: auto;
    padding: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    width: 60%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

</head>
<body>
<header class="page_header header_gradient dotted_items toggler_right">
<div class="container">
	<div class="row">
		<div class="col-sm-12 display_table">
			<div class="header_left_logo display_table_cell">
				<a href="index.php" class="logo top_logo">
					<span class="logo_text"> Door </span>
					<img src="img/logo.png" alt="O">
					<span class="logo_text"> Help </span>
				</a>
				
			</div>

			<style type="text/css">
				.thisset{
					margin-left: 345px;
					float: left;
					}
				.lgn{
					    margin-top: 25px;
    					margin-right: -75px;
    					background: #0000;
    					border: 1px solid white;
				}
				
			</style>
			<div class="header_mainmenu display_table_cell text-right">
				<!-- main nav start -->
				
				<nav class="mainmenu_wrapper thisset" >
					<ul class="mainmenu nav sf-menu links">
						<li> <a href="#topNav" id="homeLink">Home</a> </li>
 						<li> <a href="#about" id="aboutLink">About</a> </li>
						<li> <a href="#join" id="joinLink">Join Us</a> </li>
						<li> <a href="#services" id="servicesLink">Services</a> </li>
						<li> <a href="contact.php" id="contactLink">Contact</a> </li>
					</ul>
				</nav>
<style type="text/css">
	.col1{
		background-color: #fefefefe;
		 border-radius: 5px;
    width: 48%;
    float: left;
    margin-top: 25px;
    height: 350px;
	padding-top: 25px;
	 height: 345px;
	}

	.col2{
		background-color: #fefefefe;
    border-radius: 5px;
    width: 48%;
    float: left;
    margin-left: 28px;
    margin-top: 25px;
    padding-top: 25px;	
    height: 345px;
	}



	.fm input[type="email"],input[type="password"]{
		    margin-right: 20px;
    padding: 5px 60px;
        background-color: #b9afaf14;
        margin-top: -15px;
	}

.fm input[value="Login"]{
		background-color: #2996a2;
    margin-right: 22px;
    padding: 18px 128px;
    margin-top: 27px;
	}

.fm input[value="Register"]{
		background-color: #2996a2;
       margin-right: 20px;
    padding: 18px 117px;
    margin-top: -10px;
	}
	
</style>
				<button class="lgn" id="myBtn">
					Login/ Signup
				</button>
				<div id="myModal" class="modal">
				<div class="modal-content">
    <span class="close">&times;</span>
   
   	<div class="container">
   		<center><p style="font-size: 25px; color: white; background-color:#2996a2; padding:15px 0px;">Welcome To Door-o-Help</p></center>

   		<div class="col1" >
   		
   			<form class="fm">
   			<center><span class="headl"><b>LOGIN</b></span></center><br> 
   				
   			<input type="email" name="" placeholder="Enter mail here"><br><br>
   				<input type="password" name="" placeholder="Enter the password here"><br><br>
   				<a style="margin-right: 120px";>Forget password ?</a><br>
   				<input type="submit" name="" value="Login">
   			</form>
   		
   		</div>
   		<div class="col2">
   			<form class="fm">
   			<center><span class="headl"><b>REGISTER</b></span></center><br> 
   				
   			<input type="email" name="" placeholder="Enter mail here"><br><br>
   				<input type="password" name="" placeholder="Enter the password here"><br><br>
   				<input type="password" name="" placeholder="Re-enter the password "><br><br>

   				<input type="submit" name="" value="Register">
   			</form>
   		</div>
   	</div>
  </div>

</div>
				<!-- eof main nav -->
				<!-- header toggler -->
				<span class="toggle_menu">
					<span></span>
				</span>
			</div>
		</div>
	</div>
</div>
</header>

   	<script src="js/modalbox.js"></script>


</body>
</html>