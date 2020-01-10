<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!------ Include the above in your HEAD tag ---------->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
 <div class="container">
 <a class="navbar-brand" href="index.html">Simple Ecommerce</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
 <ul class="navbar-nav m-auto">
 <li class="nav-item">
 <a class="nav-link" href="index.html">Home</a>
 </li>
 <li class="nav-item active">
 <a class="nav-link" href="category.html">Categories <span class="sr-only">(current)</span></a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="product.html">Product</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="cart.html">Cart</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="contact.html">Contact</a>
 </li>
 </ul>

 <form class="form-inline my-2 my-lg-0">
 <div class="input-group input-group-sm">
 <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
 <div class="input-group-append">
 <button type="button" class="btn btn-secondary btn-number">
 <i class="fa fa-search"></i>
 </button>
 </div>
 </div>
 <a class="btn btn-success btn-sm ml-3" href="{{ route('get.list.cart') }}">
 <i class="fa fa-shopping-cart"></i> Cart
 <span class="badge badge-light">{{ Cart::count() }}</span>
 </a>
 </form>
 </div>
 </div></nav><section class="jumbotron text-center">
 <div class="container">
 <h1 class="jumbotron-heading">E-COMMERCE CATEGORY</h1>
 <p class="lead text-muted mb-0">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...</p>
 </div></section><div class="container">
 <div class="row">
 <div class="col">
 <nav aria-label="breadcrumb">
 <ol class="breadcrumb">
 <li class="breadcrumb-item"><a href="index.html">Home</a></li>
 <li class="breadcrumb-item"><a href="category.html">Category</a></li>
 <li class="breadcrumb-item active" aria-current="page">Sub-category</li>
 </ol>
 </nav>
 </div>
 </div></div><div class="container">
 <div class="row">
 <div class="col-12 col-sm-3">
 <div class="card bg-light mb-3">
 <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
 <ul class="list-group category_block">
 <li class="list-group-item"><a href="category.html">Cras justo odio</a></li>
 <li class="list-group-item"><a href="category.html">Dapibus ac facilisis in</a></li>
 <li class="list-group-item"><a href="category.html">Morbi leo risus</a></li>
 <li class="list-group-item"><a href="category.html">Porta ac consectetur ac</a></li>
 <li class="list-group-item"><a href="category.html">Vestibulum at eros</a></li>
 </ul>
 </div>
 <div class="card bg-light mb-3">
 <div class="card-header bg-success text-white text-uppercase">Last product</div>
 <div class="card-body">
 <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
 <h5 class="card-title">Product title</h5>
 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 <p class="bloc_left_price">99.00 $</p>
 </div>
 </div>
 </div>
 <div class="col">
 <div class="row">
 @foreach($products as $product)
 <div class="col-12 col-md-6 col-lg-4">
 <div class="card">
 <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
 <div class="card-body">
 <h4 class="card-title"><a href="product.html" title="View Product">{{ $product->name }}</a></h4>
 <div class="row">
 <div class="col">
 <p class="btn btn-danger btn-block">{{ number_format($product->price,0,',','.') }} đ</p>
 <p class="btn btn-danger btn-block">Số lượng {{ $product->qty }}</p>
 </div>
 </div>
 </div>
 </div>
 </div>
 @endforeach
 </div>
 </div>

 </div></div>
<!-- Footer --><footer class="text-light">
 <div class="container">
 <div class="row">
 <div class="col-md-3 col-lg-4 col-xl-3">
 <h5>About</h5>
 <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
 <p class="mb-0">
 Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
 </p>
 </div>

 <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
 <h5>Informations</h5>
 <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
 <ul class="list-unstyled">
 <li><a href="">Link 1</a></li>
 <li><a href="">Link 2</a></li>
 <li><a href="">Link 3</a></li>
 <li><a href="">Link 4</a></li>
 </ul>
 </div>

 <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
 <h5>Others links</h5>
 <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
 <ul class="list-unstyled">
 <li><a href="">Link 1</a></li>
 <li><a href="">Link 2</a></li>
 <li><a href="">Link 3</a></li>
 <li><a href="">Link 4</a></li>
 </ul>
 </div>

 <div class="col-md-4 col-lg-3 col-xl-3">
 <h5>Contact</h5>
 <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
 <ul class="list-unstyled">
 <li><i class="fa fa-home mr-2"></i> My company</li>
 <li><i class="fa fa-envelope mr-2"></i> email@example.com</li>
 <li><i class="fa fa-phone mr-2"></i> + 33 12 14 15 16</li>
 <li><i class="fa fa-print mr-2"></i> + 33 12 14 15 16</li>
 </ul>
 </div>
 <div class="col-12 copyright mt-3">
 <p class="float-left">
 <a href="#">Back to top</a>
 </p>
 <p class="text-right text-muted">created with <i class="fa fa-heart"></i> by <a href="https://t-php.fr/43-theme-ecommerce-bootstrap-4.html"><i>t-php</i></a> | <span>v. 1.0</span></p>
 </div>
 </div>
 </div></footer>

