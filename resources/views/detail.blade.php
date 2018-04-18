<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Post - Photo Perfect</title>
    <meta name="description" content="Your Blog post page description"/>
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,600,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="css/main.css" rel="stylesheet">
</head>
<body id="top">
<div class="page">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="Blog/public/">Hush</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>


    <div class="page-content">
        <div class="container">
            <div class="pp-section pp-container-readable">
                <div class="pp-post"><a class="h3" href="blog-post.html">{{$data->title}}</a>
                    <div class="pp-post-meta mt-2">
                        <ul>
                            <li><i class="fa fa-tags" aria-hidden="true"></i><span><a href="#"><span>{{$data->category}}</span></a> </span></li>
                        </ul>
                    </div><img class="img-fluid mt-3" src="{{$data->imageUrl}}" alt="Blog Image"/>
                </div>
                <div class="pp-blog-details">
                   <p>{{$data->content}}</p>
                    <div class="pp-tags">
                        <div class="h6">Tags</div><a class="badge badge-primary" href="#">{{$data->tags}}</a>
                    </div>
                </div>
                <div class="pp-section"></div>
            </div>
            <div class="pp-section"></div></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="scripts/main.js"></script>
</body>
</html>