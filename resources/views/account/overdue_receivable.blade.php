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
								   <div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-purple">30200</h4>
													<h6 class="text-muted m-b-0">Total Amount</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-bar-chart f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-purple">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
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
													<h4 class="text-c-red">50+</h4>
													<h6 class="text-muted m-b-0">Paid Amount</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-question-circle f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-red">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
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
													<h4 class="text-c-green">145</h4>
													<h6 class="text-muted m-b-0">Balanced Amount</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-calendar-check-o f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-green">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
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
													<h6 class="text-muted m-b-0">Overdue Amount</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-hand-o-down f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-blue">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
								 </div>
								   <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                 	<div class="card">
            											<div class="card-header">
            													<div class="row">
            														<div class="col-md-8 col-8">
                														<h4>Overdue Receivable</h4>
                													</div>
            														<div class="col-md-4 col-4">
                														<a href="#" class="btn btn-primary btn-sm mobile-cus" style="float:right">Create New Vendor Payment</a>
                													</div>

            												</div>
            											 </div>	
            											<div class="card-block">
            											       	<div class="dt-responsive table-responsive">
                                													<table class="datatable table table-striped table-bordered nowrap">
                                														<thead>
                                															<tr>
                                																<th># Invoice ID</th>
                                																<th>Created By</th>
                                																<th>Customer Type</th>
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
				  @include('../includes/footer')