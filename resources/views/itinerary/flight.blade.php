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
                                 <h4>Flight</h4>
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
                                 <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addflight" style="float:right;">Create New Flight</button>
                              </div>
                           </div>
                           <div class="card-block">
                              <div class="dt-responsive table-responsive">
                                 <table id="order-table" class="table table-striped table-bordered nowrap">
                                    <thead>
                                       <tr>
                                          <th>#</th>
                                          <th>Flight</th>
                                          <th>Airline</th>
                                          <th>Destination</th>
                                          <th>Terminal/Gate</th>
                                          <th>Arrival Time</th>
                                          <th>Departure Time</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @php $i=1 @endphp
                                       @foreach($flightdata as $data)
                                       <tr>
                                          <td class="sorting_1">{{$i}}</td>
                                          <td>
                                             {{$data->flight}}
                                          </td>
                                          <td>{{$data->airline}}</td>
                                          <td>{{$data->destination}}
                                          </td>
                                          <td>{{$data->terminal_gate}}</td>
                                          <td>{{$data->arrival_time}}</td>
                                          <td>{{$data->departure_time}}</td>
                                          <td>
                                             <a data-toggle="modal" data-target="#editflight{{$data->id}}"><button
                                                class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i
                                                class="fa fa-pencil b1"></i></button>
                                             </a>
                                             <a data-toggle="modal" data-target="#deleteflight{{$data->id}}"><button
                                                class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom"><i
                                                class="fa fa-trash b1"></i></button>
                                             </a>
                                          </td>
                                       </tr>
                                       <!-- edit flight modal -->
                                       <div class="modal " id="editflight{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="editflightTitle" aria-hidden="true">
                                          <div class="modal-dialog modal-lg" role="document">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title" id="exampleModalLongTitle">Edit Flight</h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                                   </button>
                                                </div>
                                                <form action="{{url('itinerary/modify/flight')}}" method="post" >
                                                   @csrf
                                                   <div class="modal-body">
                                                      <div class="card card-body">
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <label class="mt-2" for="flight">Flight <span class="important">*</span></label>
                                                            <input type="text" class="form-control  mb-3" name="flight" placeholder="" value="{{$data->flight}}">
                                                         </div>
                                                         <div class="col-md-6">
                                                            <label class="mt-2" for="airline">Airline <span class="important">*</span></label>
                                                            <input type="text" class="form-control  mb-3" name="airline" placeholder="" value="{{$data->airline}}">
                                                         </div>
                                                         <div class="col-md-6">
                                                            <label class="mt-2" for="dest">Destination<span class="important">*</span></label>
                                                            <input type="text" class="form-control  mb-3" name="dest" placeholder="" value="{{$data->destination}}">
                                                         </div>
                                                         <div class="col-md-6">
                                                            <label class="mt-2" for="term_gate">Terminal/Gate <span class="important">*</span></label>
                                                            <input type="text" class="form-control  mb-3" name="term_gate" placeholder="" value="{{$data->terminal_gate}}">
                                                         </div>
                                                         <div class="col-md-6">
                                                            <label class="mt-2" for="arr_time">Arrival Time <span class="important">*</span></label>
                                                            <input type="time" class="form-control  mb-3" name="arr_time" placeholder="" value="{{$data->arrival_time}}">
                                                         </div>
                                                         <div class="col-md-6">
                                                            <label class="mt-2" for="dep_time">Departure Time <span class="important">*</span></label>
                                                            <input type="time" class="form-control  mb-3" name="dep_time" placeholder="" value="{{$data->departure_time}}">
                                                         </div>
                                                      </div>
                                                      </div>
                                                      <center>
                                                      <input type="hidden" name="hide_id" value="{{$data->id}}">
                                                      <button type="submit" class="btn btn-primary" name="edit_flight"> Submit</button>
                                                      </center>
                                                      <br>
                                                   </div>
                                                </form> 
                                             </div>
                                          </div>
                                       </div>
                                       <!-- delete flight modal -->
                                       <div class="modal fade" id="deleteflight{{$data->id}}">
                                          <div class="modal-dialog" style="width:400px;" role="document">
                                             <div class="modal-content timeout-modal">
                                                   <div class="modal-body">
                                                      <button class="close" data-dismiss="modal" aria-label="Close"></button>
                                                      <div class="text-center mt-3 mb-4"><i class="ti-trash timeout-icon"></i></div>
                                                      <div class="text-center h4 mb-3">Are You sure you want to delete</div>
                                                      <div id="timeout-activate-box">
                                                         <form action="{{url('itinerary/modify/flight')}}" method="post">
                                                            @csrf
                                                               <div class="form-group text-center">
                                                                  <input type="hidden" name="hide_id" value="{{$data->id}}">
                                                                  <button class="btn btn-primary btn-fix btn-air" type="submit" name="delete_flight" value="" id="timeout-activate">Delete</button>
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
                                          <th>Flight</th>
                                          <th>Airline</th>
                                          <th>Destination</th>
                                          <th>Terminal/Gate</th>
                                          <th>Arrival Time</th>
                                          <th>Departure Time</th>
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


<!-- add flight modal -->
<div class="modal " id="addflight" tabindex="-1" role="dialog" aria-labelledby="addflightTitle" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create New Flight</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="{{url('itinerary/modify/flight')}}" method="post" >
   			@csrf
            <div class="modal-body">
               <div class="card card-body">
               <div class="row">
                  <div class="col-md-6">
                     <label class="mt-2" for="flight">Flight <span class="important">*</span></label>
                     <input type="text" class="form-control  mb-3" name="flight" placeholder="" >
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="airline">Airline <span class="important">*</span></label>
                     <input type="text" class="form-control  mb-3" name="airline" placeholder="" >
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="dest">Destination<span class="important">*</span></label>
                     <input type="text" class="form-control  mb-3" name="dest" placeholder="" >
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="term_gate">Terminal/Gate <span class="important">*</span></label>
                     <input type="text" class="form-control  mb-3" name="term_gate" placeholder="" >
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="arr_time">Arrival Time <span class="important">*</span></label>
                     <input type="time" class="form-control  mb-3" name="arr_time" placeholder="" >
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="dep_time">Departure Time <span class="important">*</span></label>
                     <input type="time" class="form-control  mb-3" name="dep_time" placeholder="" >
                  </div>
               </div>
               </div>
               <center>
               <button type="submit" class="btn btn-primary" name="add_flight"> Submit</button>
               </center>
               <br>
            </div>
		   </form>     
      </div>
   </div>
</div>

@include('../includes/footer')