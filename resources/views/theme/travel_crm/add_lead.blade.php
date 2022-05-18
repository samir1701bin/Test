@include('../includes/header')
@include('../includes/crm_sidebar')
<div class="pcoded-content">

<div class="page-header">
	<div class="page-block">
		<div class="row align-items-center">
			<div class="col-md-8">
				<div class="page-header-title">
					<h5 class="m-b-10">Travel Management</h5>
					<p class="m-b-0">Welcome to Travel Portal</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="pcoded-inner-content">

	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h4>Add Lead</h4>
								@if(Session::get('fail'))
                                 <div class="alert alert-danger">
                                    {{Session::get('fail')}}
                                 </div>
                                 @elseif(Session::get('success'))
                                 <div class="alert alert-success">
                                    {{Session::get('success')}}
                                 </div>
                                 @endif
							</div>
							<div class="card-block table-border-style">
								<form id="add_lead_form" method="post" action="{{url('crm/modify/lead')}}" enctype="multipart/form-data">
									@csrf
									<div class="row mb-3">
										<div class="col-auto col-md-1 pr-0">
											<b>Client type</b>
										</div>
										<div class="col-auto col-md-11">
											@foreach($clienttype as $clienttype)
											<div class="form-check form-check-inline">
											  <input class="form-check-input enq_type" type="radio" name="enquiry_type" id="{{$clienttype->name}}" value="{{$clienttype->id}}" >
											  <label class="form-check-label" for="{{$clienttype->name}}">{{ucfirst($clienttype->name)}}</label>
											</div>
											@endforeach
											<!-- <div class="form-check form-check-inline">
											  <input class="form-check-input enq_type" type="radio" name="enquiry_type" id="travel_agents(b2b)" value="B2B" >
											  <label class="form-check-label" for="travel_agents(b2b)">Travel Agents(B2B)</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input enq_type" type="radio" name="enquiry_type" id="Corporate" value="Corporate" >
											  <label class="form-check-label" for="travel_agents(b2b)">Corporate</label>
											</div> -->
										</div>
										<div class="col-md-4 mt-2">
											<label for="project">Parent/Service/Project  <span class="important"></span></label>
											<input type="text" name="project" class="form-control" id="project" requird>
										</div>
										<div class="col-md-4 mt-2">
											<label for="cus_name">Customer Name<span class="important"></span></label>
											<input type="text" name="cus_name" class="form-control" id="cus_name" placeholder=""> 
										</div>
										<div class="col-md-4 mt-2">
											<label for="cus_name">Customer Image<span class="important"></span></label>
											<input type="file" name="cus_img" class="form-control" id="cus_img" placeholder=""> 
										</div>
										<div class="col-md-4 mt-2">
											<label for="cus_email">Customer Email <span class="important d-inline">*</span></label>
											<input type="text" class="form-control "  id="cus_email" name="cus_email" oninput="checkemail()">
											<span><small><em class="emailerror text-danger"></em></small></span>
										</div>
										<div class="col-md-4 mt-2">
											<label for="cus_mobile">Customer Contact Number<span class="important d-inline">*</span></label>
											<input type="text" class="form-control "  id="cus_mobile" name="cus_mobile" oninput="checkmobile()">
											<span><small><em class="mobileerror text-danger"></em></small></span>
										</div>
										
										<div class="col-md-2 mt-2">
											<label for="location">Travel Location  <span class="important"></span></label>
											<input type="text" class="form-control "  id="location" name="location">
										</div>
										<div class="col-md-2 mt-2">
											<label for="type">Travel Type <span class="important"></span></label><br/>
												<select class="form-control" name="type[]" data-live-search="true" multiple id="type" requird  data-width="100%">
													@foreach($travel_types as $travel_types)
														<option value="{{$travel_types->tt_id}}">{{$travel_types->tt_name}}</option>
													@endforeach
											</select>
										</div>
										<div class="col-md-4 mt-2">
											<label for="date">Journey Date<span class="important"></span></label>
											<input type="date" class="form-control autonumber"  id="date" name="date">
										</div>
										<div class="col-xl-4">
											<div class="mb-3">
												<label for="" class="form-label">Budget for the trip <span class="red"></span></label>
												<div class="row" style="padding:0px 10px">
													<div class="col-xl-4 p-0">
														<select class="form-select digits" id="budget_type" name="budget_type" >
															@foreach($budget_currencies as $budget_currencies)
																<option value="{{$budget_currencies->id}}">{{$budget_currencies->name}}</option>
															@endforeach
														</select>
													</div>
													<div class="col-xl-4 p-0">
														<input type="text" class="form-control" id="budget_value" name="budget_value" value="" placeholder="Enter Budget" 
															data-bs-original-title="" title="">
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4">
												<div class="mb-3"> 
													<label for="" class="form-label">Total Adults<span class="red d-inline">* </span> Kids &amp; Infants <span class="red"></span></label>
													<div class="row" style="padding:0px 10px;">
														<div class="col-xl-4 p-0">
															<input type="text" class="form-control" id="adults" name="adults" value="" placeholder="Adults" 
																data-bs-original-title="" title="" oninput="validateadults()">
														</div>
														<div class="col-xl-4 p-0">
															<input type="text" class="form-control" id="kids" name="kids" value="" placeholder="Kids" 
																data-bs-original-title="" title="">
														</div>
														<div class="col-xl-4 p-0">
															<input type="text" class="form-control" id="infants" name="infants" value="" placeholder="Infants" 
																data-bs-original-title="" title="">
														</div>
													</div>
												</div>
												<span><small><em class="adulterror text-danger"></em></small></span>
										</div>
											<div class="col-md-4 mt-2">
												<label for="hname">Lead Source <span class="important"></span></label><br/>
													<select name="lead_source[]" class="form-control" data-live-search="true"  id="lead_source"  data-width="100%" multiple >
														@foreach($lead_sources as $lead_sources)
															<option value="{{$lead_sources->id}}">{{$lead_sources->name}}</option>
														@endforeach
													</select>
											</div>
											<div class="col-md-4 mt-2">
												<label for="hname">Lead Owner <span class="important"></span></label><br/>
												<select name="lead_owner[]" class="form-control" data-live-search="true"  id="lead_owner"   data-width="100%" multiple >
													@foreach($lead_owner as $lead_owner)
														<option value="{{$lead_owner->id}}">{{$lead_owner->name}}</option>
													@endforeach
												</select>
											</div>
											<div class="col-md-12 mt-3"></div>
											 <div class="col-auto">
												 <b>Requirements</b>
											 </div>
											 <div class="col-md-10">
												@foreach($requirement as $requ)
												<div class="form-check form-check-inline">
													<input class="form-check-input requirement" type="checkbox" name="requirement[]" id="requirement" value="{{$requ->tt_id}}" data-bs-original-title="" title="">
													<label class="form-check-label" for="inlineRadio1">{{$requ->tt_name}}</label>
												</div>
												@endforeach
												<!-- <div class="form-check form-check-inline">
													<input class="form-check-input requirement" type="checkbox" name="requirement[]" id="requirement" value="Hotel" data-bs-original-title="" title="">
													<label class="form-check-label" for="inlineRadio1">Hotel</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input requirement" type="checkbox" name="requirement[]" id="requirement" value="Fligts" data-bs-original-title="" title="">
													<label class="form-check-label" for="inlineRadio1">Fligts</label>
												</div> -->
											</div>
											
										</div>
										<center>
											<button type="submit" name="add_lead" id="add_lead" class="btn btn-primary">Submit</button>
									  		<!-- <button class="btn btn-danger">Cancel</button> -->
										</center>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>

