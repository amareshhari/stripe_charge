<!DOCTYPE html>
<html>
<head>
  <title>Product - Detail</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
  <link rel="stylesheet" href="/css/style.css">
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
                    <h3>Product Detail</h3>
                    <div class="heading-borders">
                        <span class="selected"></span>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
				<div class="col-lg-12 col-md-12">
					<img height=200 width=200 src="/images/image_1024.png">
					<div class="famous-product">
						<h2>{{$product->name}}</h2>
						<h3>{{$product->description}}</h3>
						<div class="price">
							<h4>INR {{$product->price}}</h4>
						</div>
					</div>
				</div>
				<div class="row">
  					<div class="col-75">
    					<div class="container-payment">
      						<form action="{{route('product.purchase')}}" method="POST">
                                @csrf
                                <input type="hidden" id="price" name="price" value="{{$product->price}}">
        						<div class="row">
          							<!-- <div class="col-50">
            							<h3>Billing Address</h3>
            							<label for="fname"><i class="fa fa-user"></i> Full Name</label>
										<input type="text" id="fname" name="firstname" placeholder="John M. Doe">
										<label for="email"><i class="fa fa-envelope"></i> Email</label>
										<input type="text" id="email" name="email" placeholder="john@example.com">
										<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
										<input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
										<label for="city"><i class="fa fa-institution"></i> City</label>
										<input type="text" id="city" name="city" placeholder="New York">
            							<div class="row">
											<div class="col-50">
												<label for="state">State</label>
												<input type="text" id="state" name="state" placeholder="NY">
											</div>
											<div class="col-50">
												<label for="zip">Zip</label>
												<input type="text" id="zip" name="zip" placeholder="10001">
											</div>
										</div>
									</div> -->
          							<div class="col-50">
            							<h3>Payment</h3>
            							<label for="fname">Accepted Cards</label>
										<div class="icon-container">
											<i class="fa fa-cc-visa" style="color:navy;"></i>
											<i class="fa fa-cc-amex" style="color:blue;"></i>
											<i class="fa fa-cc-mastercard" style="color:red;"></i>
											<i class="fa fa-cc-discover" style="color:orange;"></i>
										</div>
            							<label for="cname">Name on Card</label>
										<input type="text" id="cname" name="name" placeholder="John More Doe">
										<label for="ccnum">Credit card number</label>
										<input type="text" id="ccnum" name="number" placeholder="1111-2222-3333-4444">
										<label for="expmonth">Exp Month</label>
										<input type="text" id="expmonth" name="exp_month" placeholder="September">
            							<div class="row">
											<div class="col-50">
												<label for="expyear">Exp Year</label>
												<input type="text" id="expyear" name="exp_year" placeholder="2018">
											</div>
											<div class="col-50">
												<label for="cvv">CVV</label>
												<input type="text" id="cvv" name="cvc" placeholder="352">
											</div>
										</div>
									</div>
        						</div>
								<!-- <label>
									<input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
								</label> -->
        						<input type="submit" value="Continue to checkout" class="btn">
      						</form>
						</div>
					</div>
  					<div class="col-25">
						<div class="container-payment">
							<p>Total <span class="price" style="color:black"><b>INR {{$product->price}}</b></span></p>
						</div>
					</div>
				</div>
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