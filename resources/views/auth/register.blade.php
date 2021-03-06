<!DOCTYPE html>
<html>
<head>

    <title>eStockExchange | Register</title>

    <!-- START: PAGE LEVEL HEADER LINKS -->
@include('layout.header_script')
<!-- END: PAGE LEVEL HEADER LINKS -->

    <!-- START: PAGE LEVEL STYLE SHEET -->
@yield('page_style')
<!-- END: PAGE LEVEL STYLE SHEET -->

</head>

<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group mb-0">
                <div class="card p-4">
                    <div class="card-body">
                        <h1>Register</h1>
                        <p class="text-muted">Sign up to your account</p>
                        @if($errors->any())
                                <div class="alert alert-danger alert-dismissible " role="alert">
                                    <button class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                    </button>
                                    {{$errors->first()}}.
                                </div>
                        @endif
                        <form novalidate="novalidate" class="simple_form new_account" id="new_account" method="POST"
                              action="{{ route('register') }}"
                              accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓">
                            {!! csrf_field() !!}


                            <div class="input-group mb-3 email optional account_email">
                                <span class="input-group-addon">@</span>
                                <input class="string email optional form-control"
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
                            <input class="password optional form-control"
                                   autocomplete="off" placeholder="Password"
                                   name="password" type="password"
                                   id="account_password">
                            @if ($errors->has('password'))
                                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                            @endif
                        </div>

                            <div class="input-group mb-4 password optional account_password {{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                <input class="password optional form-control"
                                       autocomplete="off" placeholder="Confirm-password"
                                       name="confirm-password" type="password"
                                       id="account_password">
                                @if ($errors->has('password'))
                                    <span class="help-block"><strong>{{ $errors->first('confirm-password') }}</strong></span>
                                @endif
                            </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" name="commit" class="btn btn-primary px-4">REGISTER</button>
                            </div>
                            <div class="col-6 text-right">
                                <a href="/" class="btn btn-link px-0">Go to Home?</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>