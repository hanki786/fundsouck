
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Executive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ asset('website/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('website/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('website/css/flexslider.css') }}" type="text/css" media="screen" property="" />
<!-- js -->
<script type="text/javascript" src="{{ asset('website/js/jquery-2.1.4.min.js') }}"></script>
<!-- //js -->
<!-- font-awesome icons -->
<link href="{{ asset('website/css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('website/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('website/js/easing.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<style>
    .no-display{ display:none !important; }
	.agile-header{
		padding: 10px 10px;
		background-color: #049ddc;
		color: #7b7b7d;
	}
	.agileits-contact-info ul li span, .agileits-contact-info ul li a, .agileits-contact-info ul li, .w3_agileits_social_media ul li a{
		color: black;
	}
	nav.navbar.navbar-default{ padding: 10px 10px;}
	.banner {
		background-color: #049ddc;
		/* background: url(../images/bannerO.jpg) no-repeat 0px 0px; */
		background: #049ddc;
		background-size: cover;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		-ms-background-size: cover;
		min-height: 180px;
	}
	.CurverContainer {
		background: url('http://fundata.com/images/BGCurveContainerDark.png') repeat 0 0;
		border: 1px solid #ccc;
		background-color: #fff;
		margin-bottom: 10px;
		font-size: 13px;
		display: block;
		width: 100%;
	}
	table.HomePageList {
		border-collapse: collapse;
		width: 100%;
	}
	table.HomePageList ul {
		margin-left: 20px;
	}
	table.HomePageList li {
		padding-bottom: 10px;
		padding-right: 10px;
		list-style: none;
		list-style-image: url(../images/BulletBlue.png);
	}
	table.HomePageList a {
		text-decoration: none;
		font-size: 14px;
	}
    input, button, select, textarea {
        color: black;
    }
</style>
</head>
	
