<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>Edit Patient</title>

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
                <a class="navbar-brand" href="dashboard">
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
                        <span class="text-white">Update Info</span>
                        <h1 class="text-capitalize mb-5 text-lg">Patient</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4" style="margin: top 20px;">
                    <h4>Patient</h4>
                    <hr>
                    <p>
                    <div class="container">
                        <form method="post" action="{{route('updateProfile')}}">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="patientname" value="{{ $data->patientname }}">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="Enter Phone Number" name="phonenumber" value="{{ $data->phonenumber }}">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" class="form-control" placeholder="Enter Age" name="age" value="{{ $data->age }}">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Enter Address" name="address" value="{{$data->address }}">
                            </div>
                            <input class="special" type="hidden" name="id" value="{{$data->id}}">
                            <div class="form-group">
                                <br>
                                <button class="btn btn-block btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

    </body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</html>