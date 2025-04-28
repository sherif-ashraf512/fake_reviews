@php
$configData = Helper::appClasses();
use Illuminate\Support\Str;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>RVP ->- Review Verfied Products</title>
    <link rel="icon" type="image/x-icon" href="./asscte/images/img brand/logo.png">
    <!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="./asscte/css/bootstrap.min.css">
    <!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="./asscte/fontawesome-free-6.7.1-web/css/all.min.css">
    <!--  styles css -->
	<link rel="stylesheet" type="text/css" href="./asscte/css/style.css">

</head>
<body>
    <!-- starting navbar -->
    <nav class="navbar navbar-expand-lg navbar-menna position-fixed top-0 start-0 end-0 z-3" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="#">RVP<i class="fa-solid fa-fingerprint px-2"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ms-auto mb-2 mb-lg-0 ">
                <li class="nav-item px-2">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#Products">Products</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#About">Who We Are</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#contact-modified">Contact US</a>
                </li>
            </ul>
			<ul>
				<li>
					<a id="support"  class="btn btn-sm btn-outline-dark mt-1 pb-3" href="{{route('login')}}">Login</a>
				</li>
			</ul>

          </div>
        </div>
      </nav>
    <!-- Ending Navbar -->

                    <!-- Starting Home Section -->
		<section id="home" class="home picture" style="margin-top: 90px;">
			<div class="display-table">
				<div class="display-table-cell">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="home-title">
									<h1 class="title-effect">
									<span>Electronics</span><span class="text-info mx-2">website</span>
									</h1>
									<h4 class="title-effect">
										<span>purchase safely</span>
									</h4>
									<a class=" btn btn-outline-info" href="#portfolio">
										<span>Read more..</span>
									</a>
								</div>
							</div>
						</div>
						<div class="home-bar ">
							<div class="home-social">
								<ul class="list-unstyled">
									<li class="list-inline-item">
										<a href="#"><i class="fab fa-facebook-f btn btn-sm btn-outline-primary"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="#"><i class="fab fa-twitter btn btn-sm btn-outline-primary"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="#"><i class="fab fa-instagram btn btn-sm btn-outline-danger"></i></a>
									</li>
								</ul>
							</div>
							<div class="home-scroll">
								<a href="#about"><span></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
                     <!-- Ending Home Section -->

					 <!-- Starting About -->
		<section id="about" class="about">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="title">
							<h2>About</h2>
							<h3>About</h3>
						</div>
						<div class="title-text text-center">
							<p>At RVP, we offer the latest smartphones at competitive prices <br/> backed by real customer reviews to help you shop with confidence and clarity. </p>
						</div>
					</div>
					<div class="col-md-4 mx-auto">
						<div class="about-image">
							<img src="./asscte/images/WhatsApp Image 2025-04-24 at 17.10.39_ac17bb7a.jpg" alt="image">
						</div>
					</div>
					<div class="col-md-7 offset-md-1">
						<div class="about-info">
							<div class="about-text">
								<h4>Review Verfied Products.</h4>
								<p>Welcome to RVP – your trusted destination for the latest smartphones at unbeatable prices. We are committed to delivering not just great phones, but also an honest and transparent shopping experience. Every product on our platform is backed by real customer reviews, so you can make informed decisions based on genuine feedback. Whether you're looking for high-end flagship models or budget-friendly options, we carefully curate our collection to suit every need. At RVP, we believe in combining technology, trust, and top-tier service to ensure you get the best value with every purchase.</p>
							</div>
							<p>E-mail: <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		       <!-- Ending About -->



           <!-- Starting Services Section -->
