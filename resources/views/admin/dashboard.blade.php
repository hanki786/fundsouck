@extends('layout.header')
@section('title')
    Dashboard - FundSouk
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">Dashboard</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
                <a class="btn" href="#"><i class="icon-speech"></i></a>
                <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
                <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
            </div>
        </li>
    </ol>
@endsection
@section('content')
@if(!Auth::check())
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <h2>You are not logged in</h2>
                    </div>
                    </div>
                    </div>
 @else       
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if($errors->any())
                            <div class="alert alert-info alert-dismissible " role="alert">
                                <button class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                </button>
                                {{$errors->first()}}.
                            </div>
                        @endif
                    </div>
                    <div class="col-md-12">
                         <iframe scrolling="no" allowtransparency="true" frameborder="0" width="100%" height="66" src="https://s.tradingview.com/tickerswidgetembed/#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22INDEX%3ASPX%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22INDEX%3AIUXX%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22NYMEX%3ACL1!%22%2C%22title%22%3A%22Crude%20Oil%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AXAUUSD%22%2C%22title%22%3A%22Gold%22%7D%5D%2C%22locale%22%3A%22en%22%2C%22linkPageTemplate%22%3A%22http%3A%2F%2Fwww.bryket.com%3Ftvwidgetsymbol%3D%7B%7BproName%7D%7D%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A104%2C%22utm_source%22%3A%22www.tradingview.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22tickers%22%7D" style="border-radius:0;padding-bottom: 0;"></iframe>
                    </div>
                    <!--/.col-->
                    <div class="col-md-12">
                        <!-- TradingView Widget BEGIN -->
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                    new TradingView.widget({
                      "width": '100%',
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
                    <!--/.col-->

                    <div class="col-md-12">
                        <!-- TradingView Widget BEGIN -->
		
        
        <script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
		@endif
        <script type="text/javascript">
			new TradingView.widget( {
				'width'               : '100%',
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
                    <!--/.col-->
                </div>
                <!--/.row-->

        </div>
@endsection