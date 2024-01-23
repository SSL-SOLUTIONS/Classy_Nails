<!DOCTYPE HTML>
<html lang="zxx">
<head>
    <title>ClassyNails</title>
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
                    <a href="" class="text-center">
                        beauty
                        <span class="d-block">Blog</span>
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
            <!-- //search -->
            <!-- menu -->
            <div class="side_menu">
                <div class="burger_box">
                    <div class="menu-icon-container">
                        <a href="#" class="menu-icon js-menu_toggle closed">
                            <span class="menu-icon_box">
                                <span class="menu-icon_line menu-icon_line--1"></span>
                                <span class="menu-icon_line menu-icon_line--2"></span>
                                <span class="menu-icon_line menu-icon_line--3"></span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="container">
                    <ul class="sidebar-menu">
                        <li class="treeview">
                            <a href="{{url('/')}}">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{route('about')}}">
                                <span>About</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{route('blogs')}}">
                                <span>Blog</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{route('contact')}}">
                                <span>Contact</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="{{route('privacypolicies')}}">
                                <span>Privacy Policy</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{route('termsconditions')}}">
                                <span>Terms & Conditions</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- //menu -->
        </header>
        <!-- //header -->
        <!-- banner-slider -->
        <section class="diagonal-stripe-one inner-bg">
            <div class="container">
                <div class="ml-md-5 pl-md-5">
                </div>
            </div>
        </section>
        <!-- banner-slider -->
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Home</a>
            </li>
           
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- single -->
    <div class="single-w3l py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="row inner_sec_info pt-md-4">

            @foreach($blogs->chunk(2) as $blogRow)
                <div class="row mb-4">
                    @foreach($blogRow as $blog)
                        <div class="col-lg-6">
                            <!-- blog grid -->
                            <div class="full_width_blog_grid">
                                <div class="card">
                                    <div class="card-header p-0">
                                        <a href="">
                                            <img class="card-img-bottom" src="{{ asset('admin/images/blogs/' . $blog->image) }}" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-between border-bottom py-2">
                                            <h5 class="blog-title card-title font-weight-bold">
                                                <a href="{{ route('blogs.show', ['id' => $blog->id]) }}">{{ $blog->title }}</a>
                                            </h5>
                                            <div class="blog_w3icon">
                                                <!-- Additional metadata if needed -->
                                            </div>
                                        </div>
                                        <p class="card-text mt-3">{{ Str::limit(strip_tags(Purifier::clean($blog->description)), 400) }}
</p>
                                        <a href="{{ route('blogs.show', ['id' => $blog->id]) }}" class="blog-btn text-dark" target="_blank">Read more</a>
                                        <p class="card-text text-right">
                                    <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                                </p>
                                    </div>
                                </div>
                            </div>
                            <!-- //blog grid -->
                        </div>
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>
</div>

    <!-- //single -->
    <!-- footer -->
    <div class="footer pt-lg-5 text-center">
        <div class="container">
            <!-- logo -->
            <div class="logo">
                <h2>
                    <a href="" class="text-center">
                        beauty
                        <span class="d-block">Blog</span>
                    </a>
                </h2>
            </div>
            <!-- //logo -->
            <ul class="list-agileits py-4 border-bottom">
                <li>
                    <a href="{{url('/')}}">
                        Home
                    </a>
                </li>
                <li class="my-3">
                    <a href="{{route('about')}}" class="mx-4">
                        About Us
                    </a>
                </li>
                <li class="mb-3">
                    <a href="{{route('blogs')}}" class="mr-4">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="{{route('contact')}}">
                        Contact Us
                    </a>
                </li> <br>
                <li>
                    <a href="{{route('privacypolicies')}}">
                     Privacy Policy
                    </a>
                </li>

                <li>
                    <a href="{{route('termsconditions')}}">
                  Terms & Conditions
                    </a>
                </li>
            </ul>
            <div class="footerv2-w3ls pt-4">
                <h3 class="w3f_title">Socialize with Us</h3>
                <ul class="social-iconsv2 agileinfo pt-3">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/SSL-SOLUTIONS" target="_blank" class="me-4 text-reset">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-top my-3">
                <p class="mx-auto">.
                </p>
            </div>
        </div>
        <div class="p-sm-5 px-3 py-5">
            <!-- footer right -->
            <div class="col-md-8 mx-auto">
                <h3 class="mb-3 w3f_title">Contact Us</h3>
                <div class="row">
                    <div class="col-lg-4 fv3-contact">
                        <span class="fas fa-envelope-open mr-2 my-3"></span>
                        <p>
                            <a href="">info@classynails.online</a>
                        </p>
                    </div>
                    <div class="col-lg-4 fv3-contact my-lg-0 my-4">
                        <span class="fas fa-phone-volume mr-2 my-3"></span>
                        <p>+92 301 1114504</p>
                    </div>
                    <div class="col-lg-4 fv3-contact">
                        <span class="fas fa-home mr-2 my-3"></span>
                        <address>Office 303,Landmark plaza,Jail road,Lahore.</address>
                    </div>
                </div>
                <!-- //footer right -->
            </div>
            <!-- //footer row -->
        </div>
        <!-- copyright -->
        <div class="cpy-right text-center py-3 bg-theme">
            <p class="text-white">© 2024 Beauty Blog.All rights reserved | Design by
                <a href="" class="text-white">SSL Solutions</a>
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
    <!-- move-top -->
    <script src="{{asset('website/js/move-top.js')}}"></script>
    <!-- easing -->
    <script src="{{asset('website/js/easing.js')}}"></script>
    <!--  necessary snippets for few javascript files -->
    <script src="{{asset('website/js/Beautyblog.js')}}"></script>
    <!-- smooth scroll -->
    <script src="{{asset('website/js/SmoothScroll.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('website/js/bootstrap.js ')}}"></script>
</body>

</html>