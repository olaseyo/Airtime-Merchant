@include('inc.mheader')				
    <div class="ks-column ks-page">
        <!-- BEGIN DASHBOARD HEADER -->
<div class="ks-header"> <!-- add "ks-header-with-addon" class if you need an addon -->
    <section class="ks-title">
        <h3>Dashboard</h3>

        <div class="ks-controls">
            <nav class="breadcrumb ks-default">
                <a class="breadcrumb-item ks-breadcrumb-icon" href="index-2.html">
                    <span class="fa fa-home ks-icon"></span>
                </a>
                <span class="breadcrumb-item active" href="#">Dashboard</span>
            </nav>

            <button class="btn btn-primary-outline ks-light ks-header-addon-block-toggle" data-block-toggle=".ks-header-with-addon > .ks-addon">Addon</button>
        </div>
    </section>
    <!-- Uncomment if you need an addon
    <section class="ks-addon">
        <div class="btn-group ks-addon-block" data-toggle="buttons">
            <label class="btn btn-primary-outline ks-light">
                <input type="radio" name="options" autocomplete="off"> Today
            </label>
            <label class="btn btn-primary-outline ks-light">
                <input type="radio" name="options" autocomplete="off"> Week
            </label>
            <label class="btn btn-primary-outline ks-light active">
                <input type="radio" name="options" autocomplete="off" checked> Month
            </label>
            <label class="btn btn-primary-outline ks-light">
                <input type="radio" name="options" autocomplete="off"> Year
            </label>
        </div>

        <div class="ks-addon-block ks-addon-actions">
            <span class="ks-page-header-text">
                <span class="ks-icon fa fa-undo"></span> 5 minutes ago
            </span>
            <button class="btn btn-success">
                <span class="fa fa-plus ks-icon ks-sm"></span>
                <span class="ks-text">Add widget</span>
            </button>
            <button class="btn btn-primary-outline ks-light">
                <span class="fa fa-pencil ks-icon ks-sm"></span>
                <span class="ks-text">Edit</span>
            </button>
        </div>
    </section>
    -->
</div>
<!-- END DASHBOARD HEADER -->

<!-- BEGIN DASHBOARD CONTENT -->
<div class="ks-content">
    <div class="ks-body">
        <div class="container-fluid ks-rows-section">
            <div class="row ks-widgets-collection">
			
			<div class="col-md-3"></div>
			<div class="col-md-6">
                                      

<div class="card panel panel-default ks-solid ks-widget ks-widget-info">
                            <h5 class="card-header">Profile</h5>
                            <div class="card-block">
                                <div class="ks-item">
                                    <span>Email</span>
                                    <span>{{ Auth::user()->email }}</span>
                                </div>
                                <div class="ks-item">
                                    <span>Phone</span>
                                    <span>{{ Auth::user()->phone }}</span>
                                </div>
                                <div class="ks-item">
                                    <span>Account Type</span>
                                    <span><?php if(Auth::user()->utype==1){  ?>
														Merchant
														<?php }else{
														echo 'Customer';	
														}
														?></span>
                                </div>
                            </div>
                        </div>
						
     
                                    </div>
									
									
									<div class="col-md-3"></div>
			
			
        </div>
    </div>
</div>
<!-- END DASHBOARD CONTENT -->
    </div>
</div>
@include('inc.footer')












