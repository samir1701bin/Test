@include('../includes/header')
@include('../includes/invoice_sidebar')
<style>
    .table td, .table th {
    padding: 12px 10px;
}
.table td, .table th {
    padding: 10px 8px;
}
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 100px;
}
</style>
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
				<!--<div class="col-md-4">-->
				<!--	<ul class="breadcrumb">-->
				<!--		<li class="breadcrumb-item">-->
				<!--			<a href="index-2.html"> <i class="fa fa-home"></i> </a>-->
				<!--		</li>-->
				<!--		<li class="breadcrumb-item"><a href="#!">Dashboard</a>-->
				<!--		</li>-->
				<!--		<li class="breadcrumb-item"><a href="#!">Dashboard Ecommerce</a>-->
				<!--		</li>-->
				<!--	</ul>-->
				<!--</div>-->
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
        							<h4>Update Invoice</h4>
        						</div>
        						<div class="card-block table-border-style">
        							<form method="post" action="{{url('invoice/modify/invoices/'.$invoice->id)}}" enctype="multipart/form-data">
										@csrf
        							    	<div class="row mb-3">
                								   	<div class="col-md-5">
                									    <div class="row">
                									            <div class="col-md-5">
                									                	<label class="mt-2" for="name">Customer Type <span class="important">*</span></label>
                									            </div>
                									            <div class="col-md-7">
                									                 <select class="form-control mb-3" name="cus_type">
                            										     <option value="B2B" {{($invoice->customer_type)== "B2B" ? 'selected' :''}}>B2B</option>
                            										     <option value="B2C" {{($invoice->customer_type) == "B2C"  ? 'selected' : ''}}>B2C</option>
                            										 </select>
                									            </div>
                									            <div class="col-md-5">
                									                	<label  class="mt-2" for="name">Product/Service/Project <span class="important">*</span></label>
                									            </div>
                									            <div class="col-md-7">
                									                 	 <select  class="form-control mb-3" name="service">
                            										     <option value="Web" {{($invoice->service) == "Web"  ? 'selected' : ''}}>Web</option>
                            										     <option value="Mobile" {{($invoice->service) == "Mobile"  ? 'selected' : ''}}>Mobile</option>
                            										 </select>  
                									            </div>
                									            <div class="col-md-5">
                									                	<label for="">Customer Name <span class="important">*</span></label>
                									            </div>
                									            <div class="col-md-7">
                									                 <input type="text" name="cus_name" class="form-control mb-3" id="" placeholder="" value="{{$invoice->customer_name}}"> 
                									            </div>
                									            <div class="col-md-5">
                									                	<label for="">Contact Number <span class="important">*</span></label>
                									            </div>
                									            <div class="col-md-7">
                									                 <input type="text" name="contact" class="form-control mb-3" id="" placeholder="" value="{{$invoice->customer_number}}"> 
                									            </div>
                									            <div class="col-md-5">
                									                	<label for="">Billing to <span class="important">*</span></label>
                									            </div>
                									            <div class="col-md-7">
                									                 <textarea  name="bill_to" class="form-control mb-3" id="" placeholder="">{{$invoice->billing_to}}</textarea>
                									            </div>
                									            <div class="col-md-5">
                									                	<label for="">Travel Date <span class="important">*</span></label>
                									            </div>
                									            <div class="col-md-7">
                									                 <input type="date" class="form-control mb-3" name="tra_date" id="" placeholder="" value="{{$invoice->travel_date}}">
                									            </div>
                									    </div>
                									   </div>
                									<div class="col-md-2"></div>
                									<div class="col-md-5">
                									  <div class="row">
                									       <div class="col-md-5 pr-0">
                									                <label  class="mt-2 right-text" for="name">Due Date <span class="important">*</span></label>
                									            </div>
                									            <div class="col-md-7">
                									               <input type="date" class="form-control mb-3" name="due_date" value="{{$invoice->due_date}}">  
                									         </div>
                									           <div class="col-md-5 pr-0">
                									                	<label  class="mt-2 right-text" for="name">Customer Tax Details <span class="important">*</span></label>
                									            </div>
                									            <div class="col-md-7">
                									               <input type="date" class="form-control mb-3" name="tax_det" value="{{$invoice->cus_tax_det}}">  
                									         </div>
                									           <div class="col-md-5 pr-0">
                									                	<label  class="mt-2 right-text" for="name">Travel Location<span class="important">*</span></label>
                									            </div>
                									            <div class="col-md-7">
                									               <input type="text" class="form-control mb-3" name="tra_loca" value="{{$invoice->travel_location}}">  
                									         </div>
                									           <div class="col-md-5 pr-0">
                									                	<label  class="mt-2 right-text" for="tra_type">Travel Type<span class="important">*</span></label>
                									            </div>
                									            <div class="col-md-7">
                									              <select class="form-control mb-3" name="tra_type" id="tra_type">
                									                  <option value="Flight" {{($invoice->travel_type) == "Flight"  ? 'selected' : ''}}>Flight</option>
                									                  <option value="Train" {{($invoice->travel_type) == "Train"  ? 'selected' : ''}}>Train</option>
                									              </select>
                									         </div>
                									            <div class="col-md-5 pr-0">
                									                	<label  class="mt-2 right-text" for="travellers">Travellers<span class="important">*</span></label>
                									            </div>
                									            <div class="col-md-7">
                									              <div class="row pl-3 pr-3">
                									                  <div class="col-4 p-0">
                									                      <input class="form-control mb-3" type="number" name="adults" placeholder="Adults" value="{{$travellers->adults}}">
                									                  </div>
                									                  <div class="col-4 p-0">
                									                      <input class="form-control mb-3" type="number" name="kids" placeholder="Kids" value="{{$travellers->kids}}">
                									                  </div>
                									                  <div class="col-4 p-0">
                									                      <input class="form-control mb-3" type="number" name="infants" placeholder="Infants" value="{{$travellers->infants}}">
                									                  </div>
                									              </div>
                									         </div>
                									  </div>  
                									</div>
        									</div>
        									<hr>
        									<div class="row">
        									    <div class="col-md-2">
        									        <h5>Pricing Details</h5>
        									    </div>
        									    <div class="col-md-7">
        									        <div  class="row">
        									            <div class="col-2">
        									                <label class="mt-2" for="name">Customise: <span class="important">*</span></label>
        									            </div>
        									            <div class="col-3 pl-2 pr-2">
        									                <select class="form-control" name="per_person_rate">
        									                    <option value="30" {{($price_det->per_person_rate) == "30"  ? 'selected' : ''}}>per_person_rate</option>
        									                </select>
        									            </div>
        									            <div class="col-4 pl-2 pr-2">
        									                <select class="form-control" name="price_det">
        									                    <option value="23" {{($price_det->price_det) == "23"  ? 'selected' : ''}}>Add/Remove Detail</option>
        									                </select>
        									            </div>
        									            <div class="col-3 pl-2 pr-2">
        									                <select class="form-control" name="advanced">
        									                    <option value="advanced" {{($price_det->advanced) == "advanced"  ? 'selected' : ''}}>Advanced</option>
        									                </select>
        									            </div>
        									        </div>
        									    </div>
        									    <div class="col-md-3">
        									        <div class="mt-3">
        									            <b>Tax Type</b> :
        									            <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="tax_type" id="tax_type" value="Single Tax" {{($price_det->tax_type) == 'Single Tax'  ? 'checked' : ''}}>
                                                          <label class="form-check-label" for="inlineRadio1">Single Tax</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="tax_type" id="tax_type" value="Double Tax" {{($price_det->tax_type) == 'Double Tax'  ? 'checked' : ''}}>
                                                          <label class="form-check-label" for="inlineRadio2">Double Tax</label>
                                                        </div>
        									        </div>
        									    </div>
        									    <div class="col-md-12 mt-3">
        									        <table class="table table-responsive">
        									            <thead  style="background:#F2F3F4">
        									                <tr>
        									                    <th>Product/Services</th>
        									                    <th rowspan="4">Description</th>
        									                    <th>Total Pax</th>
        									                    <th>Total Pax Price</th>
        									                    <th>Discount</th>
        									                    <th>Tax</th>
        									                    <th>Amount</th>
        									                </tr>
        									            </thead>
        									            <tbody>
        									                 <tr>
            									                <td>
																	<select class="table-field" name="package_name" placeholder="%" >
																		@foreach($package as $package)
            									                    		<option value="{{$package->name}}" {{($price_det->package_name) == $package->name  ? 'selected' : ''}}>{{$package->name}}</option>
																		@endforeach
            									                    </select>
																</td>
            									                <td><textarea class="table-field" name="descrip" type="text" placeholder="Enter Details Description (optional)">{{$price_det->description}}</textarea></td>
            									                <td><input class="table-field" name="total_pax" type="text" placeholder="" value="{{$price_det->total_pax}}"></td>
            									                <td><input class="table-field" name="total_pax_price" type="text" placeholder="" value="{{$price_det->total_pax_price}}"></td>
            									                <td><select class="table-field" name="discount" placeholder="%" >
            									                    <option value="10%" {{($price_det->discounts) == "10%"  ? 'selected' : ''}}>10%</option>
            									                    <option value="20%" {{($price_det->discounts) == "20%"  ? 'selected' : ''}}>20%</option>
            									                    <option value="30%" {{($price_det->discounts) == "30%"  ? 'selected' : ''}}>30%</option>
            									                	</select>
																</td>
            									                <td><select class="table-field" name="tax" placeholder="%" >
            									                    <option value="10%" {{($price_det->tax) == "10%"  ? 'selected' : ''}}>10%</option>
            									                    <option value="20%" {{($price_det->tax) == "20%"  ? 'selected' : ''}}>20%</option>
            									                    <option value="30%" {{($price_det->tax) == "30%"  ? 'selected' : ''}}>30%</option>
            									                    </select>
            									               	</td>
            									                <td>
            									                	<input class="table-field" name="amount" type="text" placeholder="" value="{{$price_det->final_amt}}">
            									                </td>
            									             
            									            </tr>
        									            </tbody>
        									        </table>
        									    </div>
        									    <div class="col-md-12">
        									        <div class="card card-body">
        									            <h5 class="mb-3">Pax Details</h5>
        									            <div class="row">
															<?php for($i=0 ; $i<count($pax_det->fname); $i++){ ?>
        									                <div class="col-md-12">
        									                    <div class="row">
        									                        <div class="col-md-4">
        									                            	<label class="mt-2" for="name">First Name and Last Name <span class="important">*</span></label>
        									                                <div class="row pl-3 pr-3">
        									                                    <div class="col-6 p-0">
        									                                        	<input class="form-control  mb-3" type="text" name="fname[]" placeholder="Enter First Name" value="{{$pax_det->fname[$i]}}">
        									                                    </div>
        									                                    <div class="col-6 p-0">
        									                                        	<input class="form-control  mb-3" type="text" name="lname[]" placeholder="Enter Last Name" value="{{$pax_det->lname[$i]}}">
        									                                    </div>
        									                                </div>
        									                        </div>
        									                        <div class="col-md-2">
        									                            	<label class="mt-2" for="name">DOB <span class="important">*</span></label>
        									                            	<input type="date" class="form-control  mb-3" name="dob[]" placeholder="Enter Last Name" value="{{$pax_det->dob[$i]}}">
        									                        </div>
        									                        <div class="col-md-3">
        									                            	<label class="mt-2" for="name">Passpord No <span class="important">*</span></label>
        									                            	<input type="date" class="form-control  mb-3" name="passport_no[]" placeholder="Enter Passport No" value="{{$pax_det->passport_no[$i]}}">
        									                        </div>
        									                        <div class="col-md-3">
																			<img class="user-img"  id="image{{$i}}" src="{{asset('uploads/invoice/pax_det/'.$pax_det->file[$i])}}" alt="">
																			<input type="file" class="hidden-field" onchange=preview(this) data-id="imagefile{{$i}}" name="pax_file[]" id="pax_file" value="{{$pax_det->file[$i]}}">
																			<label for="pax_file"><h4><i class="fa fa-picture-o"></i></h4></label>
        									                        </div>
        									                        
        									                    </div>
        									                </div>
        									                <div class="col-md-6">
        									                    <textarea class="form-control" name="pax_description[]">{{$pax_det->description[$i]}}</textarea>
        									                </div>
															<script>
															function preview(image){
																// alert(image);
																var c = <?php echo $i ?>;
																if (image.files && image.files[0]) {
																		var reader = new FileReader();
																		reader.onload = function (e){
																			alert(c);
																			$('#image'+c)
																				.attr('src', e.target.result)
																				.width(100)
																				.height(100);
																		};
																		reader.readAsDataURL(image.files[0]);
																}
															}
														</script>
															<?php } ?>

															<div class="col-md-6">
        									                    <button class="btn btn-primary btn-sm mt-2" type="button" onclick="pax_details();">Add More</button>
        									                </div>
                                                        </div>
        									            <div class="mt-3" style="" id="pax_details" ></div>
        									        </div>
        									    </div>
        									    <div class="col-md-12">
        									        <div class="card card-body">
        									            <h5 class="mb-3">Travel/Tour Itinerary Details</h5>
        									              	<textarea type="date" class="form-control summernote mb-3"></textarea>
        									        </div>
        									    </div>
        									    <div class="col-md-8">
        									        <div class="card card-body">
        									            <h5 class="mb-3">Schuduled Payments</h5>
        									              <div class="panel-body">
                                                             <div class="row">
                                                                <div class="col-sm-4 nopadding">
                                                                   <div class="form-group">
                                                                       <label for="">Description</label>
                                                                      <input type="text" class="form-control" id=""  name="description" placeholder="Description about scheduled payment" >
                                                                   </div>
                                                                </div>
                                                                <div class="col-sm-3 nopadding">
                                                                   <div class="form-group">
                                                                       <label for="">Schedule Amount</label>
                                                                      <input type="number" class="form-control" id=""  name="enter_amount" placeholder="Enter amount" >
                                                                   </div>
                                                                </div>
                                                                <div class="col-sm-3 nopadding">
                                                                   <div class="form-group">
                                                                       <label for="">Schedule Date</label>
                                                                      <input type="date" class="form-control" id=""  name="schedule" placeholder="Schedule Date" >
                                                                   </div>
                                                                </div>
                                                                <div class="col-sm-2 nopadding">
                                                                   <div class="form-group">
                                                                      <div class="input-group mt-4">
                                                                         <div class="input-group-btn">
                                                                            <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="fa fa-plus" aria-hidden="true"></span> </button>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <div style="" id="education_fields" ></div>
                                                          </div>
        									        </div>
        									    </div>
        									    <div class="col-md-4">
        									        <div class="card card-body">
        									            <h5 class="mb-3">File Upload</h5>
        									              <div class="panel-body">
                                                             <div class="row">
                                                                <div class="col-sm-9 nopadding">
                                                                   <div class="form-group">
                                                                    <label for="">File Upload</label>
                                                                      <input type="file" class="form-control" id=""  name="file" >
                                                                   </div>
                                                                </div>
                                                                <div class="col-sm-3 nopadding">
                                                                   <div class="form-group">
                                                                      <div class="input-group">
                                                                         <div class="input-group-btn">
                                                                            <button class="btn btn-success mt-4" type="button"  onclick="file_upload();"> <span class="fa fa-plus" aria-hidden="true"></span> </button>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <div style="" id="file_upload" ></div>
                                                          </div>
        									        </div>
        									    </div>
        									    <div class="col-md-6">
        									        <div class="card card-body">
        									            <h5 class="mb-3">More Details</h5>
        									              	<textarea type="date" class="form-control summernote mb-3"></textarea>
        									        </div>
        									    </div>
        									    <div class="col-md-6">
        									        <div class="card card-body">
        									            <h5 class="mb-3">Terms and condition</h5>
        									              	<textarea type="date" class="form-control summernote mb-3"></textarea>
        									        </div>
        									    </div>
        									</div>
                                          <button type="submit" name="update_invoice" class="btn btn-primary">Update</button>
                                          <button class="btn btn-danger">Cancel</button>
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
<script>
    var room = 1;
    var ro = 1;
    function education_fields() {
   
       room++;
       var objTo = document.getElementById('education_fields')
       var divtest = document.createElement("div");
       divtest.setAttribute("class", "removeclass"+room);
       var rdiv = 'removeclass'+room;
       divtest.innerHTML = '<div class="row"></br><div class="col-sm-4 nopadding">' +
           '<div class="form-group">' +
           '<label for="">Description</label>'+
           '<input type="text" class="form-control" id="describtion" name="describtion['+ro+']" value="" placeholder="Description about scheduled payment" required>' +
           '</div>' +
           '</div>' +
           '<div class="col-sm-3 nopadding">' +
           '<div class="form-group">' +
            '<label for="">Schedule Amount</label>'+
           '<input type="number" class="form-control" id="enter_amount" name="enter_amount['+ro+']" value="" placeholder="Enter Amount" required>' +
           '</div>' +            
           '</div>' +
           '<div class="col-sm-3 nopadding">' +
           '<div class="form-group">' +
             '<label for="">Schedule Date</label>'+
           '<input type="date" class="form-control" id="address" name="address['+ro+']" value="" placeholder="Address" required>' +
           '</div>' +
           '</div>' +
           '<div class="col-sm-2 nopadding">' +
           '<div class="form-group">' +
           '<div class="input-group"> ' +
           '<div class="input-group-btn"> <button class="btn btn-danger mt-4" type="button" onclick="remove_education_fields('+ room +');"> <span class="fa fa-minus" aria-hidden="true"></span> </button></div>' +
           '</div></div></div></div>';
   ro++;
       objTo.appendChild(divtest)
   }
    function remove_education_fields(rid) {
       $('.removeclass'+rid).remove();
   }
    var file = 1;
    var fi = 1;
    function file_upload() {
    
        file++;
        var objTo1 = document.getElementById('file_upload')
        var divfile = document.createElement("div");
        divfile.setAttribute("class", "removeclass1"+file);
        var rdiv = 'removeclass1'+file;
        divfile.innerHTML = '<div class="row"></br><div class="col-sm-9 nopadding">' +
            '<div class="form-group">' +
            '<label for=""> File Upload</label>'+
            '<input type="file" class="form-control" id="upload_file" name="upload_file['+fi+']" value="" required>' +
            '</div>' +
            '</div>' +
            '<div class="col-sm-3 nopadding">' +
            '<div class="form-group">' +
            '<div class="input-group"> ' +
            '<div class="input-group-btn"> <button class="btn btn-danger mt-4" type="button" onclick="remove_upload_fields('+ file +');"> <span class="fa fa-minus" aria-hidden="true"></span> </button></div>' +
            '</div></div></div></div>';
    ro++;
        objTo1.appendChild(divfile)
    }
    function remove_upload_fields(rid) {
        $('.removeclass1'+rid).remove();
    }
    var pax = 1;