@include('../includes/footer')
<script>
	$('#add_lead').prop('disabled',true);
	function checkmobile() {
        $('#add_lead').prop('disabled',true);
            var hmob1 = $('#cus_mobile').val();
			var adults = $('#adults').val();
			var email = $('#cus_email').val();
            var dig = hmob1.charAt(0);
            if(hmob1 != ''){
				if(dig >5){
                    $('.mobileerror').text('');
					if(/^\d{10}$/.test(hmob1)){
                        $('.mobileerror').text('');
						if( (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) && (adults !='') ){
							$('#emailerror').text('');
							$('#add_lead').prop('disabled',false);
							return true;
						}else{
							$('#add_lead').prop('disabled',true);
						}
					}else{
                        $('.mobileerror').text('');
                        $('.mobileerror').text('Mobile number must be ten digits');
						return false;
					}
				}else{
                    $('.mobileerror').text('');
                    $('.mobileerror').text('First digit of mobile number must be greater than 5.');
					return false;
				}
			}else{
				$('.mobileerror').text('');
				return false;
			} 
    }
	function checkemail() {
        $('#add_lead').prop('disabled',true);
        var email = $('#cus_email').val();
		var hmob1 = $('#cus_mobile').val();
		var adults = $('#adults').val();
        if(email != ''){
				if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
					$('.emailerror').text('');
					if( (/^\d{10}$/.test(hmob1)) && (adults !='') ){
						$('#add_lead').prop('disabled',false);
						return true;
					}else{
						$('#add_lead').prop('disabled',true);
						return false;
					}
				}else{
					$('.emailerror').text('');
					$('.emailerror').text('Enter a valid email address.');
					return false;
				}
		}else{
			$('.emailerror').text('');
			return false;
		} 
    }
	function validateadults(){
		$('#add_lead').prop('disabled',true);
		var adults = $('#adults').val();
		var hmob1 = $('#cus_mobile').val();
		var email = $('#cus_email').val();
		if(adults != ''){
			if( (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) && (/^\d{10}$/.test(hmob1)) ){
				$('#add_lead').prop('disabled',false);
				return true;
			}else{
				$('#add_lead').prop('disabled',true);
				return false;
			}
		}else{
			$('.adulterror').text('');
			return false;
		}
	}
</script>
