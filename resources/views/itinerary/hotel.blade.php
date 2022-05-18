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
                                 <h4>Hotel</h4>
                                 @if(Session::get('fail'))
                                 <div class="alert alert-danger">
                                    {{Session::get('fail')}}
                                 </div>
                                 @elseif(Session::get('success'))
                                 <div class="alert alert-success">
                                    {{Session::get('success')}}
                                 </div>
                                 @endif
                                 <div class="text-success">
                                 </div>
                              </div>
                              <div class="col-4" >
                                 <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addhotel" style="float:right;">Create New Hotel</button>
                              </div>
                           </div>
                           <div class="card-block">
                              <div class="dt-responsive table-responsive">
                                 <table id="" class=" datatable table table-striped table-bordered nowrap">
                                    <thead>
                                       <tr>
                                          <th>#</th>
                                          <th>Hotel Image</th>
                                          <th>Hotel Name</th>
                                          <th>Star Rating</th>
                                          <th>Contact Number</th>
                                          <th>Address</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @php $i=1 @endphp
                                       @foreach($hoteldata as $data)
                                       <tr>
                                          <td class="sorting_1">{{$i}}</td>
                                          <td>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <img class="user-img"  src="{{asset('uploads/hotel/'.$data->hotel_photo)}}">
                                                </div>
                                             </div>
                                          </td>
                                          <td>{{$data->name}}</td>
                                          <td>{{$data->rating}}</td>
                                          <td class="sorting_1">{{$data->mob_no}}</td>
                                          <td>{{$data->address}},{{$data->city}}
                                          </td>
                                          <td>
                                             <a data-toggle="modal" data-target="#edithotel{{$data->id}}"><button
                                                class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i
                                                class="fa fa-pencil b1"></i></button>
                                             </a>
                                             <a data-toggle="modal" data-target="#deletehotel{{$data->id}}"><button
                                                class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom"><i
                                                class="fa fa-trash b1"></i></button>
                                             </a>
                                          </td>
                                       </tr>
                                       
                                       <!-- edit hotel modal -->
                                       <div class="modal " id="edithotel{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="edithotelTitle" aria-hidden="true">
                                          <div class="modal-dialog modal-lg" role="document">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title" id="exampleModalLongTitle">Edit Hotel</h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                                   </button>
                                                </div>
                                                <form action="{{url('itinerary/modify/hotel')}}" method="post" enctype="multipart/form-data">
                                                   @csrf
                                                   <div class="modal-body">
                                                      <div class="card card-body">
                                                         <div class="row">
                                                            <div class="col-md-6">
                                                               <label class="mt-2" for="name">Hotel Name <span class="important"></span></label>
                                                               <input type="text" class="form-control  mb-3" name="hname" placeholder="Enter Hotel Name" value="{{$data->name}}" >
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label class="mt-2" for="name">Star Rating<span class="important"></span></label>
                                                               <select class="form-control  mb-3" type="text" name="hotelrating" >
                                                                  <option value="1" {{($data->rating) == "1"  ? 'selected' : ''}}>1star</option>
                                                                  <option value="2" {{($data->rating) == "2"  ? 'selected' : ''}}>2star</option>
                                                                  <option value="3" {{($data->rating) == "3"  ? 'selected' : ''}}>3star</option>
                                                               </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label class="mt-2" for="name">Address <span class="important"></span></label>
                                                               <input type="text" class="form-control  mb-3" name="haddress" placeholder="Enter Address" value="{{$data->address}}" >
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label class="mt-2" for="hmob1">Mobile No.<span class="important d-inline">*</span></label>
                                                               <input type="text" class="form-control  mb-3" name="hmob1" id="ehmob1" placeholder="Mobile No." value="{{$data->mob_no}}">
                                                               <span><small><em class="emob1error text-danger"></em></small></span>
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label class="mt-2" for="hmob2">Alternative Mobile No. <span class="important"></span></label>
                                                               <input type="text" class="form-control  mb-3" name="hmob2" id="ehmob2" placeholder="Alternative Mobile No." value="{{$data->alter_mob_no}}">
                                                               <span><small><em class="emob2error text-danger"></em></small></span>
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label class="mt-2" for="hlandline1">Landline No. <span class="important"></span></label>
                                                               <input type="text" class="form-control  mb-3" name="hlandline1" id="hlandline1" placeholder="Landline No." value="{{$data->landline_no}}">
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label class="mt-2" for="hlandline2">Alternative Landline No. <span class="important"></span></label>
                                                               <input type="text" class="form-control  mb-3" name="hlandline2" id="hlandline2" placeholder="Alternative Landline No." value="{{$data->alter_landline_no}}">
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label class="mt-2" for="name">City <span class="important"></span></label>
                                                               <input type="text" class="form-control  mb-3" name="hcity" placeholder="Enter City Name" value="{{$data->city}}" >
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label class="mt-2" for="checkintime">Check-in Date<span class="important"></span></label>
                                                               <input type="date" class="form-control  mb-3" name="checkindate" placeholder="" value="{{$data->check_in_date}}" >
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label class="mt-2" for="name">Check-in Time<span class="important"></span></label>
                                                               <input type="time" class="form-control  mb-3" name="checkintime" placeholder="" value="{{$data->check_in_time}}" >
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label class="mt-2" for="name">Check-out Time<span class="important"></span></label>
                                                               <input type="time" class="form-control  mb-3" name="checkouttime" placeholder="" value="{{$data->check_out_time}}" >
                                                            </div>
                                                            <div class="col-md-6">
                                                               <label class="mt-2" for="name">How many nights do you want to stay in the hotel ?<span class="important"></span></label>
                                                               <select class="form-control  mb-3" type="text" name="stay_night" >
                                                                  <option value="1 Night" {{($data->night_stay) == "1 Night"  ? 'selected' : ''}}>1 Night</option>
                                                                  <option value="2 Night" {{($data->night_stay) == "2 Night"  ? 'selected' : ''}}>2 Night</option>
                                                                  <option value="3 Night" {{($data->night_stay) == "3 Night"  ? 'selected' : ''}}>3 Night</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="row">
                                                            <div class="col-md-6 col-6">
                                                               <label class="mt-2" for="name">Room No.<span class="important"></span></label>
                                                               <input type="text" class="form-control  mb-3" name="roomno" placeholder="" value="{{$data->room_no}}">   
                                                            </div>
                                                            <div class="col-md-6 col-6">
                                                               <label class="mt-2" for="name">Meal Plan<span class="important"></span></label>
                                                               <input type="text" class="form-control  mb-3" name="mealplan" placeholder="" value="{{$data->meal_plan}}">
                                                            </div>
                                                         </div>
                                                         <div class="row">
                                                            <div class="col-md-8 col-8">
                                                               <label class="mt-2" for="eroom_img">Room Image<span class="important"></span></label>
                                                               <input type="file" class="form-control  mb-3" name="eroom_img" >
                                                            </div>
                                                            <div class="col-md-4">
                                                               <label class="mt-2" for="name">Uploaded Room Image</label>
                                                               <img class="user-img"  src="{{asset('uploads/hotel/'.$data->room_photo)}}">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-12">
                                                            <div class="card card-body">
                                                               <h5 class="mb-3">More Details</h5>
                                                               <textarea class="form-control summernote mb-3" name="hdetails" >{{$data->more_details}}</textarea>
                                                            </div>
                                                         </div>
                                                         <div class="row">
                                                            <div class="col-md-8">
                                                               <label class="mt-2" for="ehotel_img">Hotel Image<span class="important"></span></label>
                                                               <input type="file" class="form-control  mb-3" name="ehotel_img" >
                                                            </div>
                                                            <div class="col-md-4">
                                                               <label class="mt-2" for="name">Uploaded Hotel Image</label>
                                                               <img class="user-img"  src="{{asset('uploads/hotel/'.$data->hotel_photo)}}">
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--</div>-->
                                                      <div class="col-md-12">
                                                         <!--<div class="card card-body">-->
                                                         <h5 class="mb-3">Payable Directly (optional)</h5>
                                                         <div class="row">
                                                            <div class="col-md-3">
                                                               <label class="mt-2" for="name">Details <span class="important"></span></label>
                                                               <input type="text" class="form-control  mb-3" name="currency_value" placeholder="Entrance Fee" value="{{$data->currency_value}}" >
                                                            </div>
                                                            <div class="col-md-2">
                                                               <label class="mt-2" for="name">Currency<span class="important"></span></label>
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
                                                         </div>
                                                      </div>
                                                      <!--</div>-->
                                                      <center>
                                                         <input type="hidden" name="hide_id" value="{{$data->id}}">
                                                         <button type ="submit" class="btn btn-primary" id="edit_hotel" name="edit_hotel" >Submit</button>
                                                      </center>
                                                      <br>
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>

                                       <!--delete modal-->
                                       <div class="modal fade" id="deletehotel{{$data->id}}">
                                          <div class="modal-dialog" style="width:400px;" role="document">
                                             <div class="modal-content timeout-modal">
                                                   <div class="modal-body">
                                                      <button class="close" data-dismiss="modal" aria-label="Close"></button>
                                                      <div class="text-center mt-3 mb-4"><i class="ti-trash timeout-icon"></i></div>
                                                      <div class="text-center h4 mb-3">Are You sure you want to delete</div>
                                                      <div id="timeout-activate-box">
                                                         <form action="{{url('itinerary/modify/hotel')}}" method="post">
                                                            @csrf
                                                               <div class="form-group text-center">
                                                                  <input type="hidden" name="hide_id" value="{{$data->id}}">
                                                                  <button class="btn btn-primary btn-fix btn-air" type="submit" name="delete_hotel" value="" id="timeout-activate">Delete</button>
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
                                          <th>Hotel Image</th>
                                          <th>Hotel Name</th>
                                          <th>Star Rating</th>
                                          <th>Contact Number</th>
                                          <th>Address</th>
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