<body>
<!-- banner -->
	<div class="banner">
		<div class="container" style="padding:0;">
			@include('website.nav')
		</div>
	</div>

	<div class="container">
		<div class="w3l_banner_info">
	<section class="slider col-md-7">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ asset('website/images/Fundatat-Analytics-HP.png') }}" >
                </div>
				<div class="item">
					<img src="{{ asset('website/images/Fund-Custom-Web-Solutions-HP.png') }}" >
				</div>
				<div class="item">
					<img src="{{ asset('website/images/Mutual-Fund-Indices-HP.png') }}" >
				</div>
				<div class="item">
					<img src="{{ asset('website/images/Mutual-Fund-Marketing-HP.png') }}" >
				</div>
				<div class="item">
					<img src="{{ asset('website/images/Mutual-Fund-Risk-Ratings-HP.png') }}" >
				</div>
				<div class="item">
					<img src="{{ asset('website/images/Mutual-Fund-ETF-Stock-Data-Feeds-Slider.png') }}" >
				</div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
		<div class="DataFeedTitle">Quick Links</div>
		<div style="width:100%; padding-top:20px; padding-bottom:20px;">
			<table class="HomePageList" "="">
			<tbody><tr>
				<td>
					<ul>
						<li><a href="Analytics/MutualFunds.aspx">Mutual Funds</a></li>
						<li><a href="Analytics/Etfs.aspx" id="ContentPlaceHolder1_A1">Exchange Traded Funds (ETFs)</a></li>
						<li><a href="Analytics/Equities.aspx" id="ContentPlaceHolder1_A2">Equities</a></li>
					</ul>
				</td>
				<td>
					<ul>
						<li><a href="Analytics/Calculators.aspx" id="ContentPlaceHolder1_A3">Calculators</a></li>
						<li><a href="LinksResources/IndustryLinks.aspx" id="ContentPlaceHolder1_A4">Industry Links</a></li>
						<li><a href="ProductsServices/ListingServices.aspx" id="ContentPlaceHolder1_A5">Listing Services</a></li>
					</ul>
				</td>
				<td>
					<ul>
						<li><a href="ProductsServices/DataFeeds.aspx" id="ContentPlaceHolder1_A6">Data Feeds</a></li>
						<li><a href="ProductsServices/FundProfiler.aspx" id="ContentPlaceHolder1_A7">FundProfiler</a></li>
						<li><a href="ProductsServices/FundGrade.aspx" id="ContentPlaceHolder1_A8">FundGrade Ratings</a></li>
					</ul>
				</td>
			</tr>
			</tbody></table>
		</div>
	</section>

	<section class="col-md-5">
			<img style=" width: 100%;" src="{{ asset('website/images/FundGradeAwards-Ad-2017-PostAwards.png') }}" >
			</br>
			<!-- Modal -->

			<div id="portfolio" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Our Portfolio</h4>
						</div>
						<div class="modal-body">
							<h2> Update Soon</h2>
						</div>
					</div>

				</div>
			</div>

			<div id="about" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">About Company</h4>
						</div>
						<div class="modal-body">
							<h2> Update Soon</h2>
						</div>
					</div>

				</div>
			</div>

			<div id="contact" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Contact us</h4>
						</div>
						<div class="modal-body">
							<h2> Update Soon</h2>
						</div>
					</div>

				</div>
			</div>


			<div id="cc" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Currency Converter</h4>
						</div>
						<div class="modal-body">
							<!--Currency Converter widget by FreeCurrencyRates.com -->

							<div id='gcw_mainFxBqTkJjs' class='gcw_mainFxBqTkJjs'></div>
							<script>function reloadFxBqTkJjs(){ var sc = document.getElementById('scFxBqTkJjs');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scFxBqTkJjs';sc.src = 'https://freecurrencyrates.com/en/widget-table?iso=USDEURGBPRUB&df=2&p=FxBqTkJjs&v=fi&source=fcr&width=600&width_title=0&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=Currency%20Converter&tzo=-300';var div = document.getElementById('gcw_mainFxBqTkJjs');div.parentNode.insertBefore(sc, div);} reloadFxBqTkJjs(); </script>
							<!-- put custom styles here: .gcw_mainFxBqTkJjs{}, .gcw_headerFxBqTkJjs{}, .gcw_ratesFxBqTkJjs{}, .gcw_sourceFxBqTkJjs{} -->
							<!--End of Currency Converter widget by FreeCurrencyRates.com -->
						</div>
					</div>

				</div>
			</div>

			<div id="calc" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Calculator</h4>
						</div>
						<div class="modal-body">
							<iframe width="219" height="302" src="http://www.calculator-1.com/outdoor/?f=666666&r=666666" scrolling="no" frameborder="0"></iframe>
						</div>
					</div>

				</div>
			</div>


			<div id="offshore" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Windfarm Offshore</h4>
						</div>
						<div class="modal-body">

							<iframe width="819" height="402" src="http://services.4coffshore.com/widgets/windfarms.html?org=OWT&amp;special" frameborder="0"></iframe>
						</div>
					</div>

				</div>
			</div>

			<div id="map" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">World Map</h4>
						</div>
						<div class="modal-body">
							<div style="width: 100%"><iframe width="100%" height="400" src="https://www.mapsdirections.info/en/custom-google-maps/map.php?width=100%&height=400&hl=ru&q=Malet%20St%2C%20London%20WC1E%207HU%2C%20United%20Kingdom+(Your%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=A&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/custom-google-maps/">www.mapsdirections.info</a> by <a href="https://www.mapsdirections.info/en/">Measure area on map</a></iframe>
							</div>
						</div>

					</div>
				</div>
			</div>
	</section>

	<!-- //flexSlider -->
</div>
	</div>
<!-- //banner -->

<!-- welcome -->
<div class="welcome">
    <div class="container style="    padding-bottom: 25px;">
        <h3 style="    background-color: #a0cae8;padding: 10px 10px;" class="">Fund Top Performers</h3>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">TOP</a></li>
            <li><a data-toggle="tab" href="#menu1">BOTTOM</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active" style="    padding: 10px 10px;">
                <h3>NO TOP PERFORMERS</h3>
                <table class="table" style="display:none">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Default</td>
                        <td>Defaultson</td>
                        <td>def@somemail.com</td>
                    </tr>
                    <tr class="success">
                        <td>Success</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr class="danger">
                        <td>Danger</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                    </tr>
                    <tr class="info">
                        <td>Info</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                    </tr>
                    <tr class="warning">
                        <td>Warning</td>
                        <td>Refs</td>
                        <td>bo@example.com</td>
                    </tr>
                    <tr class="active">
                        <td>Active</td>
                        <td>Activeson</td>
                        <td>act@example.com</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>BOTTOM PERFORMERS</h3>
                <table class="table" style="display:none">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Default</td>
                        <td>Defaultson</td>
                        <td>def@somemail.com</td>
                    </tr>
                    <tr class="success">
                        <td>Success</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr class="danger">
                        <td>Danger</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                    </tr>
                    <tr class="info">
                        <td>Info</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                    </tr>
                    <tr class="warning">
                        <td>Warning</td>
                        <td>Refs</td>
                        <td>bo@example.com</td>
                    </tr>
                    <tr class="active">
                        <td>Active</td>
                        <td>Activeson</td>
                        <td>act@example.com</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="welcome">
    <div class="container">
        <h3 style="    background-color: #a0cae8;padding: 10px 10px;" class="">News Feeds</h3>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">LATEST NEWS</a></li>
        </ul>
		<?php 
			$news = DB::table('latest_news')->orderBy('id','desc')->limit(5)->get();
        ?>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active"  style="    padding: 10px 10px;">
				@foreach($news as $n)
                <h3>{{ $n->title }}</h3>
				<p>{{ $n->body }}</p><br>
				@endforeach
            </div>
        </div>
    </div>
</div>
<!-- //welcome -->
<script>
    $(document).ready(function(){
       $("#tradingview_b9e5c").contents().find(".js-widget-chart-footer").hide(); 
    });
</script>
<!--client-->
	<div class="client no-display">
		<div class="container">
			<h3 class="w3ls_head">Client Says</h3>
			<p class="w3l">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
				corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
			<!--screen-gallery-->
						<div class="sreen-gallery-cursual">
							 <!-- required-js-files-->
							<link href="{{ asset('website/css/owl.carousel.css') }}" rel="stylesheet">
							    <script src="{{ asset('website/js/owl.carousel.js') }}"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
							        navigationText :  false,
							        pagination : true,
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
															<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
															<a href="#">Michael </a>, Customer
														</div>
															<div class="clearfix"></div>     
												</div>
											   </div>
											<div class="col-md-6 customer-grid">
											   <div class="de_testi">
													<div class="quotes"><img src="website/images/team2.jpg" alt=""></div>
														<div class="de_testi_by">
															<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
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
															<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
															<a href="#">Michael </a>, Customer
														</div>
															<div class="clearfix"></div>     
												</div>
											   </div>
											<div class="col-md-6 customer-grid">
											   <div class="de_testi">
													<div class="quotes"><img src="website/images/team4.jpg" alt=""></div>
														<div class="de_testi_by">
															<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
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
															<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
															<a href="#">Michael </a>, Customer
														</div>
															<div class="clearfix"></div>     
												</div>
											   </div>
											<div class="col-md-6 customer-grid">
											   <div class="de_testi">
													<div class="quotes"><img src="website/images/team1.jpg" alt=""></div>
														<div class="de_testi_by">
															<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
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
			<p class="w3agile">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
				corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
				<div class="what-grids">
					<div class="col-md-6 what-grid">
						<img src="website/images/2.jpg" class="img-responsive" alt=""/>
						<div class="what-agile-info">
							<h4>Consectetur</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam consectetur adipisicing elit. Ab aut dignissimos ea est</p>
						</div>
					</div>
					<div class="col-md-6 what-grid1">
						<div class="what-top">
							<div class="what-left">
								<i class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></i>
							</div>
							<div class="what-right">
								<h4>Adipisicing</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam consectetur adipisicing elit. Ab aut dignissimos ea est</p>
							</div>
								<div class="clearfix"></div>
						</div>
						<div class="what-top1">
							<div class="what-left">
								<i class="glyphicon glyphicon-flash" aria-hidden="true"></i>
							</div>
							<div class="what-right">
								<h4>Dignissimos</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam consectetur adipisicing elit. Ab aut dignissimos ea est</p>
							</div>
								<div class="clearfix"></div>
						</div>
						<div class="what-top1">
							<div class="what-left">
								<i class="glyphicon glyphicon-fire" aria-hidden="true"></i>
							</div>
							<div class="what-right">
								<h4>Consectetur</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam consectetur adipisicing elit. Ab aut dignissimos ea est</p>
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
						<input type="submit" class="submit"  value="">
					</form>
					<div class="footer-agile">
						<div class="col-md-6 footer-w3-1">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							<p> 7th Street 2nd Line,  </p>
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


<div id="searchKey" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Search...</h4>
            </div>
            <div class="modal-body" id="searchResult">
            </div>
        </div>

    </div>
</div>

<!-- //footer -->
<!-- for bootstrap working -->
	<script src="{{ asset('website/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });

			$('#fundKey').keypress(function(e){
				if(e.which == 13) {
					var domna = $('#fundKey').val();
					if(domna.length > 0){

					var request = $.ajax({
						url: "{{ route('fund_overview_search')  }}?fund_key=" + domna,
						type: "GET",
						dataType: "json"
					});

					request.done(function(msg) {
						$('#searchKey').modal('show');
						$("#searchResult").html( msg );
					});

					request.fail(function(jqXHR, textStatus) {
						alert( "Request failed: " + textStatus );
					});
					}else{
						$('#searchKey').modal('show');
						$("#searchResult").html( "Nothing found..");
					}
				}
			});
			$('#search').click(function(){
                var domna = $('#fundKey').val();
				if(domna.length > 0){

                var request = $.ajax({
                    url: "{{ route('fund_overview_search')  }}?fund_key=" + domna,
                    type: "GET",
                    dataType: "json"
                });

                request.done(function(msg) {
                    $('#searchKey').modal('show');
                    $("#searchResult").html( msg );
                });

                request.fail(function(jqXHR, textStatus) {
                    alert( "Request failed: " + textStatus );
                });
				}else{
                    $('#searchKey').modal('show');
                    $("#searchResult").html( "Nothing found..");
				}
            });
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>