<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Some Hushed Views</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/heroic-features.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Hush</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

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
                <div class="col-sm-12"><a class="btn btn-primary pp-filter-button" href="#" data-filter="all">All</a><a
                            class="btn btn-outline-primary pp-filter-button" href="#" data-filter="Career">Career</a><a
                            class="btn btn-outline-primary pp-filter-button" href="#" data-filter="Compensation">Compensation</a><a
                            class="btn btn-outline-primary pp-filter-button" href="#" data-filter="Culture">Culture</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Features -->
    <div class="row text-center" id="data-div">

        @foreach ($data as $item)

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" height="200px" src="{{$item->imageUrl}}" alt="">
                    <h5 class="card-title" style="padding: 10px;font-size: 1rem;  overflow: hidden; text-overflow: ellipsis;white-space: nowrap; overflow: hidden;  text-overflow: ellipsis;">{{$item->title}}</h5>
                    <div class="card-footer">
                        <a href="detail?id={{$item->_id}}" class="btn btn-primary">More!</a>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
    <img class="img-responsive" id="loader" style="margin-left: 50%; width: 5%; padding-bottom: 3%;" src="{{ asset('images/ajax-loader.gif')}}">

    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Nair 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('jquery/main.js') }}"></script>


</body>

</html>
