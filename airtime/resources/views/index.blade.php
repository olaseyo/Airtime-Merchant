<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Airtime Merchant</title>

    <meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ url('libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('libs/font-awesome/css/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('libs/tether/css/tether.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('assets/styles/common.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/styles/pages/auth.min.css') }}">
</head>
<body>

<div class="ks-page">
    <div class="ks-header">
        <a href="#" class="ks-logo">Airtime Merchant</a>
    </div>
    <div class="ks-body">
        <div class="ks-logo">Airtime Merchanted</div>
		@if(session('login_error'))
						<div class="alert alert-danger ks-solid ks-active-border">{{ session('login_error') }}</div>	
						@endif
        <div class="card panel panel-default ks-light ks-panel">
		
            <div class="card-block">
                <form class="form-container" id="login_form" action="{{ url('/user_login') }}" method="POST">
				{{ csrf_field() }}
                    <h4 class="ks-header">Login</h4>
                    <div class="form-group">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                           
                            <span class="icon-addon">
                                <span class="fa fa-at"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                            <span class="icon-addon">
                                <span class="fa fa-key"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                    </div> 
                </form>
					<div class="form-group">
                        <a href="{{ url('/register') }}" class="btn btn-success btn-block">REGISTER</a>
                    </div>
                
            </div>
        </div>
    </div>
    <div class="ks-footer">
        <span class="ks-copyright">&copy; 2018 Airtime Merchanted</span>
        <ul>
            <li>
                <a href="#">Privacy Policy</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>
</div>

<script src="{{ url('libs/jquery/jquery.min.js') }}"></script>
<script src="{{ url('libs/tether/js/tether.min.js') }}"></script>
<script src="{{ url('libs/bootstrap/js/bootstrap.min.js') }}"></script>
					
</body>
</html>