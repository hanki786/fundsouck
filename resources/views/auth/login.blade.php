<!DOCTYPE html>
<html>
<head>

    <title>eStockExchange | Login</title>

    <!-- START: PAGE LEVEL HEADER LINKS -->
@include('layout.header_script')
<!-- END: PAGE LEVEL HEADER LINKS -->

    <!-- START: PAGE LEVEL STYLE SHEET -->
@yield('page_style')
<!-- END: PAGE LEVEL STYLE SHEET -->

</head>

<body class="app flex-row align-items-center">
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card p-4">
                <div class="content">
                    <h4 class="title">Login</h4>
                    <p class="category">Sign In to your account</p>
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible " role="alert">
                            <button class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span
                                        class="sr-only">Close</span>
                            </button>
                            {{$errors->first()}}.
                        </div>
                    @endif
                    <form novalidate="novalidate" class="simple_form new_account" id="new_account" method="POST"
                          action="{{ route('login') }}"
                          accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓">
                        {!! csrf_field() !!}


                        <div class="input-group mb-3 email optional account_email">
                            <span class="input-group-addon">@</span>
                            <input class="string email optional form-control border-input"
                                   autofocus="autofocus" placeholder="Email"
                                   type="email" value="{{ old('email') }}" name="email"
                                   id="account_email">
                            @if ($errors->has('email'))
                                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                            @endif
                        </div>

                        <div class="input-group mb-4 password optional account_password {{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                            <input class="password optional form-control border-input"
                                   autocomplete="off" placeholder="Password"
                                   name="password" type="password"
                                   id="account_password">
                            @if ($errors->has('password'))
                                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                            @endif
                        </div>

                        <button type="submit" name="commit" value="Log in" style="width:100%;" class="btn btn-info btn-wd btn-fill pull-right">
                            Login
                        </button>
<br>
<br>
<br>
                    </form>
                </div>
                <div class="footer">

                    <a href="/" class="btn btn-danger">Go to Home?</a>
                    <a class="btn btn-success mt-3"
                       href="register_auth0">Register Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>