<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}"/>
    <title>NMN</title>
        <style>
            .dropdown-content {
                font-family: "Century Gothic";
            }
            #content{
            font-family:"Segoe UI";
        }
        .single-item img {
            width: 320px;
            height: 320px;
            object-fit: cover !important;
        }
        .ribbon-wrapper {
            width: 85px;
            height: 88px;
            overflow: hidden;
            position: absolute;
            top: -3px;
            right: -3px;
        }

        .ribbon {
            font: bold 15px Sans-Serif;
            color: #DDDDDD;
            text-align: center;
            text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
            -webkit-transform: rotate(45deg);
            -moz-transform:    rotate(45deg);
            -ms-transform:     rotate(45deg);
            -o-transform:      rotate(45deg);
            position: relative;
            padding: 7px 0;
            left: -5px;
            top: 15px;
            width: 120px;
            background-color: #DDDDDD;
            color: #4F4F4F;
            -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
            -moz-box-shadow:    0px 0px 3px rgba(0,0,0,0.3);
            box-shadow:         0px 0px 3px rgba(0,0,0,0.3);
        }

        .ribbon:before, .ribbon:after {
            content: "";
            border-top:   5px solid #DDDDDD;   
            border-left:  5px solid #DDDDDD;
            border-right: 5px solid #DDDDDD;
            position:absolute;
            bottom: -3px;
        }

        .ribbon:before {
            left: 0;
        }
        .ribbon:after {
            right: 0;
        }
        </style>
    </head>

    <body>
        <div class="head">
            <div class="head__top">
                <div class="service-header">
                    <span class="contact">
                        <span class="glyphicon glyphicon-earphone"></span>
                        <span>Customer Service: 0982160593</span>
                    </span>
                    <span class="email">
                        <span class="fas fa-envelope"></span>
                        <span>Email: nmn@gmail.com</span>
                    </span>
                    <div class="header-icons">
                        &nbsp &nbsp &nbsp
                        @if(Auth::check())
                        <span class="dropdown">
                        <a  href=""><span class="header-icon dropdown animate-dropdown "><i class="far fa-user"> <span style="font-family:'Century Gothic';font-size:15px;">&nbsp  {{Auth::user()->username}}</span></i></a>
                            <div class="dropdown-content" style="font-size: 15px;">
                                <a href="{{route('logout')}}" data-toggle="tooltip" title="Log out"><i class="glyphicon glyphicon-log-out"></i>&nbsp Log Out</a>
                            </div>
                        </span>
                        @else
                        <span class="header-icon dropdown animate-dropdown">
                            <a href="{{route('nmn.login')}}" target="_parent">
                                <i class="far fa-user"></i>
                            </a>
                        </span>
                        @endif
                        &nbsp &nbsp &nbsp
                        <span class="header-icon dropdown animate-dropdown" >
                            <a href="#">
                                <i class="fas fa-shopping-basket"></i>
                            </a><span class="badge badge-light"></span>
                        </span>
                    </div>
                </div>
            </div>
            <a href="{{route('trangchu')}}"><div class="head__logo" align=center>NMN</div></a>
        </div>
        <div class="head__nav">
            <div class="navbar-default" id ='navbar'>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="nav__left">
                            <ul class ="navigation-desktop-menu">
                                    <li class='navigation-tab'>
                                        <div class="dropdown">
                                            <a href="#" class='dropbtn'>MAKEUP</a>
                                            <ul>
                                                <div class="dropdown-content">
                                                    <div class="row makeup">
                                                        <div class="col-md-4">
                                                            <h5><strong>LIPSTICK</strong></h5>
                                                            <a href="#">Son</a>
                                                            <a href="#">Son dưỡng - Tẩy da chết</a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h5><strong>FACE MAKEUP</strong></h5>
                                                            <a href="#">Kem nền - Kem lót - Kem che khuyết điểm</a>
                                                            <a href="#">Phấn phủ - Phấn nén</a>
                                                            <a href="#">Blusher</a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h5><strong>EYE MAKEUP</strong></h5>
                                                            <a href="#">Lông mày</a>
                                                            <a href="#">Mascara</a>
                                                            <a href="#">Phấn mắt</a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </ul>
                                        </div>
                                    </li>                     
                                    <li class='navigation-tab'>
                                        <div class="dropdown">
                                            <a href="#" class='dropbtn'>SKINCARE</a>
                                            <ul>
                                                <div class="dropdown-content">
                                                    <a href="#">Tẩy trang</a>
                                                    <a href="#">Sữa rửa mặt</a>
                                                    <a href="#">Tẩy tế bào chết</a>
                                                    <a href="#">Toner</a>
                                                    <a href="#">Serum</a>
                                                    <a href="#">Kem chống nắng</a>
                                                </div>   
                                            </ul>
                                        </div>
                                    </li>

                                    <li class='navigation-tab'>
                                        <div class="dropdown">
                                            <a href="#" class='dropbtn'>HAIR</a>
                                            <ul>
                                                <div class="dropdown-content">
                                                    <a href="#">Sản phẩm nhuộm</a>
                                                    <a href="#">Ủ tóc</a>
                                                    <a href="#">Dầu gội & Dầu xả</a>
                                                </div>   
                                            </ul>
                                        </div>
                                    </li>
                                        
                                    <li class='navigation-tab'>
                                        <div class="dropdown">
                                            <a href="#" class='dropbtn'>BATH & BODY</a>
                                            <ul>
                                                <div class="dropdown-content">
                                                    <a href="#">Sữa tắm</a>
                                                    <a href="#">Sữa dưỡng thể</a>
                                                    <a href="#">Bath bomb</a>
                                                </div>   
                                            </ul>
                                        </div>
                                    </li>

                                    <li class='navigation-tab'>
                                        <div class="dropdown">
                                            <a href=" #" class='dropbtn'>FUNCTIONAL FOODS</a>
                                        </div>
                                    </li>

                                    <li class='navigation-tab'>
                                        <div class="dropdown">
                                            <a href="" class='dropbtn'>BEAUTY TOOLS</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>    
                            <div class="col-md-3">
                                <div class="nav__right">
                                    <form action="#" role="search" class="box">
                                        <input type="search" name="search" placeholder="Search here" class="input_search" />
                                            <button style="border:none; background-color:white; margin-right:15px;"><i class='fas fa-search' style='font-size:15px'></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>    
                    </div>    
                </div>    
            </div>
        </div>
