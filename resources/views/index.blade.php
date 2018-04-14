<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/heroic-features.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <br>
    <div class="alert alert-warning" style="display: none">
        <strong>Sorry!</strong>Something went wrong! Please contact the administrator.
    </div>
    <div class="container px-0 py-4">
        <div class="pp-category-filter">
            <div class="row">
                <div class="col-sm-12"><a class="btn btn-primary pp-filter-button" href="#" data-filter="all">All</a><a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="Career">Career</a><a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="Compensation">Compensation</a><a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="Culture">Culture</a></div>
            </div>
        </div>
    </div>
    <!-- Page Features -->
    <div class="row text-center" id="data-div">

        @foreach ($data as $item)

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" height="200px" src="{{$item->imageUrl}}" alt="">
                    <h4 class="card-title" style="padding-top: 10px">{{$item->title}}</h4>

                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">More!</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('jquery/main.js') }}"></script>


</body>

</html>
