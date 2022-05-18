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
               <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">
                     All</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="pills-days-tab" data-toggle="pill" href="#pills-days" role="tab" aria-controls="pills-days" aria-selected="false">
                     Next 7 days</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="pills-month-tab" data-toggle="pill" href="#pills-month" role="tab" aria-controls="pills-month" aria-selected="false">
                     This Month</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="pills-next-month-tab" data-toggle="pill" href="#pills-next-month" role="tab" aria-controls="pills-next-month" aria-selected="false">
                     Next Month</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="pills-booking-tab" data-toggle="pill" href="#pills-booking" role="tab" aria-controls="pills-booking" aria-selected="false">
                     Bookings</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="pills-cruise-tab" data-toggle="pill" href="#pills-crusie" role="tab" aria-controls="pills-crusie" aria-selected="false">
                     Clients</a>
                  </li>
               </ul>
               <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                     <div class="card">
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
                  <div class="tab-pane fade" id="pills-days" role="tabpanel" aria-labelledby="pills-all-tab">
                     <div class="card">
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
                                                <tr>
                                                    <td>1</td>
                                                   <td>Fernada iman <br> #12345</td>
                                                   <td>England</td>
                                                   <td>15 March 2021</td>
                                                   <td>Rs. 9876</td>
                                                   <td>Rs. 9876</td>
                                                   <td>Rs. 9876</td>
                                                   <td>15 March 2021</td>
                                                   <td>-</td>
                                                   <td>
                                                      <button class="btn btn-primary btn-sm">View</button>
                                                      </a>
                                                   </td>
                                                </tr>
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
                  <div class="tab-pane fade" id="pills-month" role="tabpanel" aria-labelledby="pills-all-tab">
                     <div class="card">
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
                                                <tr>
                                                    <td>1</td>
                                                   <td>Fernada iman <br> #12345</td>
                                                   <td>England</td>
                                                   <td>15 March 2021</td>
                                                   <td>Rs. 9876</td>
                                                   <td>Rs. 9876</td>
                                                   <td>Rs. 9876</td>
                                                   <td>15 March 2021</td>
                                                   <td>-</td>
                                                   <td>
                                                      <button class="btn btn-primary btn-sm">View</button>
                                                      </a>
                                                   </td>
                                                </tr>
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
                  <div class="tab-pane fade" id="pills-next-month" role="tabpanel" aria-labelledby="pills-all-tab">
                     <div class="card">
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
                                                <tr>
                                                    <td>1</td>
                                                   <td>Fernada iman <br> #12345</td>
                                                   <td>England</td>
                                                   <td>15 March 2021</td>
                                                   <td>Rs. 9876</td>
                                                   <td>Rs. 9876</td>
                                                   <td>Rs. 9876</td>
                                                   <td>15 March 2021</td>
                                                   <td>-</td>
                                                   <td>
                                                      <button class="btn btn-primary btn-sm">View</button>
                                                      </a>
                                                   </td>
                                                </tr>
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
                  <div class="tab-pane fade" id="pills-booking" role="tabpanel" aria-labelledby="pills-all-tab">
                     <div class="card">
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
                                                <tr>
                                                    <td>1</td>
                                                   <td>Fernada iman <br> #12345</td>
                                                   <td>England</td>
                                                   <td>15 March 2021</td>
                                                   <td>Rs. 9876</td>
                                                   <td>Rs. 9876</td>
                                                   <td>Rs. 9876</td>
                                                   <td>15 March 2021</td>
                                                   <td>-</td>
                                                   <td>
                                                      <button class="btn btn-primary btn-sm">View</button>
                                                      </a>
                                                   </td>
                                                </tr>
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
                  <div class="tab-pane fade" id="pills-booking" role="tabpanel" aria-labelledby="pills-all-tab">
                     <div class="card">
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
                                                <tr>
                                                    <td>1</td>
                                                   <td>Fernada iman <br> #12345</td>
                                                   <td>England</td>
                                                   <td>15 March 2021</td>
                                                   <td>Rs. 9876</td>
                                                   <td>Rs. 9876</td>
                                                   <td>Rs. 9876</td>
                                                   <td>15 March 2021</td>
                                                   <td>-</td>
                                                   <td>
                                                      <button class="btn btn-primary btn-sm">View</button>
                                                      </a>
                                                   </td>
                                                </tr>
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
                  <div class="tab-pane fade" id="pills-crusie" role="tabpanel" aria-labelledby="pills-all-tab">
                     <div class="card">
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
                                                <tr>
                                                    <td>1</td>
                                                   <td>Fernada iman <br> #12345</td>
                                                   <td>England</td>
                                                   <td>15 March 2021</td>
                                                   <td>Rs. 9876</td>
                                                   <td>Rs. 9876</td>
                                                   <td>Rs. 9876</td>
                                                   <td>15 March 2021</td>
                                                   <td>-</td>
                                                   <td>
                                                       <a href="{{url('booking/trip_details')}}">
                                                      <button class="btn btn-primary btn-sm">View</button>
                                                      </a>
                                                   </td>
                                                </tr>
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
   </div>
</div>
@include('../includes/footer')
