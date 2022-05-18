@include('../includes/header')
@include('../includes/sidebar')
                 <div class="pcoded-content">
                     <div class="page-header">
                        <div class="page-block">
                           <div class="row align-items-center">
                              <div class="col-md-8">
                                 <div class="page-header-title">
                                    <h5 class="m-b-10"> Ecommerce Dashboard</h5>
                                    <p class="m-b-0">Welcome to Admin dashboard</p>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                       <a href=""> <i class="fa fa-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="">Dashboard Ecommerce</a></li>
                                 </ul>
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
													<h6 class="text-muted m-b-0">All Earnings</h6>
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
													<h4 class="text-c-green">50+</h4>
													<h6 class="text-muted m-b-0">Orders</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-file-text-o f-28"></i>
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
													<h4 class="text-c-red">145</h4>
													<h6 class="text-muted m-b-0">Users</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-calendar-check-o f-28"></i>
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
													<h4 class="text-c-blue">500</h4>
													<h6 class="text-muted m-b-0">Products</h6>
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
                                    
									<div class="col-sm-12">
										<div class="card">
											<div class="card-header">
													<div class="row">
														<div class="col-8">
														<h4>Today's Orders</h4>
														</div>
														]
													</div>
												
											</div>
											<div class="card-block">
												<div class="dt-responsive table-responsive">
													<table id="order-table" class="table table-striped table-bordered nowrap">
														<thead>
															<tr>
																<th>#</th>
																<th>Product</th>
																<th>Category/Parent category</th>
																<th>Price/unit</th>
																<th>Status</th>
																<th>Stock status</th>
																<th>Invoices</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td><a href="{{url('admin/product_detail')}}">
																		<img class="img-fluid img-circle user-thumbnail"
																			src="{{asset('assets/images/user-profile/user-img.jpg')}}"
																			alt=""> Groccery (किराना) </a>
																</td>
																<td>Groccery/Vegetables</td>
																<td>Rs. 200/KG</td>

																<td> 
					
																	<input type="checkbox" class="js-single" checked="checked" data-switchery="true" style="display: none;">
																	

																</td>
																<td><a href=""><button class="btn btn-primary btn-sm"><i
																				class="fa fa-pencil"></i> 12</button></a></td>
																<td><a href="{{url('admin/invoices')}}"><button class="btn btn-primary btn-sm"> View Invoices</button></a></td></td>
																<td>
																
																<a href="{{url('admin/update_product')}}"><button
																	class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i
																		class="fa fa-pencil b1"></i></button>
																</a>
																<a href=""><button
																	class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom"><i
																		class="fa fa-trash b1"></i></button>
																</a>
															</td>
															</tr>



														</tbody>
														<tfoot>
															<tr>
																<th>#</th>
																<th>Product</th>
																<th>Category/Parent category</th>
																<th>Price/unit</th>
																<th>Status</th>
																<th>Stock status</th>
																<th>Invoices</th>
																<th>Action</th>
															</tr>
														</tfoot>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="card">
											<div class="card-header">
													<div class="row">
														<div class="col-8">
														<h4>Today's Register Users</h4>
														</div>
															<div class="col-4">
															</div>
													</div>
												
											</div>
											<div class="card-block">
												<div class="dt-responsive table-responsive">
													<table id="order-table" class="table table-striped table-bordered nowrap">
														<thead>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Image</th>
																<th>Mobile No</th>
																<th>Email</th>
																<th>Status</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td>Richa</td>
																<td><a href="{{url('admin/product_detail')}}">
																		<img class="img-fluid img-circle user-thumbnail"
																			src="{{asset('assets/images/user-profile/user-img.jpg')}}"
																			alt=""> </a>
																</td>
																<td><a href="tel:+9999999999">+9999999999</a></td>
																<td><a href="mailto:user@gmail.com">user@gmail.com</a></td>

																<td> 
					
																	<input type="checkbox" class="js-single" checked="checked" data-switchery="true" style="display: none;">

																</td>
																
																<td>
																
																<a href=""><button
																	class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom"><i
																		class="fa fa-trash b1"></i></button>
																</a>
															</td>
															</tr>



														</tbody>
														<tfoot>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Image</th>
																<th>Mobile No</th>
																<th>Email</th>
																<th> status</th>
																<th>Action</th>
															</tr>
														</tfoot>
													</table>
												</div>
											</div>
										</div>

					            	</div>
                                    <!-- <div class="col-md-12">
                                       <div class="card table-card latest-activity-card">
                                          <div class="card-header">
                                             <h5>Latest Order</h5>
                                             <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                   <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                   <li><i class="fa fa-window-maximize full-card"></i></li>
                                                   <li><i class="fa fa-minus minimize-card"></i></li>
                                                   <li><i class="fa fa-refresh reload-card"></i></li>
                                                   <li><i class="fa fa-trash close-card"></i></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="card-block">
                                             <div class="table-responsive">
                                                <table class="table table-hover table-borderless">
                                                   <thead>
                                                      <tr>
                                                         <th>Customer</th>
                                                         <th>Order ID</th>
                                                         <th>Photo</th>
                                                         <th>Product</th>
                                                         <th>Quantity</th>
                                                         <th>Date</th>
                                                         <th>Status</th>
                                                         <th>Action</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td>John Deo</td>
                                                         <td>#81412314</td>
                                                         <td><img src="assets/images/widget/PHONE1.jpg" alt="" class="img-fluid"></td>
                                                         <td>Moto G5</td>
                                                         <td>10</td>
                                                         <td>17-2-2017</td>
                                                         <td><label class="label label-warning">Pending</label></td>
                                                         <td><a href="#!"><i class="fa fa-pencil-square-o f-16 m-r-15"></i></a><a href="#!"><i class="fa fa-trash f-16"></i></a></td>
                                                      </tr>
                                                      <tr>
                                                         <td>Jenny William</td>
                                                         <td>#68457898</td>
                                                         <td><img src="assets/images/widget/PHONE2.jpg" alt="" class="img-fluid"></td>
                                                         <td>iPhone 8</td>
                                                         <td>16</td>
                                                         <td>20-2-2017</td>
                                                         <td><label class="label label-primary">Paid</label></td>
                                                         <td><a href="#!"><i class="fa fa-pencil-square-o f-16 m-r-15"></i></a><a href="#!"><i class="fa fa-trash f-16"></i></a></td>
                                                      </tr>
                                                      <tr>
                                                         <td>Lori Moore</td>
                                                         <td>#45457898</td>
                                                         <td><img src="assets/images/widget/PHONE3.jpg" alt="" class="img-fluid"></td>
                                                         <td>Redmi 4</td>
                                                         <td>20</td>
                                                         <td>17-2-2017</td>
                                                         <td><label class="label label-success">Success</label></td>
                                                         <td><a href="#!"><i class="fa fa-pencil-square-o f-16 m-r-15"></i></a><a href="#!"><i class="fa fa-trash f-16"></i></a></td>
                                                      </tr>
                                                      <tr>
                                                         <td>Austin Pena</td>
                                                         <td>#62446232</td>
                                                         <td><img src="assets/images/widget/PHONE4.jpg" alt="" class="img-fluid"></td>
                                                         <td>Jio</td>
                                                         <td>15</td>
                                                         <td>25-4-2017</td>
                                                         <td><label class="label label-danger">Failed</label></td>
                                                         <td><a href="#!"><i class="fa fa-pencil-square-o f-16 m-r-15"></i></a><a href="#!"><i class="fa fa-trash f-16"></i></a></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <div class="text-right  m-r-20">
                                                <a href="#!" class="b-b-primary text-primary">View all Orders</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div> -->
                                  
                                 </div>
                              </div>
                           </div>
                           <div id="styleSelector"></div>
                        </div>
                     </div>
                  </div>
				  @include('../includes/footer')

