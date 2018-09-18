@include('inc.mheader')				
    <div class="ks-column ks-page">
        <!-- BEGIN DASHBOARD HEADER -->
<div class="ks-header"> <!-- add "ks-header-with-addon" class if you need an addon -->
    <section class="ks-title">
        <h3>Add New Airtime</h3>

        <div class="ks-controls">
            <nav class="breadcrumb ks-default">
                <a class="breadcrumb-item ks-breadcrumb-icon" href="index-2.html">
                    <span class="fa fa-home ks-icon"></span>
                </a>
                <span class="breadcrumb-item active" href="#">Current Airtime</span>
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
			 
					 @if(session('recharge_airtime_Success'))
						<div class="alert alert-success ks-solid ks-active-border">
						{{ session('recharge_airtime_Success') }}</div>	
						@endif
						
			<table id="ks-datatable" class="table table-striped table-bordered dataTable" width="100%" role="grid" aria-describedby="ks-datatable_info" style="width: 100%;">
                        <thead>
                        <tr role="row">
						<th>Card</th>
						<th>Amount</th>
						<th>Provider</th>
						<th>Sold</th>
						<th>Used</th>
						<th>Sell</th>
						<th>Update</th>
						</tr>
                        </thead>
                        <tbody>
						@if(count($cards)>0)
							@foreach($cards->all() as $card)
                        <tr role="row" class="odd">
						
                            <td>{{ $card->card_pin}}</td>
                            <td>{{ $card->amount}}</td>
                            <td>{{ $card->provider}}</td>
                            <td>@if($card->sold==1) 
								<button class="btn btn-danger">Sold</button>
							@else
								<button class="btn btn-success">Available</button>
							@endif
							</td> 
							
							<td>@if($card->used==1) 
								<button class="btn btn-danger">Not Yet Used</button>
							@else
								<button class="btn btn-success">Used</button>
							@endif
							</td>
							@include('modal')	
							<td>
							@if($card->used==1) 
								<button class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-horizontal-form{{ $card->id}}" disabled>Recharge</button>
							@else
								<button class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-horizontal-form{{ $card->id}}" >Recharge</button>
							
							@endif
							</td>
							
							<td>
								<a href='{{ url("/edit_card/{$card->id}") }}' class="btn btn-success">Update</a>
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

