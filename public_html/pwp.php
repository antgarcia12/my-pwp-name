<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Anthony' Website</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>


		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<!-- Font Awesome -->
		<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<!-- CSS Page -->
		<link href="stylesheet.css" rel="stylesheet">
	</head>
	<body>
		<!-- Welcome -->
		<div class="container-fluid padding">
			<div class="row welcome">
				<div class="col-12">
					<h1 class="garcia display-3">Anthony Garcia</h1>
					<h1 class="web display-4">Web Developer</h1>
				<div class="about col-md-12 col-lg text-center">
					<h2><a href="#about">About</a></h2>
				</div>
				<div class="about col-md-12 col-lg text-center">
					<h2><a href="#portfolio">Portfolio</a></h2>
				</div>
				<div class="about col-md-12 col-lg text-center">
					<h2><a href="#contact">Contact Me</a></h2>
				</div>
				</div>
			</div>
		</div>
		<!-- About -->
		<div class="container-fluid padding">
			<div class="row about text-left">
				<div class="col-lg-6">
					<h1 class="display-3 abt-me">About Me</h1>
					<p class="about-me">My name is Anthony Garcia. I am a graduated of the CNM Ingenuity's Deep Diving Coding and earned my certification through the Fullstack Web Development bootcamp they offer. Through my experience of the bootcamp, I learned that many web developers' journeys are all different; it showed me the meaning of diversity in a real work-related environment. I was originally going to school to earn my associates in nursing. Through a process of trial and error, I found that nursing was not the right career for me. I didn't want to waste years trying to find a new career and thankfully, a good friend of mine had mention the bootcamp, which drew my attention to what could come. With research and the help of a "gut feeling," I made the choice to take the first step into the world of coding. In all honesty, I had no prior experience to the bootcamp. The weeks went by and I started to see that I didn't experience going into this. I was fortunate enough to learn years of schooling into 10 of the fastest weeks of my life. I am confident in my capabilities and the product I can produce. My goal is to meet anybody's standards, no matter the challenge, any we can work things out, I hope to change the landscape of our community and economy here in Albuquerque.</p>
				</div>
				<div class="col-lg-6 mr-1">
					<img src="images/dd-coding-icon-cnmii-stem.png" class="img-fluid">
				</div>
			</div>
		</div>
		<!-- Portfolio -->

		<!-- Contact -->
		<form id="contact-form" method="POST" action="php/mailer.php" novalidate="novalidate">
			<div class="fluid-container main-container vertical-center">
				<div class="col-md-5 m-auto">
					<h1 class="display-3 id="cm">Contact Me</h1>
		<div class="form-group">
			<label for="name">
				Name
			</label>
			<div class="input-group">
				<input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
			</div>
		</div>
		<div class="form-group">
			<label for="email">
				Email
			</label>
			<div class="input-group">
				<input type="text" class="form-control" id="email" name="email" placeholder="Your Email">
			</div>
		</div>
		<div class="form-group">
			<label for="message">
				Message
			</label>
			<div class="input-group">
				<textarea class="form-control" rows="5" id="message" name="message" placeholder="Your Message"></textarea>
			</div>
		</div>
			<div class="g-recaptcha" data-sitekey="6Lek0HsUAAAAAEjr4NxRbvQlVkRG7Vr-p5tdJviY"></div>
			<button class="btn btn-dark" type="submit">Send</button>
			<button class="btn btn-danger" type="reset">Reset</button>
			</div>
			</div>
		</form>
		<!-- Footer -->
		<footer class="bg-dark">
			<div class="container-fluid padding">
				<div class="row">
					<a href="#"><i class="fab fa-github"></i></a>
					<a href="#"><i class="fab fa-linkedin"></i></a>
					<a href="#"><i class="fas fa-envelope-square"></i></a>
				</div>
			</div>
		</footer>
	</body>
</html>