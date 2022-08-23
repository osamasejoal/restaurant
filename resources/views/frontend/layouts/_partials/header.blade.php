<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2022 06:31:42 GMT -->

<head>
    <meta charset="utf-8">
    <title>Tomato Responsive Restaurant HTML5 Template</title>
    <meta name="author" content="Surjith S M">

    <meta name="description" content="Tomato is a Responsive HTML5 Template for Restaurants and food related services.">
    <meta name="keywords" content="tomato, responsive, html5, restaurant, template, food, reservation">

    <script src="{{ asset('frontend/assets') }}/{{ asset('frontend/assets/apps/head/OkbNSnEV_PNHTKP2_EYPrFNyZ8Q.js') }}">
    </script>
    <link rel="shortcut icon" href="img/favicon.ico">

    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/plugin.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/main.css">
    <!--[if lt IE 9]>
            <script src="{{ asset('frontend/assets') }}/js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->


    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '{{ asset('frontend/assets') }}/connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1530003103982991');
        fbq('track', "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="{{ asset('frontend/assets') }}/https://www.facebook.com/tr?id=1530003103982991&amp;ev=PageView&amp;noscript=1" /></noscript>

</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <div class="preloder animated">
        <div class="scoket">
            <img src="{{ asset('frontend/assets') }}/img/preloader.svg" alt="" />
        </div>
    </div>
    <div class="body">
        <div class="main-wrapper">

            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        {{-- Navbar Logo --}}
                        <a class="navbar-brand" href="{{route('frontpage')}}">
                            <img src="{{ asset('frontend/assets') }}/img/nav-logo.png" alt="nav-logo">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">

                            {{-- Dashboard --}}
                            <li><a href="{{route('home')}}">Dashboard</a></li>

                            {{-- Menu --}}
                            <li class="dropdown">
                                <a href="menu_all.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="menu_list.html">Menu - List</a></li>
                                    <li><a href="menu_overlay.html">Menu - Overlay</a></li>
                                    <li><a href="menu_tile.html">Menu - Tile</a></li>
                                    <li><a href="menu_grid.html">Menu - Grid</a></li>
                                    <li><a href="menu_all.html">Menu All</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="reservation.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Reservation<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="reservation.html">Reservation</a></li>
                                    <li><a href="reservation-ot.html">Reservation - Opentable</a></li>
                                </ul>
                            </li>

                            {{-- Pages --}}
                            <li class="dropdown">
                                <a href="about.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="elements.html">Shortcodes</a></li>
                                    <li><a href="shop_account.html">Login / Signup</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>

                            {{-- Recipe --}}
                            <li class="dropdown">
                                <a href="recipe.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Recipe<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="recipe.html">Recipe - 2Col</a></li>
                                    <li><a href="recipe_3col.html">Recipe - 3Col</a></li>
                                    <li><a href="recipe_4col.html">Recipe - 4Col</a></li>
                                    <li><a href="recipe_masonry.html">Recipe - Masonry</a></li>
                                    <li>
                                        <a href="recipe_detail-image.html">Recipe - Single <span
                                                class="caret-right"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="recipe_detail-image.html">Recipe - Image</a></li>
                                            <li><a href="recipe_detail-slider.html">Recipe - Gallery</a></li>
                                            <li><a href="recipe_detail-video.html">Recipe - Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            {{-- Blog --}}
                            <li class="dropdown">
                                <a href="blog_right_sidebar.html" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">Blog<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog_right_sidebar.html">Blog - Right Sidebar</a></li>
                                    <li><a href="blog_left_sidebar.html">Blog - Left Sidebar</a></li>
                                    <li><a href="blog_fullwidth.html">Blog - Fullwidth</a></li>
                                    <li><a href="blog_masonry.html">Blog - Masonry</a></li>
                                    <li>
                                        <a href="blog_single_image.html">Blog - Single <span
                                                class="caret-right"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog_single_image.html">Blog - Image</a></li>
                                            <li><a href="blog_single_slider.html">Blog - Gallery</a></li>
                                            <li><a href="blog_single_video.html">Blog - Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            {{-- Shop  --}}
                            <li class="dropdown">
                                <a href="shop_fullwidth.html" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">Shop<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop_fullwidth.html">Shop - Full</a></li>
                                    <li><a href="shop_left_sidebar.html">Shop - Left Sidebar</a></li>
                                    <li><a href="shop_right_sidebar.html">Shop - Right Sidebar</a></li>
                                    <li>
                                        <a href="shop_single_full.html">Shop - Single <span
                                                class="caret-right"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop_single_full.html">Shop - Full</a></li>
                                            <li><a href="shop_single_left.html">Shop - Left Sidebar</a></li>
                                            <li><a href="shop_single_right.html">Shop - Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop_cart.html">Shop - Cart</a></li>
                                    <li><a href="shop_checkout.html">Shop - Checkout</a></li>
                                    <li><a href="shop_account.html">Shop - Account</a></li>
                                    <li><a href="shop_account_detail.html">Shop - Account Detail</a></li>
                                </ul>
                            </li>

                            {{-- Contact --}}
                            <li><a href="contact.html">Contact</a></li>

                            {{-- Cart Food --}}
                            <li class="dropdown">
                                <a class="css-pointer dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><i
                                        class="fa fa-shopping-cart fsc pull-left"></i><span
                                        class="cart-number">3</span><span class="caret"></span></a>
                                <div class="cart-content dropdown-menu">
                                    <div class="cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="cart-items">
                                        <div class="cart-item clearfix">
                                            <div class="cart-item-image">
                                                <a href="shop_single_full.html"><img
                                                        src="{{ asset('frontend/assets') }}/img/cart-img1.jpg"
                                                        alt="Breakfast with coffee"></a>
                                            </div>
                                            <div class="cart-item-desc">
                                                <a href="shop_single_full.html">Breakfast with coffee</a>
                                                <span class="cart-item-price">$19.99</span>
                                                <span class="cart-item-quantity">x 2</span>
                                                <i class="fa fa-times ci-close"></i>
                                            </div>
                                        </div>
                                        <div class="cart-item clearfix">
                                            <div class="cart-item-image">
                                                <a href="shop_single_full.html"><img
                                                        src="{{ asset('frontend/assets') }}/img/cart-img2.jpg"
                                                        alt="Chicken stew"></a>
                                            </div>
                                            <div class="cart-item-desc">
                                                <a href="shop_single_full.html">Chicken stew</a>
                                                <span class="cart-item-price">$24.99</span>
                                                <span class="cart-item-quantity">x 3</span>
                                                <i class="fa fa-times ci-close"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-action clearfix">
                                        <span class="pull-left checkout-price">$ 114.95</span>
                                        <a class="btn btn-default pull-right" href="shop_cart.html">View Cart</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>