<!-- add hotel modal -->
<div class="modal " id="addhotel" tabindex="-1" role="dialog" aria-labelledby="addhotelTitle" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create New Hotel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form method="post" action="{{url('itinerary/modify/hotel')}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
               <div class="card card-body">
                  <div class="row">
                     <div class="col-md-6">
                        <label class="mt-2" for="hname">Hotel Name <span class="important"></span></label>
                        <input type="text" class="form-control  mb-3" name="hname" id="hname" placeholder="Enter Hotel Name" >
                     </div>
                     <div class="col-md-6">
                        <label class="mt-2" for="hrating">Star Rating<span class="important"></span></label>
                        <select class="form-control  mb-3" type="text" name="hrating" id="hrating">
                           <option value="1">1star</option>
                           <option value="2">2star</option>
                           <option value="3">3star</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label class="mt-2" for="haddress">Address <span class="important"></span></label>
                        <input type="text" class="form-control  mb-3" name="haddress" id="haddress" placeholder="Enter Address" >
                     </div>
                     <div class="col-md-6">
                        <label class="mt-2" for="hmob1">Mobile No. <span class="important">*</span></label>
                        <input type="text" class="form-control  mb-3" name="hmob1" id="hmob1" placeholder="Mobile No." >
                        <span><small><em class="mob1error text-danger"></em></small></span>
                     </div>
                     <div class="col-md-6">
                        <label class="mt-2" for="hmob2">Alternative Mobile No. <span class="important"></span></label>
                        <input type="text" class="form-control  mb-3" name="hmob2" id="hmob2" placeholder="Alternative Mobile No." >
                        <span><small><em class="mob2error text-danger"></em></small></span>
                     </div>
                     <div class="col-md-6">
                        <label class="mt-2" for="hlandline1">Landline No. <span class="important"></span></label>
                        <input type="text" class="form-control  mb-3" name="hlandline1" id="hlandline1" placeholder="Landline No." >
                     </div>
                     <div class="col-md-6">
                        <label class="mt-2" for="hlandline2">Alternative Landline No. <span class="important"></span></label>
                        <input type="text" class="form-control  mb-3" name="hlandline2" id="hlandline2" placeholder="Alternative Landline No." >
                     </div>
                     <div class="col-md-6">
                        <label class="mt-2" for="hcity">City <span class="important"></span></label>
                        <input type="text" class="form-control  mb-3" name="hcity" id="hcity" placeholder="Enter City Name" >
                     </div>
                     <div class="col-md-6">
                        <label class="mt-2" for="checkindate">Check-in Date<span class="important"></span></label>
                        <input type="date" class="form-control  mb-3" name="checkindate"  id="checkindate" placeholder="" >
                     </div>
                     <div class="col-md-6">
                        <label class="mt-2" for="checkintime">Check-in Time<span class="important"></span></label>
                        <input type="time" class="form-control  mb-3" name="checkintime" id="checkintime" placeholder="" >
                     </div>
                     <div class="col-md-6">
                        <label class="mt-2" for="checkouttime">Check-out Time<span class="important"></span></label>
                        <input type="time" class="form-control  mb-3" name="checkouttime" id="checkouttime" placeholder="" >
                     </div>
                     <div class="col-md-6">
                        <label class="mt-2" for="stay_night">How many nights do you want to stay in the hotel ?<span class="important"></span></label>
                        <select class="form-control  mb-3" type="text" name="stay_night" id="stay_night">
                           <option value="1">1 Night</option>
                           <option value="2">2 Night</option>
                           <option value="3">3 Night</option>
                        </select>
                     </div>
                     <div class="col-md-6 ">
                        <label class="mt-2" for="roomno">Room No.<span class="important"></span></label>
                        <input type="text" class="form-control  mb-3" name="roomno" id="roomno" placeholder="">   
                     </div>
                     <div class="col-md-6 ">
                        <label class="mt-2" for="mealplan">Meal Plan<span class="important"></span></label>
                        <input type="text" class="form-control  mb-3" name="mealplan" id="mealplan" placeholder="">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <label class="mt-2" for="hotel_img">Hotel Image<span class="important"></span></label>
                        <input type="file" class="form-control  mb-3" name="hotel_img" id="hotel_img">
                     </div>
                     <div class="col-md-6 ">
                        <label class="mt-2" for="room_img">Room Image<span class="important"></span></label>
                        <input type="file" class="form-control  mb-3" name="room_img" id="room_img" placeholder="">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="card card-body">
                        <h5 class="mb-3">More Details</h5>
                        <textarea type="" class="form-control summernote mb-3" name="hdetails" id="hdetails"></textarea>
                     </div>
                  </div>
               </div>
               <!--</div>-->
               <div class="col-md-12">
                  <!--<div class="card card-body">-->
                  <h5 class="mb-3">Payable Directly (optional)</h5>
                  <div class="row">
                     <div class="col-md-3">
                        <label class="mt-2" for="currency_value">Details <span class="important"></span></label>
                        <input type="text" class="form-control  mb-3" name="currency_value" id="currency_value" placeholder="Entrance Fee"  >
                     </div>
                     <div class="col-md-2">
                        <label class="mt-2" for="currency_type">Currency<span class="important"></span></label>
                        <select class="form-control  mb-3" type="text" name="currency_type" id="currency_type">
                           <option value="$ USD">$ USD</option>
                           <option value="Rupee">Rupee</option>
                           <option value="Euro">Euro</option>
                        </select>
                     </div>
                     <div class="col-md-5 mt-2">
                        <div class="row mt-4">
                           <div class="col-4 p-0 mt-2">
                              <input class="form-control mb-3" type="number" name="adults" id="adults" placeholder="Adults">
                           </div>
                           <div class="col-4 p-0 mt-2">
                              <input class="form-control mb-3" type="number" name="kids" id="kids" placeholder="Kids">
                           </div>
                           <div class="col-4 p-0 mt-2">
                              <input class="form-control mb-3" type="number" name="infants" id="infants" placeholder="Infants">
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
               <!--</div>-->
               <center>
                  <button type ="submit" class="btn btn-primary add_hotel" name="add_hotel"> Submit</button>
               </center>
               <br>
            </div>
         </form>
      </div>
   </div>
