<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>FundSouk | Home</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Executive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('website/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('website/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ asset('website/css/flexslider.css') }}" type="text/css" media="screen" property=""/>
    <!-- js -->
    <script type="text/javascript" src="{{ asset('website/js/jquery-2.1.4.min.js') }}"></script>
    <!-- //js -->
    <!-- font-awesome icons -->
    <link href="{{ asset('website/css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!-- //font-awesome icons -->
    <link href="//fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('website/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <style>
        .no-display {
            display: none !important;
        }
        @media (max-width: 1366px){
            .banner {
                min-height: 200px;
            }
        }
    </style>
</head>

<body>
<!-- banner -->
<div class="banner">
    <iframe scrolling="no" allowtransparency="true" frameborder="0" width="100%" height="66"
            src="https://s.tradingview.com/tickerswidgetembed/#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22INDEX%3ASPX%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22INDEX%3AIUXX%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22NYMEX%3ACL1!%22%2C%22title%22%3A%22Crude%20Oil%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AXAUUSD%22%2C%22title%22%3A%22Gold%22%7D%5D%2C%22locale%22%3A%22en%22%2C%22linkPageTemplate%22%3A%22http%3A%2F%2Fwww.bryket.com%3Ftvwidgetsymbol%3D%7B%7BproName%7D%7D%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A104%2C%22utm_source%22%3A%22www.tradingview.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22tickers%22%7D"
            style="border-radius:0;padding-bottom: 0;"></iframe>
    <div class="container">
        @include('website.nav')
    </div>
</div>
<!-- //banner -->
<style>

    /* Profile container */
    .profile {
        margin: 20px 0;
    }

    /* Profile sidebar */
    .profile-sidebar {
        padding: 20px 0 10px 0;
        background: #fff;
    }

    .profile-userpic img {
        float: none;
        margin: 0 auto;
        width: 50%;
        height: 50%;
        -webkit-border-radius: 50% !important;
        -moz-border-radius: 50% !important;
        border-radius: 50% !important;
    }

    .profile-usertitle {
        text-align: center;
        margin-top: 20px;
    }

    .profile-usertitle-name {
        color: #5a7391;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 7px;
    }

    .profile-usertitle-job {
        text-transform: uppercase;
        color: #5b9bd1;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .profile-userbuttons {
        text-align: center;
        margin-top: 10px;
    }

    .profile-userbuttons .btn {
        text-transform: uppercase;
        font-size: 11px;
        font-weight: 600;
        padding: 6px 15px;
        margin-right: 5px;
    }

    .profile-userbuttons .btn:last-child {
        margin-right: 0px;
    }

    .profile-usermenu {
        margin-top: 30px;
    }

    .profile-usermenu ul li {
        border-bottom: 1px solid #f0f4f7;
    }

    .profile-usermenu ul li:last-child {
        border-bottom: none;
    }

    .profile-usermenu ul li a {
        color: #93a3b5;
        font-size: 14px;
        font-weight: 400;
    }

    .profile-usermenu ul li a i {
        margin-right: 8px;
        font-size: 14px;
    }

    .profile-usermenu ul li a:hover {
        background-color: #fafcfd;
        color: #5b9bd1;
    }

    .profile-usermenu ul li.active {
        border-bottom: none;
    }

    .profile-usermenu ul li.active a {
        color: #5b9bd1;
        background-color: #f6f9fb;
        border-left: 2px solid #5b9bd1;
        margin-left: -2px;
    }

    /* Profile Content */
    .profile-content {
        padding: 20px;
        background: #fff;
        min-height: 660px;
    }
</style>
<!-- welcome -->
<div class="welcome">
    <div class="container">
        <div class="welcome-top">

            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC
                        <div class="profile-userpic">
                            <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                        </div>-->
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                Al Rajhi Capital CJSC - Profile
                            </div>
                            <div class="profile-usertitle-job">
                                <small>Code: SP101101FS</small><br>
                                <small>Common Name: Al Rajhi Capital</small>

                            </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-default btn-sm" style="width:100%">SAR</button></div>
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-default btn-sm" style="width:100%">Saudia Arabia</button>
                        </div>
                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li class="active">
                                    <a href="profile">
                                        Overview </a>
                                </li>
                                <li>
                                    <a href="register_auth0">
                                        Shareholders <i class="fa fa-lock"></i></a>
                                </li>
                                <li>
                                    <a href="register_auth0">
                                        Contact Details  <i class="fa fa-lock"></i></a>
                                </li>
                                <li>
                                    <a href="register_auth0">
                                        Addresses  <i class="fa fa-lock"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="">

                        <div class="container-page">
                            <div class="col-md-12">
                                <div class="form-group col-lg-12">
                                    <label>Role</label>
                                    <input type="" name="" class="form-control" disabled id="" value="Fund Management Company">
                                </div>


                                <div class="form-group col-lg-6">
                                    <label>Chairman</label><br>
                                    <h3>Mr. Abdullah Bin Sulaiman Al Rajhi​​</h3>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>CEO</label>
                                    <input type="text" name="" class="form-control" id="" disabled value="Mr. Gaurav Shah">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Share Capital</label>
                                    <input type="" name="" class="form-control" id="" disabled value="500000000">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Regulator Authorization Number</label>
                                    <input type="" name="" class="form-control" id="" disabled value="07068-37">
                                </div>
                            </div></hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="pull-left"></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //welcome -->
<script>
    $(document).ready(function () {
        $("#tradingview_b9e5c").contents().find(".js-widget-chart-footer").hide();
    });
