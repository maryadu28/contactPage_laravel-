<!DOCTYPE html>
<html lang="en">
<head>
	<title>contactez-nous</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="shortcut icon" type="image/png" sizes="32x32" href="asset/images/icons/favicon-32x32.png">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset/css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	<div class="bg-contact100" >
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="asset/images/img-01.jpg" alt="IMG">
				</div>
				<form action="{{ url('/email') }}" class="contact100-form validate-form" method="post">
					@csrf
					<span class="contact100-form-title">
						<h3>Formulaire de contact</h3>
					</span>
					@if(Session()->has('message'))
						<div class="alert alert-success">
							{{ Session()->get('message') }}
						</div>
					@endif

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="nom" placeholder="Nom">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
						@error('nom')
							<span class="text-danger"> {{ $message }} </span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						@error('email')
							<span class="text-danger"> {{ $message }} </span>
						@enderror
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Subject is required">
						<input class="input100" type="text" name="sujet" placeholder="sujet">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
							@error('sujet')
								<span class="text-danger"> {{ $message }} </span>
							@enderror
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="message" placeholder="Message"></textarea>
						<span class="focus-input100"></span>
							@error('message')
								<span class="text-danger"> {{ $message }} </span>
							@enderror
					</div>
					<div class="container-contact100-form-btn">
						<button type="submit" class="contact100-form-btn">
							Envoyer
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<!--===============================================================================================-->
	<script src="asset/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="asset/vendor/bootstrap/js/popper.js"></script>
	<script src="asset/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="asset/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="asset/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="asset/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');
</script>

</body>
</html>