var px = 1;
function pax_details() {
   pax++;
   var objTo2 = document.getElementById('pax_details')
   var divtest2 = document.createElement("div");
   divtest2.setAttribute("class", "removeclass"+pax);
   var rdiv = 'removeclass'+pax;
   divtest2.innerHTML = '<div class="row"></br>   <div class="col-md-12">'+
    '  <div class="row">'+
        ' <div class="col-md-4">'+
            '<label class="mt-2" for="name">First Name and Last Name <span class="important">*</span></label>'+
            ' <div class="row pl-3 pr-3">'+
                ' <div class="col-6 p-0">'+
                    ' <input class="form-control  mb-3" type="text" name="" placeholder="Enter First Name">'+
                    ' </div>'+
                    '<div class="col-6 p-0">'+
                        ' <input class="form-control  mb-3" type="text" name="" placeholder="Enter Last Name">'+
                        ' </div>'+
                        ' </div>'+
                        '  </div>'+
                        ' <div class="col-md-2">'+
                            ' <label class="mt-2" for="name">DOB <span class="important">*</span></label>'+
                            '<input type="date" class="form-control  mb-3" name="" placeholder="Enter Last Name">'+
                            '</div>'+
                            '<div class="col-md-3">'+
                                ' <label class="mt-2" for="name">Passpord No <span class="important">*</span></label>'+
                                ' <input type="date" class="form-control  mb-3" name="" placeholder="Enter Passport No">'+
                                '</div>'+
                                '<div class="col-md-3">'+
                                    ' <label class="mt-2" for="name">Upload File <span class="important">*</span></label>'+
                                    '<input type="file" class="form-control  mb-3" name="">'+
                                    '</div>'+
                
                                    ' </div>'+
                                    '</div>'+
                                    '<div class="col-md-6">'+
                                        ' <textarea class="form-control"></textarea>'+
                                        '</div>'+
       '<div class="col-sm-2 nopadding">' +
       '<div class="form-group">' +
       '<div class="input-group"> ' +
       '<div class="input-group-btn"> <button class="btn btn-danger mt-4" type="button" onclick="remove_pax_details('+ pax +');"> <span class="fa fa-minus" aria-hidden="true"></span> </button></div>' +
       '</div></div></div></div>';
ro++;
   objTo2.appendChild(divtest2)
}
function remove_pax_details(pid) {
   $('.removeclass'+pid).remove();
}


</script>

@include('../includes/footer')
<script>
// $(document).on('change', 'input[class="hidden-field"]', function() {
// //   var id = $(this).parent('div').find('.user-img').attr('id');
// var id = $(this).next('img').attr('id');
//   console.log('hello');
  
//   console.log(id);
// }); 
</script>