<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Update</title>

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
                <li><a class="dropdown-item" href="{{asset('/prescription')}}">Prescription List</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('/logout') }}">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="section doctors">
    <div class="container">
      <div class="row justify-content-center">
        <table style="border: 1px solid black;">
          <form action="{{route('getupdate')}}" method="post">
            @csrf
            <tr>
              <th style="border: 1px solid black;">Patient Name</th>
              <th style="border: 1px solid black;">Date</th>
              <th style="border: 1px solid black;">Time</th>
              <th style="border: 1px solid black;">Symptoms</th>
              <th style="border: 1px solid black;">Link</th>
              <th style="border: 1px solid black;"></th>
            </tr>
            <tr>
              <input class="special" type="hidden" name="id" value="{{$data->id}}">
              <input class="special" type="hidden" name="doctoremail" value="{{$data->doctoremail}}">
              <input class="special" type="hidden" name="doctorname" value="{{$data->doctorname}}">
              <input class="special" type="hidden" name="patientemail" value="{{$data->patientemail}}">
              <input class="special" type="hidden" name="patientname" value="{{$data->patientname}}">
              <input class="special" type="hidden" name="date" value="{{$data->date}}">
              <input class="special" type="hidden" name="time" value="{{$data->time}}">
              <input class="special" type="hidden" name="symptoms" value="{{$data->symptoms}}">

              <td style="border: 1px solid black;">{{ $data->patientname }}</td>
              <td style="border: 1px solid black;">{{ $data->date }}</td>
              <td style="border: 1px solid black;">{{ $data->time }}</td>
              <td style="border: 1px solid black;">{{ $data->symptoms }}</td>
              <td style="border: 1px solid black;"><input type="text" name="link" value="{{ $data->link }}"></td>
              <td><button class="btn btn-block btn-primary" type="submit">Update</button></td>
            </tr>
            <br>
          </form>
        </table>
      </div>
      <div class="row justify-content-center">
      </div>
      </form>

    </div>
    </div>
    </div>
    </div>
  </section>




</body>

</html>