@include('../includes/header')
@include('../includes/booking_sidebar')
<!--track order css-->
<style>
.modal-body td, th {
    padding: 5px 15px;
}
 .bs4-order-tracking {
    margin-bottom: 30px;
    overflow: hidden;
    color: #878788;
    padding-left: 0px;
    margin-top: 30px
}

.bs4-order-tracking li {
    list-style-type: none;
    font-size: 13px;
    width: 12%;
    float: left;
    position: relative;
    font-weight: 400;
    color: #878788;
    text-align: center
}

.bs4-order-tracking li:first-child:before {
    margin-left: 15px !important;
    padding-left: 11px !important;
    text-align: left !important
}

.bs4-order-tracking li:last-child:before {
    margin-right: 5px !important;
    padding-right: 11px !important;
    text-align: right !important
}

.bs4-order-tracking li>div {
    color: #fff;
    width: 35px;
    height: 35px;
    text-align: center;
    line-height: 29px;
    display: block;
    font-size: 12px;
    background: #878788;
    border-radius: 50%;
    margin: auto;
    padding-top:10px;
}

.bs4-order-tracking li:after {
    content: '';
    width: 150%;
    height: 2px;
    background: #878788;
    position: absolute;
    left: 0%;
    right: 0%;
    top: 15px;
    z-index: -1
}

.bs4-order-tracking li:first-child:after {
    left: 50%
}

.bs4-order-tracking li:last-child:after {
    left: 0% !important;
    width: 0% !important
}

.bs4-order-tracking li.active {
    font-weight: bold;
    color: #448aff
}

.bs4-order-tracking li.active>div {
    background: #448aff
}

.bs4-order-tracking li.active:after {
    background: #448aff
}

.card-timeline {
    background-color: #fff;
    z-index: 0
}
.nav-pills .nav-link.active, .nav-pills .nav-link.active:focus, .nav-pills .nav-link.active:hover, .nav-pills .nav-link.active, .nav-pills .nav-link.active:focus, .nav-pills .nav-link.active:hover, .nav-pills .nav-link.active.active, .nav-pills .nav-link.active.active:focus, .nav-pills .nav-link.active.active:hover {
    text-align: left; 
}
.border-right{
    border-right: 2px solid black!important;
    padding-right: 5px;
}
 @media screen and (max-width: 600px) {
     .bs4-order-tracking li>div {
        color: #fff;
        width: 22px;
        height: 22px;
        text-align: center;
        line-height: 29px;
        font-size: 8px;
        background: #878788;
        border-radius: 50%;
        margin: auto;
        padding-top: 4px;
    }
    .bs4-order-tracking li {
    font-size: 7px;
        font-weight: 500!important;
    }
 }
</style>
<style>
    .w-50{
    width:50%!important;
}
</style>
<style>
    .timeline {
    list-style: none;
    padding: 20px 0 20px;
    position: relative;
}
ul.timeline:before {
    left: 40px;
}

.timeline:before {
    top: 0;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 3px;
    background-color: #448aff;
    left: 50%;
    margin-left: -1.5px;
}
.timeline > li {
    margin-bottom: 20px;
    position: relative;
}
.timeline > li:before, .timeline > li:after {
    content: " ";
    display: table;
}
ul.timeline > li > .timeline-badge {
    left: 15px;
    margin-left: 0;
    top: 16px;
}

