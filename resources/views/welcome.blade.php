
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Classynails</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Beauty Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom CSS -->
	<!-- Bootstrap Core CSS -->
	<link href="{{asset('website/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<!-- side nav css file -->
	<link href="{{asset('website/css/SidebarNav.min.css')}}" media='all' rel='stylesheet' type='text/css' />
	<!-- //side nav css file -->
	<link href="{{asset('website/css/style.css')}}" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link href="{{asset('website/css/fontawesome-all.min.css')}}" rel="stylesheet">
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<div class="w3l-hear-top">
		<!-- header -->
		<header>
			<!-- logo -->
			<div class="logo">
				<h1>
					<a href="/" class="text-center">
						<img src="{{asset('website/images/logo.png')}}" alt="img" height="70" width="90">
						
					</a>
				</h1>
			</div>
			<!-- //logo -->
			<!-- search -->
			<div class="w3ls_search">
				<div class="cd-main-header">
					<ul class="cd-header-buttons">
						<li>
							<a class="cd-search-trigger" href="#cd-search">
								<span></span>
							</a>
						</li>
					</ul>
					<!-- cd-header-buttons -->
				</div>
				<div id="cd-search" class="cd-search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="search site">
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</header>
		<!-- //header -->
		<!-- banner-slider -->
		<div class="w3l_banner_info">
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="slider-img b1">
								<div class="container">
									<div class="slider_banner_info ml-md-5 pl-md-5">
										<h4 class="text-uppercase font-weight-light">
											Nails Diaries
										</h4>
										<h3 class="bnr">A Stylish Journey</h3>
										<a href="about.html" class="w3ls-button">
											<span>read more</span>
										</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="slider-img b2">
								<div class="container">
									<div class="slider_banner_info ml-md-5 pl-md-5">
										<h4 class="text-uppercase font-weight-light">
											Nails Diaries
										</h4>
										<h3 class="bnr">A Stylish Journey</h3>
										<a href="about.html" class="w3ls-button">
											<span>read more</span>
										</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="slider-img b3">
								<div class="container">
									<div class="slider_banner_info ml-md-5 pl-md-5">
										<h4 class="text-uppercase font-weight-light">
											Nails Diaries
										</h4>
										<h3 class="bnr">A Stylish Journey</h3>
										<a href="about.html" class="w3ls-button">
											<span>read more</span>
										</a>
									</div>
								</div>
							</div>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<!-- banner-slider -->
	</div>
	<!-- //banner -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{url('/')}}">Home</a>
			</li>
			<li class="breadcrumb-item active"><a href="{{route('about')}}">About Us</a></li>
			<li class="breadcrumb-item active"><a href="{{route('blogs')}}">Blogs</a></li>
			<li class="breadcrumb-item active"><a href="{{route('contact')}}">Contact Us</a></li>
		</ol>
	</nav>
	<!-- banner bottom -->
	<section class="banner-sec py-5">
		<div class="container">
			<div class="row pt-md-5">
				<div class="col-lg-3">
					<div class="card">
						<img class="img-fluid" src="{{asset('website/images/g1.webp')}}" alt="" />
						<div class="card-img-overlay">
							<span class="badge-pill badge-pos">Tips</span>
						</div>
						<div class="card-body">
							<div class="news-title">
								<h4 class="title-small">
									<a href="index.html" class="text-dark">SOAP NAILS: A MINIMALIST MANICURE TREND FOR 2024</a>
								</h4>
							</div>
							<p class="card-text">
								<small class="text-time">
									<em>3 mins ago</em>
								</small>
							</p>
						</div>
					</div>
					<div class="card mt-5">
						<img class="img-fluid" src="{{asset('website/images/g2.jpg')}}" alt="" />
						<div class="card-img-overlay">
							<span class="badge-pill badge-pos">Reviews</span>
						</div>
						<div class="card-body">
							<div class="news-title">
								<h4 class="title-small">
									<a href="" class="text-dark">Dip Nails: Side Effects vs. Gel & Acrylic</a>
								</h4>
							</div>
							<p class="card-text">
								<small class="text-time">
									<em>10 mins ago</em>
								</small>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 mt-lg-0 mt-5">
					<div class="card">
						<img class="img-fluid" src="{{asset('website/images/g3.webp')}}" alt="" />
						<div class="card-img-overlay">
							<span class="badge-pill badge-pos">Travel</span>
						</div>
						<div class="card-body">
							<div class="news-title">
								<h4 class="title-small">
									<a href="" class="text-dark">10 Nail Trends That Will Be Huge in 2024</a>
								</h4>
							</div>
							<p class="card-text">
								<small class="text-time">
									<em>14 mins ago</em>
								</small>
							</p>
						</div>
					</div>
					<div class="card mt-5">
						<img class="img-fluid" src="{{asset('website/images/g9.webp')}}" alt="" />
						<div class="card-img-overlay">
							<span class="badge-pill badge-pos">News</span>
						</div>
						<div class="card-body">
							<div class="news-title">
								<h4 class="title-small">
									<a href="" class="text-dark">"Nails Anxiety" Is On The Rise-How To Relieve It?</a>
								</h4>
							</div>
							<p class="card-text">
								<small class="text-time">
									<em>23 mins ago</em>
								</small>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 top-slider mt-lg-0 mt-5">
					<!-- carousel -->
					<div id="carousel-example-generic" class="carousel slide bg-light" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<div class="news-block p-3">
									<div class="news-media">
										<img class="img-fluid" src="{{asset('website/images/g6.jpeg')}}" alt="" />
									</div>
									<div class="news-title">
										<h4 class="title-large border-bottom">
											<a href="" class="text-theme text-dark">These Celeb-Approved Valentine’s Day Nails Are About Way More Than Just Hearts</a>
										</h4>
									</div>
									<div class="news-des my-3">
										<p>Celebrity Valentine’s Day nails often end up becoming some of very best sets of all time? They’re fun, they’re mood-boosting, and they only come around once a year...</p>
									</div>
									<small class="text-time">
										<em>
											<i class="far fa-clock mr-2"></i>1hr ago</em>
									</small>
								</div>
							</div>
							<div class="carousel-item">
								<div class="news-block p-3">
									<div class="news-media">
										<img class="img-fluid" src="{{asset('website/images/g5.jpg')}}" alt="" />
									</div>
									<div class="news-title">
										<h4 class="title-large border-bottom">
											<a href="" class="text-theme text-dark">Megan Fox’s Heart-Adorned Nails Are Short, Sweet, & Totally Unlike Her Usual Style</a>
										</h4>
									</div>
									<div class="news-des my-3">
										<p>omething’s apparently shifted the moment the clock struck midnight and flipped the world into 2024. Seemingly overnight, all sorts of long-enduring beauty trends slipped out of the spotlight, only for an entirely new batch to take over....</p>
									</div>
									<small class="text-time">
										<em>
											<i class="far fa-clock mr-2"></i>2 hrs ago</em>
									</small>
								</div>
							</div>
							<div class="carousel-item">
								<div class="news-block p-3">
									<div class="news-media">
										<img class="img-fluid" src="{{asset('website/images/g4.jpg')}}" alt="" />
									</div>
									<div class="news-title">
										<h4 class="title-large border-bottom">
											<a href="" class="text-theme text-dark">Obsessed with acrylic nails? Here’s how to take care of your nails after.</a>
										</h4>
									</div>
									<div class="news-des my-3">
										<p>As with any beauty treatment, proper care post-acrylics is crucial to maintaining nail health. But to do that first you need to understand how acrylics can harm your nails, in the first place...</p>
									</div>
									<div class="time-text">
										<small class="text-time">
											<em>
												<i class="far fa-clock mr-2"></i>yesterday</em>
										</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //carousel -->
				</div>
			</div>
			<!-- flexisel slider -->
			<div class="blog-mid-sec py-sm-5">
				<div class="mx-auto">
					<h5 class="beauty-center-title my-5 text-center text-capitalize">looking for our best posts?</h5>
				</div>
				<ul id="flexiselDemo2">
					<li>
						<div class="blog-item">
							<img src="{{asset('website/images/g5.webp')}}" alt=" " class="img-fluid" />
							<div class="floods-text">
								<h3>
									<a href="index.html">Metallic Gold And Glitter
										<span>Blogger |
											<b>Kanwal Afzal</b>
										</span>
									</a>
								</h3>
							</div>
						</div>
					</li>
					<li>
						<div class="blog-item">
							<img src="{{asset('website/images/g6.webp')}}" alt=" " class="img-fluid" />
							<div class="floods-text">
								<h3>
									<a href="">Classy Nude And White
										<span>Blogger |
											<b>Pakiza Khalid</b>
										</span>
									</a>
								</h3>
							</div>
						</div>
					</li>
					<li>
						<div class="blog-item">
							<img src="{{asset('website/images/g7.webp')}}" alt=" " class="img-fluid" />
							<div class="floods-text">
								<h3>
									<a href="">Red And Leopard
										<span>Blogger |
											<b>Shumaila Akram</b>
										</span>
									</a>
								</h3>
							</div>
						</div>
					</li>
					<li>
						<div class="blog-item">
							<img src="{{asset('website/images/g8.webp')}}" alt=" " class="img-fluid" />
							<div class="floods-text">
								<h3>
									<a href="">Orange To Nude
										<span>Blogger |
											<b>Kiran Sitar</b>
										</span>
									</a>
								</h3>

							</div>
						</div>
					</li>
				</ul>
			</div>
			<!--//flexisel silder-->
		</div>
	</section>
	<!-- //banner bottom -->
	<!-- slide -->
	<section class="diagonal-stripe-one">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<img src="{{asset('website/images/slide.png')}}" alt="beauty_img" class="img-fluid" />
				</div>
				<div class="col-md-8 d-flex flex-column  my-auto">
					<h4 class="slide-text align-self-center">click here to find out more</h4>
					<a href="about.html" class="w3ls-button mx-auto">
						<span>read more</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- //slide -->
	<!-- slide bottom -->
	<section class="section-01 py-sm-5 pt-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-6 mt-sm-5">
							<div class="card">
								<img class="img-fluid" src="{{asset('website/images/g10.webp')}}" alt="" />
								<div class="card-body">
									<div class="news-title">
										<a href="">
											<h4 class="title-small">Tips To Remove Nail Extensions At Home. </h4>
										</a>
									</div>
									<p class="card-text">Nail extensions come in a variety of types, such as acrylic, gel, and dip powder, each with
										their own unique benefits and drawbacks.</p>
									<p class="card-text">
										<small class="text-time">
											<em>3 mins ago</em>
										</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 mb-lg-5 mt-5">
							<div class="card">
								<img class="img-fluid" src="{{asset('website/images/g11.webp')}}" alt="" />
								<div class="card-body">
									<div class="news-title">
										<a href="">
											<h4 class="title-small">What are BIAB nails? A complete guide to the popular and long-lasting 'builder' manicure.</h4>
										</a>
									</div>
									<p class="card-text">Highlighted as one of the leading 2024 nail trends, BIAB promises a nail-strengthening treatment, topped with anything from neutral tones to sparkly nail art, that's more hard-wearing yet gentler to your natural nail than gels...</p>
									<p class="card-text">
										<small class="text-time">
											<em>3 mins ago</em>
										</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 my-lg-0 mt-5">
							<div class="card">
								<img class="img-fluid" src="{{asset('website/images/g12.png')}}" alt="" />
								<div class="card-body">
									<div class="news-title">
										<a href="">
											<h4 class="title-small">Craving That Fancy Manicure?</h4>
										</a>
									</div>
									<p class="card-text">Not to be fawning, but a good manicure can be mood changing. I’m a fan of almond-shaped nail extensions and shiny gel polishes.</p>
									<p class="card-text">
										<small class="text-time">
											<em>3 mins ago</em>
										</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 my-lg-0 my-5">
							<div class="card">
								<img class="img-fluid" src="{{asset('website/images/g13.jpg')}}" alt="">
								<div class="card-body">
									<div class="news-title">
										<a href="">
											<h4 class="title-small">Beware nail-biters: Microscopic video of nails will make you ewww!</h4>
										</a>
									</div>
									<p class="card-text">Imagine if you could see the dirt and grime that accumulates under your fingernails when you bite your nails. It's not a pretty sight. And it's not just gross, it's also dangerous.</p>
									<p class="card-text">
										<small class="text-time">
											<em>3 mins ago</em>
										</small>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- tabs -->
				<aside class="col-lg-4 side-bar col-md-12 mt-sm-5">
					<ul class="nav nav-tabs" role="tablist" id="myTab">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home" role="tab">Latest</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile" role="tab">Top</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#messages" role="tab">Featured</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content sidebar-tabing mt-3" id="nav-tabContent">
						<div class="tab-pane active" id="home" role="tabpanel">
							<div class="media">
								<a href="">
									<img class="d-flex mr-3 img-fluid" src="{{asset('website/images/g9.webp')}}" alt="Generic placeholder image" />
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="index.html" class="text-black">"Nails Anxiety" Is On The Rise-How To Relieve It?</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>10 mins ago</em>
										</small>
									</div>
								</div>
							</div>
							<div class="media">
								<a href="index.html">
									<img class="d-flex mr-3 img-fluid" src="{{asset('website/images/g4.jpg')}}" alt="Generic placeholder image" />
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="index.html" class="text-black">Obsessed with acrylic nails? Here’s how to take care of your nails after.</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>20 mins ago</em>
										</small>
									</div>
								</div>
							</div>
							<div class="media">
								<a href="">
									<img class="d-flex mr-3 img-fluid" src="{{asset('website/images/g10.webp')}}" alt="Generic placeholder image" />
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="" class="text-black">Tips To Remove Nail Extensions At Home.</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>30 mins ago</em>
										</small>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="profile" role="tabpanel">
							<div class="media">
								<a href="index.html">
									<img class="d-flex mr-3 img-fluid" src="{{asset('website/images/g2.webp')}}" alt="Generic placeholder image" />
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="" class="text-black">The Secret Behind Gel-X® Nails</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>10 mins ago</em>
										</small>
									</div>
								</div>
							</div>
							<div class="media">
								<a href="index.html">
									<img class="d-flex mr-3 img-fluid" src="{{asset('website/images/img.jpg')}}" alt="Generic placeholder image" />
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="" class="text-black">Everything to Know About Getting Gel Nail Extensions</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>13 mins ago</em>
										</small>
									</div>
								</div>
							</div>
							<div class="media">
								<a href="index.html">
									<img class="d-flex mr-3 img-fluid" src="{{asset('website/images/img2.jpg')}}" alt="Generic placeholder image" />
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="" class="text-black">Make Your Nail Extensions Last For Longer</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>30 mins ago</em>
										</small>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="messages" role="tabpanel">
							<div class="media">
								<a href="">
									<img class="d-flex mr-3 img-fluid" src="{{asset('website/images/g6.webp')}}" alt="Generic placeholder image">
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="index.html" class="text-black">Classy Nude And White nails art</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>40 mins ago</em>
										</small>
									</div>
								</div>
							</div>
							<div class="media">
								<a href="index.html">
									<img class="d-flex mr-3 img-fluid" src="{{asset('website/images/img3.webp')}}" alt="Generic placeholder image">
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="" class="text-black">How to Fix Damaged Nails after removing Extensions?</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>1hr ago</em>
										</small>
									</div>
								</div>
							</div>
							<div class="media">
								<a href="index.html">
									<img class="d-flex mr-3 img-fluid" src="{{asset('website/images/img4.webp')}}" alt="Generic placeholder image">
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="" class="text-black">Nails speak: Ways to decode health from nails.</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>2 hrs ago</em>
										</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="bc_sub mt-3 my-4">
						<h4>Sign up to our newsletter</h4>
						<p>Praesent sapien masspien aco nvallis </p>
						<form action="#" method="post">
							<input type="email" placeholder="Email" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
					<div class="video-sec bc_sub">
						<h4>Featured Video</h4>
						<div class="video-block">
							<div class="embed-responsive embed-responsive-4by3">
								<iframe width="460" height="250" src="https://www.youtube.com/embed/aI-QmC5asnA" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</aside>
				<!-- //tabs -->
			</div>
		</div>
	</section>
	<!-- //slide bottom -->
	<!-- footer -->
	<div class="footer text-center">
		<div class="container">
			<!-- logo -->
			
			<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
				<!-- Left -->
				<div class="me-5 d-none d-lg-block">
				  <span>Get connected with us on social networks:</span>
				</div>
				<!-- Left -->
			
				<!-- Right -->
				<div>
					<a href="" class="me-4 text-reset">
					  <i class="fab fa-facebook-f"></i>
					</a>
					<a href="" class="me-4 text-reset">
					  <i class="fab fa-twitter"></i>
					</a>
					<a href="" class="me-4 text-reset">
					  <i class="fab fa-instagram"></i>
					</a>
					<a href="https://github.com/SSL-SOLUTIONS" target="_blank" class="me-4 text-reset">
					  <i class="fab fa-github"></i>
					</a>
				  </div>
				<!-- Right -->
			  </section>
			  <section class="">
				<div class="container text-center text-md-start mt-5">
				  <!-- Grid row -->
				  <div class="row mt-3">
					<!-- Grid column -->
					<div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
					  <!-- Content -->
					  <h6 class="text-uppercase fw-bold mb-4">
						<i class="fas fa-gem me-3"></i>ClassyNails
					  </h6>
					  <p>
						Explore our world of refined beauty and exquisite nail artistry at Classy Nails.
						Your journey to sophisticated, well-manicured hands begins here.
					  </p>
					</div>
					<!-- Grid column -->
			
					<!-- Grid column -->
					
			
					<!-- Grid column -->
					<div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">
					  <!-- Links -->
					  <h6 class="text-uppercase fw-bold mb-4">
						Quick links
					  </h6>
					  <p>
						<a href="{{route('contact')}}" class="text-reset">Contact Us</a>
					  </p>
					  <p>
						<a href="{{route('about')}}" class="text-reset">About US</a>
					  </p>
					  <p>
						<a href="{{route('blogs')}}" class="text-reset">Blogs</a>
					  </p>
					  <p>
						<a href="{{route('privacypolicies')}}" class="text-reset">Privacy Policy</a>
					  </p>
					  
					  <p>
						<a href="{{route('termsconditions')}}" class="text-reset">Terms & Conditions</a>
					  </p>
					 
					</div>
					<!-- Grid column -->
			
					<!-- Grid column -->
					<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
					  <!-- Links -->
					  <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
					  <p><i class="fas fa-home me-3"></i>Office 303,Landmark Plaza, Jail road, Lahore.</p>
					  <p>
						<i class="fas fa-envelope me-3"></i>
					info@classynails.online
					  </p>
					  <p><i class="fas fa-phone me-3">+92 301 1114504</i></p>
					</div>
					<!-- Grid column -->
				  </div>
				  <!-- Grid row -->
				</div>
			  </section>
			
		
		
					
					
				
				<!-- //footer right -->
			</div>
			<!-- //footer row -->
		</div>
		<!-- copyright -->
		<div class="cpy-right text-center py-3 bg-theme">
			<p class="text-white">© 2024 ClassyNails. All rights reserved | Design by
				<a href="" class="text-white">SSLSolutions.</a>
			</p>
		</div>
		<!-- //copyright -->
		<!-- //footer container -->
	</div>
	<!-- //footer -->
	<!-- js-->
	<script src="{{asset('website/js/jquery-2.2.3.min.js')}}"></script>
	<!-- menu -->
	<script src="{{asset('website/js/menu.js')}}"></script>
	<!-- //menu -->
	<!-- banner responsiveslides -->
	<script src="{{asset('website/js/responsiveslides.min.js')}}"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner responsiveslides -->
	<!-- side nav js -->
	<script src="{{asset('website/js/SidebarNav.min.js')}}"></script>
	<script>
		$('.sidebar-menu').SidebarNav()
	</script>
	<!-- //side nav js -->
	<!-- search-bar -->
	<script src="{{asset('website/js/main.js')}}"></script>
	<!-- //search-bar-->
	<!-- flexisel -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});
		});
	</script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo2").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 736,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<script src="{{asset('website/js/jquery.flexisel.js')}}"></script>
	<!-- move-top -->
	<script src="{{asset('website/js/move-top.js')}}"></script>
	<!-- easing -->
	<script src="{{asset('website/js/easing.js')}}"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="{{asset('website/js/Beautyblog.js')}}"></script>
	<!-- smooth scroll -->
	<script src="{{asset('website/js/SmoothScroll.min.js')}}"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="{{asset('website/js/bootstrap.js')}}"></script>
	
</body>

</html>