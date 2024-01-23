
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>ClassyNails</title>
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
                <!-- <div id="cd-search" class="cd-search">
                    <form action="#" method="post">
                        <input name="Search" type="search" placeholder="search site">
                    </form>
                </div> -->
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
                        <li class="treeview  active">
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
                            <a href="{{route('contact')}}">
                                <span>Contact Us</span>
                            </a>
                        </li>
                      
                    </ul>
                </div>
            </div>
            <!-- //menu -->
        </header>
        <!-- //header -->
    </div>
    <!-- banner-slider -->
    <section class="diagonal-stripe-one inner-bg">
        <div class="container">
            <div class="ml-md-5 pl-md-5">
            </div>
        </div>
    </section>
    <!-- banner-slider -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Single page</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- single -->
    <div class="single-w3l py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row inner_sec_info pt-md-4">
                <!-- left side -->
                <div class="col-lg-12 single-left">
                    <div class="single-left1">
                        <img src="{{ asset('admin/images/blogs/' . $blog->image) }}" alt=" " class="img-fluid" />
                        <h6 class="blog-first text-dark my-4">
                            <i class="far fa-user mr-2"></i>Jenny Joy
                        </h6>
                        <ul class="blog_list my-3">
                            <li>June 02, 2018</li>
                            <li class="mx-3">
                                <a href="#">
                                    <i class="far fa-heart mr-1"></i>
                                    22</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-comments mr-1"></i>
                                    16</a>
                            </li>
                        </ul>
                        <h5 class="card-title">
                            <a href="single.html" class="text-dark">{{ $blog->title }}</a>
                        </h5>
                        <p>{!! Purifier::clean($blog->description) !!}</p>
                    </div>
                    
                    <div class="row single-left2">
                        <div class="col-md-6 single-left2-left">
                            <!-- <ul>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">At vero eos et accusamus iusto</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Sed ut perspiciatis unde omnis</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Accusantium doloremque lauda</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Vel illum qui dolorem fugiat quo</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Quis autem vel eum repreh</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Neque porro quisquam est qui</a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="col-md-6 single-left2-left">
                            <!-- <ul>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">At vero eos et accusamus iusto</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Sed ut perspiciatis unde omnis</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Accusantium doloremque lauda</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Vel illum qui dolorem fugiat quo</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Quis autem vel eum repreh</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Neque porro quisquam est qui</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <!-- <div class="comments my-5">
                        <h3 class="blog-title ">Our Recent Comments</h3>
                        <div class="comments-grids mt-4">
                            <div class="media mt-4">
                                <img class="mr-3" src="images/m.png" alt="Generic placeholder image">
                                <div class="media-body comments-grid-right">
                                    <h4>Parker Moe</h4>
                                    <ul class="my-2">
                                        <li class="font-weight-bold">6 June 2018
                                            <i>|</i>
                                        </li>
                                        <li>
                                            <a href="#" class="font-weight-bold">Reply</a>
                                        </li>
                                    </ul>
                                    <p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor.
                                        Phasellus bibendum eu.</p>
                                    <div class="media mt-5">
                                        <a class="pr-3" href="#">
                                            <img src="images/f.png" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body comments-grid-right">
                                            <h4>Parker Moe</h4>
                                            <ul class="my-2">
                                                <li class="font-weight-bold">6 June 2018
                                                    <i>|</i>
                                                </li>
                                                <li>
                                                    <a href="#" class="font-weight-bold">Reply</a>
                                                </li>
                                            </ul>
                                            <p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis
                                                tempor. Phasellus bibendum eu.</p>
                                        </div>
                                    </div>
                                    <div class="media mt-5">
                                        <a class="pr-3" href="#">
                                            <img src="images/f.png" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body comments-grid-right">
                                            <h4>Parker Moe</h4>
                                            <ul class="my-2">
                                                <li class="font-weight-bold">6 June 2018
                                                    <i>|</i>
                                                </li>
                                                <li>
                                                    <a href="#" class="font-weight-bold">Reply</a>
                                                </li>
                                            </ul>
                                            <p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis
                                                tempor. Phasellus bibendum eu.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mt-4">
                                <img class="mr-3" src="images/m.png" alt="Generic placeholder image">
                                <div class="media-body comments-grid-right">
                                    <h4>Parker Moe</h4>
                                    <ul class="my-2">
                                        <li class="font-weight-bold">6 June 2018
                                            <i>|</i>
                                        </li>
                                        <li>
                                            <a href="#" class="font-weight-bold">Reply</a>
                                        </li>
                                    </ul>
                                    <p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor.
                                        Phasellus bibendum eu.</p>
                                    <div class="media mt-5">
                                        <a class="pr-3" href="#">
                                            <img src="images/f.png" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body comments-grid-right">
                                            <h4>Parker Moe</h4>
                                            <ul class="my-2">
                                                <li class="font-weight-bold">6 June 2018
                                                    <i>|</i>
                                                </li>
                                                <li>
                                                    <a href="#" class="font-weight-bold">Reply</a>
                                                </li>
                                            </ul>
                                            <p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis
                                                tempor. Phasellus bibendum eu.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mt-4">
                                <img class="mr-3" src="images/m.png" alt="Generic placeholder image">
                                <div class="media-body comments-grid-right">
                                    <h4>Parker Moe</h4>
                                    <ul class="my-2">
                                        <li class="font-weight-bold">6 June 2018
                                            <i>|</i>
                                        </li>
                                        <li>
                                            <a href="#" class="font-weight-bold">Reply</a>
                                        </li>
                                    </ul>
                                    <p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor.
                                        Phasellus bibendum eu.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="leave-coment-form">
                        <h3 class="blog-title  mb-4">Leave a Reply</h3>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input type="text" name="Name" class="form-control" placeholder="Name" required="">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input type="email" name="Email" class="form-control" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="Message" class="form-control" placeholder="Your comment here..." required=""></textarea>
                            </div>
                            <div class="mm_single_submit">
                                <input type="submit" value="Post Comment">
                            </div>
                        </form>
                    </div> -->
                </div>
                <!-- //left side -->
                <!-- right side -->
                <div class="col-lg-4 event-right mt-lg-0 mt-sm-5 mt-4">
                    <!-- <div class="event-right1">
                        <div class="search1">
                            <form class="form-inline" action="#" method="post">
                                <input class="form-control rounded-0 mr-sm-2" type="search" placeholder="Search Here" aria-label="Search" required>
                                <input class="btn bg-dark text-white rounded-0 mt-3 w-100" type="submit" value="Search">
                            </form>
                        </div>
                        <div class="categories my-4 p-4 border">
                            <h3 class="blog-title ">Categories</h3>
                            <ul>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">At vero eos et accusamus iusto</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Sed ut perspiciatis unde omnis</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Accusantium doloremque lauda</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Vel illum qui dolorem fugiat quo</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Quis autem vel eum repreh</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="single.html">Neque porro quisquam est qui</a>
                                </li>
                            </ul>
                        </div>
                        <div class="posts p-4 border">
                            <h3 class="blog-title ">Our Events</h3>
                            <div class="posts-grids">
                                <div class="row posts-grid mt-4">
                                    <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                                        <a href="single.html">
                                            <img src="images/c1.jpg" alt=" " class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                        <h4>
                                            <a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
                                        </h4>
                                        <ul class="wthree_blog_events_list mt-2">
                                            <li class="mr-2 text-dark">
                                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i>15/05/18</li>
                                            <li>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <a href="single.html" class="text-dark ml-2">Admin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row posts-grid mt-4">
                                    <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                                        <a href="single.html">
                                            <img src="images/c2.jpg" alt=" " class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                        <h4>
                                            <a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
                                        </h4>
                                        <ul class="wthree_blog_events_list mt-2">
                                            <li class="mr-2 text-dark">
                                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i>23/05/18</li>
                                            <li>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <a href="single.html" class="text-dark ml-2">Admin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row posts-grid mt-4">
                                    <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                                        <a href="single.html">
                                            <img src="images/c3.jpg" alt=" " class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                        <h4>
                                            <a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
                                        </h4>
                                        <ul class="wthree_blog_events_list mt-2">
                                            <li class="mr-2 text-dark">
                                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i>13/06/18</li>
                                            <li>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <a href="single.html" class="text-dark ml-2">Admin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tags mt-4 p-4 border">
                            <h3 class="blog-title text-dark">Recent Tags</h3>
                            <ul class="mt-4">
                                <li>
                                    <a href="about.html" class="text-dark border">dfre</a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-dark border">Gahydwq</a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-dark border">qeers</a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-dark border">hysert</a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-dark border">hjwsa</a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-dark border">sumgr</a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-dark border">nhyewq</a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-dark border">njyra</a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-dark border">laiuwa</a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-dark border">loghw</a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-dark border">mhyu</a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-dark border">mojjs</a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-dark border">suisq</a>
                                </li>
                                <li>
                                    <a href="about.html" class="text-dark border">bhyfgh</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <aside class="side-bar my-4">
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

                        Tab panes
                        <div class="tab-content sidebar-tabing mt-3" id="nav-tabContent">
                            <div class="tab-pane active" id="home" role="tabpanel">
                                <div class="media">
                                    <a href="single.html">
                                        <img class="d-flex mr-3 img-fluid" src="images/g5.jpg" alt="Generic placeholder image" />
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h2 class="title-small">
                                                <a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
                                            </h2>
                                        </div>
                                        <div class="news-auther">
                                            <small class="text-time">
                                                <em>10 mins ago</em>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="single.html">
                                        <img class="d-flex mr-3 img-fluid" src="images/g7.jpg" alt="Generic placeholder image" />
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h2 class="title-small">
                                                <a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
                                            </h2>
                                        </div>
                                        <div class="news-auther">
                                            <small class="text-time">
                                                <em>20 mins ago</em>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="single.html">
                                        <img class="d-flex mr-3 img-fluid" src="images/g2.jpg" alt="Generic placeholder image" />
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h2 class="title-small">
                                                <a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
                                            </h2>
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
                                    <a href="single.html">
                                        <img class="d-flex mr-3 img-fluid" src="images/g2.jpg" alt="Generic placeholder image" />
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h2 class="title-small">
                                                <a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
                                            </h2>
                                        </div>
                                        <div class="news-auther">
                                            <small class="text-time">
                                                <em>10 mins ago</em>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="single.html">
                                        <img class="d-flex mr-3 img-fluid" src="images/g5.jpg" alt="Generic placeholder image" />
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h2 class="title-small">
                                                <a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
                                            </h2>
                                        </div>
                                        <div class="news-auther">
                                            <small class="text-time">
                                                <em>13 mins ago</em>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="single.html">
                                        <img class="d-flex mr-3 img-fluid" src="images/g4.jpg" alt="Generic placeholder image" />
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h2 class="title-small">
                                                <a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
                                            </h2>
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
                                    <a href="single.html">
                                        <img class="d-flex mr-3 img-fluid" src="images/g5.jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h2 class="title-small">
                                                <a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
                                            </h2>
                                        </div>
                                        <div class="news-auther">
                                            <small class="text-time">
                                                <em>40 mins ago</em>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="single.html">
                                        <img class="d-flex mr-3 img-fluid" src="images/g1.jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h2 class="title-small">
                                                <a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
                                            </h2>
                                        </div>
                                        <div class="news-auther">
                                            <small class="text-time">
                                                <em>1hr ago</em>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="single.html">
                                        <img class="d-flex mr-3 img-fluid" src="images/g2.jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <div class="news-title">
                                            <h2 class="title-small">
                                                <a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
                                            </h2>
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
                     <div class="tags mt-4 p-4 border">
                        <div class="footerv2-w3ls">
                            <h3 class="blog-title">Over 500k + Readers</h3>
                            <ul class="social-iconsv2 agileinfo pt-3">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> --> 
                </div>
                <!-- //right side -->
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
                        <a href="#">
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
    <script src="{{asset('website/js/bootstrap.js')}}"></script>
</body>

</html>