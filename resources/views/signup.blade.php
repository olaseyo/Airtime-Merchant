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
        <div class="ks-logo">Airtime Merchant</div>
		
		@if(session('signup_error'))
						<div class="alert alert-danger ks-solid ks-active-border">{{ session('signup_error') }}</div>	
						@endif
						
						@if(session('signup_Success'))
						<div class="alert alert-success ks-solid ks-active-border">{{ session('signup_Success') }}</div>	
						@endif

        <div class="card panel panel-default ks-light ks-panel" >
		<?php 
		//var_dump($errors); 
		
		?>
            <div class="card-block" style="height:500px !important;">
                <form class="form-container" id="login_form" action="{{ url('/user_signup') }}" method="POST">
				{{ csrf_field() }}
					  <h4 class="ks-header">REGISTER</h4>
					<div class="form-group">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <span class="icon-addon">
                                <span class="fa fa-at"></span>
                            </span>
							@if ($errors->has('email'))
                                    <span class="ks-color-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
					
					 <div class="form-group">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number"required>
                           
                            <span class="icon-addon">
                                <span class="fa fa-phone"></span>
                            </span>
							
							@if ($errors->has('users.phone'))
                                    <span class="ks-color-danger" role="alert">
                                        <strong>{{ $errors->first('users.phone') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

					<div class="form-group">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <select type="text" name="utype" class="form-control" placeholder="Email" required>
							<option value="">Select User Type</option>
							<option value="1">Merchant</option>
							<option value="2">User</option>
							</select>
                            
                        </div>
						@if ($errors->has('utype'))
                                    <span class="ks-color-danger" role="alert">
                                        <strong>{{ $errors->first('utype') }}</strong>
                                    </span>
                                @endif
                    </div>
					
					
                    <div class="form-group">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input name="password" type="password" class="form-control" placeholder="Password" required>
                            <span class="icon-addon">
                                <span class="fa fa-key"></span>
                            </span>
							@if ($errors->has('password'))
                                    <span class="ks-color-danger" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div> 
					
					<div class="form-group">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required>
                            <span class="icon-addon">
                                <span class="fa fa-key"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">REGISTER</button>
                    </div>
					
					<div class="form-group">
                        <a href="{{ url('/') }}">LOGIN</a>
                    </div>
                
                </form>
            </div>
        </div>
    </div>
    <div class="ks-footer">
        <span class="ks-copyright">&copy; 2018 Airtime Merchant</span>
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