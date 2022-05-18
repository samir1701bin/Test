@include('../includes/header')
@include('../includes/booking_sidebar')
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
            <div class="col-md-4">
            </div>
         </div>
      </div>
   </div>
   <div class="pcoded-inner-content">
      <div class="main-body">
         <div class="page-wrapper">
            <div class="page-body">
                 <div class="card">
                     <div class="card-header">
                         <h5>Partially Paid Trips</h5>
                     </div>
                         <div class="card-body">
                             <div class="row">
                              <div class="col-xl-3 col-md-6">
                                 <div class="card">
                                    <div class="card-block">
                                       <div class="row align-items-center">
                                          <div class="col-8">
                                             <h4 class="text-c-purple">30200</h4>
                                             <h6 class="text-muted m-b-0">Total Trips</h6>
                                          </div>
                                          <div class="col-4 text-right">
                                             <i class="fa fa-bar-chart f-28"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                 <div class="card">
                                    <div class="card-block">
                                       <div class="row align-items-center">
                                          <div class="col-8">
                                             <h4 class="text-c-green">50+</h4>
                                             <h6 class="text-muted m-b-0">Fully Paid </h6>
                                          </div>
                                          <div class="col-4 text-right">
                                             <i class="fa fa-file-text-o f-28"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                 <div class="card">
                                    <div class="card-block">
                                       <div class="row align-items-center">
                                          <div class="col-8">
                                             <h4 class="text-c-red">145</h4>
                                             <h6 class="text-muted m-b-0">Partially Paid</h6>
                                          </div>
                                          <div class="col-4 text-right">
                                             <i class="fa fa-calendar-check-o f-28"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                 <div class="card">
                                    <div class="card-block">
                                       <div class="row align-items-center">
                                          <div class="col-8">
                                             <h4 class="text-c-blue">500</h4>
                                             <h6 class="text-muted m-b-0">Overdue Trips</h6>
                                          </div>
                                          <div class="col-4 text-right">
                                             <i class="fa fa-hand-o-down f-28"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3 col-6">
                                 <div class="counter-section card card-body mb-3">
                                    <h4>Rs.700</h4>
                                    <span>Total Amount</span>
                                 </div>
                              </div>
                              <div class="col-md-3 col-6">
                                 <div class="counter-section card card-body mb-3">
                                    <h4>Rs.700</h4>
                                    <span>Paid Amount</span>
                                 </div>
                              </div>
                              <div class="col-md-3 col-6">
                                 <div class="counter-section card card-body mb-3">
                                    <h4>Rs.700</h4>
                                    <span>Balance Amount</span>
                                 </div>
                              </div>
                              <div class="col-md-3 col-6">
                                 <div class="counter-section card card-body mb-3">
                                    <h4>Rs.700</h4>
                                    <span>Overdue Amount</span>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="card">
                                    <div class="card-block">
                                       <div class="dt-responsive table-responsive">
                                          <table id="" class="datatable table table-striped table-bordered nowrap">
                                             <thead>
                                                <tr>
                                                   <th>#</th>
                                                   <th>Customer Name</th>
                                                   <th>Travel Loaction</th>
                                                   <th>Travel Date</th>
                                                   <th>Amount</th>
                                                   <th>Paid so Far</th>
                                                   <th>Balance</th>
                                                   <th>Balance Due Date</th>
                                                   <th>Voucher Status</th>
                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @php $i=1 @endphp
                                                @foreach($tripdata as $data)
                                                <tr>
                                                   <td>{{$i}}</td>
                                                   <td>{{$data->customer_name}} <br> #12345</td>
                                                   <td>{{$data->tra_location}}</td>
                                                   <td>{{$data->tra_date}}</td>
                                                   <td>{{$data->amount}}</td>
                                                   <td>{{$data->paid_so_far}}</td>
                                                   <td>{{$data->balance}}</td>
                                                   <td>{{$data->balance_due_date}}</td>
                                                   <td>{{$data->status}}</td>
                                                   <td>
                                                      <a href="{{url('booking/trip_details')}}">
                                                      <button class="btn btn-primary btn-sm">View</button>
                                                      </a>
                                                   </td>
                                                </tr>
                                                @php $i+=$i @endphp
                                                @endforeach
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
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
