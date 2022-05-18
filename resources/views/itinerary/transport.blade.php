@include('../includes/header')
@include('../includes/itinerary_sidebar')
<style>
   .btn-padding{
   padding: 5px 15px;
   }
   .nav-pills .nav-link {
   border-radius: 0rem;
   }
   .nav-link {
   display: block;
   padding: 0.3rem 0.3rem;
   }
   .w-50{
   width:50%;
   }
   .pl-10{
   padding-left:10px;  
   }
   .border-bottom{
   border-bottom:1px solid gray;
   }
   .shadow-sm {
   box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
   }
</style>
<div class="pcoded-content">
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
                                 <h4>Transport</h4>
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
                              <div class="col-4" >
                                 <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addtransport" style="float:right;">Create New Transport</button>
                              </div>
                           </div>
                           <div class="card-block">
                              <div class="dt-responsive table-responsive">
                                 <table id="order-table" class="table table-striped table-bordered nowrap">
                                    <thead>
                                       <tr>
                                          <th>#</th>
                                          <th>Vehicle Type</th>
                                          <th>Vehicle No.</th>
                                          <th>Departure Time</th>
                                          <th>Arrival Time</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
										@php $i=1 @endphp
										@foreach($transportdata as $data)
                                       <tr>
                                          <td class="sorting_1">{{$i}}</td>
                                          <td>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <b>{{$data->vehicle_type}}</b>
                                                </div>
                                             </div>
                                          </td>
                                          <td>{{$data->vehicle_no}}</td>
                                          <td>{{$data->departure_time}}</td>
                                          <td>{{$data->arrival_time}}</td>
                                          <td>
                                             <a data-toggle="modal" data-target="#edittransport{{$data->id}}"><button
                                                class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i
                                                class="fa fa-pencil b1"></i></button>
                                             </a>
                                             <a data-toggle="modal" data-target="#deletetransport{{$data->id}}"><button
                                                class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom"><i
                                                class="fa fa-trash b1"></i></button>
                                             </a>
                                          </td>
                                       </tr>
									   <!-- edit transport modal -->
										<div class="modal " id="edittransport{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="edittransportTitle" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLongTitle">Edit Transport</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form action="{{url('itinerary/modify/transport')}}" method="post" >
													@csrf
													<div class="modal-body">
													<div class="card card-body">
													<div class="row">
														<div class="col-md-6">
															<label class="mt-2" for="tname">Vehicle Type <span class="important">*</span></label>
															<select class="form-control  mb-3" name="veh_type" id="veh_type">
																<option value="Van" {{($data->vehicle_type) == 'Van' ? 'selected' : '' }}>Van</option>
																<option value="Taxi" {{($data->vehicle_type) == "Taxi"  ? 'selected' : ''}}>Taxi</option>
																<option value="Bus" {{($data->vehicle_type) == "Bus"  ? 'selected' : ''}}>Bus</option>
																<option value="Car" {{($data->vehicle_type) == "Car"  ? 'selected' : ''}}>Car</option>
															</select>
														</div>
														<div class="col-md-6">
															<label class="mt-2" for="veh_no">Vehicle Number <span class="important">*</span></label>
															<input type="text" class="form-control  mb-3" name="veh_no" placeholder="" value="{{$data->vehicle_no}}">
														</div>
														<div class="col-md-6">
															<label class="mt-2" for="dep_time">Departure Time<span class="important">*</span></label>
															<input type="time" class="form-control  mb-3" name="dep_time" placeholder="" value="{{$data->departure_time}}">
														</div>
														<div class="col-md-6">
															<label class="mt-2" for="arr_time">Arrival Time <span class="important">*</span></label>
															<input type="time" class="form-control  mb-3" name="arr_time" placeholder="" value="{{$data->arrival_time}}">
														</div>
													</div>
													</div>
													<center>
														<input type="hidden" name="hide_id" value="{{$data->id}}">
													<button type="submit" class="btn btn-primary" name="edit_transport"> Submit</button>
													</center>
													<br>
													</div>
												</form>
											</div>
										</div>
										</div>
										<!-- delete train modal -->
										<div class="modal fade" id="deletetransport{{$data->id}}">
                                          <div class="modal-dialog" style="width:400px;" role="document">
                                             <div class="modal-content timeout-modal">
                                                   <div class="modal-body">
                                                      <button class="close" data-dismiss="modal" aria-label="Close"></button>
                                                      <div class="text-center mt-3 mb-4"><i class="ti-trash timeout-icon"></i></div>
                                                      <div class="text-center h4 mb-3">Are You sure you want to delete</div>
                                                      <div id="timeout-activate-box">
                                                         <form action="{{url('itinerary/modify/transport')}}" method="post">
                                                            @csrf
                                                               <div class="form-group text-center">
                                                                  <input type="hidden" name="hide_id" value="{{$data->id}}">
                                                                  <button class="btn btn-primary btn-fix btn-air" type="submit" name="delete_transport" value="" id="timeout-activate">Delete</button>
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
                                    <tfoot>
                                       <tr>
                                          <th>#</th>
                                          <th>Vehicle Type</th>
                                          <th>Vehicle No.</th>
                                          <th>Departure Time</th>
                                          <th>Arrival Time</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>
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
<!-- edit transport modal -->
<div class="modal " id="edittransport" tabindex="-1" role="dialog" aria-labelledby="edittransportTitle" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit Transport</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
		 <form action="{{url('itinerary/modify/transport')}}" method="post" >
   			@csrf
            <div class="modal-body">
               <div class="card card-body">
               <div class="row">
                  <div class="col-md-6">
                     <label class="mt-2" for="tname">Vehicle Type <span class="important">*</span></label>
                     <input type="text" class="form-control  mb-3" name="tname" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="tfrom">Vehicle Number <span class="important">*</span></label>
                     <input type="text" class="form-control  mb-3" name="tfrom" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="tto">Departure Time<span class="important">*</span></label>
                     <input type="time" class="form-control  mb-3" name="tto" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="start_time">Arrival Time <span class="important">*</span></label>
                     <input type="time" class="form-control  mb-3" name="start_time" placeholder="" required>
                  </div>
               </div>
               </div>
               <center>
               <button type="submit" class="btn btn-primary" name="edit_transport"> Submit</button>
               </center>
               <br>
            </div>
		</form>
      </div>
   </div>
