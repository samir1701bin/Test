@include('../includes/header')
@include('../includes/account_sidebar')
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
                                 <!--<ul class="breadcrumb">-->
                                 <!--   <li class="breadcrumb-item">-->
                                 <!--      <a href=""> <i class="fa fa-home"></i> </a>-->
                                 <!--   </li>-->
                                 <!--   <li class="breadcrumb-item"><a href="">Dashboard</a></li>-->
                                 <!--   <li class="breadcrumb-item"><a href="">Dashboard Ecommerce</a></li>-->
                                 <!--</ul>-->
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
            													<div class="row">
            														<div class="col-md-8 col-12">
                														<h4>Supplier Wise Payments </h4>
                													</div>
            														<div class="col-md-4 col-12">
            														</div>
            												</div>
            											<div class="card-block">
            											        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                                  <li class="nav-item">
                                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Next7day" role="tab" aria-controls="home" aria-selected="true">Next 7 Days</a>
                                                                  </li>
                                                                  <li class="nav-item">
                                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#next15days" role="tab" aria-controls="profile" aria-selected="false">Next 15 Days</a>
                                                                  </li>
                                                                  <li class="nav-item">
                                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#thismonth" role="tab" aria-controls="contact" aria-selected="false">This Month</a>
                                                                  </li>
                                                                  <li class="nav-item">
                                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#next1month" role="tab" aria-controls="contact" aria-selected="false">Next Month</a>
                                                                  </li>
                                                                  <li class="nav-item">
                                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#next6month" role="tab" aria-controls="contact" aria-selected="false">Next 6 Months</a>
                                                                  </li>
                                                                  <li class="nav-item">
                                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#next12month" role="tab" aria-controls="contact" aria-selected="false">Next 12 Months</a>
                                                                  </li>
                                                                </ul>
                                                                <div class="tab-content" id="myTabContent">
                                                                  <div class="tab-pane fade show active" id="Next7day" role="tabpanel" aria-labelledby="home-tab">
                                                                      <div class="row">
                                                                          <div class="col-md-12">
                                                                              <div class="row">
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Active Payment</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Paid Full</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Paid Partially</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Overdue</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Total Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Paid Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Balanced Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Due Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-12">
                                                                              	<div class="dt-responsive table-responsive">
                                													<table class="datatable table table-striped table-bordered nowrap">
                                														<thead>
                                															<tr>
                                																<th># Invoice ID</th>
                                																<th>Created By</th>
                                																<th>Custmer Type</th>
                                																<th>Contact Details</th>
                                																<th>Total</th>
                                																<th>Paid</th>
                                																<th>Balanced</th>
                                																<th>Payment Status</th>
                                																<th>Blanced Date</th>
                                																<th>Action</th>
                                															</tr>
                                														</thead>
                                													    	<tbody>
                                														     <tr>
                                														         <td>KS345</td>
                                														         <td>Pater 23 Dec 2021</td>
                                														         <td>B2B</td>
                                														         <td>Sean<br> <a class="text-black" href="mailto:user@gmail.com">user@gmail.com</a></td>
                                														         <td>Rs 45876</td>
                                														         <td>Rs.3000</td>
                                														         <td>Rs.3000</td>
                                														         <td><button class="btn btn-info btn-sm">Partially Paid</button></td>
                                														         <td>10/10/2021</td>
                                														         <td><button class="btn btn-primary">View</button></td>
                                														     </tr>
                                															</tbody>
                                													</table>
                                												</div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="tab-pane fade" id="next15days" role="tabpanel" aria-labelledby="home-tab">
                                                                      <div class="row">
                                                                          <div class="col-md-12">
                                                                              <div class="row">
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Active Payment</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Paid Full</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Paid Partially</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Overdue</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Total Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Paid Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Balanced Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Due Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-12">
                                                                              	<div class="dt-responsive table-responsive">
                                													<table class="datatable table table-striped table-bordered nowrap">
                                														<thead>
                                															<tr>
                                																<th># Invoice ID</th>
                                																<th>Created By</th>
                                																<th>Custmer Type</th>
                                																<th>Contact Details</th>
                                																<th>Total</th>
                                																<th>Paid</th>
                                																<th>Balanced</th>
                                																<th>Payment Status</th>
                                																<th>Blanced Date</th>
                                																<th>Action</th>
                                															</tr>
                                														</thead>
                                													    	<tbody>
                                														     <tr>
                                														         <td>KS345</td>
                                														         <td>Pater 23 Dec 2021</td>
                                														         <td>B2B</td>
                                														         <td>Sean<br> <a class="text-black" href="mailto:user@gmail.com">user@gmail.com</a></td>
                                														         <td>Rs 45876</td>
                                														         <td>Rs.3000</td>
                                														         <td>Rs.3000</td>
                                														         <td><button class="btn btn-info btn-sm">Partially Paid</button></td>
                                														         <td>10/10/2021</td>
                                														         <td><button class="btn btn-primary">View</button></td>
                                														     </tr>
                                															</tbody>
                                													</table>
                                												</div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="tab-pane fade" id="thismonth" role="tabpanel" aria-labelledby="home-tab">
                                                                      <div class="row">
                                                                          <div class="col-md-12">
                                                                              <div class="row">
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Active Payment</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Paid Full</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Paid Partially</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Overdue</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Total Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Paid Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Balanced Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Due Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-12">
                                                                              	<div class="dt-responsive table-responsive">
                                													<table class="datatable table table-striped table-bordered nowrap">
                                														<thead>
                                															<tr>
                                																<th># Invoice ID</th>
                                																<th>Created By</th>
                                																<th>Custmer Type</th>
                                																<th>Contact Details</th>
                                																<th>Total</th>
                                																<th>Paid</th>
                                																<th>Balanced</th>
                                																<th>Payment Status</th>
                                																<th>Blanced Date</th>
                                																<th>Action</th>
                                															</tr>
                                														</thead>
                                													    	<tbody>
                                														     <tr>
                                														         <td>KS345</td>
                                														         <td>Pater 23 Dec 2021</td>
                                														         <td>B2B</td>
                                														         <td>Sean<br> <a class="text-black" href="mailto:user@gmail.com">user@gmail.com</a></td>
                                														         <td>Rs 45876</td>
                                														         <td>Rs.3000</td>
                                														         <td>Rs.3000</td>
                                														         <td><button class="btn btn-info btn-sm">Partially Paid</button></td>
                                														         <td>10/10/2021</td>
                                														         <td><button class="btn btn-primary">View</button></td>
                                														     </tr>
                                															</tbody>
                                													</table>
                                												</div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="tab-pane fade" id="next1month" role="tabpanel" aria-labelledby="home-tab">
                                                                      <div class="row">
                                                                          <div class="col-md-12">
                                                                              <div class="row">
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Active Payment</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Paid Full</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Paid Partially</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Overdue</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Total Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Paid Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Balanced Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Due Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-12">
                                                                              	<div class="dt-responsive table-responsive">
                                													<table class="datatable table table-striped table-bordered nowrap">
                                														<thead>
                                															<tr>
                                																<th># Invoice ID</th>
                                																<th>Created By</th>
                                																<th>Custmer Type</th>
                                																<th>Contact Details</th>
                                																<th>Total</th>
                                																<th>Paid</th>
                                																<th>Balanced</th>
                                																<th>Payment Status</th>
                                																<th>Blanced Date</th>
                                																<th>Action</th>
                                															</tr>
                                														</thead>
                                													    	<tbody>
                                														     <tr>
                                														         <td>KS345</td>
                                														         <td>Pater 23 Dec 2021</td>
                                														         <td>B2B</td>
                                														         <td>Sean<br> <a class="text-black" href="mailto:user@gmail.com">user@gmail.com</a></td>
                                														         <td>Rs 45876</td>
                                														         <td>Rs.3000</td>
                                														         <td>Rs.3000</td>
                                														         <td><button class="btn btn-info btn-sm">Partially Paid</button></td>
                                														         <td>10/10/2021</td>
                                														         <td><button class="btn btn-primary">View</button></td>
                                														     </tr>
                                															</tbody>
                                													</table>
                                												</div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="tab-pane fade" id="next6month" role="tabpanel" aria-labelledby="home-tab">
                                                                      <div class="row">
                                                                          <div class="col-md-12">
                                                                              <div class="row">
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Active Payment</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Paid Full</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Paid Partially</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Overdue</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Total Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Paid Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Balanced Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Due Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-12">
                                                                              	<div class="dt-responsive table-responsive">
                                													<table class="datatable table table-striped table-bordered nowrap">
                                														<thead>
                                															<tr>
                                																<th># Invoice ID</th>
                                																<th>Created By</th>
                                																<th>Custmer Type</th>
                                																<th>Contact Details</th>
                                																<th>Total</th>
                                																<th>Paid</th>
                                																<th>Balanced</th>
                                																<th>Payment Status</th>
                                																<th>Blanced Date</th>
                                																<th>Action</th>
                                															</tr>
                                														</thead>
                                													    	<tbody>
                                														     <tr>
                                														         <td>KS345</td>
                                														         <td>Pater 23 Dec 2021</td>
                                														         <td>B2B</td>
                                														         <td>Sean<br> <a class="text-black" href="mailto:user@gmail.com">user@gmail.com</a></td>
                                														         <td>Rs 45876</td>
                                														         <td>Rs.3000</td>
                                														         <td>Rs.3000</td>
                                														         <td><button class="btn btn-info btn-sm">Partially Paid</button></td>
                                														         <td>10/10/2021</td>
                                														         <td><button class="btn btn-primary">View</button></td>
                                														     </tr>
                                															</tbody>
                                													</table>
                                												</div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="tab-pane fade" id="next12month" role="tabpanel" aria-labelledby="home-tab">
                                                                      <div class="row">
                                                                          <div class="col-md-12">
                                                                              <div class="row">
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Active Payment</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Paid Full</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Paid Partially</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>7</h4>
                                                                                          <span>Overdue</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Total Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Paid Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Balanced Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-3 col-6">
                                                                                      <div class="counter-section">
                                                                                          <h4>Rs.700</h4>
                                                                                          <span>Due Amount</span>
                                                                                      </div>
                                                                                  </div>
                                                                                
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-12">
                                                                              	<div class="dt-responsive table-responsive">
                                													<table class="datatable table table-striped table-bordered nowrap">
                                														<thead>
                                															<tr>
                                																<th># Invoice ID</th>
                                																<th>Created By</th>
                                																<th>Custmer Type</th>
                                																<th>Contact Details</th>
                                																<th>Total</th>
                                																<th>Paid</th>
                                																<th>Balanced</th>
                                																<th>Payment Status</th>
                                																<th>Blanced Date</th>
                                																<th>Action</th>
                                															</tr>
                                														</thead>
                                													    	<tbody>
                                														     <tr>
                                														         <td>KS345</td>
                                														         <td>Pater 23 Dec 2021</td>
                                														         <td>B2B</td>
                                														         <td>Sean<br> <a class="text-black" href="mailto:user@gmail.com">user@gmail.com</a></td>
                                														         <td>Rs 45876</td>
                                														         <td>Rs.3000</td>
                                														         <td>Rs.3000</td>
                                														         <td><button class="btn btn-info btn-sm">Partially Paid</button></td>
                                														         <td>10/10/2021</td>
                                														         <td><button class="btn btn-primary">View</button></td>
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
                  </div>
                  @include('../includes/footer')