@section('content')
<div class="slideshow-container">

            <div class="myslide fade">
            <div class="numbertext">1 / 3</div>
            <img src="https://www.lancome.co.kr/dw/image/v2/AAWH_PRD/on/demandware.static/-/Sites-lancome-kr-Library/ko_KR/dwb5b7f4c9/homepage/main_carousel_d/190228_Main_Carousel_UV_PC.jpg?sw=1920&sh=687&sm=fit" style="width:100%">
            <div class="text"></div>
            </div>

            <div class="myslide fade">
            <div class="numbertext">2 / 3</div>
            <img src="https://www.paulaschoice.com/on/demandware.static/-/Library-Sites-paulachoice/default/dwc25bdc5b/images/homepage-new/us_190717_desktop_panel-b_2010-review.jpg" style="width:100%">
            <div class="text"></div>
            </div>

            <div class="myslide fade">
            <div class="numbertext">3 / 3</div>
            <img src="https://www.shiseido.com.vn/on/demandware.static/-/Sites-shiseido_global_vn-Library/default/dw62c81aad/images/home/slide/HOME_E-series_Product_desktop_A1.jpg" style="width:100%">
            <div class="text"></div>
            </div>

        </div>
        </div><br>
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("myslide");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {slideIndex = 1}    
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                    setTimeout(showSlides, 5000); // Change image every 2 seconds
                    }
            }
        </script>

        <main id='main-content' class='main-page'>
            <section class="product">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-centered">
                            <h2 class="title" align=center>NEW ARRIVALS</h2>
                            <ul >
                                <div id="carousel" class="owl-carousel owl-theme">
                                    @foreach($news as $product) 
                                        <div class ="product__item">  
                                            <div class="carousel-col">
                                                <a href="#">
                                                    <div>
                                                        <a href="#"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>
                                                    </div>
                                                </a>
                                                <div class ="product_info">
                                                    <a href="#">{{$product->product_name}}</a>
                                                    <p class="price">{{ number_format($product->product_price,0,',','.') }} VNĐ </p>
                                                    <div class="single-item-caption">
                                                        <p>
                                                            <a class="beta-btn primary" href="#">Details</a> |
                                                            <a href="#"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>
                                                            <div class="clearfix"></div>
                                                        </p>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                       
                                        </div>
                                    @endforeach 
                                    <!-- <div class="left carousel-control">
                                        <a href="#carousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </div>
                                    <div class="right carousel-control">
                                        <a href="#carousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>    -->
                                </div>
                            </ul>
                        <div class="col-md-12 col-centered">
                            <h2 class = "title" align=center>SALE OFF</h2>
                            <ul>
                                <div id="carousel" class="owl-carousel owl-theme">
                                    @foreach($sales as $product) 
                                        <div class ="product__item">  
                                            <div class="carousel-col">
                                                <a href="#">
                                                    <!-- <div class="wrapper"> -->
                                                        <div class="img">                                                 
                                                            <a href="#"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>
                                                            <div class="ribbon-wrapper">
                                                                <div class="ribbon">20% OFF</div>
                                                            </div>
                                                        </div>
                                                    <!-- </div> -->
                                                </a>
                                                <div class ="product_info">
                                                    <a href="#">{{$product->product_name}}</a>
                                                    <p class="price"><del>{{number_format($product->product_price,0,',','.')}} VNĐ</del> -> {{number_format($product->product_price,0,',','.')}} VNĐ</p>
                                                    <div class="single-item-caption">
                                                        <p>
                                                            <a class="beta-btn primary" href="#">Details</a> |
                                                            <a href="#"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>
                                                            <div class="clearfix"></div>
                                                        </p>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    @endforeach  

                                </div>
                            </ul>
                        </div>
                        <div class="col-md-12 col-centered">
                            <h2 class = "title" align=center>HOT SUMMER</h2>
                            <ul >
                            <div id="carousel" class="owl-carousel owl-theme">
                                    @foreach($summers as $product) 
                                        <div class ="product__item">  
                                            <div class="carousel-col">
                                                <a href="#">
                                                    <div>
                                                        <a href="#"><img src="{{$product->product_img}}" alt="#" class=" img-responsive"></a>
                                                    </div>
                                                </a>
                                                <div class ="product_info">
                                                    <a href="#">{{$product->product_name}}</a>
                                                    <p class="price">{{number_format($product->product_price,0,',','.')}} VNĐ</p>
                                                    <div class="single-item-caption">
                                                        <p>
                                                            <a class="beta-btn primary" href="#">Details</a> |
                                                            <a href="#"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>
                                                            <div class="clearfix"></div>
                                                        </p>
                                                    </div>
                                                </div>                                
                                            </div>
                                        
                                        </div>
                                    @endforeach 
                                </div>
                            </ul>
                        </div>
                        <script>
                            $(document).ready(function(){
                                $('.owl-carousel').owlCarousel({
                                    loop:true,
                                    margin:10,
                                    nav:false,
                                    autoplay:2000,
                                    item:4,
                                    responsive:{
                                        0:{
                                            items:4
                                        },
                                        600:{
                                            items:4
                                        },
                                        1000:{
                                            items:4
                                        }
                                    }
                                })
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
<section class="footer">
		
<div class="footer">
            <div class="footer-left col-md-4">
                <p class="about">
                    <span><strong>About Us</strong></span><br><br>
                    Website bán hàng với các chức năng như xem danh sách sản phẩm, Danh sách sản phẩm theo từng loại,chức năng mua hàng và xử lý đơn hàng, chức năng đăng nhập và đăng xuất, Xử lý tìm kiếm theo tên và theo giá sản phẩm.
                </p>
                <br>
                <div class="icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-center col-md-4">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>334 Nguyễn Trãi, Thanh Xuân, Hà Nội</span></p>
                    </div>
                    <div>
                    <i class="fa fa-phone"></i>
                    <p>(+84) 982160593</p>
                    </div>
                    <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">nmn@gmail.com</a></p>
                </div>
            </div>
            <div class="footer-right col-md-4">
                <h2>NMN<span></h2>
                <p class="menu">
                    <a href="#"> Home</a> |
                    <a href="#"> About</a> |
                    <a href="#"> Services</a> |
                    <a href="#"> Portfolio</a> |
                    <a href="#"> News</a> |
                    <a href="#"> Contact</a>
                </p>
                <p class="name"> Company Name &copy; 2019</p>
                <div class="googleMap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9176126980487!2d105.80578381464521!3d20.99593939427444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acbf0df2c0e5%3A0xd740a66998e1a0ed!2sVNU+University+of+Science!5e0!3m2!1sen!2s!4v1566118193929!5m2!1sen!2s" width="400" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>        
	</section>
</footer>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
<script>
    window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}window.addEventListener('scroll', stickyNavigation);
</script>


</html>
<!-- <script src="{{ asset('js/test.js') }}"></script> -->