</div>
<!-- add transport modal -->
<div class="modal " id="addtransport" tabindex="-1" role="dialog" aria-labelledby="addtransportTitle" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create New Transport</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="{{url('itinerary/modify/transport')}}" method="post" >
   			@csrf
            <div class="modal-body">
               <div class="card card-body">
               <div class="row">
                  <div class="col-md-6">
                     <label class="mt-2" for="veh_type">Vehicle Type <span class="important">*</span></label>
                     <select class="form-control  mb-3" name="veh_type" id="veh_type">
						 <option value="Van">Van</option>
						 <option value="Taxi">Taxi</option>
						 <option value="Bus">Bus</option>
						 <option value="Car">Car</option>
					 </select>
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="veh_no">Vehicle Number <span class="important">*</span></label>
                     <input type="text" class="form-control  mb-3" name="veh_no" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="dep_time">Departure Time<span class="important">*</span></label>
                     <input type="time" class="form-control  mb-3" name="dep_time" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="arr_time">Arrival Time <span class="important">*</span></label>
                     <input type="time" class="form-control  mb-3" name="arr_time" placeholder="" required>
                  </div>
               </div>
               </div>
               <center>
               <button type="submit" class="btn btn-primary" name="add_transport"> Submit</button>
               </center>
               <br>
            </div>
		</form>
      </div>
   </div>
</div>
@include('../includes/footer')