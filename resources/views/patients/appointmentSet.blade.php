<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Appointment</title>

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
            <span class="text-white">Book your </span>
            <h1 class="text-capitalize mb-5 text-lg">Video Consultation Appointment</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="appoinment section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Book an appointment</h2>
            <p class="mb-4">We are delighted and very proud to present to you the latest version of our <b>Video Consultation</b>. Using cutting edge technologies, it allows you to speak to and consult with our healthcare professionals in real-time.</p>

            <form action="{{route('appointment-set')}}" method="post">
              @if(Session::has('success'))
              <div class="alert alert-success">{{Session::get('success')}}</div>
              @endif
              @if(Session::has('fail'))
              <div class="alert alert-danger">{{Session::get('fail')}}</div>
              @endif
              @csrf
              <div class="form-group">
                <label for="data">Date</label>
                <input type="date" class="form-control" placeholder="date" name="date" value="{{old('date')}}">
                <span class="text-danger">@error('date') {{$message}} @enderror</span>
              </div>

              <div class="form-group">
                <label for="time">Time</label>
                <input type="time" class="form-control" placeholder="time" name="time" value="{{old('time')}}">
                <span class="text-danger">@error('time') {{$message}} @enderror</span>
              </div>

              <div class="form-group">
                <label for="symptoms">Symptoms</label>
                <input type="text" class="form-control" placeholder="Symptoms" name="symptoms" value="{{old('symptoms')}}">
                <span class="text-danger">@error('symptons') {{$message}} @enderror</span>
              </div>

              <input class="special" type="hidden" name="doctoremail" value="{{$doctor->email}}">
              <input class="special" type="hidden" name="doctorname" value="{{$doctor->doctorname}}">
              <input class="special" type="hidden" name="patientemail" value="{{$data->email}}">
              <input class="special" type="hidden" name="patientname" value="{{$data->patientname}}">
              <input class="special" type="hidden" name="link" value="update soon">
              <input class="special" type="hidden" name="patientid" value="{{$data->id}}">

              <div class="form-group">
                <br>
                <button class="btn btn-block btn-primary" type="submit">submit</button>
              </div>
            </form>
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