<section id="services" class="services py-5">
	<div class="container">
	  <div class="text-center mb-5">
		<h2 class=" position-relative fs-1 d-inline-block">
		  Services
		  <span class="position-absolute text-white fs-1">Services</span>
		</h2>
		<p class="text-muted text-white">RVP Services</p>
	  </div>

	  <div class="row g-4">
		<div class="col-md-4">
		  <div class="card service-card h-100 border-0 shadow-sm">
			<div class="card-body text-center px-3 py-4">
			  <div class="service-icon mb-3">
				<i class="fas fa-anchor"></i>
			  </div>
			  <h5 class="card-title">Real Customer Reviews</h5>
			  <p class="card-text">See honest feedback from real buyers.</p>
			</div>
		  </div>
		</div>

		<div class="col-md-4">
		  <div class="card service-card h-100 border-0 shadow-sm">
			<div class="card-body text-center px-3 py-4">
			  <div class="service-icon mb-3">
				<i class="far fa-chart-bar"></i>
			  </div>
			  <h5 class="card-title">Verified Buyer Reviews</h5>
			  <p class="card-text">Only customers who purchased the product can leave a review.</p>
			</div>
		  </div>
		</div>

		<div class="col-md-4">
		  <div class="card service-card h-100 border-0 shadow-sm">
			<div class="card-body text-center px-3 py-4">
			  <div class="service-icon mb-3">
				<i class="fas fa-globe"></i>
			  </div>
			  <h5 class="card-title">Rating Breakdown</h5>
			  <p class="card-text">View a detailed star rating breakdown for every product.</p>
			</div>
		  </div>
		</div>

		<div class="col-md-4">
		  <div class="card service-card h-100 border-0 shadow-sm">
			<div class="card-body text-center px-3 py-4">
			  <div class="service-icon mb-3">
				<i class="fas fa-desktop"></i>
			  </div>
			  <h5 class="card-title">AI Review Analysis</h5>
			  <p class="card-text">Our system flags suspicious or fake reviews automatically.</p>
			</div>
		  </div>
		</div>

		<div class="col-md-4">
		  <div class="card service-card h-100 border-0 shadow-sm">
			<div class="card-body text-center px-3 py-4">
			  <div class="service-icon mb-3">
				<i class="fas fa-code"></i>
			  </div>
			  <h5 class="card-title">Wide Selection of Phones</h5>
			  <p class="card-text">Explore top models from leading smartphone brands.</p>
			</div>
		  </div>
		</div>

		<div class="col-md-4">
		  <div class="card service-card h-100 border-0 shadow-sm">
			<div class="card-body text-center px-3 py-4">
			  <div class="service-icon mb-3">
				<i class="fas fa-life-ring"></i>
			  </div>
			  <h5 class="card-title">Fast & Reliable Delivery</h5>
			  <p class="card-text">Get your phone quickly with tracked shipping.</p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
     <!-- Ending Services Section -->


          <!-- Starting Products Section -->
	   <div class=" features product-container" id="Products">
		<!-- Products Introduction -->
		<div class="products-intro text-center mb-5 py-4">
		  <div class="container">
			<h2 class="mb-3">Discover Our Premium Products</h2>

			<div class="features mt-4 row justify-content-center">
			<!-- iPhone 15 -->
      @foreach($latestProducts as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div id="product-iphone15" class="card product-card shadow">
            <div class="image-container">
              <img src="{{asset("assets/$product->image")}}" class="product-image" alt="product image" />
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$product->title}}</h5>
              <p class="text-truncate">
                {!! Str::limit(str_replace('"', '', $product->description), 300) !!}
              </p>
              <p class="card-text">{{$product->price}} EGP</p>
              <div class="rating">★★★★★</div>
              <div class="btn-container">
                <a href="{{route('make-order',$product->id)}}" class="btn btn-primary">BUY</a>
                <a  onclick="submitReview()"  href="#" class="btn btn-secondary">Review</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach


		</div>
	</div>
                 <!--Ending Products -->

          <!-- starting skill -->
	<!-- About Start -->
<div class="container-xxl py-5" id="About">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end wow fadeInRight" data-wow-delay="0.1s">
                        <img class="img-fluid rounded w-100 zoomIn" src="./asscte/images/product/22.jpg">
                    </div>
                    <div class="col-6 text-end wow fadeInRight" data-wow-delay="0.3s">
                        <img class="img-fluid rounded w-75 zoomIn" src="./asscte/images/product/44.avif" style="margin-top: 10%;">
                    </div>
                    <div class="col-6 text-start wow fadeInLeft" data-wow-delay="0.5s">
                        <img class="img-fluid rounded w-75 zoomIn" src="./asscte/images/25d4e5db-9508-4d72-8958-34b686339784.png">
                    </div>
                    <div class="col-6 text-start wow fadeInLeft" data-wow-delay="0.7s">
                        <img class="img-fluid rounded w-100 zoomIn" src="./asscte/images/product/33.avif">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp text-abuot" data-wow-delay="0.5s">
                <h5 class="section-title ff-secondary text-center text-info text-bg-secondary p-3 fs-3 rounded-3 ">Who We Are</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-microphone text-info ms-2 px-5"></i>Our RVP</h1>
                <p class="mb-4 animate__animated animate__fadeInRight">
                    At RVP, we are passionate about connecting people with the latest and most reliable smartphones on the market. Our mission is to offer a trusted shopping experience where quality, value, and genuine customer reviews come first.
                </p>
                <p class="mb-4 animate__animated animate__fadeInRight animate__delay-1s">
					We believe that buying a phone should be simple, secure, and satisfying — backed by real opinions from real customers. Every device we offer is carefully selected to meet your needs, and every review is verified to help you make the right choice with confidence.stes.
                </p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6 wow flipInX" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-info mb-0" data-toggle="counter-up">15</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 wow flipInX" data-wow-delay="0.6s">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-info  mb-0" data-toggle="counter-up">50</h1>
                            <div class="ps-4">
                                <p class="mb-0">Professionals</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2 wobble-horizontal" href="">Discover More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
       <!-- Ending skill -->

<!-- start Review -->


	<section id="reviews" class="reviews-section">
<div class="container">
<div class="section-header">
  <h2>Customer Reviews</h2>
  <p>What our customers say about our products</p>
</div>

<div class="reviews-container">
  <!-- Review 1 -->
  @foreach ($reviews as $review)
  <div class="review-card">
	<div class="reviewer-img">
	  <img src="./asscte/images/people/2.jpg" alt="Customer Photo">
	</div>
	<div class="review-content">
	  <h4>{{$review->user->name}}</h4>
	  <div class="rating">
      @for ($i = 0 ; $i < $review->stars; $i++)
      ★
      @endfor
    </div>
	  <p class="review-text">{{$review->description}}</p>
	  <p class="review-date">Posted on {{$review->created_at->format('M d, Y')}}</p>
	</div>
  </div>
  @endforeach

