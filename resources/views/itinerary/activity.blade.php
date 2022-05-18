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
                                 <h4>Activity</h4>
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
                                 <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addactivity" style="float:right;">Create New Activity</button>
                              </div>
                           </div>
                           <div class="card-block">
                              <div class="dt-responsive table-responsive">
                                 <table id="order-table" class="table table-striped table-bordered nowrap">
                                    <thead>
                                       <tr>
                                          <th>#</th>
                                          <th>Activity Image</th>
                                          <th>Activity Type</th>
                                          <th>Created_at</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @php $i=1 @endphp
                                       @foreach($activitydata as $data)
                                       <tr>
                                          <td class="sorting_1">{{$i}}</td>
                                          <td>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <img class="user-img"  src="{{asset('uploads/activity/'.$data->file)}}">
                                                </div>
                                                <!--<div class="col-md-12">-->
                                                <!--    <b>Abhi</b><br><a class="link-color" href="mailto:abhi@gmail.com" data-bs-original-title=""-->
                                                <!--        title="">abhi@gmail.com</a><br><a class="link-color" href="+91 9999999999" data-bs-original-title=""-->
                                                <!--        title="">+91 9999999999</a>-->
                                                <!--</div>-->
                                             </div>
                                          </td>
                                          <td class="sorting_1">{{$data->activity_type}}</td>
                                          <td>{{$data->created_at}}
                                          </td>
                                          <td>
                                             <a data-toggle="modal" data-target="#editactivity{{$data->id}}"><button
                                                class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i
                                                class="fa fa-pencil b1"></i></button>
                                             </a>
                                             <a data-toggle="modal" data-target="#deleteactivity{{$data->id}}"><button
                                                class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom"><i
                                                class="fa fa-trash b1"></i></button>
                                             </a>
                                          </td>
                                       </tr>
                                       <!-- edit activit modal -->
                                       <div class="modal " id="editactivity{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="editactivityTitle" aria-hidden="true">
                                          <div class="modal-dialog modal-lg" role="document">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title" id="exampleModalLongTitle">Edit Activity</h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                                   </button>
                                                </div>
                                                <form action="{{url('itinerary/modify/activity')}}" method="post" enctype="multipart/form-data">
                                                @csrf          
                                                   <div class="modal-body">
                                                      <div class="card card-body">
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                               <label class="mt-2" for="name">Actitvity Type<span class="important">*</span></label>
                                                               <select class="form-control  mb-3" type="text" name="act_type">
                                                                  <option value="B2B" {{($data->activity_type) == "B2B"  ? 'selected' : ''}}>B2B</option>
                                                                  <option value="B2C" {{$data->activity_type == "B2C"  ? 'selected' : ''}}>B2C</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="row">
                                                            <div class="col-md-6 col-6">
                                                               <label class="mt-2" for="name">Duration<span class="important">*</span></label>
                                                               <input type="text" class="form-control  mb-3" name="activity_duration" value="{{$data->activity_duration}}" placeholder="">
                                                            </div>
                                                            <div class="col-md-6 col-6">
                                                               <label class="mt-2" for="name">Time Zone<span class="important">*</span></label>
                                                               <select class="form-control  mb-3" type="text" name="activity_timezone" >
                                                                  <option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5" {{$data->activity_timezone == "5.5"  ? 'selected' : ''}}>(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                                                  <option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75" {{$data->activity_timezone == "5.75"  ? 'selected' : ''}}>(GMT+05:45) Kathmandu</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-12">
                                                            <div class="card card-body">
                                                               <h5 class="mb-3">More Details</h5>
                                                               <textarea type="" class="form-control mb-3" name="activity_details" value="">{{$data->activity_details}}</textarea>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <label class="mt-2" for="name">Upload File <span class="important">*</span></label>
                                                            <input type="file" class="form-control  mb-3" name="file" value="">
                                                         </div>
                                                         <div class="col-md-6">
                                                            <label class="mt-2" for="name">Uploaded Image <span class="important">*</span></label>
                                                            <img class="user-img"  src="{{asset('uploads/activity/'.$data->file)}}">
                                                         </div>
                                                      </div>
                                                      <!--</div>-->
                                                      <div class="col-md-12">
                                                         <!--<div class="card card-body">-->
                                                         <h5 class="mb-3">Payable Directly (optional)</h5>
                                                         <div class="row">
                                                            <div class="col-md-3">
                                                               <label class="mt-2" for="name">Details <span class="important">*</span></label>
                                                               <input type="text" class="form-control  mb-3" name="currency_value" value="{{$data->currency_value}}" placeholder="Entrance Fee" >
                                                            </div>
                                                            <div class="col-md-2">
                                                               <label class="mt-2" for="name">Currency<span class="important">*</span></label>
                                                               <select class="form-control  mb-3" type="text" name="currency_type" >
                                                                  <option value="$ USD" {{$data->currency_type == "$ USD"  ? 'selected' : ''}}>$ USD</option>
                                                                  <option value="Rupee" {{$data->currency_type == "Rupee"  ? 'selected' : ''}}>Rupee</option>
                                                                  <option value="Euro" {{$data->currency_type == "Euro"  ? 'selected' : ''}}>Euro</option>
                                                               </select>
                                                            </div>
                                                            <div class="col-md-5 mt-2">
                                                               <div class="row mt-4">
                                                                  <div class="col-4 p-0 mt-2">
                                                                     <input class="form-control mb-3" type="number" name="adults" placeholder="Adults" value="{{$data->adults}}">
                                                                  </div>
                                                                  <div class="col-4 p-0 mt-2">
                                                                     <input class="form-control mb-3" type="number" name="kids" placeholder="Kids" value="{{$data->kids}}">
                                                                  </div>
                                                                  <div class="col-4 p-0 mt-2">
                                                                     <input class="form-control mb-3" type="number" name="infants" placeholder="Infants" value="{{$data->infants}}">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <!-- <div class="col-md-2 mt-4">
                                                               <button class="btn btn-success mt-2"> Add</button>  
                                                            </div> -->
                                                         </div>
                                                      </div>
                                                      <!--</div>-->
                                                      <center>
                                                         <input type="hidden" name="hide_id" value="{{$data->id}}">
                                                         <button type="submit" class="btn btn-primary" name="edit_act" value="{{$data->id}}">Submit</button>
                                                      </center>
                                                      <br>
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>



                                       <!--delete modal-->
                                       <div class="modal fade" id="deleteactivity{{$data->id}}">
                                          <div class="modal-dialog" style="width:400px;" role="document">
                                             <div class="modal-content timeout-modal">
                                                   <div class="modal-body">
                                                      <button class="close" data-dismiss="modal" aria-label="Close"></button>
                                                      <div class="text-center mt-3 mb-4"><i class="ti-trash timeout-icon"></i></div>
                                                      <div class="text-center h4 mb-3">Are You sure you want to delete</div>
                                                      <div id="timeout-activate-box">
                                                         <form action="{{url('itinerary/modify/activity')}}" method="post">
                                                            @csrf
                                                               <div class="form-group text-center">
                                                                  <input type="hidden" name="hide_id" value="{{$data->id}}">
                                                                  <button class="btn btn-primary btn-fix btn-air" type="submit" name="delete_act" value="" id="timeout-activate">Delete</button>
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
                                          <th>Activity Image</th>
                                          <th>Activity Name</th>
                                          <th>Timing</th>
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
<!-- add activity modal -->
<div class="modal " id="addactivity" tabindex="-1" role="dialog" aria-labelledby="addactivityTitle" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create New Activity</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="{{url('itinerary/modify/activity')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
               <div class="card card-body">
                  <div class="row">
                     <div class="col-md-6">
                        <label class="mt-2" for="name">Actitvity Type<span class="important">*</span></label>
                        <select class="form-control  mb-3" name="activity_type" >
                           <option value="B2B">B2B</option>
                           <option value="B2C">B2C</option>
                           <option></option>
                        </select>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4 col-4">
                        <label class="mt-2" for="name">Start Time<span class="important">*</span></label>
                        <input type="datetime-local" class="form-control  mb-3" name="activity_start_time" placeholder="">
                        <!-- <select class="form-control  mb-3" type="date" name="activity_start_time" >
                           <option></option>
                           <option></option>
                           <option></option>
                           </select> -->
                     </div>
                     <div class="col-md-4 col-4">
                        <label class="mt-2" for="name">Duration<span class="important">*</span></label>
                        <input type="text" class="form-control  mb-3" name="activity_duration" placeholder="">
                     </div>
                     <div class="col-md-4 col-4">
                        <label class="mt-2" for="name">Time Zone<span class="important">*</span></label>
                        <select class="form-control  mb-3" type="text" name="activity_timezone" >
                           <option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5" >(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                           <option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">(GMT+05:45) Kathmandu</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="card card-body">
                        <h5 class="mb-3">More Details</h5>
                        <textarea type="" class="form-control summernote mb-3" name="activity_details"></textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <label class="mt-2" for="name">Upload File <span class="important">*</span></label>
                     <input type="file" class="form-control  mb-3" name="file" >
                  </div>
               </div>
               <!--</div>-->
               <div class="col-md-12">
                  <!--<div class="card card-body">-->
                  <h5 class="mb-3">Payable Directly (optional)</h5>
                  <div class="row">
                     <div class="col-md-3">
                        <label class="mt-2" for="name">Details <span class="important">*</span></label>
                        <input type="text" class="form-control  mb-3" name="currency_value" placeholder="Entrance Fee" >
                     </div>
                     <div class="col-md-2">
                        <label class="mt-2" for="name">Currency<span class="important">*</span></label>
                        <select class="form-control  mb-3" type="text" name="currency_type" >
                           <option value="$ USD">$ USD</option>
                           <option value="Rupee">Rupee</option>
                           <option value="Euro">Euro</option>
                        </select>
                     </div>
                     <div class="col-md-5 mt-2">
                        <div class="row mt-4">
                           <div class="col-4 p-0 mt-2">
                              <input class="form-control mb-3" type="number" name="adults" placeholder="Adults">
                           </div>
                           <div class="col-4 p-0 mt-2">
                              <input class="form-control mb-3" type="number" name="kids" placeholder="Kids">
                           </div>
                           <div class="col-4 p-0 mt-2">
                              <input class="form-control mb-3" type="number" name="infants" placeholder="Infants">
                           </div>
                        </div>
                     </div>
                     <!-- <div class="col-md-2 mt-4">
                        <button class="btn btn-success mt-2"> Add</button>  
                        </div> -->
                  </div>
               </div>
               <!--</div>-->
               <center>
                  <button type="submit" class="btn btn-primary" name ="add_act" value="add_act">Submit</button>
               </center>
               <br>
            </div>
         </form>
      </div>
   </div>
</div>
@include('../includes/footer')
<script>
   // $('.activity_start_time').hide();
   // $('.hidetime').click(function(){
   //    $('.activity_start_time').show();
   //    $('.hidetime').hide();
   // });
</script>
