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
   
</div>
<!-- END DASHBOARD HEADER -->

<!-- BEGIN DASHBOARD CONTENT -->
<div class="ks-content">
    <div class="ks-body">
        <div class="container-fluid ks-rows-section">
		
            <div class="row ks-widgets-collection">
			@if(session('login_success'))
						<div class="alert alert-success ks-solid ks-active-border">{{ session('login_success') }}   {{ Auth::user()->email }}</div>	
						@endif
			</div>
            <div class="row ks-widgets-collection">
			
                <div class="col-lg-3">
                    <div class="ks-dashboard-widget ks-widget-amount-statistics ks-info">
                        <div class="ks-statistics">
                            <span class="ks-amount" data-count-up="3119">{{ $total_sold }}</span>
                            <span class="ks-text">Total Sold</span>
                        </div>
                        <div class="ks-percent ks-down"><span class="ks-text">{{ $sold_percent }}%</span></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ks-dashboard-widget ks-widget-amount-statistics ks-success">
                        <div class="ks-statistics">
                            <span class="ks-amount" data-count-up="8201">{{ $total_unsold }}</span>
                            <span class="ks-text">Total Unsold</span>
                        </div>
                        <div class="ks-percent ks-up"><span class="ks-text">{{ $unsold_percent }}%</span></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ks-dashboard-widget ks-widget-amount-chart-statistics ks-purple">
                        <div class="ks-body">
                            <div class="ks-statistics">
                                <span class="ks-text">Total Cards</span>
                                <span class="ks-amount">{{ $total_card }}</span>
                            </div>
                            <div class="ks-chart">
                                <div id="ks-memory-radial-progress-chart" class="ks-radial-progress-chart ks-white"></div>
                            </div>
                        </div>
                        <div class="ks-footer">
                            <div id="ks-memory-area-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ks-dashboard-widget ks-widget-amount-chart-statistics ks-white">
                        <div class="ks-body">
                            <div class="ks-statistics">
                                <span class="ks-text">Total Revenue</span>
                                <span class="ks-amount">&#x20A6 {{ $total_amount_made }}</span>
                            </div>
                            <div class="ks-chart">
                                <div id="ks-cpu-radial-progress-chart" class="ks-radial-progress-chart ks-primary"></div>
                            </div>
                        </div>
                        <div class="ks-footer">
                            <div id="ks-cpu-area-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
       
			
        </div>
    </div>
</div>
<!-- END DASHBOARD CONTENT -->
    </div>
</div>
@include('inc.footer')












