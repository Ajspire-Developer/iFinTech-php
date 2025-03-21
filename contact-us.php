
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> iFinTech - Finance Company </title>
<div class="wrapper-main"><div class="mouse-pointer" style="left: 241.5px; top: 154.5px; opacity: 1;"></div>

<?php
include 'header.php'
?>

<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Services</h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.html">Home</a>
					</li>
					<li class="breadcrumb-item active">Services</li>
				</ol>
			</div>
		</div>
	</div>
	<div class="contact-main">
		<div class="container">
			<!-- Content Row -->
		  <div class="row">
			<!-- Map Column -->
				<div class="col-lg-8 mb-4 contact-left">
					<h3>Send us a Message</h3>
					<form name="sentMessage" id="contactForm" novalidate="">
						<div class="control-group form-group">
							<div class="controls">
								<input type="text" placeholder="Full Name" class="form-control" id="name" required="" data-validation-required-message="Please enter your name.">
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<input type="tel" placeholder="Phone Number" class="form-control" id="phone" required="" data-validation-required-message="Please enter your phone number.">
							<div class="help-block"></div></div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<input type="email" placeholder="Email Address" class="form-control" id="email" required="" data-validation-required-message="Please enter your email address.">
							<div class="help-block"></div></div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<textarea rows="5" cols="100" placeholder="Message" class="form-control" id="message" required="" data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
							<div class="help-block"></div></div>
						</div>
						<div id="success"></div>
						<!-- For success/fail messages -->
						<button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
					</form>
				</div>
				<!-- Contact Details Column -->
				<div class="col-lg-4 mb-4 contact-right">
					<h3>Contact Details</h3>
					<p>
						3481 Melrose Place
						<br>Beverly Hills, CA 90210
						<br>
					</p>
					<p>
						<abbr title="Phone">P</abbr>: (123) 456-7890
					</p>
					<p>
						<abbr title="Email">E</abbr>:
						<a href="mailto:name@example.com"> name@example.com </a>
					</p>
					<p>
						<abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
					</p>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>

<?php
include 'footer.php'
?>
</div>