</div>

@include('../includes/footer')
<script>
    $(function(){
      $('.add_hotel').prop('disabled',true);
      function checkmobile() {
         $('.add_hotel').prop('disabled',true);
            var hmob1 = $('#hmob1').val();
            var dig = hmob1.charAt(0);
            if(hmob1 != ''){
					$('.mob1error').text('');
						if(dig >5){
                     $('.mob1error').text('');
							if(/^\d{10}$/.test(hmob1)){
                        $('.mob1error').text('');
                        $('.add_hotel').prop('disabled',false);
                        return true;
							}else{
                        $('.mob1error').text('');
                        $('.mob1error').text('Mobile number must be ten digits');
								return false;
							}
						}else{
                     $('.mob1error').text('');
                     $('.mob1error').text('First digit of mobile number must be greater than 5.');
							return false;
						}
				}else{
					$('.mob1error').text('Mobile Number is mandatory.');
					return false;
				} 
      }
      //for alternate mobile no
      function checkaltermobile() {
            var hmob2 = $('#hmob2').val();
            var dig = hmob2.charAt(0);
            if(hmob2 != ''){
               $('.add_hotel').prop('disabled',true);
               if(dig >5){
							$('.mob2error').text('');
							if(/^\d{10}$/.test(hmob2)){
                        $('.mob2error').text('');
                        //verifying mobile field holds validation or not
                        var hmob1 = $('#hmob1').val();
                        var dig = hmob1.charAt(0);
                        if((hmob1 !='') && (dig>5) &&  (/^\d{10}$/.test(hmob1))){
                           $('.add_hotel').prop('disabled',false);
                        }else{
                           $('.add_hotel').prop('disabled',true);
                        }
                        return true;
							}else{
                        $('.mob2error').text('');
								$('.mob2error').text('Alternate Mobile number must be ten digits');
								return false;
							}
					}else{
						$('.mob2error').html('First digit of alternate mobile number must be greater than 5.');
						return false;
					}
            }else{
               $('.add_hotel').prop('disabled',false);
               $('.mob2error').text('');
            }
      }



      //validation for edit hotel modal
      function echeckmobile() {
         $('#edit_hotel').prop('disabled',true);
            var hmob1 = $('#ehmob1').val();
            var dig = hmob1.charAt(0);
            if(hmob1 != ''){
					$('.emob1error').text('');
						if(dig >5){
                     $('.emob1error').text('');
							if(/^\d{10}$/.test(hmob1)){
                        $('.emob1error').text('');
                        $('#edit_hotel').prop('disabled',false);
                        return true;
							}else{
                        $('.emob1error').text('');
								$('.emob1error').text('Mobile number must be ten digits');
								return false;
							}
						}else{
                     $('.emob1error').text('');
							$('.emob1error').html('First digit of mobile number must be greater than 5.');
							return false;
						}
				}else{
               $('.emob1error').text('');
					$('.emob1error').text('Mobile Number is mandatory.');
					return false;
				} 
      }
      //for alternate mobile no
      function echeckaltermobile() {
                  var ehmob2 = $('#ehmob2').val();
                  var dig = ehmob2.charAt(0);
                  if(ehmob2 != ''){
                     $('#edit_hotel').prop('disabled',true);
                     if(dig >5){
                           $('.emob2error').text('');
                           if(/^\d{10}$/.test(ehmob2)){
                              $('.emob2error').text('');
                              //verifying edit modal mobile field holds validation or not
                              var hmob1 = $('#ehmob1').val();
                              var dig = hmob1.charAt(0);
                              if((hmob1 !='') && (dig>5) &&  (/^\d{10}$/.test(hmob1))){
                                 $('#edit_hotel').prop('disabled',false);
                              }else{
                                 $('#edit_hotel').prop('disabled',true);
                              }
                              return true;
                           }else{
                              $('.emob2error').text('');
                              $('.emob2error').text('Alternate Mobile number must be ten digits');
                              return false;
                           }
                     }else{
                        $('.emob2error').html('First digit of alternate mobile number must be greater than 5.');
                        return false;
                     }
                  }else{
                     $('#edit_hotel').prop('disabled',false);
                     $('.emob2error').text('');
                  }
      }

   $("#hmob1").keyup(checkmobile);
   $("#ehmob1").keyup(echeckmobile);
   $("#hmob2").keyup(checkaltermobile);
   $("#ehmob2").keyup(echeckaltermobile);

         
})
</script>