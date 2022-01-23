<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Register Patient</title>

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
        <a class="navbar-brand" href="{{ asset('/dashboard') }}">
          <h1 style="color:DodgerBlue;"><b>MedicGO</b></h1>
        </a>
      </div>
    </nav>
  </header>

  <section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Register</span>
            <h1 class="text-capitalize mb-5 text-lg">Patient</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4" style="margin: top 20px;">
        <h4>Registration</h4>
        <hr>
        <form action="{{route('register-patient')}}" method="post">
          @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
          @csrf
          <div class="form-group">
            <label for="patientname">Full Name</label>
            <input type="text" class="form-control" placeholder="Enter Full Name" name="patientname" value="{{old('patientname')}}">
            <span class="text-danger">@error('patientname') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" placeholder="Enter Age" name="age" value="{{old('age')}}">
            <span class="text-danger">@error('age') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" placeholder="Enter Gender" name="gender" value="{{old('gender')}}">
            <span class="text-danger">@error('gender') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="DOB">Date Of Birth</label>
            <input type="int" class="form-control" placeholder="Enter Date Of Birth" name="DOB" value="{{old('DOB')}}">
            <span class="text-danger">@error('DOB') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="phonenumber">Phone Number</label>
            <input type="int" class="form-control" placeholder="Enter Phone Number" name="phonenumber" value="{{old('phonenumber')}}">
            <span class="text-danger">@error('phonenumber') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" placeholder="Enter Address" name="address" value="{{old('address')}}">
            <span class="text-danger">@error('address') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
            <span class="text-danger">@error('email') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
            <span class="text-danger">@error('password') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <br>
            <button class="btn btn-block btn-primary" type="submit">Register</button>
          </div>
          <br>
          <a href="login">Already Register!! Login Here</a>
        </form>
      </div>
    </div>

  </div>
  <br>
  <br>


</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>