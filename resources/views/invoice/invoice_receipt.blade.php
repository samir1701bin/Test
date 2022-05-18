
<div class="tab-pane fade" id="invoice_preview" role="tabpanel" aria-labelledby="v-pills-profile-tab">
   <div class="row">
      <div class="col-md-4">
         <h5>Invoice Preview</h5>
      </div>
   </div>
   <div>
      <!-- Invoice card start -->
      <div class="card">
         <div class="row invoice-contact">
            <div class="col-md-8">
               <div class="invoice-box row">
                  <div class="col-sm-12">
                     <table class="table table-responsive invoice-table table-borderless">
                        <tbody>
                           <tr>
                              <td>Customer Type:{{$invoice->customer_type}}</td>
                           </tr>
                           <tr>
                              <td>Project/Service:{{$invoice->service}}</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
            </div>
         </div>
         <div class="card-block">
            <div class="row invoive-info">
               <div class="col-md-4 col-xs-12 invoice-client-info">
                  <h6>Client Information :</h6>
                  <p class="m-0">{{$invoice->customer_name}}</p>
                  <p class="m-0 m-t-10">{{$invoice->billing_to}}</p>
                  <p class="m-0">{{$invoice->customer_number}}</p>
                  <p><a href="mailto:demo@gmail.com" target="_top">demo@gmail.com</a></p>
               </div>
               <div class="col-md-4 col-xs-12 ">
                  <h6>Travel Information :</h6>
                  <table class="table table-responsive invoice-table invoice-order table-borderless">
                     <tbody>
                        <tr>
                           <th>Travel Date :</th>
                           <td>{{$invoice->travel_date}}</td>
                        </tr>
                        
                        <tr>
                           <th>Travel Location :</th>
                           <td>{{$invoice->travel_location}}</td>
                        </tr>
                        
                        <tr>
                           <th>Travel Type :</th>
                           <td>{{$invoice->travel_type}}</td>
                        </tr>
                        
                        <tr>
                           <th>Travellers:</th>
                           <td>Adults:{{$travellers->adults}}</td>
                           <td>Kids:{{$travellers->kids}}</td>
                           <td>Infants:{{$travellers->infants}}</td>
                        </tr>
                        
                        <tr>
                           <th>Status:</th>
                           <td>
                              <span class="label label-warning">
                                 @if($invoice->status == 0)
											Unpaid Invoice
											@elseif($invoice->status == 1)Overdue Invoice
											@elseif($invoice->status == 2)Partially Paid Invoice
											@else Fully Paid Invoice
											@endif
                              </span>
                           </td>
                        </tr>
                     
                     </tbody>
                  </table>
               </div>
               <div class="col-md-4 col-xs-12">
                  <h6 class="m-b-20">Invoice Number <span>#12398521473</span></h6>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="table-responsive">
                        <h2>Pricing Details</h2>
                        <p>Per person rate:{{$price_det->per_person_rate}}</p>
                        <p>Add/remove details:{{$price_det->price_det}}</p>
                        <p>Advanced:{{$price_det->advanced}}</p>
                        <p>Tax Type:{{$price_det->tax_type}}</p>
                     <table class="table  invoice-detail-table">
                        <thead>
                           <tr class="thead-default">
                              <th>Package</th>
                              <th>Description</th>
                              <th>Total Pax</th>
                              <th>Total Pax Price</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>{{$price_det->package_name}}</td>
                              <td>{{$price_det->description}}</td>
                              <td>{{$price_det->total_pax}}</td>
                              <td>{{$price_det->total_pax_price}}</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <h2>Pax Details</h2>
                  <table class="table table-responsive invoice-table invoice-total">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Date of birth</th>
                           <th>Passport No</th>
                        </tr>
                     </thead>
                     <tbody>
                        @for($i=0 ; $i<count($pax_det->fname); $i++)
                           <tr>
                              <td>{{$pax_det->fname[$i]}} {{$pax_det->lname[$i]}}</td>
                              <td>{{$pax_det->dob[$i]}}</td>
                              <td>{{$pax_det->passport_no[$i]}}</td>
                           </tr>
                        @endfor
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <h6>Terms And Condition :</h6>
                  <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                     labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                     laboris
                     nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- Invoice card end -->
      <!-- <div class="row text-center">
         <div class="col-sm-12 invoice-btn-group text-center">
            <button type="button"
               class="btn btn-primary btn-print-invoice m-b-10 btn-sm waves-effect waves-light m-r-20">Print</button>
            <button type="button" class="btn btn-danger waves-effect m-b-10 btn-sm waves-light">Cancel</button>
         </div>
      </div> -->
   </div>
</div>