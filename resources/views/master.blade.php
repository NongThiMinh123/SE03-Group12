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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
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
                        <span class="header-icon dropdown animate-dropdown">
                            <a href="{{route('nmn.login')}}" target="_parent">
                                <i class="far fa-user"></i>
                            </a>
                        </span>
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
                                    <a href="{{ route('trangchu') }}"  title="Home">
                                        <span class="fa fa-home" style="font-size:28px;"></span>
                                    </a>
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
                                            <a href="#" class='dropbtn'>FUNCTIONAL FOODS</a>
                                        </div>
                                    </li>

                                    <li class='navigation-tab'>
                                        <div class="dropdown">
                                            <a href="#" class='dropbtn'>BEAUTY TOOLS</a>
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
        @yield('content')
        

        
        
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
<script src ="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</html>
<!-- <script src="{{ asset('js/test.js') }}"></script> -->
