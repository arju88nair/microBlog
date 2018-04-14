<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hush</title>
    <meta name="description" content="A micro blog for hush"/>
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,600,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="css/main.css" rel="stylesheet">
</head>
<body id="top">
<div class="page">
    <header>
        <div class="pp-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container"><a href="index.html"><img src="images/favicon.png"></a><a class="navbar-brand" href="index.html">Photo Perfect</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="page-content">
        <div class="container">
            <div class="container pp-section">
                <div class="row">
                    <div class="col-md-9 col-sm-12 px-0">
                        <h1 class="h3"> We are Photo Perfect, A Digital Photography Studio.</h1>
                    </div>
                </div>
            </div>
            <div class="container px-0 py-4">
                <div class="pp-category-filter">
                    <div class="row">
                        <div class="col-sm-12"><a class="btn btn-primary pp-filter-button" href="#" data-filter="all">All</a><a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="people">People</a><a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="nature">Nature</a><a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="computer">Computer</a><a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="food">Food</a></div>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <div class="pp-gallery">
                    <div class="card-columns">

                        @foreach ($data as $item)
                            <div class="card" data-groups="[&quot;nature&quot;]"><a href="image-detail.html">
                                    <figure class="pp-effect"><img class="img-fluid" src="{{$item->imageUrl}}" alt="Nature"/>
                                        <figcaption>
                                            <div class="h4">{{$item->title}}</div>
                                            <p>{{$item->category}}</p>
                                        </figcaption>
                                    </figure></a>
                            </div>
                        @endforeach


                        {{--<div class="card" data-groups="[&quot;nature&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/2-nature.jpg" alt="Nature"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Bird</div>--}}
                                        {{--<p>Nature</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;nature&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/4-nature.jpg" alt="Nature"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Sunrise</div>--}}
                                        {{--<p>Nature</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;nature&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/5-nature.jpg" alt="Nature"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Greenery</div>--}}
                                        {{--<p>Nature</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;nature&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/8-nature.jpg" alt="Nature"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Bird</div>--}}
                                        {{--<p>Nature</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;nature&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/9-nature.jpg" alt="Nature"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Flower</div>--}}
                                        {{--<p>Nature</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;people&quot; , &quot;nature&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/10-people.jpg" alt="People"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Model</div>--}}
                                        {{--<p>People</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;people&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/11-people.jpg" alt="People"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Cute</div>--}}
                                        {{--<p>People</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;people&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/13-people.jpg" alt="People"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Model</div>--}}
                                        {{--<p>People</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;people&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/14-people.jpg" alt="People"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Model</div>--}}
                                        {{--<p>People</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;people&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/16-people.jpg" alt="People"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Model</div>--}}
                                        {{--<p>People</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;people&quot; , &quot;nature&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/17-people.jpg" alt="People"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Model</div>--}}
                                        {{--<p>People</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;computer&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/18-computer.jpg" alt="Computer"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Laptop</div>--}}
                                        {{--<p>Computer</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;computer&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/19-computer.jpg" alt="Computer"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Laptop</div>--}}
                                        {{--<p>Computer</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;computer&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/20-computer.jpg" alt="Computer"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Laptop</div>--}}
                                        {{--<p>Computer</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;computer&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/23-computer.jpg" alt="Computer"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Laptop</div>--}}
                                        {{--<p>Computer</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;computer&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/24-computer.jpg" alt="Computer"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Laptop</div>--}}
                                        {{--<p>Computer</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;food&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/26-food.jpg" alt="Food"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Fruit Salad</div>--}}
                                        {{--<p>Food</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;food&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/27-food.jpg" alt="Food"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Oranges</div>--}}
                                        {{--<p>Food</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;food&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/28-food.jpg" alt="Food"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Lemon Tea</div>--}}
                                        {{--<p>Food</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;food&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/29-food.jpg" alt="Food"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Pasta</div>--}}
                                        {{--<p>Food</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}
                        {{--<div class="card" data-groups="[&quot;food&quot;]"><a href="image-detail.html">--}}
                                {{--<figure class="pp-effect"><img class="img-fluid" src="images/30-food.jpg" alt="Food"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="h4">Burger</div>--}}
                                        {{--<p>Food</p>--}}
                                    {{--</figcaption>--}}
                                {{--</figure></a></div>--}}





                       </div>
                    </div>
                </div>
            </div>
            <div class="pp-section"></div></div>
    </div>
    <footer class="pp-footer">
        <div class="container py-5">

        </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="jquery/main.js"></script>
</body>
</html>