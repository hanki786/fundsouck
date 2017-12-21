
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
</style>
</head>
	
<body>
<!-- banner -->
	<div class="banner">
	    <iframe scrolling="no" allowtransparency="true" frameborder="0" width="100%" height="66" src="https://s.tradingview.com/tickerswidgetembed/#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22INDEX%3ASPX%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22INDEX%3AIUXX%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22NYMEX%3ACL1!%22%2C%22title%22%3A%22Crude%20Oil%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AXAUUSD%22%2C%22title%22%3A%22Gold%22%7D%5D%2C%22locale%22%3A%22en%22%2C%22linkPageTemplate%22%3A%22http%3A%2F%2Fwww.bryket.com%3Ftvwidgetsymbol%3D%7B%7BproName%7D%7D%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A104%2C%22utm_source%22%3A%22www.tradingview.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22tickers%22%7D" style="border-radius:0;padding-bottom: 0;"></iframe>
		<div class="container">
			@include('website.nav')
			<div class="w3l_banner_info">
				<section class="slider col-md-6">
				    <h3 style="color:yellow">News Updates</h3>
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="wthree_banner_info_grid">
									<h4>Latin literature</h4>
									<h3>It has roots in a piece of classical Latin </h3>
									<h5>classical Latin</h5>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h4>simply random</h4>
									<h3>Lorem Ipsum is not simply random text.</h3>
									<h5>classical Latin</h5>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h4>Latin literature</h4>
									<h3>It has roots in a piece of classical Latin</h3>
									<h5>classical Latin</h5>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h4>simply random</h4>
									<h3>Lorem Ipsum is not simply random text.</h3>
									<h5>classical Latin</h5>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h4>Latin literature</h4>
									<h3>It has roots in a piece of classical Latin</h3>
									<h5>classical Latin</h5>
								</div>
							</li>
						</ul>
					</div>
                </section>
				<!-- flexSlider -->
					<script defer src="{{ asset('website/js/jquery.flexslider.js') }}"></script>
					<script type="text/javascript">
						$(window).load(function(){
							$('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								$('body').removeClass('loading');
								}
							  });
							});
					</script>
            
            
            <section class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-12">    
                                <select class="form-control">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">    
                                <select class="form-control">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">    
                                <select class="form-control">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                            </div>
                        </div>
                    </form>   
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="button" class="btn btn-default" style="width:100%" data-toggle="modal" data-target="#calc">Calculator</button>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-default"  style="width:100%" data-toggle="modal" data-target="#map">World Map</button>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-default"  style="width:100%" data-toggle="modal" data-target="#cc">Currency Converter</button>
                        </div>
                    </div>
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
	</div>
<!-- //banner -->

<!-- welcome -->
<div class="welcome">
	 <div class="container">
		 <div class="welcome-top">
             <div class="row">
                 <div class="col-md-12">
                 <script src="http://widgets.macroaxis.com/widgets/url.jsp?t=42"></script>
                 </div>
                    <div class="col-md-6">
                    
             <h4>Advanced Real-Time World Trades</h4>    
                    <!-- TradingView Widget BEGIN -->
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                    new TradingView.widget({
                      "width": 585,
                      "height": 350,
                      "symbol": "NASDAQ:AAPL",
                      "interval": "D",
                      "timezone": "Etc/UTC",
                      "theme": "Dark",
                      "style": "0",
                      "locale": "en",
                      "toolbar_bg": "#f1f3f6",
                      "enable_publishing": false,
                      "allow_symbol_change": false,
                      "details": true,
                      "hotlist": true,
                      "news": [
                        "stocktwits",
                        "headlines"
                      ],
                      "hideideasbutton": false
                    });
                    </script>
                    <!-- TradingView Widget END -->
                    

            </div>
            
            <div class="col-md-6">
                <h4>Forex Chart Live</h4>
                <!-- TradingView Widget BEGIN -->
		<script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
		<script type="text/javascript">
			new TradingView.widget( {
				'width'               : 585,
				'height'              : 350,
				'symbol'              : 'FX:EURUSD',
				'interval'            : 'D',
				'timezone'            : 'Etc/UTC',
				'theme'               : 'White',
				'style'               : '1',
				'locale'              : 'en',
				'toolbar_bg'          : '#f1f3f6',
				'enable_publishing'   : false,
				'allow_symbol_change' : false,
				'hideideas'           : false,
				'show_popup_button'   : false,
				'popup_width'         : '1000',
				'popup_height'        : '650'
			} );
		</script>
		<!-- TradingView Widget END -->
            </div>
            </div>
        </div>
		  <div class="charitys">
			  <div class="col-md-6 chrt_grid" style="visibility: visible; -webkit-animation-delay: 0.4s;">
              <h4>World Market Map</h4>  
              <iframe border="0" frameborder="0" height="350" width="585" src="http://widgets.macroaxis.com/widgets/previewWidget.jsp?widgetCode=/widgets/url.jsp&amp;t=56"></iframe>
			  </div>
			  <div class="col-md-6 chrt_grid" style="visibility: visible; -webkit-animation-delay: 0.4s;">
              <h4>Global Index Heat Map</h4>
              <iframe border="0" frameborder="0" height="350" width="585" src="http://widgets.macroaxis.com/widgets/previewWidget.jsp?widgetCode=/widgets/url.jsp&amp;t=47"></iframe>
			  
                </div>
			  <div class="clearfix"></div>
		 </div>	
		 <div class="row">
		     <div class="col-md-12">
		         <iframe id="tradingview_b9e5c" src="https://www.tradingview.com/mediumwidgetembed/?symbols=Apple,Google,Microsoft&amp;Apple=AAPL%20&amp;Google=GOOGL&amp;Microsoft=MSFT&amp;locale=en&amp;trendLineColor=%234bafe9&amp;underLineColor=%23dbeffb&amp;fontColor=%2383888D&amp;gridLineColor=%23e9e9ea&amp;width=1000px&amp;height=400px&amp;utm_source=www.tradingview.com&amp;utm_medium=widget&amp;utm_campaign=symbol-overview" style="margin: 0 !important; padding: 0 !important; width: 100%; height: 400px; display:none;" frameborder="0" allowtransparency="true" scrolling="no">ab</iframe>
		     </div>
		     <div class="col-md-12" style="background:#fff;"></div>
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
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>