</div>
</div>
</section>
<!-- End Testimonials Section -->
<!-- end Review -->
<!-- Start Comments Section -->
<section id="comments" class="comments-section">
<div class="container">
<div class="section-header">
  <h2>Share Your experience</h2>
  <p>Join the conversation about our products</p>
</div>

<div class="comments-container">
  <!-- Comment 1 -->
  <div class="comment-card">
	<div class="commenter-img">
	  <img src="./asscte/images/people/4.jpg" alt="User Photo">
	</div>
	<div class="comment-content">
	  <h4>Marry Robert</h4>
	  <p class="comment-text">Has anyone tried the new iPad Pro with the M2 chip? How does it compare to previous models?</p>
	  <div class="comment-meta">
		<span class="comment-date">2 days ago</span>
		<span class="comment-replies">5 replies</span>
	  </div>
	</div>
  </div>

  <!-- Comment 2 -->
  <div class="comment-card">
	<div class="commenter-img">
	  <img src="./asscte/images/people/5.jpg" alt="User Photo">
	</div>
	<div class="comment-content">
	  <h4>David Mark</h4>
	  <p class="comment-text">Just got my Apple Watch Series 8! The temperature sensing feature is revolutionary for health tracking.</p>
	  <div class="comment-meta">
		<span class="comment-date">1 week ago</span>
		<span class="comment-replies">12 replies</span>
	  </div>
	</div>
  </div>

  <!-- Comment 3 -->
  <div class="comment-card">
	<div class="commenter-img">
	  <img src="./asscte/images/people/8.png" alt="User Photo">
	</div>
	<div class="comment-content">
	  <h4>Asala</h4>
	  <p class="comment-text">Looking for recommendations: iPhone 15 Pro or wait for the 16? The camera upgrades seem significant.</p>
	  <div class="comment-meta">
		<span class="comment-date">3 weeks ago</span>
		<span class="comment-replies">23 replies</span>
	  </div>
	</div>
  </div>
</div>

<div class="add-comment">
  <h3>Add Your Comment</h3>
  <form class="comment-form">
	<div class="form-group">
	  <textarea class="form-control" placeholder="Share your thoughts..." rows="4"></textarea>
	</div>
	<button type="submit" class="btn btn-outline-primary w-100 my-3">Post Comment</button>
  </form>
</div>
</div>
</section>
<!-- End Comments Section -->



	<!-- start footer -->
	<footer id="contact-modified" class="ctcontact-footer-modified">
		<div class="container">
			<div class="footer-top-modified">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="single-footer-widget-modified">
							<div class="footer-logo-modified">
								<a href="index.html"> Contact Information</a>
							</div>
							<p>
								Feel free to reach out to us for any inquiries or support. We’re here to help!
							</p>
							<div class="footer-contact-modified">
								<p>Phone: +123 456 7890</p>
								<p>Email: Mennakhaled@gamil.com</p>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-sm-6">
						<div class="single-footer-widget-modified">
							<h2>Discover Our Company & Services</h2>
							<ul>
								<li><a href="#">about us</a></li>
								<li><a href="#">career</a></li>
								<li><a href="#">terms <span> of service</span></a></li>
								<li><a href="#">privacy policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-xs-12">
						<div class="single-footer-widget-modified">
							<h2>Stay Connected</h2>
							<div class="row centered-content">
								<div class="col-md-12 col-xs-12">
									<ul>
										<li><a href="#">Follow Us On:</a></li>
										<li><a href="#">Facebook</a></li>
										<li><a href="#">Instagram</a></li>
										<li><a href="#">Twitter</a></li>
										<li><a href="#">LinkedIn</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-offset-1 col-md-3 col-sm-6">
						<div class="single-footer-widget-modified">
							<h2>Add Your email!</h2>
							<div class="footer-newsletter-modified">
								<p>
									Follow to get latest news update and informations
								</p>
							</div>
							<div class="hm-foot-email-modified">
								<div class="foot-email-box-modified">
									<input type="text" class="form-control-modified" placeholder="Add Email">
								</div>
								<div class="foot-email-subscribe-modified">
									<span><i class="fa fa-arrow-right"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright-modified">
				<div class="row">
					<div class="col-sm-6">
						<p>
							&copy; Copyright By RVP.
					</div>
					<div class="col-sm-6">
						<div class="footer-social-modified">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-pinterest-p"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div id="scroll-Top-modified">
				<div class="return-to-top-modified">
					<i class="fa fa-angle-up" id="scroll-top-modified" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</footer>
	<!--contact end-->



	<!-- Include all js compiled plugins (below), or include individual files as needed -->
	<!-- end footer -->












            <!-- Starting bootstrap js -->
    <script src="{{asset('asscte/js/bootstrap.bundle.min.js')}}"></script>
           <!-- Starting main js -->
    <script src="{{asset('asscte/js/main.js')}}"></script>
</body>
</html>
