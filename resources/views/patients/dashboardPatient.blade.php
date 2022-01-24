<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
	<meta name="author" content="themefisher.com">

	<title>MedicGO</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/favicon.ico') }}">

	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}">
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="{{ asset('/plugins/icofont/icofont.min.css') }}">
	<!-- Slick Slider  CSS -->
	<link rel="stylesheet" href="{{ asset('/plugins/slick-carousel/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('/plugins/slick-carousel/slick/slick-theme.css') }}">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">

</head>

<body id="top">

	<header>
		<nav class="navbar navbar-expand-lg navigation" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="{{ asset('/dashboardPatient') }}">
					<h1 style="color:DodgerBlue;"><b>MedicGO</b></h1>
				</a>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icofont-navigation-menu"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarmain">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="{{ asset('/profilePatient')}}">Profile</a>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Appointment <i class="icofont-thin-down"></i></a>
							<ul class="dropdown-menu" aria-labelledby="dropdown02">
								<li><a class="dropdown-item" href="{{ asset('/appointmentList')}}">Appointment</a></li>
								<li><a class="dropdown-item" href="{{ asset('/doctor')}}">Booking Appointment</a></li>
							</ul>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prescription <i class="icofont-thin-down"></i></a>
							<ul class="dropdown-menu" aria-labelledby="dropdown03">
								<li><a class="dropdown-item" href="{{ asset('/viewPrescriptions') }}">Prescription List</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{ asset('/logout') }}">Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- Slider Start -->
	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-xl-7">
					<div class="block">
						<div class="divider mb-3"></div>
						<span class="text-uppercase text-sm letter-spacing ">Welcome to MedicGO {{$data->patientname}}</span>
						<h1 class="mb-3 mt-3">Introducing health video consultation</h1>

						<p class="mb-4 pr-5"><h4>Fastest and easiest way to consult a doctor from the comfort of your home</h4></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="feature-block d-lg-flex">
						<div class="feature-item mb-5 mb-lg-0">
							<div class="feature-icon mb-4">
								<i class="icofont-surgeon-alt"></i>
							</div>
							<span>24 Hours Service</span>
							<h4 class="mb-3">Online Appoinment</h4>
							<p class="mb-4">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
							<a href="{{ asset('/doctor')}}" class="btn btn-main btn-round-full">Make a appoinment</a>
						</div>

						<div class="feature-item mb-5 mb-lg-0">
							<div class="feature-icon mb-4">
								<i class="icofont-ui-clock"></i>
							</div>
							<span>Timing schedule</span>
							<h4 class="mb-3">Working Hours</h4>
							<ul class="w-hours list-unstyled">
								<li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
								<li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
								<li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
							</ul>
						</div>

						<div class="feature-item mb-5 mb-lg-0">
							<div class="feature-icon mb-4">
								<i class="icofont-support"></i>
							</div>
							<span>Emegency Cases</span>
							<h4 class="mb-3">1-800-700-6200</h4>
							<p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<!-- 
    Essential Scripts
    =====================================-->


	<!-- Main jQuery -->
	<script src="plugins/jquery/jquery.js"></script>
	<!-- Bootstrap 4.3.2 -->
	<script src="plugins/bootstrap/js/popper.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="plugins/counterup/jquery.easing.js"></script>
	<!-- Slick Slider -->
	<script src="plugins/slick-carousel/slick/slick.min.js"></script>
	<!-- Counterup -->
	<script src="plugins/counterup/jquery.waypoints.min.js"></script>

	<script src="plugins/shuffle/shuffle.min.js"></script>
	<script src="plugins/counterup/jquery.counterup.min.js"></script>
	<!-- Google Map -->
	<script src="plugins/google-map/map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

	<script src="js/script.js"></script>
	<script src="js/contact.js"></script>

</body>

</html>