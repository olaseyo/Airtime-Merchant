@include('inc.mheader')				
    <div class="ks-column ks-page">
        <!-- BEGIN DASHBOARD HEADER -->
<div class="ks-header"> <!-- add "ks-header-with-addon" class if you need an addon -->
    <section class="ks-title">
        <h3>Update Airtime</h3>

        <div class="ks-controls">
            <nav class="breadcrumb ks-default">
                <a class="breadcrumb-item ks-breadcrumb-icon" href="index-2.html">
                    <span class="fa fa-home ks-icon"></span>
                </a>
                <span class="breadcrumb-item active" href="#">Add New Airtime</span>
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
			
			
			<div class="col-md-2"></div>
			<div class="col-md-8 ks-panels-column-section">
			@if(session('edit_airtime_Success'))
						<div class="alert alert-success ks-solid ks-active-border">
						{{ session('edit_airtime_Success') }}</div>	
						@endif
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Kindly fill the form below to add new airtime</h5>
                                    <form  class="form-container" id="login_form" action="{{ url('/update') }}" method="POST">
									{{ csrf_field() }}
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Card Pin</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pin" class="form-control" id="default-input"  value="{{ $card[0]->card_pin }}" placeholder="Card Pin" required>
												@if ($errors->has('card_pin'))
                                    <span class="ks-color-danger" role="alert">
                                        <strong>{{ $errors->first('card_pin') }}</strong>
                                    </span>
                                @endif
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Amount</label>
                                            <div class="col-sm-10">
                                                
												<input name="amount" type="text" class="form-control" id="default-input" value="{{ $card[0]->amount }}" placeholder="Card Amount" required>

												<input type="hidden" class="form-control" id="default-input" name="card_id" value="{{ $card[0]->id }}">
                                            </div>
											@if ($errors->has('amount'))
                                    <span class="ks-color-danger" role="alert">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                      
                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">Provider</label>
                                            <div class="col-sm-10">
                                                  <select type="text" name="provider" class="form-control"  required>
                                                    <option value="mtn">Mtn</option>
                                                    <option value="glo">Glo</option>
                                                    <option value="airtel">airtel</option>
                                                </select>
										
                                            </div>
											@if ($errors->has('provider'))
                                    <span class="ks-color-danger" role="alert">
                                        <strong>{{ $errors->first('provider') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                        <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">REGISTER</button>
                    </div>
                                    </form>
                                </div>
                            </div>
                         
                        </div>
						
						<div class="col-md-2"></div>
			</div>
			
			
        </div>
    </div>
</div>
<!-- END DASHBOARD CONTENT -->
    </div>
</div>
@include('inc.footer')

