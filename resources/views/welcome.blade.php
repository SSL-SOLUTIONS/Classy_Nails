<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Classynails</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Beauty Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function() {
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
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
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
				@php
				$blogs = \App\Models\Blog::take(2)->get();
				@endphp

				@foreach($blogs as $blog)
				<div class="col-lg-3">
					<div class="card">
						<img class="img-fluid" src="{{ asset('admin/images/blogs/' . $blog->image) }}" alt="" />
						<div class="card-img-overlay">
							<span class="badge-pill badge-pos"></span>
						</div>
						<div class="card-body">
							<div class="news-title">
								<h4 class="title-small">
									<a href="{{ route('blogs.show', ['id' => $blog->id]) }}" class="text-dark">{{ $blog['title'] }}</a>
								</h4>
							</div>
							<p class="card-text">
								<small class="text-time">
									<!-- Display time information here if available -->
								</small>
							</p>
						</div>
					</div>
					<!-- Repeat the above structure for each blog post -->
				</div>
				@endforeach
				<div class="col-lg-6 top-slider mt-lg-0 mt-5">
					<!-- carousel -->
					<div id="carousel-example-generic" class="carousel slide bg-light" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							@foreach(\App\Models\Blog::paginate(3) as $index => $blog)
							<li data-target="#carousel-example-generic" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
							@endforeach
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							@foreach(\App\Models\Blog::paginate(3) as $index => $blog)
							<div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
								<div class="news-block p-3">
									<div class="news-media">
										<img class="img-fluid" src="{{ asset('admin/images/blogs/' . $blog->image) }}" alt="" />
									</div>
									<div class="news-title">
										<h4 class="title-large border-bottom">
											<a href="{{ route('blogs.show', ['id' => $blog->id]) }}" class="text-theme text-dark">{{ $blog['title'] }}</a>
										</h4>
									</div>
									<div class="news-des my-3">
										<p>{{ Str::limit(strip_tags(Purifier::clean($blog->description)), 100) }}</p>
									</div>
									<small class="text-time">
										<!-- Display time information here if available -->
									</small>
								</div>
							</div>
							@endforeach
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
				<ul id="flexiselDemo2" class="slides">
					@php
					$blogs = \App\Models\Blog::orderBy('created_at', 'desc')->take(4)->get();
					@endphpdphp
					@foreach($blogs as $blog)
					<li>
						<div class="blog-item">
							<img src="{{ asset('admin/images/blogs/' . $blog->image) }}" alt=" " class="img-fluid" />
							<div class="floods-text">
								<h3>
									<a href="{{ route('blogs.show', ['id' => $blog->id]) }}">{{ Str::limit(strip_tags(Purifier::clean($blog->title)), 30) }}
										<span>
											<b> </b>
										</span>
									</a>
								</h3>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>

			@push('scripts')
			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script src="{{ asset('path/to/flexisel.js') }}"></script>
			<script>
				$(document).ready(function() {
					$("#flexiselDemo2").flexisel({
						visibleItems: 4,
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
			@endpush


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
					<a href="" class="w3ls-button mx-auto">
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
    @php
	$blogs = \App\Models\Blog::orderBy('created_at', 'desc')->skip(3)->take(4)->get();
    @endphp

    @for($i = 0; $i < count($blogs); $i += 2)
    <div class="row">
        @foreach($blogs->slice($i, 2) as $blog)
            <div class="col-lg-6 mt-sm-5">
                <div class="card">
                    <img class="img-fluid" src="{{ asset('admin/images/blogs/' . $blog->image) }}" alt="" />
                    <div class="card-body">
                        <div class="news-title">
                            <a href="{{ route('blogs.show', ['id' => $blog->id]) }}">
                                <h4 class="title-small">{{$blog->title}}</h4>
                            </a>
                        </div>
                        <p class="card-text">{{ Str::limit(strip_tags(Purifier::clean($blog->description)), 200) }}</p>
                        <p class="card-text">
                            <small class="text-time">
                                <!-- <em>3 mins ago</em> -->
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endfor

    <!-- tabs -->

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
		$(function() {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
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
		$(window).load(function() {
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
		$(window).load(function() {
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