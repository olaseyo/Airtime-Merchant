<div class="modal fade bd-example-modal-horizontal-form{{ $card->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Recharge A Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="fa fa-close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                  
					 <div class="form-group row">
					
					  <form  class="form-container" id="login_form" action="{{ url('/recharge') }}" method="POST">
									{{ csrf_field() }}
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">Select Customer</label>
                                            <div class="col-sm-10">
                                                  <select type="text" name="phone" class="form-control"  required>
												  @if(count($users)>0)
							@foreach($users->all() as $user)
                                                    <option value="{{$user->phone}}">{{$user->phone}}</option>
                                                  @endforeach
												  @endif
                                                </select>
                                            </div>
                                        </div>
                   <input type="hidden" name="card" class="form-control" value="{{ $card->id}}" required>
                   <input type="hidden" name="merchant" class="form-control" value="{{ Auth::user()->id }}" required>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Recharge</button>
                        </div>
                    </div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END BOOTSTRAP MODALS -->