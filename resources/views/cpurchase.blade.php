@include('inc.header')				
    <div class="ks-column ks-page">
        <!-- BEGIN DASHBOARD HEADER -->
<div class="ks-header"> <!-- add "ks-header-with-addon" class if you need an addon -->
    <section class="ks-title">
        <h3>Your Purchases</h3>

        <div class="ks-controls">
            <nav class="breadcrumb ks-default">
                <a class="breadcrumb-item ks-breadcrumb-icon" href="index-2.html">
                    <span class="fa fa-home ks-icon"></span>
                </a>
                <span class="breadcrumb-item active" href="#">Your Purchases</span>
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
			<div class="row"><div class="col-sm-12">
			 
					 @if(session('flag_airtime_Success'))
						<div class="alert alert-success ks-solid ks-active-border">
						{{ session('flag_airtime_Success') }}</div>	
						@endif
						
			<table id="ks-datatable" class="table table-striped table-bordered dataTable" width="100%" role="grid" aria-describedby="ks-datatable_info" style="width: 100%;">
                        <thead>
                        <tr role="row">
						<th>Card</th>
						<th>Amount</th>
						<th>Provider</th>
						<th>Flag</th>
						</tr>
                        </thead>
                        <tbody>
						@if(count($purchases)>0)
							@foreach($purchases->all() as $purchase)
                        <tr role="row" class="odd">
						
                            <td>{{ $purchase->card_pin}}</td>
                            <td>{{ $purchase->amount}}</td>
                            <td>{{ $purchase->provider}}</td> 
							<td>
							@if($purchase->used==1) 
								<a class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-horizontal-form{{ $purchase->id }}" disabled>Used</a>
							@else
								<a href='{{ url("/flag/{$purchase->id}") }}' class="btn btn-info" >Mark as Used</a>
							
							@endif
							</td>
                        </tr>
						
						@endforeach
						@endif
						</tbody>
                    </table></div></div>
         
       
			
        </div>
    </div>
</div>
<!-- END DASHBOARD CONTENT -->
    </div>
</div>
@include('inc.footer')

