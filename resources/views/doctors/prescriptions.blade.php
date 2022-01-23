<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Prescription</title>

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
        <a class="navbar-brand" href="{{ asset('/dashboardDoctor') }}">
          <h1 style="color:DodgerBlue;"><b>MedicGO</b></h1>
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icofont-navigation-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarmain">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{asset('/profileDoctor')}}">Profile</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patient<i class="icofont-thin-down"></i></a>
              <ul class="dropdown-menu" aria-labelledby="dropdown02">
                <li><a class="dropdown-item" href="{{asset('/patientList')}}">Patient List</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prescription <i class="icofont-thin-down"></i></a>
              <ul class="dropdown-menu" aria-labelledby="dropdown03">
                <li><a class="dropdown-item" href="{{ asset('/reviewPrescriptions') }}">Prescription List</a></li>
                <li><a class="dropdown-item" href="{{asset('/prescription')}}">Prescription</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('/dashboard') }}">Logout</a></li>
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
            <span class="text-white">Create a </span>
            <h1 class="text-capitalize mb-5 text-lg">Prescription</h1>
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
            <h2 class="mb-2 title-color">Prescription</h2>
            <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>

            <form action="{{route('prescriptionSet')}}" method="post">
              @csrf
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy">
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <input name="time" id="time" type="time" class="form-control" placeholder="Time">
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <input name="patientID" id="patientID" type="text" class="form-control" placeholder="Patient ID">
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <input name="appointmentID" id="appointmentID" type="text" class="form-control" placeholder="Appointment ID">
                  </div>
                </div>
              </div>

              <div class="form-group-2 mb-4">
                <textarea name="symptoms" id="symptoms" class="form-control" rows="6" placeholder="Symptoms"></textarea>
              </div>

              <div class="form-group-2 mb-4">
                <textarea name="prescription" id="prescription" class="form-control" rows="6" placeholder="Prescription"></textarea>
              </div>

              <div class="form-group-2 mb-4">
                <textarea name="validation" id="validation" class="form-control" rows="2" placeholder="Validation"></textarea>
              </div>

              <input class="special" type="hidden" name="doctorID" value="{{$data->id}}">

              <div class="form-group">
                <br>
                <button class="btn btn-block btn-primary" type="submit">Create Prescription</button>
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