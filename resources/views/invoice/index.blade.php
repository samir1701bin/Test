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
								   <div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-purple">{{count($invoice)}}</h4>
													<h6 class="text-muted m-b-0">All Invoices</h6>
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
													<h4 class="text-c-green">{{$countunpaid}}</h4>
													<h6 class="text-muted m-b-0">Unpaid Invoices</h6>
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
													<h4 class="text-c-red">{{$countoverdue}}</h4>
													<h6 class="text-muted m-b-0">Over Due Invoices</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-file f-28"></i>
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
													<h4 class="text-c-blue">{{$countpartially}}</h4>
													<h6 class="text-muted m-b-0">Partially Paid Invoices</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-th-list f-28"></i>
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
									<div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-red">{{$countfully}}</h4>
													<h6 class="text-muted m-b-0">Fully paid invoice</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-outdent f-28"></i>
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
                                    <div class="col-sm-12">
										<div class="card">
											<div class="card-header">
													<div class="row">
														<div class="col-8">
														<h4>All Invoices</h4>
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
														<div class="col-4">
													      <a class="btn btn-primary" href="{{url('invoice/create_invoices')}}" style="float:right">+ Add</a>
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
															@php $i=1 @endphp
                                      						@foreach($invoice as $data)
															<tr>
																<td>{{$i}}</td>
																<td>
																    <a><b>{{$data->customer_name}}</b> <br>
																      <span class="user-type">{{$data->customer_type}}</span><br>
																      {{$data->customer_number}}
																   </a>
																</td>
																<td>
																{{$data->customer_number}} <br>
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
																	@if($data->status == 0)
																	Unpaid Invoice
																	@elseif($data->status == 1)Overdue Invoice
																	@elseif($data->status == 2)Partially Paid Invoice
																	@else Fully Paid Invoice
																	@endif
																</td>
																<td>
																	<a href="{{url('invoice/generate_invoice/'.$data->id)}}"><button class="btn btn-primary btn-sm"> View</button></a>
																	<a href="{{url('invoice/update_invoice/'.$data->id)}}"><button class="btn btn-info btn-sm"> Edit</button></a>
																	<a data-toggle="modal" data-target="#deleteinvoice{{$data->id}}"><button
																		class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom"><i
																		class="fa fa-trash b1"></i></button>
																	</a>
																	@if($data->status == 0)
																	<a href="#" class="btn btn-pink" data-toggle="modal" data-target="#markoverdue{{$data->id}}">Mark as Overdue invoice</a>
																	<a href="#" class="btn btn-pink" data-toggle="modal" data-target="#markpartial{{$data->id}}">Mark as Partially Paid invoice</a>
																	<a href="#" class="btn btn-pink" data-toggle="modal" data-target="#markfull{{$data->id}}">Mark as Fully Paid invoice</a>
																	@elseif($data->status == 1)
																	<a href="#" class="btn btn-pink" data-toggle="modal" data-target="#markpartial{{$data->id}}">Mark as Partially Paid invoice</a>
																	<a href="#" class="btn btn-pink" data-toggle="modal" data-target="#markfull{{$data->id}}">Mark as Fully Paid invoice</a>
																	@elseif($data->status == 2)
																	<a href="#" class="btn btn-pink" data-toggle="modal" data-target="#markfull{{$data->id}}">Mark as Fully Paid invoice</a>
																	@else
																	@endif
																</td>
															</tr>
															<!--delete modal-->
															<div class="modal fade" id="deleteinvoice{{$data->id}}">
																<div class="modal-dialog" style="width:400px;" role="document">
																	<div class="modal-content timeout-modal">
																		<div class="modal-body">
																			<button class="close" data-dismiss="modal" aria-label="Close"></button>
																			<div class="text-center mt-3 mb-4"><i class="ti-trash timeout-icon"></i></div>
																			<div class="text-center h4 mb-3">Are You sure you want to delete</div>
																			<div id="timeout-activate-box">
																				<form action="{{url('invoice/modify/invoices')}}" method="post">
																					@csrf
																					<div class="form-group text-center">
																						<input type="hidden" name="hide_id" value="{{$data->id}}">
																						<button class="btn btn-primary btn-fix btn-air" type="submit" name="delete_invoice" value="" id="timeout-activate">Delete</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!--markoverdueinvoice modal-->
															<div class="modal fade" id="markoverdue{{$data->id}}">
																<div class="modal-dialog" style="width:400px;" role="document">
																	<div class="modal-content timeout-modal">
																		<div class="modal-body">
																			<button class="close" data-dismiss="modal" aria-label="Close"></button>
																			<div class="text-center mt-3 mb-4"><i class="ti-trash timeout-icon"></i></div>
																			<div class="text-center h4 mb-3">Are You sure you want to mark it as Overdue Invoice.</div>
																			<div id="timeout-activate-box">
																				<form action="{{url('invoice/modify/invoices')}}" method="post">
																					@csrf
																					<div class="form-group text-center">
																						<input type="hidden" name="hide_id" value="{{$data->id}}">
																						<button class="btn btn-primary btn-fix btn-air" type="submit" name="markoverdue_invoice" value="" id="timeout-activate">Mark</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- markpartialinvoice modal -->
															<div class="modal fade" id="markpartial{{$data->id}}">
																<div class="modal-dialog" style="width:400px;" role="document">
																	<div class="modal-content timeout-modal">
																		<div class="modal-body">
																			<button class="close" data-dismiss="modal" aria-label="Close"></button>
																			<div class="text-center mt-3 mb-4"><i class="ti-trash timeout-icon"></i></div>
																			<div class="text-center h4 mb-3">Are You sure you want to mark it as Partially Paid Invoice.</div>
																			<div id="timeout-activate-box">
																				<form action="{{url('invoice/modify/invoices')}}" method="post">
																					@csrf
																					<div class="form-group text-center">
																						<input type="hidden" name="hide_id" value="{{$data->id}}">
																						<button class="btn btn-primary btn-fix btn-air" type="submit" name="markpartial_invoice" value="" id="timeout-activate">Mark</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- markfullinvoice modal -->
															<div class="modal fade" id="markfull{{$data->id}}">
																<div class="modal-dialog" style="width:400px;" role="document">
																	<div class="modal-content timeout-modal">
																		<div class="modal-body">
																			<button class="close" data-dismiss="modal" aria-label="Close"></button>
																			<div class="text-center mt-3 mb-4"><i class="ti-trash timeout-icon"></i></div>
																			<div class="text-center h4 mb-3">Are You sure you want to mark it as Fully Paid Invoice.</div>
																			<div id="timeout-activate-box">
																				<form action="{{url('invoice/modify/invoices')}}" method="post">
																					@csrf
																					<div class="form-group text-center">
																						<input type="hidden" name="hide_id" value="{{$data->id}}">
																						<button class="btn btn-primary btn-fix btn-air" type="submit" name="markfull_invoice" value="" id="timeout-activate">Mark</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															@php $i=$i+1 @endphp
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
				  @include('../includes/footer')
