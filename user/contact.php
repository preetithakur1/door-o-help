<?php ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Door O Help</title>

	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/aos.css">
	
	<!-- js files -->
	<script src="js/modernizr-2.6.2.min.js"></script>
   	<script src="js/jquery-3.0.0.min.js"></script>

</head>
<body>
	<!-- preloader -->
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- eof preloader -->
	
	<div id="canvas">
		<div id="box_wrapper">

			<?php include '../config.php';
				  include 'includes/topHeader.php';
			?>			

			<!-- main header -->
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
						<div class="header_mainmenu display_table_cell text-right">
							<!-- main nav start -->
							<nav class="mainmenu_wrapper">
								<ul class="mainmenu nav sf-menu">
									<li> <a href="">Home / Contact Us</a> </li>
								</ul>
							</nav>
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
			<!-- eof main header -->

			<section class="page_breadcrumbs ds parallax section_padding_top_50 section_padding_bottom_50">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>CONTACT US</h2>
							<p>Send us your feedback</p>
						</div>
					</div>
				</div>
			</section>

			<!-- becoming a professional form -->
			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<form class="shop-register" role="form" method="POST" enctype="multipart/form-data">
						<div class="col-sm-6">
							<div class="form-group validate-required" id="billing_first_name_field" data-aos="fade-up">
								<label for="billing_first_name" class="control-label">
									<span class="grey">Name</span>
									<span class="required">*</span>
								</label>
								<input type="text" class="form-control " name="name" placeholder="Enter your Full Name" required>
							</div>
							<div class="form-group validate-required" id="billing_first_name_field" data-aos="fade-up">
								<label for="billing_first_name" class="control-label">
									<span class="grey">Subject</span>
									<span class="required">*</span>
								</label>
								<input type="text" class="form-control " name="subject" placeholder="Enter Subject" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group validate-required validate-email" id="billing_email_field" data-aos="fade-up">
								<label for="billing_email" class="control-label">
									<span class="grey">Email</span>
									<span class="required">*</span>
								</label>
								<input type="email" class="form-control " name="email" laceholder="Enter your Email-Id" value="" required>

							</div>
							<div class="form-group validate-required validate-phone" id="billing_phone_field" data-aos="fade-up">
								<label for="billing_phone" class="control-label">
									<span class="grey">Message</span>
									<span class="required">*</span>
								</label>
								<textarea aria-required="true" rows="3" cols="45" name="message" class="form-control" placeholder="Message..." required></textarea>
							</div>
						</div>
						
							<div class="col-sm-12" align="center" data-aos="fade-up">
								<button type="submit" name="send" class="theme_button wide_button color1 topmargin_40">Send</button>
							</div>
							</div>

						</form>
						<?php 
							if (isset($_POST['send'])) {
							  $name=mysql_real_escape_string($_POST['name']);
							  $email=mysql_real_escape_string($_POST['email']);
							  $subject=mysql_real_escape_string($_POST['subject']);;
							  $message=mysql_real_escape_string($_POST['message']);
							  $from="From: $name<$email>\r\nReturn-path: $email";
							  mail("doorohelp@gmail.com",$subject,$message,$from);
							  header("location:index.php");
							}
							?>
					</div>
				</div>
			</section>
			<!-- eof becoming a professional form -->

			<section class="ds parallax page_copyright section_padding_15 with_top_border_container">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="grey regular">Services provided with ♥ by Door O Help</p>
						</div>
					</div>
				</div>
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
   	<script src="js/aos.js"></script>

   	<script type="text/javascript">
		
		$(document).ready(function() {
		    // aos animations
			AOS.init({
			  duration: 1200,
			})
		});
	</script>

</body>
</html>