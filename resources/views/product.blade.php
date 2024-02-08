<!DOCTYPE html>
<html>
<head>
  <title>Our Products</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid top-header">
    <nav class="navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-2">
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Products</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 social-media"></div>
        </div>
        </div>
    </nav>
    </div>
    <!---------PRODUCT LIST PRODUCT LIST-------->
    <div class="container-fluid  main-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-section">
                    <h3>Our Products</h3>
                    <div class="heading-borders">
                        <span class="selected"></span>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(isset($products) && count($products) > 0)
                    @foreach($products as $product)
                        <div class="col-lg-3 col-md-6">
                            <div class="famous-product">
                                <h2>{{$product->name}}</h2>
                                <h3>{{\Illuminate\Support\Str::limit($product->description, 20, $end='...')}}</h3>
                                <img src="/images/image_1024.png">
                                <div class="price">
                                    <h4>INR {{$product->price}}</h4>
                                </div>
                                <a href="{{route('product.view',$product->uuid)}}" class="btn-primary">Buy Now</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!--------FOOTER Section FOOTER Section FOOTER Section------->
    <div class="container-fluid footer-section" style="">
        <div class="container">
            <div class="row">
            <div class="col-md-8">
                <div class="footer-top">
                <h2>A Moments Of Delivered <br> On Right Time & Place </h2>
                <h3>90-9893-304-801</h3>
                <span class="border-bottoms"></span>
                </div>
            </div>
            <div class="col-md-4">
                <h2>
                <img src="image/logo.png">
                </h2>
            </div>
            </div>
            <div class="row">
            <div class="col-md-4">
                <h4>Our Company</h4>
                <div class="row">
                <div class="col-6">
                    <div class="footer-menu">
                    <ul>
                        <li>Home</li>
                        <li>Menu</li>
                        <li>About us</li>
                        <li>restaurant</li>
                    </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="footer-menu">
                    <ul>
                        <li>Quick Order</li>
                        <li>Fast Food</li>
                        <li>Blogging</li>
                        <li>Contact Us</li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4>Our Company</h4>
                <table>
                <tr>
                    <td>Mon-Fri...................</td>
                    <td>8:00 am-12:00 pm</td>
                </tr>
                <tr>
                    <td>Saturday.................</td>
                    <td>8:00 am-12:00 pm</td>
                </tr>
                <tr>
                    <td>Sunday....................</td>
                    <td>Closed</td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h4>Contact Us</h4>
                <div class="contact-info">
                <p>
                    <span>
                    <i class="fa fa-map-marker"></i>
                    </span> 89, Ring Road, New Delhi , India
                </p>
                <p>
                    <span>
                    <i class="fa fa-phone"></i>
                    </span> +91 9893 304 801
                </p>
                <ul>
                    <li>
                    <i class="fa fa-instagram"></i>
                    </li>
                    <li>
                    <i class="fa fa-whatsapp"></i>
                    </li>
                    <li>
                    <i class="fa fa-youtube"></i>
                    </li>
                    <li>
                    <i class="fa fa-twitter"></i>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    <!------------COPYRIGHT Section COPYRIGHT Section ----------->
    <div class="container ">
        <div class="row copyright">
            <div class="col-md-6">
                <p>@ All Copy Right By Dezven Company</p>
            </div>
            <div class="col-md-6">
                <ul>
                <li>
                    <a href="#">Service</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</body>
</html>