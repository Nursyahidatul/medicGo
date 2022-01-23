<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Prescription List</title>

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
                <li><a class="dropdown-item" href="{{ asset('/reviewPrescriptions') }}">Prescription List</a></li>
                <li><a class="dropdown-item" href="{{asset('/prescription')}}">Prescription</a></li>
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
            <span class="text-white">View your </span>
            <h1 class="text-capitalize mb-5 text-lg">Prescriptions/h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section doctors">
    <div class="container">
      <div class="row justify-content-center">
        <table id= "confirm" style="border: 1px solid black;">
          <tr>
            <th style="border: 1px solid black;">Patient ID</th>
            <th style="border: 1px solid black;">time</th>
            <th style="border: 1px solid black;">appointment ID</th>
            <th style="border: 1px solid black;">symptoms</th>
            <th style="border: 1px solid black;">validation</th>
          </tr>
          @foreach($prescriptions as $prescription)
          <tr>
            <td style="border: 1px solid black;">{{ $prescription->patientID }}</td>
            <td style="border: 1px solid black;">{{ $prescription->time }}</td>
            <td style="border: 1px solid black;">{{ $prescription->appointmentID }}</td>
            <td style="border: 1px solid black;">{{ $prescription->symptoms }}</td>
            <td style="border: 1px solid black;">{{ $prescription->validation }}</td>
          </tr><br>
          @endforeach
        </table>
      </div>
    </div>
  </section>

</body>

</html>