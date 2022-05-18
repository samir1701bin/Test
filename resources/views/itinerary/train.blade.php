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
                                 <h4>Train</h4>
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
                                 <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addtrain" style="float:right;">Create New Train</button>
                              </div>
                           </div>
                           <div class="card-block">
                              <div class="dt-responsive table-responsive">
                                 <table  class="table table-striped table-bordered nowrap datatable">
                                    <thead>
                                       <tr>
                                          <th>#</th>
                                          <th>Train Name/ Number</th>
                                          <th>From</th>
                                          <th>To</th>
                                          <th>Start Timing</th>
                                          <th>Duration</th>
                                          <th>Timezone</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @php $i=1 @endphp
                                       @foreach($traindata as $data)
                                       <tr>
                                          <td class="sorting_1">{{$i}}</td>
                                          <td>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <b>{{$data->tname_no}}</b>
                                                </div>
                                             </div>
                                          </td>
                                          <td class="sorting_1">{{$data->from}}</td>
                                          <td>{{$data->to}}</td>
                                          <td>{{$data->start_time}}</td>
                                          <td>{{$data->duration}}</td>
                                          <td>{{$data->timezone}}</td>
                                          <td>
                                             <a data-toggle="modal" data-target="#edittrain{{$data->id}}"><button
                                                class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i
                                                class="fa fa-pencil b1"></i></button>
                                             </a>
                                             <a data-toggle="modal" data-target="#deletetrain{{$data->id}}"><button
                                                class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom"><i
                                                class="fa fa-trash b1"></i></button>
                                             </a>
                                          </td>
                                       </tr>
                                       <!-- edit train modal -->
                                       <div class="modal" id="edittrain{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="addtrainTitle" aria-hidden="true">
                                          <div class="modal-dialog modal-lg" role="document">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title" id="exampleModalLongTitle">Edit Train Details</h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                                   </button>
                                                </div>
                                             <form action="{{url('itinerary/modify/train')}}" method="post">
                                                   @csrf
                                                <div class="modal-body">
                                                   <div class="card card-body">
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <label class="mt-2" for="tname">Train Name/Number <span class="important">*</span></label>
                                                         <input type="text" class="form-control  mb-3" name="tname" value="{{$data->tname_no}}" placeholder="" required>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <label class="mt-2" for="tfrom">From <span class="important">*</span></label>
                                                         <input type="text" class="form-control  mb-3" name="tfrom" value="{{$data->from}}" placeholder="" required>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <label class="mt-2" for="tto">To<span class="important">*</span></label>
                                                         <input type="text" class="form-control  mb-3" name="tto" value="{{$data->to}}" placeholder="" required>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <label class="mt-2" for="start_time">Start Time <span class="important">*</span></label>
                                                         <input type="time" class="form-control  mb-3" name="start_time" value="{{$data->start_time}}" placeholder="" required>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <label class="mt-2" for="duration">Duration <span class="important">*</span></label>
                                                         <input type="text" class="form-control  mb-3" name="duration" value="{{$data->duration}}" placeholder="" required>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <label class="mt-2" for="tzone">Timezone <span class="important">*</span></label>
                                                         <input type="text" class="form-control  mb-3" name="tzone" value="{{$data->timezone}}" placeholder="" required>
                                                      </div>
                                                   </div>
                                                   </div>
                                                   <center>
                                                   <input type="hidden" name="hide_id" value="{{$data->id}}">
                                                   <button type="submit" name="edit_train" class="btn btn-primary"> Submit</button>
                                                   </center>
                                                   <br>
                                                </div>
                                             </form>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- delete train modal -->
                                       <div class="modal fade" id="deletetrain{{$data->id}}">
                                          <div class="modal-dialog" style="width:400px;" role="document">
                                             <div class="modal-content timeout-modal">
                                                   <div class="modal-body">
                                                      <button class="close" data-dismiss="modal" aria-label="Close"></button>
                                                      <div class="text-center mt-3 mb-4"><i class="ti-trash timeout-icon"></i></div>
                                                      <div class="text-center h4 mb-3">Are You sure you want to delete</div>
                                                      <div id="timeout-activate-box">
                                                         <form action="{{url('itinerary/modify/train')}}" method="post">
                                                            @csrf
                                                               <div class="form-group text-center">
                                                                  <input type="hidden" name="hide_id" value="{{$data->id}}">
                                                                  <button class="btn btn-primary btn-fix btn-air" type="submit" name="delete_train" value="" id="timeout-activate">Delete</button>
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
                                          <th>Train Name/ Number</th>
                                          <th>From</th>
                                          <th>To</th>
                                          <th>Start Timing</th>
                                          <th>Duration</th>
                                          <th>Timezone</th>
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
<!-- add train modal -->
<div class="modal " id="addtrain" tabindex="-1" role="dialog" aria-labelledby="addtrainTitle" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create New Train</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
		   <form action="{{url('itinerary/modify/train')}}" method="post" >
   			@csrf
            <div class="modal-body">
               <div class="card card-body">
               <div class="row">
                  <div class="col-md-6">
                     <label class="mt-2" for="tname">Train Name/Number <span class="important">*</span></label>
                     <input type="text" class="form-control  mb-3" name="tname" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="tfrom">From <span class="important">*</span></label>
                     <input type="text" class="form-control  mb-3" name="tfrom" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="tto">To<span class="important">*</span></label>
                     <input type="text" class="form-control  mb-3" name="tto" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="start_time">Start Time <span class="important">*</span></label>
                     <input type="time" class="form-control  mb-3" name="start_time" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="duration">Duration <span class="important">*</span></label>
                     <input type="text" class="form-control  mb-3" name="duration" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                     <label class="mt-2" for="tzone">Timezone <span class="important">*</span></label>
                     <input type="text" class="form-control  mb-3" name="tzone" placeholder="" required>
                  </div>
               </div>
               </div>
               <center>
               <button type="submit" class="btn btn-primary" name="add_train"> Submit</button>
               </center>
               <br>
            </div>
		   </form>
      </div>

   </div>
</div>

@include('../includes/footer')