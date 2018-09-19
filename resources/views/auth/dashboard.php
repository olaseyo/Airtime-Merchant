
<?php
include('header.php');
?>


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
                <div class="col-lg-3">
                    <div class="ks-dashboard-widget ks-widget-amount-statistics ks-info">
                        <div class="ks-statistics">
                            <span class="ks-amount" data-count-up="3119">0</span>
                            <span class="ks-text">Total admin</span>
                        </div>
                        <div class="ks-percent ks-down"><span class="ks-text">5%</span></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ks-dashboard-widget ks-widget-amount-statistics ks-success">
                        <div class="ks-statistics">
                            <span class="ks-amount" data-count-up="8201">0</span>
                            <span class="ks-text">Total Member</span>
                        </div>
                        <div class="ks-percent ks-up"><span class="ks-text">6%</span></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ks-dashboard-widget ks-widget-amount-chart-statistics ks-purple">
                        <div class="ks-body">
                            <div class="ks-statistics">
                                <span class="ks-text">Total News, Event and Blog</span>
                                <span class="ks-amount">25%</span>
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
                                <span class="ks-text">Total Sermon</span>
                                <span class="ks-amount">50%</span>
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
<?php
include('footer.php');
?>