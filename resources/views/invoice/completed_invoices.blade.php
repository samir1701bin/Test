@include('../includes/header')
@include('../includes/invoice_sidebar')
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
														<div class="col-8">
														<h4>Completed Invoices</h4>
														</div>
													</div>
											</div>
											<div class="card-block">
												<div class="dt-responsive table-responsive">
													<table id="order-table" class="table table-striped table-bordered nowrap">
														<thead>
															<tr>
																<th>ID</th>
																<th>Client's Details</th>
																<th>Address</th>
																<th>Other</th>
																<th>Total Invoice Paid</th>
																<th>Paid Invoice</th>
																<th>Unpaid Invoice</th>
																<th>Status</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td>
																    <a><b>User Name</b> <br>
																      <span class="user-type">B2B</span><br>
																      #765414
																   </a>
																</td>
																<td>
																    USA <br>
																    12/08/2021<br>
																    Couple Holiday
																</td>
																<td>
																    <i class="fa fa-user" aria-hidden="true"></i> :20<br>
																    <i class="fa fa-plane" aria-hidden="true"></i> :10</br>
																    <i class="fa fa-car" aria-hidden="true"></i> :10
																</td>

																<td> 
					                                               <span class="price">USD 1000</span><br>
					                                                Schedule : 2 <br>
					                                                1 Paid
																</td>
																<td> 
					                                               <span class="price">USD 1000</span><br>
					                                               <button class="btn btn-sm btn-success invoice-status">2 FullyPaid</button><br>
					                                                 12/10/21
																</td>
															     <td> 
					                                               <span class="price red">USD 1000</span><br>
					                                                Schedule : 2 <br>
					                                                 Due: 12/10/21
																</td>
																<td>
																    <i class="fa fa-check" aria-hidden="true"></i> Send to customer<br>
																    <i class="fa fa-times" aria-hidden="true"></i> Read by customer
																</td>
																<td><a href="{{url('admin/invoices')}}"><button class="btn btn-primary btn-sm"> View</button></a></td></td>
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
				  @include('../includes/footer')