</script>
<!--client-->
<div class="client no-display">
    <div class="container">
        <h3 class="w3ls_head">Client Says</h3>
        <p class="w3l">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
            deleniti atque
            corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
        <!--screen-gallery-->
        <div class="sreen-gallery-cursual">
            <!-- required-js-files-->
            <link href="{{ asset('website/css/owl.carousel.css') }}" rel="stylesheet">
            <script src="{{ asset('website/js/owl.carousel.js') }}"></script>
            <script>
                $(document).ready(function () {
                    $("#owl-demo").owlCarousel({
                        items: 1,
                        lazyLoad: true,
                        autoPlay: true,
                        navigation: true,
                        navigationText: false,
                        pagination: true,
                    });
                });
            </script>
            <!--//required-js-files-->
            <div id="owl-demo" class="owl-carousel">
                <div class="item-owl">
                    <div class="customer-say">
                        <div class="col-md-6 customer-grid">
                            <div class="de_testi">
                                <div class="quotes"><img src="website/images/team1.jpg" alt=""></div>
                                <div class="de_testi_by">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <a href="#">Michael </a>, Customer
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 customer-grid">
                            <div class="de_testi">
                                <div class="quotes"><img src="website/images/team2.jpg" alt=""></div>
                                <div class="de_testi_by">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <a href="#">John </a>, Customer
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-owl">
                    <div class="customer-say">
                        <div class="col-md-6 customer-grid">
                            <div class="de_testi">
                                <div class="quotes"><img src="website/images/team3.jpg" alt=""></div>
                                <div class="de_testi_by">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <a href="#">Michael </a>, Customer
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 customer-grid">
                            <div class="de_testi">
                                <div class="quotes"><img src="website/images/team4.jpg" alt=""></div>
                                <div class="de_testi_by">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <a href="#">John </a>, Customer
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-owl">
                    <div class="customer-say">
                        <div class="col-md-6 customer-grid">
                            <div class="de_testi">
                                <div class="quotes"><img src="website/images/team4.jpg" alt=""></div>
                                <div class="de_testi_by">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <a href="#">Michael </a>, Customer
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 customer-grid">
                            <div class="de_testi">
                                <div class="quotes"><img src="website/images/team1.jpg" alt=""></div>
                                <div class="de_testi_by">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <a href="#">John </a>, Customer
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//screen-gallery-->
    </div>
</div>
<!--//client-->
<!-- what -->
<div class="what-w3ls no-display">
    <div class="container">
        <h3 class="w3ls_head">Work Process</h3>
        <p class="w3agile">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
            voluptatum deleniti atque
            corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
        <div class="what-grids">
            <div class="col-md-6 what-grid">
                <img src="website/images/2.jpg" class="img-responsive" alt=""/>
                <div class="what-agile-info">
                    <h4>Consectetur</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit
                        incidunt, laboriosam consectetur adipisicing elit. Ab aut dignissimos ea est</p>
                </div>
            </div>
            <div class="col-md-6 what-grid1">
                <div class="what-top">
                    <div class="what-left">
                        <i class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Adipisicing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit
                            incidunt, laboriosam consectetur adipisicing elit. Ab aut dignissimos ea est</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="what-top1">
                    <div class="what-left">
                        <i class="glyphicon glyphicon-flash" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Dignissimos</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit
                            incidunt, laboriosam consectetur adipisicing elit. Ab aut dignissimos ea est</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="what-top1">
                    <div class="what-left">
                        <i class="glyphicon glyphicon-fire" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Consectetur</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit
                            incidunt, laboriosam consectetur adipisicing elit. Ab aut dignissimos ea est</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //what -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-w3layouts">
            <div class="col-md-3 footer-agileits">
                <h3>Specialized</h3>
                <ul>
                    <li>the printing</li>
                    <li>typesetting industry.</li>
                    <li>Lorem Ipsum</li>
                    <li>unknown printer</li>
                </ul>
            </div>
            <div class="col-md-3 footer-wthree">
                <h3>Partners</h3>
                <ul>
                    <li>unknown printer</li>
                    <li>Lorem Ipsum</li>
                    <li>the printing</li>
                    <li>typesetting industry.</li>
                </ul>
            </div>
            <div class="col-md-3 footer-w3-agileits">
                <h3>Consultation</h3>
                <ul>
                    <li>typesetting industry.</li>
                    <li>the printing</li>
                    <li>unknown printer</li>
                    <li>Lorem Ipsum</li>
                </ul>
            </div>
            <div class="col-md-3 footer-agileits-w3layouts">
                <h3>Our Links</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="footer-w3-agile">
            <div class="col-md-6 w3l-footer-top">
                <h3>Newsletter</h3>
                <form action="#" method="post" class="newsletter">
                    <input class="email" type="email" placeholder="Your email..." required="">
                    <input type="submit" class="submit" value="">
                </form>
                <div class="footer-agile">
                    <div class="col-md-6 footer-w3-1">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                        <p> 7th Street 2nd Line, </p>
                        <p> Melbourne City, Australia.</p>
                    </div>
                    <div class="col-md-6 footer-w3l-1">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                        <p> +080 264345 995.</p>
                        <p> +080 264345 996.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 w3ls-social-icons">
                <h3>Follow Us</h3>
                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="copy-right-agile">
            <p>© 2017 FundSouk. All rights reserved | Design by Anova Technologies</p>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
<script src="{{ asset('website/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>