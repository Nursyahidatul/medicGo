<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Confirmation</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

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


  <section class="section confirmation">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="confirmation-content text-center">
            <i class="icofont-check-circled text-lg text-color-2"></i>
            <h2 class="mt-3 mb-4">Thank you for your appoinment</h2>
            <p>Any update can be seen in appointment list.</p>
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