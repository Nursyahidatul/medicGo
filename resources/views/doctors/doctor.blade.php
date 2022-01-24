<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
	<meta name="author" content="themefisher.com">

	<title>Doctor List</title>

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

	<section class="page-title bg-1">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">
						<span class="text-white">All Doctors</span>
						<h1 class="text-capitalize mb-5 text-lg">Specalized doctors</h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- portfolio -->
	<section class="section doctors">
		<div class="container">
			<div class="col-12 text-center  mb-5">
				<div class="btn-group btn-group-toggle " data-toggle="buttons">
					<label class="btn active ">
						<input type="radio" name="shuffle-filter" value="all" checked="checked" />All Department
					</label>
					<label class="btn ">
						<input type="radio" name="shuffle-filter" value="cat1" />Cardiology
					</label>
					<label class="btn">
						<input type="radio" name="shuffle-filter" value="cat2" />Dental
					</label>
					<label class="btn">
						<input type="radio" name="shuffle-filter" value="cat3" />Neurology
					</label>
					<label class="btn">
						<input type="radio" name="shuffle-filter" value="cat4" />Medicine
					</label>
					<label class="btn">
						<input type="radio" name="shuffle-filter" value="cat5" />Pediatric
					</label>
					<label class="btn">
						<input type="radio" name="shuffle-filter" value="cat6" />Traumatology
					</label>
				</div>
			</div>

			<div class="row shuffle-wrapper portfolio-gallery">
					@foreach($doctor as $doctors)
					<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
						<div class="position-relative doctor-inner-box">
						
						<!--Display Doctor Image!-->
						<div class="doctor-profile">
								<div class="doctor-img">
									<img src="images/team/1.jpg" alt="doctor-image" class="img-fluid w-100">
								</div>
							</div>
							
							<!--Display Doctor Details!-->
							<div class="content mt-3">
								<h4 class="mb-0"><a href="{{ route('doctorSingle',$doctors->email) }}">{{ $doctors->doctorname}}</a></h4>
								<p>{{ $doctors->speciality}}</p>
							</div>
						</div>
					</div>
					@endforeach
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