
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> {{ config('app.name', 'Laravel') }}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ url('libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('libs/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/fonts/open-sans/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('libs/tether/css/tether.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('libs/jscrollpane/jquery.jscrollpane.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('libs/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/styles/common.min.css') }}">
	
	 <link rel="stylesheet" type="text/css" href="{{ url('libs/sweetalert/sweetalert.css') }}"> <!-- original -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/styles/libs/sweetalert/sweetalert.min.css') }}"> <!-- customization -->
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/styles/themes/primary.min.css') }}">
    <!-- END THEME STYLES -->

<link rel="stylesheet" type="text/css" href="{{ url('assets/styles/widgets/panels.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('assets/scripts/charts/area/area.chart.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('assets/scripts/charts/radial-progress/radial-progress.chart.min.css') }}">
</head>
<!-- END HEAD -->

<body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-default ks-sidebar-position-fixed ks-page-header-fixed ks-theme-primary ks-page-loading"> <!-- remove ks-page-header-fixed to unfix header -->

    <!-- BEGIN HEADER -->
<nav class="navbar ks-navbar">
    <!-- BEGIN HEADER INNER -->
    <!-- BEGIN LOGO -->
    <div href="index-2.html" class="navbar-brand">
        <!-- BEGIN RESPONSIVE SIDEBAR TOGGLER -->
        <a href="#" class="ks-sidebar-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
        <a href="#" class="ks-sidebar-mobile-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
        <!-- END RESPONSIVE SIDEBAR TOGGLER -->
        <a href="index-2.html" class="ks-logo">Airtime Merchant</a>

        <!-- BEGIN GRID NAVIGATION -->
        <span class="nav-item dropdown ks-dropdown-grid">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>
            <div class="dropdown-menu ks-info ks-scrollable" aria-labelledby="Preview" data-height="260">
                <div class="ks-scroll-wrapper">
                    <a href="#" class="ks-grid-item">
                        <span class="ks-icon fa fa-users"></span>
                        <span class="ks-text">profile</span>
                    </a>
                    <a href="view_users.php" class="ks-grid-item">
                        <span class="ks-icon fa fa-money"></span>
                        <span class="ks-text">Buy Airtime</span>
                    </a>   
					
					<a href="view_users.php" class="ks-grid-item">
                        <span class="ks-icon fa fa-money"></span>
                        <span class="ks-text">Buy Airtime</span>
                    </a>  
					
					
                </div>
            </div>
        </span>
        <!-- END GRID NAVIGATION -->
    </div>
    <!-- END LOGO -->

    <!-- BEGIN MENUS -->
    <div class="ks-wrapper">
        <nav class="nav navbar-nav">
            <!-- BEGIN NAVBAR MENU -->
            <div class="ks-navbar-menu">
                <form class="ks-search-form">
                    <a class="ks-search-open" href="#">
                        <span class="fa fa-search"></span>
                    </a>
                    <div class="ks-wrapper">
                        <div class="input-icon icon-right icon icon-lg icon-color-primary">
                            <input id="input-group-icon-text" type="text" class="form-control" placeholder="Search...">
                            <span class="icon-addon">
                                <span class="fa fa-search ks-icon"></span>
                            </span>
                        </div>
                        <a class="ks-search-close" href="#">
                            <span class="fa fa-close"></span>
                        </a>
                    </div>
                </form>
               
            </div>
            <!-- END NAVBAR MENU -->
        </nav>

        <!-- BEGIN NAVBAR ACTIONS TOGGLER -->
        <nav class="nav navbar-nav ks-navbar-actions-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="fa fa-ellipsis-h ks-icon ks-open"></span>
                <span class="fa fa-close ks-icon ks-close"></span>
            </a>
        </nav>
        <!-- END NAVBAR ACTIONS TOGGLER -->

        <!-- BEGIN NAVBAR MENU TOGGLER -->
        <nav class="nav navbar-nav ks-navbar-menu-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="fa fa-th ks-icon ks-open"></span>
                <span class="fa fa-close ks-icon ks-close"></span>
            </a>
        </nav>
        <!-- END NAVBAR MENU TOGGLER -->
    </div>
    <!-- END MENUS -->
    <!-- END HEADER INNER -->
</nav>
<!-- END HEADER -->






<div class="ks-container">
    
    <!-- BEGIN DEFAULT SIDEBAR -->
<div class="ks-column ks-sidebar ks-info">
    <div class="ks-wrapper">
        <ul class="nav nav-pills nav-stacked">
		
		<li class="nav-item">
                <a class="nav-link" href="{{ url('/mdashboard') }}">
                    <span class="ks-icon fa fa-dashboard"></span>
                    <span>Dashboard</span>
                </a>
            </li> 
			
           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon fa fa-user"></span>
                    <span>Airtime</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/create_airtime') }}">Add Airtime</a>
                    <a class="dropdown-item" href="{{ url('/list_airtime') }}">View Airtime</a>
                </div>
            </li>
			
		
            
           <li class="nav-item">
                <a class="nav-link" href="{{ url('/mprofile') }}">
                    <span class="ks-icon fa fa-user"></span>
                    <span>Profile</span>
                </a>
            </li>  

			
			
        </ul>
    </div>
</div>
<!-- END DEFAULT SIDEBAR -->