.timeline > li > .timeline-badge {
   color: white;
    width: 40px;
    height: 40px;
    line-height: 50px;
    padding-top: 10px;
    font-size: 1.4em;
    text-align: center;
    position: absolute;
    top: 16px;
    left: 50%;
    margin-left: -25px;
    background-color: #448aff;
    border: 2px soild #448aff;
    z-index: 100;
    border-top-right-radius: 50%;
    border-top-left-radius: 50%;
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 50%;

}
ul.timeline > li > .timeline-panel {
    float: right;
}
ul.timeline > li > .timeline-panel {
    width: calc(100% - 90px);
    width: -moz-calc(100% - 90px);
    width: -webkit-calc(100% - 90px);
}
.timeline > li > .timeline-panel {
    width: 46%;
    float: left;
    border: 1px solid #d4d4d4;
    border-radius: 2px;
    padding: 5px;
    position: relative;
    -webkit-box-shadow: 0 1px 6px rgb(0 0 0 / 18%);
    box-shadow: 0 1px 6px rgb(0 0 0 / 18%);
}
.timeline > li:after {
    clear: both;
}
@media only screen and (max-width: 600px) {
  .botton-section .btn {
    width: 32%;
    padding: 5px 5px!important;
}
}
</style>
<!--track order css-->

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
								 <div class="row">
								   <div class="col-xl-12 col-md-6">
										<div class="card">
										    <div class="card-header">
										        <div class="row">
    										            <div class="col-md-9">
    										                <ul class="trip-details">
    										                    <li> Booking ID :KSA 1234</li>
    										                    <li><b class="blue"> B2B</b></li>
    										                    <li><i class="fa fa-user"></i> &nbsp; Onder Falay</b></li>
    										                    <li><i class="fa fa-location"></i> &nbsp; Mauritius</b></li>
    										                    <li><i class="fa fa-calendar"></i> &nbsp; Travel Date: 18 feb 2021</b></li>
    										                    <li><i class="fa fa-user"></i> &nbsp; 4</b></li>
    										                    <li><i class="fa fa-plane"></i> &nbsp; 4</b></li>
    										                </ul>
    										                 
    										              </div>
										              <div class="col-md-3">
										                  <a><b class="blue"><i class="fa fa-refresh"></i> &nbsp; Reshedule</b></a>
										                  <a><b class="red"><i class="fa fa-time"></i> &nbsp; Cancel this booking</b></a>
										              </div>
										     </div>
										   </div>
										   
										      <div class="">
										        <div class="card card-timeline px-2 border-none">
                                                    <ul class="bs4-order-tracking">
                                                        <li class="step active">
                                                            <div><i class="fa fa-file"></i></div> Invoice Created
                                                        </li>
                                                        <li class="step active">
                                                            <div><i class="fa fa-book"></i></div> Booking Initiated
                                                        </li>
                                                        <li class="step">
                                                            <div><i class="fa fa-plane"></i></div> Book Flight
                                                        </li>
                                                        <li class="step ">
                                                            <div><i class="fa fa-building"></i></div> Book Hotel
                                                        </li>
                                                        <li class="step ">
                                                            <div><i class="fa fa-list"></i></div> Tour Arranged
                                                        </li>
                                                        <li class="step ">
                                                            <div><i class="fa fa-gift"></i></div> Sent Vouchers
                                                        </li>
                                                        <li class="step ">
                                                            <div><i class="fa fa-comments-o"></i></div> Feedback Received
                                                        </li>
                                                        <li class="step ">
                                                            <div><i class="fa fa-check"></i></div> Booking Completed
                                                        </li>
                                                    </ul>
                                                    <!--<h5 class="text-center"><b>In transit</b>. The order has been shipped!</h5>-->
                                                </div>
										    </div>
									</div>
									    <!--deatils card start here-->
									     <div class="card">
									         <div class="card-body">
									             <div class="row">
									                 <div class="col-md-2">
									                     <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#booking_details" role="tab" aria-controls="v-pills-home" aria-selected="true">Booking Details</a>
                                                          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#invoice_preview" role="tab" aria-controls="v-pills-profile" aria-selected="false">Invoice Preview</a>
                                                          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#arrival_departure" role="tab" aria-controls="v-pills-messages" aria-selected="false">Arrival / Departure</a>
                                                          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#pax_traveller" role="tab" aria-controls="v-pills-settings" aria-selected="false">Pax / Traveller</a>
                                                          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#instructions" role="tab" aria-controls="v-pills-settings" aria-selected="false">Special Instructions</a>
                                                          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#customer_payment" role="tab" aria-controls="v-pills-settings" aria-selected="false">Customer Payment</a>
                                                          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#refund_details" role="tab" aria-controls="v-pills-settings" aria-selected="false">Refund Details</a>
                                                          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#supplier_payment" role="tab" aria-controls="v-pills-settings" aria-selected="false">Supplier Payment</a>
                                                          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#booking_confirmation" role="tab" aria-controls="v-pills-settings" aria-selected="false">Booking Confirmation</a>
                                                          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#booking_voucher" role="tab" aria-controls="v-pills-settings" aria-selected="false">Booking Voucher</a>
                                                          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#download_file" role="tab" aria-controls="v-pills-settings" aria-selected="false">Document / Files</a>
                                                          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#activity_history" role="tab" aria-controls="v-pills-settings" aria-selected="false">Activity History</a>
                                                        </div>
									                 </div>
									                 <div class="col-md-10">
									                     <div class="tab-content" id="v-pills-tabContent">
									                     <!--first tab-->
                                                          <div class="tab-pane fade show active" id="booking_details" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                              <h5 class="mb-3">Booking Details</h5>
                                                              <div class="row mb-3">
                                                                  <div class="col-md-4">
                                                                      <div class="row">
                                                                          <div class="col-6"> Invoice / Booking ID</div>
                                                                          <div class="col-6">: <b>KSA765</b></div>
                                                                          <div class="col-6"> Email ID</div>
                                                                          <div class="col-6">: User@gmail.com</div>
                                                                          <div class="col-6">Travel Location</div>
                                                                          <div class="col-6">: Mauritius</div>
                                                                          <div class="col-6">Travellers</div>
                                                                          <div class="col-6">: <i class="fa fa-user"></i> 4 <i class="fa fa-plane"></i> 2</div>
                                                                          
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="row">
                                                                          <div class="col-6">Customer Type</div>
                                                                          <div class="col-6">: <b>B2B</b></div>
                                                                          <div class="col-6"> Contact Number</div>
                                                                          <div class="col-6">: +91 9999999999</div>
                                                                          <div class="col-6">Travel Type</div>
                                                                          <div class="col-6">: Cruise booking</div>
                                                                         </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="row">
                                                                          <div class="col-6"> Name</div>
                                                                          <div class="col-6">: <b>Onder Falay</b></div>
                                                                          <div class="col-6">Travel date</div>
                                                                          <div class="col-6">: 18-Feb-2021</div>
                                                                          <div class="col-6">Number Of days</div>
                                                                          <div class="col-6">: 6 Days</div>
                                                                       </div>
                                                                  </div>
                                                              </div>
                                                              <div class="row">
                                                                  <div class="col-md-6 col-6">
                                                                      <h5>Task Details</h5>
                                                                  </div>
                                                                  <div class="col-md-6 col-6">
                                                                      <a href="#" data-toggle="modal" data-target="#create_new_task"  class="btn btn-primary btn-sm mb-3" style="float:right">Create New Task</a>
                                                                  </div>
                                                              </div>
                                                               
                                                               <div class="dt-responsive table-responsive mb-3">
                                                                  <table id="" class="datatable table table-striped table-bordered nowrap">
                                                                     <thead>
                                                                        <tr>
                                                                           <th>#</th>
                                                                           <th>Task Name</th>
                                                                           <th></th>
                                                                           <th>Created On</th>
                                                                           <th>Created By</th>
                                                                           <th>Assigned To</th>
                                                                           <th>Due Date & Time</th>
                                                                           <th>Status</th>
                                                                           <th>Action</th>
                                                                        </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Invoice Created for onday falay KSA 1234</td>
                                                                           <td>04-Feb-2012</td>
                                                                           <td>Automatic</td>
                                                                           <td><select>
                                                                                <option>Scott Margin</option>
                                                                               </select>
                                                                           </td>
                                                                           <td>4 Feb 2021 05:00 PM</td>
                                                                           <td><button class="btn btn-primary btn-sm">New</button></td>
                                                                           <td>Rs. 9876</td>
                                                                            <td>
                                                                              <button class="btn btn-success btn-sm">View</button>
                                                                              <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#edit_task">Edit</button>
                                                                              <button class="btn btn-danger btn-sm">Delete</button>
                                                                           </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Invoice Created for onday falay KSA 1234</td>
                                                                           <td>04-Feb-2012</td>
                                                                           <td>Automatic</td>
                                                                           <td><select>
                                                                                <option>Scott Margin</option>
                                                                               </select>
                                                                           </td>
                                                                           <td>4 Feb 2021 05:00 PM</td>
                                                                           <td><button class="btn btn-primary btn-sm">New</button></td>
                                                                           <td>Rs. 9876</td>
                                                                            <td>
                                                                              <button class="btn btn-success btn-sm">View</button>
                                                                              <button class="btn btn-primary btn-sm">Edit</button>
                                                                              <button class="btn btn-danger btn-sm">Delete</button>
                                                                           </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Invoice Created for onday falay KSA 1234</td>
                                                                           <td>04-Feb-2012</td>
                                                                           <td>Automatic</td>
                                                                           <td><select>
                                                                                <option>Scott Margin</option>
                                                                               </select>
                                                                           </td>
                                                                           <td>4 Feb 2021 05:00 PM</td>
                                                                           <td><button class="btn btn-primary btn-sm">New</button></td>
                                                                           <td>Rs. 9876</td>
                                                                            <td>
                                                                              <button class="btn btn-success btn-sm">View</button>
                                                                              <button class="btn btn-primary btn-sm">Edit</button>
                                                                              <button class="btn btn-danger btn-sm">Delete</button>
                                                                           </td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                               <div class="row mb-3">
                                                                   <div class="col-md-2 col-6">
                                                                        <div class="counter-section">
                                                                            <h5>Rs.700</h5>
                                                                            <span>Total Amount</span>
                                                                        </div>
                                                                    </div>
                                                                   <div class="col-md-2 col-6">
                                                                        <div class="counter-section">
                                                                            <h5>Rs.700</h5>
                                                                            <span>Paid Amount</span>
                                                                        </div>
                                                                    </div>
                                                                   <div class="col-md-2 col-6">
                                                                        <div class="counter-section">
                                                                            <h5>Rs.700</h5>
                                                                            <span>balanced Amount</span>
                                                                        </div>
                                                                    </div>
                                                                   <div class="col-md-2 col-6">
                                                                        <div class="counter-section">
                                                                            <h5>Rs.700</h5>
                                                                            <span>Refuned Amount</span>
                                                                        </div>
                                                                    </div>
                                                                   <div class="col-md-2 col-6">
                                                                        <div class="counter-section">
                                                                            <h5>Rs.700</h5>
                                                                            <span>Payable to supplier</span>
                                                                        </div>
                                                                    </div>
                                                                   <div class="col-md-2 col-6">
                                                                        <div class="counter-section">
                                                                            <h5>Rs.700</h5>
                                                                            <span>Paid to supplier</span>
                                                                        </div>
                                                                    </div>
                                                                   <!--<div class="col-md-2 col-6">-->
                                                                   <!--     <div class="counter-section">-->
                                                                   <!--         <h5>Rs.700</h5>-->
                                                                   <!--         <span>Profit margin</span>-->
                                                                   <!--     </div>-->
                                                                   <!-- </div>-->
                                                               </div>
                                                                <div class="row">
                                                                  <div class="col-md-6 col-6">
                                                                      <h5>Travel / Tour Itinerary Details</h5>
                                                                  </div>
                                                                  <div class="col-md-6 col-6">
                                                                      <a href="#" class="btn btn-primary btn-sm mb-3" style="float:right">Edit Travel/ Tour Itinerary Details</a>
                                                                  </div>
                                                              </div>
                                                               
                                                               <div>
                                                                   <h6><b>Day 1: Explore the capital port louis</b></h6>
                                                                   <p>Check out the champ de mars race track, where horse racing is organised turf club from late march to early December Check out the champ de mars race track, where horse racing is organised turf club from late march to early December Check out the champ de mars race track, where horse racing is organised turf club from late march to early December..</p>
                                                                   <h6><b>Day 2: Explore the capital port louis</b></h6>
                                                                   <p>Check out the champ de mars race track, where horse racing is organised turf club from late march to early December Check out the champ de mars race track, where horse racing is organised turf club from late march to early December Check out the champ de mars race track, where horse racing is organised turf club from late march to early December..</p>
                                                                   <h6><b>Day 3: Explore the capital port louis</b></h6>
                                                                   <p>Check out the champ de mars race track, where horse racing is organised turf club from late march to early December Check out the champ de mars race track, where horse racing is organised turf club from late march to early December Check out the champ de mars race track, where horse racing is organised turf club from late march to early December..</p>
                                                               </div>
                                                               <!--task modal-->
                                                                  <!-- Modal -->
                                                                    <div class="modal fade" id="create_new_task" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Create New Task</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                <div class="mb-3">
                                                                                      <label>Task Details</label>
                                                                                     <input class="form-control" name="">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                      <label>Assign To</label>
                                                                                     <select class="form-control" name="">
                                                                                      <option value="">Scott marth</option>
                                                                                      <option value="">Scott marth</option>
                                                                                      <option value="">Scott marth</option>
                                                                                     </select>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                      <label>Due Date & Time</label>
                                                                                     <input class="form-control" type="datetime-local" />
                                                                                </div>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                               <!--task modal-->
                                                               
                                                               <!--Edit modal-->
                                                                  <!-- Modal -->
                                                                    <div class="modal fade" id="edit_task" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Task</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                <div class="mb-3">
                                                                                      <label>Task Details <sapn class="red">*</sapn></label>
                                                                                     <input class="form-control" name="" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                      <label>Assign To <sapn class="red">*</sapn></label>
                                                                                     <select class="form-control" name="" required>
                                                                                      <option value="">Scott marth</option>
                                                                                      <option value="">Scott marth</option>
                                                                                      <option value="">Scott marth</option>
                                                                                     </select>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                      <label>Due Date & Time <sapn class="red">*</sapn></label>
                                                                                     <input class="form-control" type="datetime-local" required/>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                      <label>Type <sapn class="red">*</sapn></label>
                                                                                     <select class="form-control" name="" required>
                                                                                      <option value="">Name</option>
                                                                                      <option value="">Scott marth</option>
                                                                                      <option value="">Scott marth</option>
                                                                                     </select>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                      <label>Esstimated Time </label>
                                                                                    <input class="form-control" type="time" required/>
                                                                                </div>
                                                                                 <div class="mb-3">
                                                                                      <label>Project</label>
                                                                                     <select class="form-control" name="" required>
                                                                                      <option value="">Project name</option>
                                                                                      <option value="">Project name</option>
                                                                                     </select>
                                                                                </div>
                                                                                 <div class="mb-3">
                                                                                      <label>Priority </label>
                                                                                     <select class="form-control" name="" required>
                                                                                      <option value="">Priority 1</option>
                                                                                      <option value="">Priority 2</option>
                                                                                     </select>
                                                                                </div>
                                                                                 <div class="mb-3">
                                                                                      <label>Status </label>
                                                                                     <select class="form-control" name="" required>
                                                                                      <option value="">New </option>
                                                                                      <option value="">Other</option>
                                                                                     </select>
                                                                                </div>
                                                                                 <div class="mb-3">
                                                                                      <label>More Details </label>
                                                                                      <textarea class="form-control" name="" ></textarea>
                                                                                </div>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                               <!--Edit modal-->
                                                          </div>
                                                           <!--first tab-->
                                                           <!--second tab-->
                                                          <div class="tab-pane fade" id="invoice_preview" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                                     <div class="row">
                                                                          <div class="col-md-4">
                                                                              <h5>Invoice Preview</h5>
                                                                          </div>
                                                                          <div class="col-md-8 text-right" style="float:right">
                                                                              <a class="blue"><i class="fa fa-download"></i> Download invoice</a>
                                                                              <a class="blue ml-3"><i class="fa fa-send"></i> Send Invoice</a>
                                                                              <a class="blue ml-3"><i class="fa fa-print"></i> Print </a>
                                                                              <a href="{{url('invoice/update_invoices')}}" class="green ml-3"><i class="fa fa-file"></i> Edit invoice</a>
                                                                              <a class="red ml-3"><i class="fa fa-trash"></i> Delete</a>
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
                                                                                                                                                    <!--<tr>-->
                                                                                                                                                    <!--    <td><img src="assets/images/logo-blue.png" class="m-b-10" alt=""></td>-->
                                                                                                                                                    <!--</tr>-->
                                                                                                                                                    <tr>
                                                                                                                                                        <td>Company Name </td>
                                                                                                                                                    </tr>
                                                                                                                                                    <tr>
                                                                                                                                                        <td>1065 Mandan Road, Columbia MO, Missouri. (123)-65202</td>
                                                                                                                                                    </tr>
                                                                                                                                                    <tr>
                                                                                                                                                        <td><a href="mailto:demo@gmail.com" target="_top">demo@gmail.com</a>
                                                                                                                                                        </td>
                                                                                                                                                    </tr>
                                                                                                                                                    <tr>
                                                                                                                                                        <td>+91 919-91-91-919</td>
                                                                                                                                                    </tr>
                                                                                                                                                    <!-- <tr>
                                                                                                                                    <td><a href="#" target="_blank">www.demo.com</a>
                                                                                                                                    </td>
                                                                                                                                </tr> -->
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
                                                                                                                                        <h6 class="m-0">Josephin Villa</h6>
                                                                                                                                        <p class="m-0 m-t-10">1065 Mandan Road, Columbia MO, Missouri. (123)-65202</p>
                                                                                                                                        <p class="m-0">(1234) - 567891</p>
                                                                                                                                        <p>demo@xyz.com</p>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-md-4 col-xs-12 ">
                                                                                                                                        <h6>Order Information :</h6>
                                                                                                                                        <table class="table table-responsive invoice-table invoice-order table-borderless">
                                                                                                                                            <tbody>
                                                                                                                                                <tr>
                                                                                                                                                    <th>Date :</th>
                                                                                                                                                    <td>November 14</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr>
                                                                                                                                                    <th>Status :</th>
                                                                                                                                                    <td>
                                                                                                                                                        <span class="label label-warning">Pending</span>
                                                                                                                                                    </td>
                                                                                                                                                </tr>
                                                                                                                                                <tr>
                                                                                                                                                    <th>Id :</th>
                                                                                                                                                    <td>
                                                                                                                                                        #145698
                                                                                                                                                    </td>
                                                                                                                                                </tr>
                                                                                                                                            </tbody>
                                                                                                                                        </table>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-md-4 col-xs-12">
                                                                                                                                        <h6 class="m-b-20">Invoice Number <span>#12398521473</span></h6>
                                                                                                                                        <h6 class="text-uppercase text-primary">Total Due :
                                                                                                                                            <span>Rs. 900.00</span>
                                                                                                                                        </h6>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-sm-12">
                                                                                                                                        <div class="table-responsive">
                                                                                                                                            <table class="table  invoice-detail-table">
                                                                                                                                                <thead>
                                                                                                                                                    <tr class="thead-default">
                                                                                                                                                        <th>Description</th>
                                                                                                                                                        <th>Quantity</th>
                                                                                                                                                        <th>Amount</th>
                                                                                                                                                        <th>Total</th>
                                                                                                                                                    </tr>
                                                                                                                                                </thead>
                                                                                                                                                <tbody>
                                                                                                                                                    <tr>
                                                                                                                                                        <td>
                                                                                                                                                            <h6>Logo Design</h6>
                                                                                                                                                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                                                                                                                tempor incididunt </p>
                                                                                                                                                        </td>
                                                                                                                                                        <td>6</td>
                                                                                                                                                        <td>Rs. 200.00</td>
                                                                                                                                                        <td>Rs. 1200.00</td>
                                                                                                                                                    </tr>
                                                                                                                                                    <tr>
                                                                                                                                                        <td>
                                                                                                                                                            <h6>Logo Design</h6>
                                                                                                                                                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                                                                                                                tempor incididunt </p>
                                                                                                                                                        </td>
                                                                                                                                                        <td>7</td>
                                                                                                                                                        <td>Rs. 100.00</td>
                                                                                                                                                        <td>Rs. 700.00</td>
                                                                                                                                                    </tr>
                                                                                                                                                    <tr>
                                                                                                                                                        <td>
                                                                                                                                                            <h6>Logo Design</h6>
                                                                                                                                                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                                                                                                                tempor incididunt </p>
                                                                                                                                                        </td>
                                                                                                                                                        <td>5</td>
                                                                                                                                                        <td>Rs. 150.00</td>
                                                                                                                                                        <td>Rs. 750.00</td>
                                                                                                                                                    </tr>
                                                                                                                                                </tbody>
                                                                                                                                            </table>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-sm-12">
                                                                                                                                        <table class="table table-responsive invoice-table invoice-total">
                                                                                                                                            <tbody>
                                                                                                                                                <tr>
                                                                                                                                                    <th>Sub Total :</th>
                                                                                                                                                    <td>Rs. 4725.00</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr>
                                                                                                                                                    <th>Taxes (10%) :</th>
                                                                                                                                                    <td>Rs. 57.00</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr>
                                                                                                                                                    <th>Discount (5%) :</th>
                                                                                                                                                    <td>Rs. 45.00</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr class="text-info">
                                                                                                                                                    <td>
                                                                                                                                                        <hr />
                                                                                                                                                        <h5 class="text-primary">Total :</h5>
                                                                                                                                                    </td>
                                                                                                                                                    <td>
                                                                                                                                                        <hr />
                                                                                                                                                        <h5 class="text-primary">Rs. 4827.00</h5>
                                                                                                                                                    </td>
                                                                                                                                                </tr>
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
                                                                                                                                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                            </div>
                                                                            <!-- Invoice card end -->
                                                                            <div class="row text-center">
                                                                                <div class="col-sm-12 invoice-btn-group text-center">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-print-invoice m-b-10 btn-sm waves-effect waves-light m-r-20">Print</button>
                                                                                    <button type="button" class="btn btn-danger waves-effect m-b-10 btn-sm waves-light">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                          </div>
                                                           <!--second tab-->
                                                            <!--thired tab-->
                                                              <div class="tab-pane fade" id="arrival_departure" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                   <div class="row">
                                                                      <div class="col-md-6 col-6">
                                                                          <h5>Arrival / Depeture Details</h5>
                                                                      </div>
                                                                      <div class="col-md-6 col-6">
                                                                          <a data-toggle="modal" data-target="#add_arrival" class="btn btn-primary btn-sm mb-3 text-white" style="float:right">Add arrival / Departure</a>
                                                                      </div>
                                                                  </div>
                                                                   <div class="dt-responsive table-responsive mb-3">
                                                                      <table id="" class="datatable table table-striped table-bordered nowrap">
                                                                         <thead>
                                                                            <tr>
                                                                               <th>#</th>
                                                                               <th>Carrier Type</th>
                                                                               <th>Carrier Name</th>
                                                                               <th>From</th>
                                                                               <th>From DateTime</th>
                                                                               <th>To</th>
                                                                               <th>To DateTime</th>
                                                                               <th>More Details</th>
                                                                               <th>Action</th>
                                                                            </tr>
                                                                         </thead>
                                                                         <tbody>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Airlines</td>
                                                                               <td>Malaysia Airlines</td>
                                                                               <td>Malaysia</td>
                                                                               <td>19 Feb 2021 12:00am</td>
                                                                               <td>Sigapore</td>
                                                                               <td>19 Feb 2021 4:00am</td>
                                                                               <td></td>
                                                                                <td>
                                                                                  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_arrival">Edit</button>
                                                                                  <button class="btn btn-danger btn-sm">Delete</button>
                                                                               </td>
                                                                            </tr>
                                                                          </tbody>
                                                                      </table>
                                                                   </div>
                                                                     <!-- Modal -->
                                                                    <div class="modal fade" id="add_arrival" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Add Arrival Depeture Details</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                 <div class="mb-2">
                                                                                     <label for>Carrier Type</label>
                                                                                     <select class="form-control" name="" required>
                                                                                         <option value="">Airlines</option>
                                                                                         <option value="">Airlines</option>
                                                                                         <option value="">Airlines</option>
                                                                                     </select>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Carrier Name</label>
                                                                                    <input type="" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>From</label>
                                                                                    <input type="text" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>From DateTime</label>
                                                                                    <input type="datetime-local" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>To</label>
                                                                                    <input type="text" class="form-control" name="" required>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                              
                                                                   <div class="modal fade" id="edit_arrival" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Arrival Depeture Details</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                 <div class="mb-2">
                                                                                     <label for>Carrier Type</label>
                                                                                     <select class="form-control" name="" required>
                                                                                         <option value="">Airlines</option>
                                                                                         <option value="">Airlines</option>
                                                                                         <option value="">Airlines</option>
                                                                                     </select>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Carrier Name</label>
                                                                                    <input type="" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>From</label>
                                                                                    <input type="text" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>From DateTime</label>
                                                                                    <input type="datetime-local" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>To</label>
                                                                                    <input type="text" class="form-control" name="" required>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                              </div>
                                                           <!--thired tab-->
                                                            <!--four tab-->
                                                              <div class="tab-pane fade" id="pax_traveller" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                   <div class="row">
                                                                      <div class="col-md-6 col-6">
                                                                          <h5>Pax / Traveller Details</h5>
                                                                      </div>
                                                                      <div class="col-md-6 col-6">
                                                                          <a data-toggle="modal" data-target="#add_traveller" class="btn btn-primary btn-sm mb-3 text-white" style="float:right">Add Traveller</a>
                                                                      </div>
                                                                  </div>
                                                                   <div class="dt-responsive table-responsive mb-3">
                                                                      <table id="" class="datatable table table-striped table-bordered nowrap">
                                                                         <thead>
                                                                            <tr>
                                                                               <th>#</th>
                                                                               <th>First Name</th>
                                                                               <th>Last Name</th>
                                                                               <th>Date Of Birth</th>
                                                                               <th>Passport number</th>
                                                                               <th>Passport/Visa Document</th>
                                                                               <th>More Details</th>
                                                                               <th>Action</th>
                                                                            </tr>
                                                                         </thead>
                                                                         <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>
                                                                                  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_traveller" >Edit</button>
                                                                                  <button class="btn btn-danger btn-sm">Delete</button>
                                                                               </td>
                                                                            </tr>
                                                                          
                                                                         </tbody>
                                                                      </table>
                                                                   </div>
                                                                     <!-- Modal -->
                                                                    <div class="modal fade" id="add_traveller" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Add Traveller</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                
                                                                                 <div class="mb-2">
                                                                                     <label for>First Name</label>
                                                                                    <input type="" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Last Name</label>
                                                                                    <input type="text" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Date Of Birth</label>
                                                                                    <input type="date" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Passport Number</label>
                                                                                    <input type="number" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Passport/Visa Document</label>
                                                                                    <input type="number" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>More Details</label>
                                                                                    <textarea class="summernote" name=""></textarea>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                               <div class="modal fade" id="edit_traveller" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Traveller</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                
                                                                                 <div class="mb-2">
                                                                                     <label for>First Name</label>
                                                                                    <input type="" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Last Name</label>
                                                                                    <input type="text" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Date Of Birth</label>
                                                                                    <input type="date" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Passport Number</label>
                                                                                    <input type="number" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Passport/Visa Document</label>
                                                                                    <input type="number" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>More Details</label>
                                                                                    <textarea class="summernote" name=""></textarea>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                              
                                                              </div>
                                                           <!--four tab-->
                                                            <!--five tab-->
                                                              <div class="tab-pane fade" id="instructions" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                   <div class="row">
                                                                      <div class="col-md-6 col-6">
                                                                          <h5>Special Instructions</h5>
                                                                      </div>
                                                                      <div class="col-md-6 col-6">
                                                                          <a data-toggle="modal" data-target="#add_instructions" class="btn btn-primary btn-sm mb-3 text-white" style="float:right">Add Special Instruction</a>
                                                                      </div>
                                                                  </div>
                                                                   <div class="dt-responsive table-responsive mb-3">
                                                                      <table id="" class="datatable table table-striped table-bordered nowrap">
                                                                         <thead>
                                                                            <tr>
                                                                               <th>#</th>
                                                                               <th>Added On</th>
                                                                               <th>Added by</th>
                                                                               <th>Special Instructions</th>
                                                                               <th>Action</th>
                                                                            </tr>
                                                                         </thead>
                                                                         <tbody>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>09/12/21</td>
                                                                                <td>Ethan</td>
                                                                                <td>
                                                                                    instruction content show here..
                                                                                </td>
                                                                                <td>
                                                                                  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_instructions">Edit</button>
                                                                                  <button class="btn btn-danger btn-sm">Delete</button>
                                                                               </td>
                                                                            </tr>
                                                                         </tbody>
                                                                      </table>
                                                                   </div>
                                                                   <!-- Modal -->
                                                                    <div class="modal fade" id="add_instructions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Special instruction for booking onder falay</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                  <label>Enter Special Instruction</label>
                                                                                  <textarea class="summernote" name=""></textarea>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                   <div class="modal fade" id="edit_instructions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Special instruction for booking onder falay</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                  <label>Enter Special Instruction</label>
                                                                                  <textarea class="summernote" name=""></textarea>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                              
                                                              </div>
                                                           <!--five tab-->
                                                            <!--six tab-->
                                                              <div class="tab-pane fade" id="customer_payment" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                    <div class="row mb-3">
                                                                       <div class="col-md-2 col-6">
                                                                            <div class="counter-section">
                                                                                <h5>Rs.700</h5>
                                                                                <span>Total Schedule</span>
                                                                            </div>
                                                                        </div>
                                                                       <div class="col-md-2 col-6">
                                                                            <div class="counter-section">
                                                                                <h5>Rs.700</h5>
                                                                                <span>Total Paid</span>
                                                                            </div>
                                                                        </div>
                                                                       <div class="col-md-2 col-6">
                                                                            <div class="counter-section">
                                                                                <h5>Rs.700</h5>
                                                                                <span>Total Balance</span>
                                                                            </div>
                                                                        </div>
                                                                       <div class="col-md-2 col-6">
                                                                            <div class="counter-section">
                                                                                <h5>Rs.700</h5>
                                                                                <span>Next To Due Date</span>
                                                                            </div>
                                                                        </div>
                                                                       <!--<div class="col-md-2 col-6">-->
                                                                       <!--     <div class="counter-section">-->
                                                                       <!--         <h5>Rs.700</h5>-->
                                                                       <!--         <span>Profit margin</span>-->
                                                                       <!--     </div>-->
                                                                       <!-- </div>-->
                                                                   </div>
                                                                   <div class="row">
                                                                      <div class="col-md-6 col-6">
                                                                          <h5>Customer Payment</h5>
                                                                      </div>
                                                                      <div class="col-md-6 col-6">
                                                                          <a  data-toggle="modal" data-target="#add_payment_schedule" class="btn btn-primary btn-sm mb-3 text-white" style="float:right">Add Payment Schedule</a>
                                                                      </div>
                                                                  </div>
                                                                   <div class="dt-responsive table-responsive mb-3">
                                                                      <table id="" class="datatable table table-striped table-bordered nowrap">
                                                                         <thead>
                                                                            <tr>
                                                                               <th>#</th>
                                                                               <th>Descripition</th>
                                                                               <th>Payable Amount</th>
                                                                               <th>Due Date</th>
                                                                               <th>Payment Status</th>
                                                                               <th>Paid Amount</th>
                                                                               <th>Payment Details</th>
                                                                               <th>Cash Receipt</th>
                                                                               
                                                                                <th>Action</th>
                                                                            </tr>
                                                                         </thead>
                                                                         <tbody>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Pay on or before the schedule date</td>
                                                                                <td>Rs. 20909</td>
                                                                                <td>14-Dec-2021</td>
                                                                                <td>Paid</td>
                                                                                <td>Rs 2000</td>
                                                                                <td>20-dec-20</td>
                                                                                <td>Cash</td>
                                                                                <td>
                                                                                  <a><span class="blue"> <i class="fa fa-download "></i></span></a>
                                                                                  <a><span class="blue"> <i class="fa fa-envelope"></i></span></a>
                                                                                  <br>
                                                                                  <a><span class="blue" data-toggle="modal" data-target="#edit_payment_schedule"> Edit schedule</span></a>
                                                                                </td>
                                                                                <td>
                                                                                  <button class="btn btn-primary btn-sm">Update Payment</button>
                                                                                  <button class="btn btn-danger btn-sm">Delete</button>
                                                                               </td>
                                                                            </tr>
                                                                         </tbody>
                                                                      </table>
                                                                   </div>
                                                                     <!-- Modal -->
                                                                    <div class="modal fade" id="add_payment_schedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Add Arrival Depeture Details</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                 <div class="mb-2">
                                                                                     <label for>Descripition</label>
                                                                                      <textarea class="form-control" name="" required></textarea>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Payable Amount</label>
                                                                                    <input type="number" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Due Date</label>
                                                                                    <input type="date" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Payment Amount</label>
                                                                                    <input type="number" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Payment Details</label>
                                                                                    <input type="text" class="form-control" name="" required>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                 <div class="modal fade" id="edit_payment_schedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Payment Schedule</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                 <div class="mb-2">
                                                                                     <label for>Descripition</label>
                                                                                      <textarea class="form-control" name="" required></textarea>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Payable Amount</label>
                                                                                    <input type="number" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Due Date</label>
                                                                                    <input type="date" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Payment Amount</label>
                                                                                    <input type="number" class="form-control" name="" required>
                                                                                 </div>
                                                                                 <div class="mb-2">
                                                                                     <label for>Payment Details</label>
                                                                                    <input type="text" class="form-control" name="" required>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                              
                                                              </div>
                                                           <!--six tab-->
                                                            <!--seven tab-->
                                                              <div class="tab-pane fade" id="refund_details" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                   <div class="row">
                                                                      <div class="col-md-6 col-6">
                                                                          <h5>Refund Details</h5>
                                                                      </div>
                                                                      <div class="col-md-6 col-6">
                                                                          <a href="#" data-toggle="modal" data-target="#create_fund" class="btn btn-primary btn-sm mb-3 text-white" style="float:right">Create New Fund</a>
                                                                      </div>
                                                                    </div>
                                                                    <div>
                                                                         <div class="row">
                                                                               <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <div clas="col-md-6 col-6 w-50" style="width:50%">Refundable Amount :</div>
                                                                                        <div clas="col-md-6 col-6  w-50" style="width:50%">*</div>
                                                                                        <div clas="col-md-6 col-6  w-50" style="width:50%">Refund Type :</div>
                                                                                         <div clas="col-md-6 col-6  w-50" style="width:50%">*</div>
                                                                                        <div clas="col-md-6 col-6  w-50" style="width:50%">Due Date :</div>
                                                                                         <div clas="col-md-6 col-6  w-50" style="width:50%">*</div>
                                                                                        <div clas="col-md-6 col-6  w-50" style="width:50%">Due Date :</div>
                                                                                         <div clas="col-md-6 col-6  w-50" style="width:50%">*</div>
                                                                                        <div clas="col-md-6 col-6 w-50" style="width:50%">Refund Status :</div>
                                                                                         <div clas="col-md-6 col-6 w-50" style="width:50%">*</div>
                                                                                         <div clas="col-md-6 col-6 w-50" style="width:50%">Refund initiated Date & By :</div>
                                                                                         <div clas="col-md-6 col-6 w-50" style="width:50%">*</div>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <div clas="col-md-6 col-6 w-50" style="width:50%">Refund Completed Dated & By :</div>
                                                                                        <div clas="col-md-6 col-6 w-50" style="width:50%">*</div>
                                                                                   </div>
                                                                              </div>
                                                                          </div> 
                                                                    </div>
                                                                   <div class="modal fade" id="create_fund" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Create New  Fund For Booking Ondar Fanday</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                  <div class="row">
                                                                                      <div class="col-md-6">
                                                                                          <label for="">Refund Amount <span class="red">*</span></label>
                                                                                          <input class="form-control" name="" palceholder="Enter amount">
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                          <label for="">Refund Due Date <span class="red">*</span></label>
                                                                                          <input class="form-control" name="" palceholder="Select due date">
                                                                                      </div>
                                                                                      <div class="col-md-12 mt-3">
                                                                                          <b>Refund Type <span class="red">*</span></b>
                                                                                        <div class="form-check form-check-inline">
                                                                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                                          <label class="form-check-label" for="inlineRadio1">Partial Amount</label>
                                                                                        </div>
                                                                                        <div class="form-check form-check-inline">
                                                                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                                          <label class="form-check-label" for="inlineRadio2">Full Amount</label>
                                                                                        </div>
                                                                                      </div>
                                                                                      <div class="col-md-12">
                                                                                          <label class="mt-2" for="">Refund Details</label>
                                                                                          <textarea class="form-control"></textarea>
                                                                                      </div>
                                                                                      <div class="col-md-12">
                                                                                          <div class="form-check">
                                                                                              <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."> Send Email to customer about this refund process
                                                                                          </div>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                              </div>
                                                           <!--seven tab-->
                                                            <!--eight tab-->
                                                              <div class="tab-pane fade" id="supplier_payment" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                    <div class="row mb-3">
                                                                       <div class="col-md-3 col-6">
                                                                            <div class="counter-section">
                                                                                <h5>Rs.700</h5>
                                                                                <span>Total Payments</span>
                                                                            </div>
                                                                        </div>
                                                                       <div class="col-md-3 col-6">
                                                                            <div class="counter-section">
                                                                                <h5>Rs.700</h5>
                                                                                <span>Total Payable</span>
                                                                            </div>
                                                                        </div>
                                                                       <div class="col-md-3 col-6">
                                                                            <div class="counter-section">
                                                                                <h5>Rs.700</h5>
                                                                                <span>Total Paid</span>
                                                                            </div>
                                                                        </div>
                                                                       <div class="col-md-3 col-6">
                                                                            <div class="counter-section">
                                                                                <h5>Rs.700</h5>
                                                                                <span>Balance</span>
                                                                            </div>
                                                                        </div>
                                                                     
                                                                   </div>
                                                                   <div class="row">
                                                                      <div class="col-md-6 col-6">
                                                                          <h5>Supply Payements</h5>
                                                                      </div>
                                                                      <div class="col-md-6 col-6">
                                                                          <a href="#" data-toggle="modal" data-target="#add_supplier"  class="btn btn-primary btn-sm mb-3" style="float:right">Add Supplier Payment</a>
                                                                      </div>
                                                                  </div>
                                                                  <div class="card mb-3" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;">
                                                                      <div class="card-body">
                                                                           <div class="row">
                                                                               <div class="col-md-9">
                                                                                   <div class="row">
                                                                                       <div class="col-md-2">
                                                                                           <div class="text-center mb-3">
                                                                                                 <b>Hurkey Ferry</b>
                                                                                           </div>
                                                                                       </div>
                                                                                       <div class="col-md-2">
                                                                                           <div class="text-center mb-3">
                                                                                                <b>Rs 20000</b><br>
                                                                                               Total payable
                                                                                           </div>
                                                                                       </div>
                                                                                       <div class="col-md-2">
                                                                                           <div class="text-center mb-3">
                                                                                                <b>Rs 20000</b><br>
                                                                                                 1 MUR 2000
                                                                                           </div>
                                                                                       </div>
                                                                                       <div class="col-md-2">
                                                                                           <div class="text-center mb-3">
                                                                                                <b>Rs 20000</b><br>
                                                                                                Paid
                                                                                           </div>
                                                                                       </div>
                                                                                       <div class="col-md-2">
                                                                                           <div class="text-center mb-3">
                                                                                                <b>Rs 20000</b><br>
                                                                                                Balance
                                                                                           </div>
                                                                                       </div>
                                                                                       <div class="col-md-2">
                                                                                           <div class="text-center mb-3">
                                                                                                <b>27 Feb 2021</b><br>
                                                                                                 Due Date
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <div class="col-md-3">
                                                                                   <a class="blue border-right">Edit</a> 
                                                                                   <a class="blue border-right" style="">Update Supplier Payment</a>
                                                                                   <a class="red">Delete</a>
                                                                               </div>
                                                                           </div>
                                                                           <div class="dt-responsive table-responsive mb-3">
                                                                              <table id="" class="datatable table table-striped table-bordered nowrap">
                                                                                 <thead>
                                                                                    <tr>
                                                                                       <th>#</th>
                                                                                       <th>Date & Added By </th>
                                                                                       <th>Payable Description</th>
                                                                                       <th>Paid</th>
                                                                                       <th>Paid (USD)</th>
                                                                                       <th>ROE</th>
                                                                                       <th>Action</th>
                                                                                    </tr>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_supplier">Update Payment</button>
                                                                                          <button class="btn btn-danger btn-sm">Delete</button>
                                                                                       </td>
                                                                                    </tr>
                                                                                 </tbody>
                                                                              </table>
                                                                           </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="card mb-3" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;">
                                                                      <div class="card-body">
                                                                           <div class="row">
                                                                               <div class="col-md-9">
                                                                                   <div class="row">
                                                                                       <div class="col-md-2">
                                                                                           <div class="text-center mb-3">
                                                                                                 <b>Hurkey Ferry</b>
                                                                                           </div>
                                                                                       </div>
                                                                                       <div class="col-md-2">
                                                                                           <div class="text-center mb-3">
                                                                                                <b>Rs 20000</b><br>
                                                                                               Total payable
                                                                                           </div>
                                                                                       </div>
                                                                                       <div class="col-md-2">
                                                                                           <div class="text-center mb-3">
                                                                                                <b>Rs 20000</b><br>
                                                                                                 1 MUR 2000
                                                                                           </div>
                                                                                       </div>
                                                                                       <div class="col-md-2">
                                                                                           <div class="text-center mb-3">
                                                                                                <b>Rs 20000</b><br>
                                                                                                Paid
                                                                                           </div>
                                                                                       </div>
                                                                                       <div class="col-md-2">
                                                                                           <div class="text-center mb-3">
                                                                                                <b>Rs 20000</b><br>
                                                                                                Balance
                                                                                           </div>
                                                                                       </div>
                                                                                       <div class="col-md-2">
                                                                                           <div class="text-center mb-3">
                                                                                                <b>27 Feb 2021</b><br>
                                                                                                 Due Date
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                               <div class="col-md-3">
                                                                                   <a class="blue border-right">Edit</a> 
                                                                                   <a class="blue border-right" style="">Update Supplier Payment</a>
                                                                                   <a class="red">Delete</a>
                                                                               </div>
                                                                           </div>
                                                                           <div class="dt-responsive table-responsive mb-3">
                                                                              <table id="" class="datatable table table-striped table-bordered nowrap">
                                                                                 <thead>
                                                                                    <tr>
                                                                                       <th>#</th>
                                                                                       <th>Date & Added By </th>
                                                                                       <th>Payable Description</th>
                                                                                       <th>Paid</th>
                                                                                       <th>Paid (USD)</th>
                                                                                       <th>ROE</th>
                                                                                       <th>Action</th>
                                                                                    </tr>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                          <button class="btn btn-primary btn-sm">Update Payment</button>
                                                                                          <button class="btn btn-danger btn-sm">Delete</button>
                                                                                       </td>
                                                                                    </tr>
                                                                                 </tbody>
                                                                              </table>
                                                                           </div>
                                                                      </div>
                                                                  </div>
                                                                  <!--add supplier-->
                                                                     <!-- Modal -->
                                                                    <div class="modal fade" id="add_supplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Add New Supplier Payment</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                   <div class="mb-2">
                                                                                       <label>Select Supplier <span class="red">*</span></label>
                                                                                          <input type="" class="form-control" name="" placeholder="Type supplier name" required>
                                                                                   </div>
                                                                                   <div class="mb-2">
                                                                                       <label>Currency <span class="red">*</span></label>
                                                                                        <select name="" class="form-control" required>
                                                                                            <option value="">Rs</option>
                                                                                            <option value="">USD</option>
                                                                                        </select>
                                                                                   </div>
                                                                                   <div class="mb-2">
                                                                                       <label>Select Supplier <span class="red">*</span></label>
                                                                                          <input class="form-control" name="" placeholder="Type supplier name" required>
                                                                                   </div>
                                                                                     <div class="mb-2">
                                                                                       <label>Payable Amount <span class="red">*</span></label>
                                                                                          <input type="number" class="form-control" name="" placeholder="Payable Amount" required>
                                                                                   </div>
                                                                                     <div class="mb-2">
                                                                                       <label>Due Date <span class="red">*</span></label>
                                                                                          <input type="date" class="form-control" name="" placeholder="Payable Amount" required>
                                                                                   </div>
                                                                                     <div class="mb-2">
                                                                                       <label>Payment Description <span class="red">*</span></label>
                                                                                          <input type="date" class="form-control" name="" placeholder="Payable Amount" required>
                                                                                   </div>
                                                                                     <div class="mb-2">
                                                                                       <label>Supplier Document <span class="red">*</span></label>
                                                                                          <input type="file" class="form-control" name="" placeholder="Payable Amount" required>
                                                                                   </div>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  <!--add supplier-->
                                                                  
                                                                   <!-- Modal -->
                                                                    <div class="modal fade" id="edit_supplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Update Supplier Payment</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                   <div class="mb-2">
                                                                                       <label>Select Supplier <span class="red">*</span></label>
                                                                                          <input type="" class="form-control" name="" placeholder="Type supplier name" required>
                                                                                   </div>
                                                                                   <div class="mb-2">
                                                                                       <label>Currency <span class="red">*</span></label>
                                                                                        <select name="" class="form-control" required>
                                                                                            <option value="">Rs</option>
                                                                                            <option value="">USD</option>
                                                                                        </select>
                                                                                   </div>
                                                                                   <div class="mb-2">
                                                                                       <label>Select Supplier <span class="red">*</span></label>
                                                                                          <input class="form-control" name="" placeholder="Type supplier name" required>
                                                                                   </div>
                                                                                     <div class="mb-2">
                                                                                       <label>Payable Amount <span class="red">*</span></label>
                                                                                          <input type="number" class="form-control" name="" placeholder="Payable Amount" required>
                                                                                   </div>
                                                                                     <div class="mb-2">
                                                                                       <label>Due Date <span class="red">*</span></label>
                                                                                          <input type="date" class="form-control" name="" placeholder="Payable Amount" required>
                                                                                   </div>
                                                                                     <div class="mb-2">
                                                                                       <label>Payment Description <span class="red">*</span></label>
                                                                                          <input type="date" class="form-control" name="" placeholder="Payable Amount" required>
                                                                                   </div>
                                                                                     <div class="mb-2">
                                                                                       <label>Supplier Document <span class="red">*</span></label>
                                                                                          <input type="file" class="form-control" name="" placeholder="Payable Amount" required>
                                                                                   </div>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  <!--edit supplier-->
                                                              </div>
                                                           <!--eight tab-->
                                                            <!--nine tab-->
                                                              <div class="tab-pane fade" id="booking_confirmation" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                     <div class="row">
                                                                                <div class="col-md-6 col-6">
                                                                                 <h5>Booking Confirmation </h5>
                                                                                </div>
                                                                                <div class="col-md-6 col-6">
                                                                                 <a href="#" data-toggle="modal" data-target="#add_confirmation" class="btn btn-primary btn-sm mb-3 text-white" style="float:right">Add Confirmation</a>
                                                                                </div>
                                                                           </div>
                                                                      <div class="dt-responsive table-responsive mb-3">
                                                                              <table id="" class="datatable table table-striped table-bordered nowrap">
                                                                                 <thead>
                                                                                    <tr>
                                                                                       <th>#</th>
                                                                                       <th>Arrangement Type </th>
                                                                                       <th>Confirmation Details</th>
                                                                                       <th>Confirmation Number</th>
                                                                                       <th>More Details</th>
                                                                                       <th>Action</th>
                                                                                    </tr>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Hotel</td>
                                                                                        <td>
                                                                                            Hotel Name:<b>XYZ </b> Local point of contact <b>+999999999.</b></br>
                                                                                            Address:<b>Address show here ..</b>Check in <b>18 Feb 2021.</b></br>
                                                                                        </td>
                                                                                        <td>AERT87654</td>
                                                                                        <td>-</td>
                                                                                       <td>
                                                                                          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_confirmation">Edit</button>
                                                                                          <button class="btn btn-danger btn-sm">Delete</button>
                                                                                       </td>
                                                                                    </tr>
                                                                                 </tbody>
                                                                              </table>
                                                                           </div>
                                                                  <!--add supplier-->
                                                                     <!-- Modal -->
                                                                    <div class="modal fade" id="add_confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Add Booking Confirmation</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                   <div class="mb-2">
                                                                                       <label>Arrangement Type <span class="red">*</span></label>
                                                                                          <input type="" class="form-control" name="" placeholder="Type supplier name" required>
                                                                                   </div>
                                                                                   <div class="mb-2">
                                                                                       <label>Arrangement Type<span class="red">*</span></label>
                                                                                        <select name="" class="form-control" required>
                                                                                            <option value="">Hotal</option>
                                                                                            <option value="">Flight</option>
                                                                                        </select>
                                                                                   </div>
                                                                                   <div class="mb-2">
                                                                                       <label>Confirmation Details<span class="red">*</span></label>
                                                                                          <textarea class="summernote"></textarea>
                                                                                   </div>
                                                                                    
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  <!--add supplier-->
                                                                  
                                                                   <div class="modal fade" id="edit_confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Update Booking Confirmation</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="modal-body">
                                                                                   <div class="mb-2">
                                                                                       <label>Arrangement Type <span class="red">*</span></label>
                                                                                          <input type="" class="form-control" name="" placeholder="Type supplier name" required>
                                                                                   </div>
                                                                                   <div class="mb-2">
                                                                                       <label>Arrangement Type<span class="red">*</span></label>
                                                                                        <select name="" class="form-control" required>
                                                                                            <option value="">Hotal</option>
                                                                                            <option value="">Flight</option>
                                                                                        </select>
                                                                                   </div>
                                                                                   <div class="mb-2">
                                                                                       <label>Confirmation Details<span class="red">*</span></label>
                                                                                          <textarea class="summernote"></textarea>
                                                                                   </div>
                                                                                    
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  <!--Edit Confirmation-->
                                                              </div>
                                                           <!--nine tab-->
                                                            <!--ten tab-->
                                                              <div class="tab-pane fade" id="booking_voucher" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                          <div class="row">
                                                                                <div class="col-md-12 col-12">
                                                                                 <h5 class="mb-3">Booking Voucher </h5>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                  <form action="" method="">
                                                                                      <div class="mb-3">
                                                                                          <p>Confirmation Details</p>
                                                                                           <div class="form-check form-check-inline">
                                                                                              <input class="form-check-input" type="checkbox" id="hotel" value="" checked>
                                                                                              <label class="form-check-label" for="hotel">Hotel</label>
                                                                                            </div>
                                                                                            <div class="form-check form-check-inline">
                                                                                              <input class="form-check-input" type="checkbox" id="flight" value="">
                                                                                              <label class="form-check-label" for="flight">Flight</label>
                                                                                            </div>
                                                                                            <div class="form-check form-check-inline">
                                                                                              <input class="form-check-input" type="checkbox" id="flight" value="">
                                                                                              <label class="form-check-label" for="flight">Supplier (Tour / Cars / Activities)</label>
                                                                                            </div>
                                                                                      </div>
                                                                                      <div class="mb-3">
                                                                                          <p>Trip Details</p>
                                                                                           <div class="form-check form-check-inline">
                                                                                              <input class="form-check-input" type="checkbox" id="hotel" value="" checked>
                                                                                              <label class="form-check-label" for="hotel">Hotel</label>
                                                                                            </div>
                                                                                            <div class="form-check form-check-inline">
                                                                                              <input class="form-check-input" type="checkbox" id="invoice_pricing" value="">
                                                                                              <label class="form-check-label" for="invoice_pricing">Invoice Pricing</label>
                                                                                            </div>
                                                                                            <div class="form-check form-check-inline">
                                                                                              <input class="form-check-input" type="checkbox" id="payemt_details" value="">
                                                                                              <label class="form-check-label" for="payemt_details">Payment Details</label>
                                                                                            </div>
                                                                                            <div class="form-check form-check-inline">
                                                                                              <input class="form-check-input" type="checkbox" id="tour_itinearay" value="">
                                                                                              <label class="form-check-label" for="tour_itinearay">Tour itinerary</label>
                                                                                            </div>
                                                                                            <div class="form-check form-check-inline">
                                                                                              <input class="form-check-input" type="checkbox" id="pax_details" value="">
                                                                                              <label class="form-check-label" for="pax_details">Pax Details</label>
                                                                                            </div>
                                                                                            <div class="form-check form-check-inline">
                                                                                              <input class="form-check-input" type="checkbox" id="arrival_departure" value="">
                                                                                              <label class="form-check-label" for="arrival_departure">Arrival / Departure Details</label>
                                                                                            </div>
                                                                                            <div class="form-check form-check-inline">
                                                                                              <input class="form-check-input" type="checkbox" id="arrival_departure" value="">
                                                                                              <label class="form-check-label" for="arrival_departure">Terms and condition</label>
                                                                                            </div>
                                                                                      </div>
                                                                                      <div class="text-center">
                                                                                          <a class="btn btn-primary text-white btn-sm" data-toggle="modal" data-target="#generate_voucher"> Generate voucher</a>
                                                                                      </div>
                                                                                  </form>
                                                                                </div>
                                                                           </div>
                                                                           <div>
                                                                               <h5>Booking Vouchers Generated</h5>
                                                                           </div>
                                                                      <div class="dt-responsive table-responsive mb-3">
                                                                              <table id="" class="datatable table table-striped table-bordered nowrap">
                                                                                 <thead>
                                                                                    <tr>
                                                                                       <th>#</th>
                                                                                       <th>Created On</th>
                                                                                       <th>Created by</th>
                                                                                       <th>Item included</th>
                                                                                       <th>Action</th>
                                                                                    </tr>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                       <td></td>
                                                                                       <td></td>
                                                                                       <td></td>
                                                                                       <td></td>
                                                                                       <td></td>
                                                                                    </tr>
                                                                                 </tbody>
                                                                              </table>
                                                                     </div>
                                                                       <!--add supplier-->
                                                                     <!-- Modal -->
                                                                    <div class="modal fade" id="generate_voucher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                              <div class="row" style="width:100%">
                                                                                  <div class="col-md-5">
                                                                                       <h5 class="modal-title" id="exampleModalLabel">Preview Booking Voucher </h5>
                                                                                  </div>
                                                                                  <div class="col-md-7">
                                                                                         <div>
                                                                                             <a class="blue" style="border-right:2px solid blue; padding-right:5px"><i class="fa fa-download"></i> Save</a>
                                                                                             <a class="blue" style="border-right:2px solid blue; padding-right:5px"><i class="fa fa-download"></i> Save & Download</a>
                                                                                             <a class="blue" style="border-right:2px solid blue; padding-right:5px"><i class="fa fa-print"></i> Save & save E-mail</a>
                                                                                             <a class="red" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> Cancel</a>
                                                                                         </div>
                                                                                  </div>
                                                                              </div>
                                                                           
                                                                           
                                                                            <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                                                                            <!--  <span aria-hidden="true">&times;</span>-->
                                                                            <!--</button>-->
                                                                          </div>
                                                                         <form action="">
                                                                              <div class="">
                                                                                  <div class="border-bottom:2px solid blue;">
                                                                                      <center><h2>Booking Voucher</h2></center>
                                                                                  </div>
                                                                                 <table style="width:100%">
                                                                                     <tbody>
                                                                                         <tr>
                                                                                             <td colspan="5">
                                                                                                 To,<br>
                                                                                                 <b>Order Falay</b></br>
                                                                                                 user@gmail.com<br>
                                                                                                 Tax :GdTYuj
                                                                                                 Travel Date :18 Feb 2021</br>
                                                                                                 Travel Location : Singapore
                                                                                             </td>
                                                                                             <td colspan="5" style="text-align:right">
                                                                                                  <b>Happy Trips</b>
                                                                                                  Shivagi Nager<br>
                                                                                                  Jhansi</br>
                                                                                                  user@gmail.com<br>
                                                                                                  999999999
                                                                                                  
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr>
                                                                                             <td colspan="10">
                                                                                                 <h5 style="color:blue;padding:15px 0px">Hotel Confirmation Details</h5>
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr style="background:#e9ecef">
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Hotel Name</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Local point of contact</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Address</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Check-in</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Check out</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Room type</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Meal Plan</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Total Travelers</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Confirmation Number</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">More Details</td>
                                                                                         </tr>
                                                                                        
                                                                                         <tr>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">xyz</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">+9999999999</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Jhansi</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">10/12/21</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">10/12/21</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">-</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">-</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">5</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">-</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">More Details show here</td>
                                                                                         </tr>
                                                                                           <tr>
                                                                                             <td colspan="10" style="margin-bottom:15px">
                                                                                                 <h5 style="color:blue;padding:15px 0px">Flight Confirmation Details</h5>
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr style="background:#e9ecef">
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Travel Date</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Airlines Name</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">From</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">To</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Travel Class</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Total Travelers</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Confirmation Number</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">More Details</td>
                                                                                         </tr>
                                                                                         <tr style="">
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">18 Feb</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Singapore Airlines</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Singapore</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Malaysia</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Economy</td>
                                                                                             <td style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Adults:2</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">7654r</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">More Details</td>
                                                                                         </tr>
                                                                                           <tr>
                                                                                             <td colspan="10" style="margin-bottom:15px">
                                                                                                 <h5 style="color:blue;padding:15px 0px">Invoice Pricing Details</h5>
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr style="background:#e9ecef">
                                                                                             <td colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Description</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Total Amount</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Discount</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Tax</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Amount</td>
                                                                                         </tr>
                                                                                         <tr>
                                                                                             <td colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Product</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Rs 500</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">3%</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">3%</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Rs 7840</td>
                                                                                         </tr>
                                                                                           <tr>
                                                                                             <td colspan="10" style="margin-bottom:15px">
                                                                                                 <h5 style="color:blue;padding:15px 0px">Payment Details</h5>
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr style="background:#e9ecef">
                                                                                             <td colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Description</td>
                                                                                             <td   style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Payable Amount</td>
                                                                                             <td   style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Due Date</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Payment Status</td>
                                                                                             <td   style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Paid Amount</td>
                                                                                             <td  style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Paid On</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Paid Details</td>
                                                                                         </tr>
                                                                                         <tr style="">
                                                                                             <td colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Description show here</td>
                                                                                             <td   style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Rs 3000</td>
                                                                                             <td   style="border-bottom:1px solid black;padding:6px;white-space: inherit;">10/10/21</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Paid</td>
                                                                                             <td  style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Rs 400</td>
                                                                                             <td  style="border-bottom:1px solid black;padding:6px;white-space: inherit;">rs 500</td>
                                                                                             <td  colspan="2" style="border-bottom:1px solid black;padding:6px;white-space: inherit;">Paid details show here</td>
                                                                                         </tr>
                                                                                     </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                              </div>
                                                                         </form>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  <!--add supplier-->
                                                              </div>
                                                           <!--ten tab-->
                                                            <!--11 tab-->
                                                              <div class="tab-pane fade" id="download_file" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                          <div class="row">
                                                                                <div class="col-md-12 col>-12">
                                                                                 <h5 class="mb-3">Document Files </h5>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <a>
                                                                                        <div class="row">
                                                                                            <div class="col-md-2 col-2">
                                                                                                <!--<img src="assets/images/folder.png" style="height:30px">-->
                                                                                                <i class="fa fa-file" style="font-size:30px;color:#448aff"></i>
                                                                                            </div>
                                                                                            <div class="col-md-8 col-8">
                                                                                                2345678.pdf </br>
                                                                                                By <span class="blue">Scott ..</span>
                                                                                            </div>
                                                                                            <div class="col-md-2 col-2">
                                                                                                <i class="fa fa-download"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <a>
                                                                                        <div class="row">
                                                                                            <div class="col-md-2 col-2">
                                                                                                <!--<img src="assets/images/folder.png" style="height:30px">-->
                                                                                                <i class="fa fa-file" style="font-size:30px;color:#448aff"></i>
                                                                                            </div>
                                                                                            <div class="col-md-8 col-8">
                                                                                                2345678.pdf </br>
                                                                                                By <span class="blue">Scott ..</span>
                                                                                            </div>
                                                                                            <div class="col-md-2 col-2">
                                                                                                <i class="fa fa-download"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <a>
                                                                                        <div class="row">
                                                                                            <div class="col-md-2 col-2">
                                                                                                <!--<img src="assets/images/folder.png" style="height:30px">-->
                                                                                                <i class="fa fa-file" style="font-size:30px;color:#448aff"></i>
                                                                                            </div>
                                                                                            <div class="col-md-8 col-8">
                                                                                                2345678.pdf </br>
                                                                                                By <span class="blue">Scott ..</span>
                                                                                            </div>
                                                                                            <div class="col-md-2 col-2">
                                                                                                <i class="fa fa-download"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <a>
                                                                                        <div class="row">
                                                                                            <div class="col-md-2 col-2">
                                                                                                <!--<img src="assets/images/folder.png" style="height:30px">-->
                                                                                                <i class="fa fa-file" style="font-size:30px;color:#448aff"></i>
                                                                                            </div>
                                                                                            <div class="col-md-8 col-8">
                                                                                                2345678.pdf </br>
                                                                                                By <span class="blue">Scott ..</span>
                                                                                            </div>
                                                                                            <div class="col-md-2 col-2">
                                                                                                <i class="fa fa-download"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                           </div>
                                                                         
                                                              </div>
                                                           <!--11 tab-->
                                                            <!--12 tab-->
                                                              <div class="tab-pane fade" id="activity_history" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                          <div class="row">
                                                                                <div class="col-md-12 col>-12">
                                                                                 <h5 class="mb-3">Activity History </h5>
                                                                                    <ul class="timeline col-sm-12">
                                                                                            <li>
                                                                                              <div class="timeline-badge default"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                                                                                              <div class="timeline-panel">
                                                                                                 <div class="timeline-heading">
                                                                                                    <h6 class="timeline-title">Paid amount-1931, Paid on-29-Dec-20 Mode/Refernce - cash ,Updated by -Scott Updated on -01-Dec-20 </h6>
                                                                                                    <p class="text-muted mb-0"><span class="blue">Updated By</span> Scotti martin</p>
                                                                                                    <small>01-Dec-20</small>
                                                                                                 </div>
                                                                                              </div>
                                                                                           </li>
                                                                                            <li>
                                                                                              <div class="timeline-badge default"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                                                                                              <div class="timeline-panel">
                                                                                                 <div class="timeline-heading">
                                                                                                    <h6 class="timeline-title">Paid amount-1931, Paid on-29-Dec-20 Mode/Refernce - cash ,Updated by -Scott Updated on -01-Dec-20 </h6>
                                                                                                    <p class="text-muted mb-0"><span class="blue">Updated By</span> Scotti martin</p>
                                                                                                    <small>01-Dec-20</small>
                                                                                                 </div>
                                                                                              </div>
                                                                                           </li>
                                                                                            <li>
                                                                                              <div class="timeline-badge default"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                                                                                              <div class="timeline-panel">
                                                                                                 <div class="timeline-heading">
                                                                                                    <h6 class="timeline-title">Paid amount-1931, Paid on-29-Dec-20 Mode/Refernce - cash ,Updated by -Scott Updated on -01-Dec-20 </h6>
                                                                                                    <p class="text-muted mb-0"><span class="blue">Updated By</span> Scotti martin</p>
                                                                                                    <small>01-Dec-20</small>
                                                                                                 </div>
                                                                                              </div>
                                                                                           </li>
                                                                                    </ul>
                                                                                </div>
                                                                           </div>
                                                                         
                                                              </div>
                                                           <!--12 tab-->
                                                          
                                                        </div>
									                 </div>
									             </div>
									         </div>
									     </div>
									    <!--deatils card end here-->
								 </div>
                              </div>
                           </div>
                         </div>
                     </div>
                   </div>
                   @include('../includes/footer')
