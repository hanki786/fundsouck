
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-panel"></i>
                        <p>Stats</p>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-pie-chart"></i>
                        <p>Fund Identities</p>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($fund_identities as $fund_identity)
                            <li><a href="#{{ $fund_identity->id }}">{{ $fund_identity->fund_name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="ti-settings"></i>
                        <p>Sign Out</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>