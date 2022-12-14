@extends('frontend.layouts.master')

@section('main-content')
    <section class="home">
        <div class="tittle-block">
            <div class="logo">
                <a href="index.html">
                    <img src="{{ asset('frontend/assets') }}/img/logo.png" alt="logo">
                </a>
            </div>
            <h1>DELICIOUS Food</h1>
            <h2>Tomato is a delitious restaurant website template</h2>
        </div>
        <div class="scroll-down hidden-xs">
            <a href="#about">
                <img src="{{ asset('frontend/assets') }}/img/arrow-down.png" alt="down-arrow">
            </a>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1>the restaurant<small>A little about us and a breif history of how we
                                started.</small></h1>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-4">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 hidden-sm about-photo">
                                <div class="image-thumb">
                                    <img src="{{ asset('frontend/assets') }}/img/thumb1.png"
                                        data-mfp-src="{{ asset('frontend/assets') }}/img/fullImages/pic1.jpg"
                                        class="img-responsive" alt="logo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 about-photo hidden-xs">
                                <img src="{{ asset('frontend/assets') }}/img/thumb2.png"
                                    data-mfp-src="{{ asset('frontend/assets') }}/img/fullImages/pic2.jpg"
                                    class="img-responsive" alt="logo">
                            </div>
                            <div class="col-sm-6 about-photo hidden-xs">
                                <img src="{{ asset('frontend/assets') }}/img/thumb3.png"
                                    data-mfp-src="{{ asset('frontend/assets') }}/img/fullImages/pic3.jpg"
                                    class="img-responsive" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        Cras ut viverra eros. Phasellus sollicitudin sapien id luctus tempor. Sed hend rerit
                        inter dum sagittis. Donec nunc lacus, dapibus nec interdum eget, ultrices eget justo.
                        Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam
                        dapibus sagittis. In massa est, dignissim in libero ac, fringilla ornare mi. Etiam
                        interdum ligula purus.
                    </p>
                    <br>
                    <p>
                        Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque.
                        Cras eget enim in diam dapibus sagittis. In massa est, dignissim in libero ac, fringilla
                        ornare.
                    </p>
                    <img src="{{ asset('frontend/assets') }}/img/signature.png" alt="signature">
                </div>
            </div>
        </div>
    </section>

    <section class="special">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1 class="white">today's specials<small>A little about us and a breif history of how
                                we started.</small></h1>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-offset-1 col-md-10">
                    <div class="flexslider special-slider">
                        <ul class="slides">
                            <li>
                                <div class="slider-img">
                                    <img src="{{ asset('frontend/assets') }}/img/thumb4.png" alt="" />
                                </div>
                                <div class="slider-content">
                                    <div class="page-header">
                                        <h1>1 Pancake with Caramel<small>If you are a fan of caramel cake, then
                                                you'll love our Pancake with caramel icecream. It's not thick,
                                                but very tasty.</small></h1>
                                    </div>
                                    <p>Ultrices In massa est, dignissim in libero ac, fringilla ornare
                                        mi.Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed,
                                        finibus nec neque. Cras eget enim in diam dapibus sagittis. accumsan,
                                        habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                        egestas.</p>
                                    <a class="btn btn-default" href="index.html" role="button">Order now</a>
                                    <a class="btn btn-secondary" href="index.html" role="button">Add to
                                        cart</a>
                                </div>
                            </li>
                            <li>
                                <div class="slider-img">
                                    <img src="{{ asset('frontend/assets') }}/img/thumb4.png" alt="" />
                                </div>
                                <div class="slider-content">
                                    <div class="page-header">
                                        <h1>2 Pancake with Caramel<small>If you are a fan of caramel cake, then
                                                you'll love our Pancake with caramel icecream. It's not thick,
                                                but very tasty.</small></h1>
                                    </div>
                                    <p>Ultrices In massa est, dignissim in libero ac, fringilla ornare
                                        mi.Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed,
                                        finibus nec neque. Cras eget enim in diam dapibus sagittis. accumsan,
                                        habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                        egestas.</p>
                                    <a class="btn btn-default" href="index.html" role="button">Order now</a>
                                    <a class="btn btn-secondary" href="index.html" role="button">Add to
                                        cart</a>
                                </div>
                            </li>
                            <li>
                                <div class="slider-img">
                                    <img src="{{ asset('frontend/assets') }}/img/thumb4.png" alt="" />
                                </div>
                                <div class="slider-content">
                                    <div class="page-header">
                                        <h1>3 Pancake with Caramel<small>If you are a fan of caramel cake, then
                                                you'll love our Pancake with caramel icecream. It's not thick,
                                                but very tasty.</small></h1>
                                    </div>
                                    <p>Ultrices In massa est, dignissim in libero ac, fringilla ornare
                                        mi.Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed,
                                        finibus nec neque. Cras eget enim in diam dapibus sagittis. accumsan,
                                        habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                        egestas.</p>
                                    <a class="btn btn-default" href="index.html" role="button">Order now</a>
                                    <a class="btn btn-secondary" href="index.html" role="button">Add to
                                        cart</a>
                                </div>
                            </li>
                        </ul>
                        <div class="direction-nav hidden-sm">
                            <div class="next">
                                <a><img src="{{ asset('frontend/assets') }}/img/right-arrow.png" alt="" /></a>
                            </div>
                            <div class="prev">
                                <a><img src="{{ asset('frontend/assets') }}/img/left-arrow.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reservation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1>Reservations<small>Book a table online. Leads will reach in your email.</small></h1>
                    </div>
                </div>
            </div>
            <div class="reservation-form wow fadeInUp">
                <form action="https://demo.web3canvas.com/themeforest/tomato/php/reservation.php" id="reservationform"
                    method="POST">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="datepicker">Date</label>
                                <input type="text" name="date" class="form-control" id="datepicker"
                                    placeholder="Pick a date" title="Please choose a date" required>
                                <i class="fa fa-calendar-o"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Full Name" title="Your Full Name please" required>
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="timepicker">Time</label>
                                <input type="text" class="form-control" id="timepicker" name="time"
                                    placeholder="Pick a time" title="Choose Preferred Time" required>
                                <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Your Email ID" title="Please enter your email id" required>
                                <i class="fa fa-envelope-o"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="guests">Guests</label>
                                <input class="form-control" type="number" id="guests" name="guests"
                                    placeholder="How many of you?" title="Please enter number of guests" required>
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Enter your Phone Number" title="Please enter your phone number" required>
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="reservation-btn">
                                <button type="submit" class="btn btn-default btn-lg" id="js-reservation-btn">Make
                                    Reservation</button>
                                <div id="js-reservation-result" data-success-msg="Form submitted successfully."
                                    data-error-msg="Oops. Something went wrong."></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="reservation-footer">
                <p>You can also call: <strong>+1 224 6787 004</strong> to make a reservation.</p>
                <span></span>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1 class="white">Our features<small>Little things make us best in town</small></h1>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-4 col-sm-6">
                    <div class="features-tile">
                        <div class="features-img">
                            <img src="{{ asset('frontend/assets') }}/img/thumb5.png" alt="" />
                        </div>
                        <div class="features-content">
                            <div class="page-header">
                                <h1>Serving with love</h1>
                            </div>
                            <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu,
                                maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio,
                                vel ullamcorper turpis varius eu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="features-tile">
                        <div class="features-img">
                            <img src="{{ asset('frontend/assets') }}/img/thumb6.png" alt="" />
                        </div>
                        <div class="features-content">
                            <div class="page-header">
                                <h1>Serving with love</h1>
                            </div>
                            <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu,
                                maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio,
                                vel ullamcorper turpis varius eu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="features-tile">
                        <div class="features-img">
                            <img src="{{ asset('frontend/assets') }}/img/thumb7.png" alt="" />
                        </div>
                        <div class="features-content">
                            <div class="page-header">
                                <h1>Serving with love</h1>
                            </div>
                            <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu,
                                maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio,
                                vel ullamcorper turpis varius eu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 visible-sm">
                    <div class="features-tile">
                        <div class="features-img">
                            <img src="{{ asset('frontend/assets') }}/img/thumb5.png" alt="" />
                        </div>
                        <div class="features-content">
                            <div class="page-header">
                                <h1>Serving with love</h1>
                            </div>
                            <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu,
                                maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio,
                                vel ullamcorper turpis varius eu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1>Our menu<small>These fine folks trusted the award winning restaurant.</small></h1>
                    </div>
                </div>
            </div>
            <div class="food-menu wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-tags">
                            <span data-filter="*" class="tagsort-active">All</span>
                            <span data-filter=".starter">starters</span>
                            <span data-filter=".breakfast">breakfast</span>
                            <span data-filter=".lunch">lunch</span>
                            <span data-filter=".dinner">dinner</span>
                            <span data-filter=".desserts">desserts</span>
                        </div>
                    </div>
                </div>
                <div class="row menu-items">
                    <div class="menu-item col-sm-6 col-xs-12 starter dinner desserts">
                        <div class="clearfix menu-wrapper">
                            <h4>English asparagus</h4>
                            <span class="price">$14.95</span>
                            <div class="dotted-bg"></div>
                        </div>
                        <p>pellentesque enim. Aliquam tempor</p>
                    </div>
                    <div class="menu-item col-sm-6 col-xs-12 starter">
                        <div class="clearfix menu-wrapper">
                            <h4>English asparagus</h4>
                            <span class="price">$14.95</span>
                            <div class="dotted-bg"></div>
                        </div>
                        <p>pellentesque enim. Aliquam tempor</p>
                    </div>
                    <div class="menu-item col-sm-6 col-xs-12 breakfast desserts starter">
                        <div class="clearfix menu-wrapper">
                            <h4>English asparagus</h4>
                            <span class="price">$14.95</span>
                            <div class="dotted-bg"></div>
                        </div>
                        <p>pellentesque enim. Aliquam tempor</p>
                    </div>
                    <div class="menu-item col-sm-6 col-xs-12 breakfast">
                        <div class="clearfix menu-wrapper">
                            <h4>English asparagus</h4>
                            <span class="price">$14.95</span>
                            <div class="dotted-bg"></div>
                        </div>
                        <p>pellentesque enim. Aliquam tempor</p>
                    </div>
                    <div class="menu-item col-sm-6 col-xs-12 lunch starter breakfast">
                        <div class="clearfix menu-wrapper">
                            <h4>English asparagus</h4>
                            <span class="price">$14.95</span>
                            <div class="dotted-bg"></div>
                        </div>
                        <p>pellentesque enim. Aliquam tempor</p>
                    </div>
                    <div class="menu-item col-sm-6 col-xs-12 lunch">
                        <div class="clearfix menu-wrapper">
                            <h4>English asparagus</h4>
                            <span class="price">$14.95</span>
                            <div class="dotted-bg"></div>
                        </div>
                        <p>pellentesque enim. Aliquam tempor</p>
                    </div>
                    <div class="menu-item col-sm-6 col-xs-12 dinner breakfast lunch">
                        <div class="clearfix menu-wrapper">
                            <h4>English asparagus</h4>
                            <span class="price">$14.95</span>
                            <div class="dotted-bg"></div>
                        </div>
                        <p>pellentesque enim. Aliquam tempor</p>
                    </div>
                    <div class="menu-item col-sm-6 col-xs-12 dinner">
                        <div class="clearfix menu-wrapper">
                            <h4>English asparagus</h4>
                            <span class="price">$14.95</span>
                            <div class="dotted-bg"></div>
                        </div>
                        <p>pellentesque enim. Aliquam tempor</p>
                    </div>
                    <div class="menu-item col-sm-6 col-xs-12 desserts lunch dinner">
                        <div class="clearfix menu-wrapper">
                            <h4>English asparagus</h4>
                            <span class="price">$14.95</span>
                            <div class="dotted-bg"></div>
                        </div>
                        <p>pellentesque enim. Aliquam tempor</p>
                    </div>
                    <div class="menu-item col-sm-6 col-xs-12 desserts">
                        <div class="clearfix menu-wrapper">
                            <h4>English asparagus</h4>
                            <span class="price">$14.95</span>
                            <div class="dotted-bg"></div>
                        </div>
                        <p>pellentesque enim. Aliquam tempor</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-btn">
                            <a class="btn btn-default btn-lg" href="menu_all.html" role="button">Explore our
                                menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trusted">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1>Trusted By<small>These fine folks trusted tha award winning restaurant</small></h1>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-12">
                    <div class="trusted-sponsors">
                        <img src="{{ asset('frontend/assets') }}/img/sponsor/foodsquare.png" alt="sponsors">
                        <img src="{{ asset('frontend/assets') }}/img/sponsor/opentable.png" alt="sponsors">
                        <img src="{{ asset('frontend/assets') }}/img/sponsor/tripadvisor.png" alt="sponsors">
                        <img src="{{ asset('frontend/assets') }}/img/sponsor/zomato.png" alt="sponsors">
                        <img src="{{ asset('frontend/assets') }}/img/sponsor/foodsquare.png" alt="sponsors">
                        <img src="{{ asset('frontend/assets') }}/img/sponsor/opentable.png" alt="sponsors">
                        <img src="{{ asset('frontend/assets') }}/img/sponsor/tripadvisor.png" alt="sponsors">
                        <img src="{{ asset('frontend/assets') }}/img/sponsor/zomato.png" alt="sponsors">
                    </div>
                </div>
            </div>
        </div>

        <div class="trusted-quote">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="trusted-slider">
                            <ul class="slides">
                                <li>
                                    <img src="{{ asset('frontend/assets') }}/img/quote.png" alt="quote">
                                    <p class="quote-body">The world???s a big, big stage for this notorious deli
                                        smack in the middle of the theatre district, infamously famous for its
                                        over-the-top corned beef and pastrami sandwiches, chopped liver,
                                        blintzes, celebrities, salami, smoked fish and New York???s finest
                                        cheesecake.</p>
                                    <p class="quote-author">Anthony Reed, <span>New York</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/assets') }}/img/quote.png" alt="quote">
                                    <p class="quote-body">You might not find dragon meat on the menu, but
                                        you???ll find pretty much anything else that walks, swims or flies, cooked
                                        up in more ways than there are people in the Guangdong province. This
                                        Midtown mainstay has a 20-year history of delivering mouth-watering and
                                        Cantonese style chow.</p>
                                    <p class="quote-author">Gemma Arterton, <span>Bay Area</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/assets') }}/img/quote.png" alt="quote">
                                    <p class="quote-body">This NYC historical landmark in the heart of the
                                        Theatre District has been serving up suds and down home pub food since
                                        1892, surviving prohibition by renting the front of its then Rockefeller
                                        Center fa??ade to Greek florists, while the Hurley brothers ran a
                                        speak-easy in back.</p>
                                    <p class="quote-author">Zachary Burton, <span>Sanfransisco</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="instagram">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1>Instagram<small>We love posting photos of our coustomers having a good time</small>
                        </h1>
                    </div>
                </div>
            </div>
        </div>


        <div id="instafeed" data-username="instaphotosdemo"
            data-access-token="3401121086.ca9c5d8.49a154f2d6034846ae4e37962de804e8"
            data-client-id="a42e80c86661419b94a5ac01dc022221">
        </div>
    </section>
@endsection
