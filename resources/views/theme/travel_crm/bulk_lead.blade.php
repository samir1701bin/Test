@include('../includes/header')
@include('../includes/crm_sidebar')
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
                           <div class="col-4">
                              <h4 class="ml-3">{{$title}}</h4>
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
                              <!-- <a href="{{url('crm/add_lead')}}" style="float:right"><button class="btn btn-primary">+ Add</button></a> -->
                              <select name="assigned" id="bulkassignedto" onchange="checkall()">
                                 <option value="" >Select User</option>
                                 @foreach($lead_owner as $assigned)
                                 <option value="{{$assigned->id}}">{{$assigned->name}}</option>
                                 @endforeach
                              </select>
                           </div>
                           <div class="col-4"></div>
                        </div>
                        <div class="card-block">
                           <div class="dt-responsive table-responsive">
                              <table id="order-table" class="table table-striped table-bordered nowrap">
                                 <thead>
                                    <tr>
                                        <th><input type="checkbox" name="mainselect" id="mainselect"> Select All </th>
                                       <th>#</th>
                                       <th>Details</th>
                                       <th>Type</th>
                                       <th>Travel Date</th>
                                       <th>Assigned To</th>
                                       <th>Created On</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @php $sno=1 @endphp
                                    @foreach($leads as $key=>$d)
                                    <tr>
                                       <td><input type="checkbox" name="checkall"   class="checkall"  value="{{$d->id}}"  ></td>
                                       <td class="sorting_1">{{$sno}}</td>
                                       <td>
                                          <div class="row">
                                             <div class="col-md-12">
                                                @if($d->cust_img == '')
                                                <img class="user-img"  src="{{asset('assets/images/noimage.png')}}">
                                                @else
                                                <img class="user-img"  src="{{asset('uploads/leads_client_img/'.$d->cust_img)}}">
                                                @endif
                                             </div>
                                             <div class="col-md-12">
                                                <b>{{$d->cust_name}}</b><br><a class="link-color" href="mailto:{{$d->cust_email}}" data-bs-original-title=""
                                                   title="">{{$d->cust_email}}</a><br><a class="link-color" href="tel:{{$d->cust_mobile}}" data-bs-original-title=""
                                                   title="">{{$d->cust_mobile}}</a>
                                             </div>
                                          </div>
                                       </td>
                                       <td class="sorting_1">{{ucfirst($d->client_type_name)}}</td>
                                       <td>{{date('d/M/Y',strtotime($d->travel_date))}}</td>
                                       <td>
                                          <select name="assigned" id="assignedto{{$d->id}}" onchange="assignedto({{$d->id}})">
                                             <option value="">Select User</option>
                                             @foreach($lead_owner as $assigned)
                                             <option value="{{$assigned->id}}" {{($d->assigned_to) == ($assigned->id) ? 'selected': ''}}>{{$assigned->name}}</option>
                                             @endforeach
                                          </select>
                                       </td>
                                       <td>{{date('d/M/Y',strtotime($d->created_at))}}</td>
                                       <td>
                                          <a data-toggle="modal" data-target="#viewlead{{$d->id}}"><button class="btn btn-primary btn-sm"> View</button></a>
														<a data-toggle="modal" data-target="#editlead{{$d->id}}"><button class="btn btn-info btn-sm"> Edit</button></a>
														<a data-toggle="modal" data-target="#deletelead{{$d->id}}">
                                             <button class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom">
                                                <i class="fa fa-trash b1"></i>
                                             </button>
														</a>
                                          <!-- Default dropleft button -->
                                          <div class="btn dropleft">
                                          @if(count(get_lead_types($d->lead_type)))
                                             <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Mark
                                             </button>
                                          @endif
                                             
                                             <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                @if(count(get_lead_types($d->lead_type)))
                                                   @foreach(get_lead_types($d->lead_type) as $lt)
                                                      <a class="dropdown-item assignedlead{{$d->id}}" onclick="changestatus({{$d->id}},'{{$lt->lead_type}}') " data-toggle="modal" data-target="#marklead{{$d->id}}">{{$lt->name}}</a>
                                                   @endforeach
                                                @endif
                                             </div>
                                          </div>

                                          
                                       </td>
                                    </tr>
                                    <!-- view modal -->
                                    <div class="modal fade" id="viewlead{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog modal-lg" role="document">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h4>View Leads</h4>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                             </button>
                                             </div>
                                             <div class="modal-body text-center">
                                                <div class="row mb-3">
                                                   <div class="col-auto col-md-3 pr-0">
                                                      <b>Client type</b>
                                                   </div>
                                                   <div class="col-auto col-md-6">
                                                      @foreach($clienttype as $cl_type)
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input enq_type" type="radio" name="enquiry_type" id="c_type" value="{{$cl_type->id}}"  
                                                      <?php
                                                      
                                                      if($d->client_type == $cl_type->id){?>
                                                         checked
                                                      <?php } else{?>

                                                      <?php }
                                                      ?>
                                                      >
                                                      <label class="form-check-label" for="c_type">{{ucfirst($cl_type->name)}}</label>
                                                      </div>
                                                      @endforeach
                                                      <!-- <div class="form-check form-check-inline">
                                                      <input class="form-check-input enq_type" type="radio" name="enquiry_type" id="c_type" value="B2c" {{($d->client_type_name) == "b2c"  ? 'checked' : ''}} readonly >
                                                      <label class="form-check-label" for="c_type">B2C</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input enq_type" type="radio" name="enquiry_type" id="c_type" value="Corporate" {{($d->client_type_name) == "corporate"  ? 'checked' : ''}} readonly >
                                                      <label class="form-check-label" for="c_type">Corporate</label>
                                                      </div> -->
                                                   </div>
                                                   <!-- <div class="col-md-4 mt-2">
                                                      <label for="project">Client type<span class="important"></span></label>
                                                      <input type="text" name="c_type" class="form-control" id="c_type" value="{{$d->client_type_name}}" readonly >
                                                   </div> -->
                                                   <div class="col-md-4 mt-2">
                                                      <label for="project">Parent/Service/Project<span class="important"></span></label>
                                                      <input type="text" name="project" class="form-control" id="project" value="{{$d->project}}" readonly >
                                                   </div>
                                                   <div class="col-md-4 mt-2">
                                                      <label for="cus_name">Customer Name<span class="important"></span></label>
                                                      <input type="text" name="cus_name" class="form-control" id="cus_name"  value="{{$d->cust_name}}" readonly > 
                                                   </div>
                                                   <div class="col-md-4 mt-2">
                                                      <label for="cus_name">Customer Image<span class="important"></span></label>
                                                      @if($d->cust_img == '')
                                                      <img class="user-img "  src="{{asset('assets/images/noimage.png')}}">
                                                      @else
                                                      <img class="user-img"  src="{{asset('uploads/leads_client_img/'.$d->cust_img)}}">
                                                      @endif
                                                   </div>
                                                   <div class="col-md-4 mt-2">
                                                      <label for="cusv_email">Customer Email <span class="important"></span></label>
                                                      <input type="text" class="form-control "  id="cusv_email" name="cusv_email" value="{{$d->cust_email}}" readonly>
                                                   </div>
                                                   <div class="col-md-4 mt-2">
                                                      <label for="cusv_mobile">Customer Contact Number<span class="important"></span></label>
                                                      <input type="text" class="form-control "  id="cusv_mobile" name="cusv_mobile" value="{{$d->cust_mobile}}" readonly >
                                                   </div>
                                                   
                                                   <div class="col-md-4 mt-2">
                                                      <label for="location">Travel Location  <span class="important"></span></label>
                                                      <input type="text" class="form-control "  id="location" name="location" value="{{$d->travel_location}}" readonly>
                                                   </div>
                                                   <div class="col-md-4 mt-2">
                                                      <label for="type">Travel Type <span class="important"></span></label><br/>
                                                         <select class="form-control" name="type[]" data-live-search="true" multiple id="type" requird  data-width="100%" disabled="true">
                                                            @php $type = array();
                                                            foreach($jsondata as $index=>$ttypeval){
                                                               if($key == $index){
                     
                                                               $var = $ttypeval->tt_id;
                                                               $type = json_decode($var);
                                                               
                                                               
                                                               }
                                                            }
                                                            @endphp
                                                               @foreach($travel_types as $t_types)
                                                                  <option value="{{$t_types->tt_id}}"
                                                                     <?php 
                                                                     if(empty($type)){
                                                                        
                                                                     }
                                                                     else{
                                                                        for($i=0; $i<sizeof($type);$i++){
                                                                           
                                                                           if($type[$i] == $t_types->tt_id){?>
                                                                           selected
                                                                           <?php
                                                                           }else{?>
                                                                              
                                                                           <?php
                                                                           }
                                                                        }
                                                                     }
                                                                     ?>
                                                                  >{{$t_types->tt_name}}</option>
                                                               @endforeach
                                                         </select>
                                                         
                                                   </div>
                                                   <div class="col-md-4 mt-2">
                                                      <label for="date">Journey Date  <span class="important"></span></label>
                                                      <input type="date" class="form-control autonumber"  id="date" name="date" value="{{$d->travel_date}}" readonly>
                                                   </div>
                                                   <div class="col-xl-4">
                                                      <div class="mb-3">
                                                         <label for="" class="form-label">Budget for the trip <span class="red"></span></label>
                                                         <div class="row" style="padding:0px 10px">
                                                            <div class="col-xl-4 p-0">
                                                               <select class="form-select digits" id="budget_type" name="budget_type" readonly>
                                                                  @foreach($budget_currencies as $currency)
                                                                     <option value="{{$currency->id}}" {{$d->budget_payment_type == $currency->id ? 'selected' : ''}} disabled>{{ucfirst($currency->name)}}</option>
                                                                  @endforeach
                                                               </select>
                                                               <!-- <input type="text" class="form-control" id="budget_value" name="budget_value" value="{{$d->budget_currency_name}}" 
                                                               readonly> -->
                                                            </div>
                                                            <div class="col-xl-4 p-0">
                                                               <input type="text" class="form-control" id="budget_value" name="budget_value" value="{{$d->budget_payment_value}}"
                                                               readonly>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-xl-4">
                                                         <div class="mb-3"> 
                                                            <label for="" class="form-label">Total Adults* Kids &amp; Infants <span class="red"></span></label>
                                                            <div class="row" style="padding:0px 10px;">
                                                               <div class="col-xl-4 p-0">
                                                                  <input type="text" class="form-control" id="vadults" name="vadults" value="{{$d->adults}}" placeholder="Adults" 
                                                                  readonly>
                                                               </div>
                                                               <div class="col-xl-4 p-0">
                                                                  <input type="text" class="form-control" id="vkids" name="kids" value="{{$d->kids}}" placeholder="Kids" 
                                                                  readonly>
                                                               </div>
                                                               <div class="col-xl-4 p-0">
                                                                  <input type="text" class="form-control" id="vinfants" name="infants" value="{{$d->infants}}" placeholder="Infants" 
                                                                  readonly>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span><small><em class="adulterror text-danger"></em></small></span>
                                                   </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="hname">Lead Source <span class="important"></span></label><br/>
                                                            <select name="lead_source[]" class="form-control" data-live-search="true"  id="lead_source"  data-width="100%" multiple disabled="true">
                                                               @php $type = array();
                                                               foreach($jsondata as $lsindex=>$lsvalue){
                                                                  if($key == $lsindex){
                        
                                                                  $var = $lsvalue->lead_source;
                                                                  $type = json_decode($var);
                                                                  }
                                                               }
                                                               @endphp
                                                               @foreach($lead_sources as $l_sources)
                                                                  <option value="{{$l_sources->id}}"
                                                                     <?php 
                                                                     if(empty($type)){
                                                                        
                                                                     }
                                                                     else{
                                                                        for($i=0; $i<sizeof($type);$i++){
                                                                           
                                                                           if($type[$i] == $l_sources->id){?>
                                                                           selected
                                                                           <?php
                                                                           }else{?>
                                                                              
                                                                           <?php
                                                                           }
                                                                        }
                                                                     }
                                                                     ?>
                                                                  >{{$l_sources->name}}</option>
                                                               @endforeach
                                                            </select>
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="hname">Lead Owner <span class="important"></span></label><br/>
                                                         <select name="lead_owner[]" class="form-control" data-live-search="true"  id="lead_owner"   data-width="100%" multiple disabled="true">
                                                            @php $type = array();
                                                               foreach($jsondata as $loindex=>$lovalue){
                                                                  if($key == $loindex){
                        
                                                                  $var = $lovalue->lead_owner;
                                                                  $type = json_decode($var);
                                                                  
                                                                  }
                                                               }
                                                            @endphp
                                                            @foreach($lead_owner as $l_owner)
                                                                  <option value="{{$l_owner->id}}"
                                                                     <?php 
                                                                     if(empty($type)){
                                                                        
                                                                     }
                                                                     else{
                                                                        for($i=0; $i<sizeof($type);$i++){
                                                                           
                                                                           if($type[$i] == $l_owner->id){?>
                                                                           selected
                                                                           <?php
                                                                           }else{?>
                                                                              
                                                                           <?php
                                                                           }
                                                                        }
                                                                     }
                                                                     ?>
                                                                  >{{$l_owner->name}}</option>
                                                            @endforeach
                                                         </select>
                                                      </div>
                                                      <div class="col-md-4 mt-3"></div>
                                                      <div class="col-auto">
                                                         <b>Requirements</b>
                                                      </div>
                                                      <div class="col-md-8">
                                                            @php $type = array();
                                                               foreach($jsondata as $reqindex=>$reqvalue){
                                                                  if($key == $reqindex){
                                                                  $var = $reqvalue->requirements;
                                                                  $type = json_decode($var);
                                                                  
                                                                  
                                                                  }
                                                               }
                                                            @endphp
                                                         @foreach($requirement as $req)
                                                         <div class="form-check form-check-inline">
                                                            
                                                            <input class="form-check-input requirement" type="checkbox" name="requirement[]" id="requirement" value="{{$req->tt_id}}" disabled
                                                            <?php
                                                            if(empty($type)){
                                                                        
                                                            }
                                                            else{
                                                               for($i=0; $i<sizeof($type);$i++){
                                                                        
                                                                  if($type[$i] == $req->tt_id){?>
                                                                  checked
                                                                  <?php
                                                                  }else{?>
                                                                     
                                                                  <?php
                                                                  }
                                                               }
                                                            }
                                                            ?>
                                                            >
                                                            <label class="form-check-label" for="inlineRadio1">{{$req->tt_name}}</label>
                                                         </div>
                                                         @endforeach
                                                         <!-- <div class="form-check form-check-inline">
                                                            <input class="form-check-input requirement" type="checkbox" name="requirement[]" id="requirement" value="Hotel" data-bs-original-title="" title="">
                                                            <label class="form-check-label" for="inlineRadio1">Hotel</label>
                                                         </div>
                                                         <div class="form-check form-check-inline">
                                                            <input class="form-check-input requirement" type="checkbox" name="requirement[]" id="requirement" value="Fligts" data-bs-original-title="" title="">
                                                            <label class="form-check-label" for="inlineRadio1">Fligts</label>
                                                         </div> -->
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             
                                          </div>
                                       </div>
                                    </div>

                                    <!-- edit modal -->
                                    <div class="modal fade" id="editlead{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog modal-lg" role="document">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h4>Edit Leads</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                                </button>
                                             </div>
                                             <form action="{{url('crm/modify/lead')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body text-center">
                                                   <div class="row mb-3">
                                                      <div class="col-auto col-md-3 pr-0">
                                                         <b>Client type</b>
                                                      </div>
                                                      <div class="col-auto col-md-6">
                                                         @foreach($clienttype as $cl_type)
                                                         <div class="form-check form-check-inline">
                                                         <input class="form-check-input enq_type" type="radio" name="enquiry_type" id="c_type" value="{{$cl_type->id}}"  
                                                         <?php
                                                         
                                                         if($d->client_type == $cl_type->id){?>
                                                            checked
                                                         <?php } else{?>

                                                         <?php }
                                                         ?>
                                                         >
                                                         <label class="form-check-label" for="c_type">{{ucfirst($cl_type->name)}}</label>
                                                         </div>
                                                         @endforeach
                                                         <!-- <div class="form-check form-check-inline">
                                                         <input class="form-check-input enq_type" type="radio" name="enquiry_type" id="c_type" value="B2c" {{($d->client_type_name) == "b2c"  ? 'checked' : ''}} readonly >
                                                         <label class="form-check-label" for="c_type">B2C</label>
                                                         </div>
                                                         <div class="form-check form-check-inline">
                                                         <input class="form-check-input enq_type" type="radio" name="enquiry_type" id="c_type" value="Corporate" {{($d->client_type_name) == "corporate"  ? 'checked' : ''}} readonly >
                                                         <label class="form-check-label" for="c_type">Corporate</label>
                                                         </div> -->
                                                      </div>
                                                      
                                                      <div class="col-md-4 mt-2">
                                                         <label for="project">Parent/Service/Project<span class="important"></span></label>
                                                         <input type="text" name="project" class="form-control" id="project" value="{{$d->project}}"  >
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="cus_name">Customer Name<span class="important"></span></label>
                                                         <input type="text" name="cus_name" class="form-control" id="cus_name"  value="{{$d->cust_name}}" > 
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="cl_edit_file<?= $d->id ?>">Customer Image<h4><i class="fa fa-picture-o"></i></h4><span class="important"></span></label>
                                                         @if($d->cust_img == '')
                                                         <img class="user-img " id="image{{$d->id}}" src="{{asset('assets/images/noimage.png')}}" >
                                                         @else
                                                         <img class="user-img"  id="image{{$d->id}}" src="{{asset('uploads/leads_client_img/'.$d->cust_img)}}">
                                                         @endif
                                                         <input type="file" class="hidden-field" onchange="preview(this,'<?= $d->id ?>')"  name="cl_edit_file" id="cl_edit_file<?= $d->id ?>" value="">
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="cus_email<?= $d->id ?>">Customer Email <span class="important d-inline">*</span></label>
                                                         <input type="text" class="form-control "  id="cus_email{{$d->id}}" name="cus_email" oninput="checkemail('<?= $d->id ?>')" value="{{$d->cust_email}}" >
                                                         <span><small><em class="emailerror{{$d->id}} text-danger"></em></small></span>
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="cus_mobile<?= $d->id ?>">Customer Contact Number<span class="important d-inline">*</span></label>
                                                         <input type="text" class="form-control "  id="cus_mobile{{$d->id}}" name="cus_mobile" oninput="checkmobile('<?= $d->id ?>')" value="{{$d->cust_mobile}}"  >
                                                         <span><small><em class="mobileerror{{$d->id}} text-danger"></em></small></span>
                                                      </div>
                                                      
                                                      <div class="col-md-4 mt-2">
                                                         <label for="location">Travel Location  <span class="important"></span></label>
                                                         <input type="text" class="form-control "  id="location" name="location" value="{{$d->travel_location}}" >
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="type">Travel Type <span class="important"></span></label><br/>
                                                            <select class="form-control" name="type[]" data-live-search="true" multiple id="type" requird  data-width="100%" >
                                                                  <!-- <option value=""></option> -->
                                                               @php $type = array();
                                                               foreach($jsondata as $index=>$ttypeval){
                                                                  if($key == $index){
                        
                                                                  $var = $ttypeval->tt_id;
                                                                  $type = json_decode($var);
                                                                  }
                                                               }
                                                               @endphp
                                                                  @foreach($travel_types as $t_types)
                                                                     <option value="{{$t_types->tt_id}}"
                                                                        <?php 
                                                                        if(empty($type)){
                                                                        
                                                                        }
                                                                        else{
                                                                           for($i=0; $i<sizeof($type);$i++){
                                                                           
                                                                              if($type[$i] == $t_types->tt_id){?>
                                                                              selected
                                                                              <?php
                                                                              }else{?>
                                                                                 
                                                                              <?php
                                                                              }
                                                                           }
                                                                        }
                                                                        ?>
                                                                     >{{$t_types->tt_name}}</option>
                                                                  @endforeach
                                                         </select>
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="date">Journey Date  <span class="important"></span></label>
                                                         <input type="date" class="form-control autonumber"  id="date" name="date" value="{{$d->travel_date}}" >
                                                      </div>
                                                      <div class="col-xl-4">
                                                         <div class="mb-3">
                                                            <label for="" class="form-label">Budget for the trip <span class="red"></span></label>
                                                            <div class="row" style="padding:0px 10px">
                                                               <div class="col-xl-4 p-0">
                                                                  <select class="form-select digits" id="budget_type" name="budget_type" >
                                                                     @foreach($budget_currencies as $currency)
                                                                        <option value="{{$currency->id}}" {{$d->budget_payment_type == $currency->id ? 'selected' : ''}} >{{ucfirst($currency->name)}}</option>
                                                                     @endforeach
                                                                  </select>
                                                               
                                                               </div>
                                                               <div class="col-xl-4 p-0">
                                                                  <input type="text" class="form-control" id="budget_value" name="budget_value" value="{{$d->budget_payment_value}}">
                                                                  
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-xl-4">
                                                            <div class="mb-3">
                                                               <label for="adults<?= $d->id ?>" class="form-label">Total Adults<span class="red d-inline">*</span> Kids &amp; Infants </label>
                                                               <div class="row" style="padding:0px 10px;">
                                                                  <div class="col-xl-4 p-0">
                                                                     <input type="text" class="form-control" id="adults{{$d->id}}" name="adults" oninput="validateadults('<?= $d->id ?>')" value="{{$d->adults}}" placeholder="Adults" 
                                                                     >
                                                                  </div>
                                                                  <div class="col-xl-4 p-0">
                                                                     <input type="text" class="form-control" id="kids" name="kids" value="{{$d->kids}}" placeholder="Kids" 
                                                                     >
                                                                  </div>
                                                                  <div class="col-xl-4 p-0">
                                                                     <input type="text" class="form-control" id="infants" name="infants" value="{{$d->infants}}" placeholder="Infants" 
                                                                     >
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span><small><em class="adulterror text-danger{{$d->id}}"></em></small></span>
                                                      </div>
                                                         <div class="col-md-4 mt-2">
                                                            <label for="hname">Lead Source <span class="important"></span></label><br/>
                                                               <select name="lead_source[]" class="form-control" data-live-search="true"  id="lead_source"  data-width="100%" multiple >
                                                               @php $type = array();
                                                                  foreach($jsondata as $lsindex=>$lsvalue){
                                                                     if($key == $lsindex){
                           
                                                                     $var = $lsvalue->lead_source;
                                                                     $type = json_decode($var);
                                                                  
                                                                     }
                                                                  }
                                                                  @endphp
                                                                  @foreach($lead_sources as $l_sources)
                                                                     <option value="{{$l_sources->id}}"
                                                                        <?php 
                                                                        if(empty($type)){
                                                                        
                                                                        }
                                                                        else{
                                                                           for($i=0; $i<sizeof($type);$i++){
                                                                              
                                                                              if($type[$i] == $l_sources->id){?>
                                                                              selected
                                                                              <?php
                                                                              }else{?>
                                                                                 
                                                                              <?php
                                                                              }
                                                                           }
                                                                        }
                                                                        ?>
                                                                     >{{$l_sources->name}}</option>
                                                                  @endforeach
                                                               </select>
                                                         </div>
                                                         <div class="col-md-4 mt-2">
                                                            <label for="hname">Lead Owner <span class="important"></span></label><br/>
                                                            <select name="lead_owner[]" class="form-control" data-live-search="true"  id="lead_owner"   data-width="100%" multiple >
                                                               @php $type = array();
                                                                  foreach($jsondata as $loindex=>$lovalue){
                                                                     if($key == $loindex){
                           
                                                                     $var = $lovalue->lead_owner;
                                                                     $type = json_decode($var);
                                                                     }
                                                                  }
                                                               @endphp
                                                               @foreach($lead_owner as $l_owner)
                                                                  <option value="{{$l_owner->id}}"
                                                                     <?php 
                                                                     if(empty($type)){
                                                                        
                                                                     }
                                                                     else{
                                                                        for($i=0; $i<sizeof($type);$i++){
                                                                           
                                                                           if($type[$i] == $l_owner->id){?>
                                                                           selected
                                                                           <?php
                                                                           }else{?>
                                                                              
                                                                           <?php
                                                                           }
                                                                        }
                                                                     }
                                                                     ?>
                                                                  >{{$l_owner->name}}</option>
                                                            @endforeach
                                                            </select>
                                                         </div>
                                                         <div class="col-md-4 mt-3"></div>
                                                         <div class="col-auto">
                                                            <b>Requirements</b>
                                                         </div>
                                                         <div class="col-md-8">
                                                               @php $type = array();
                                                                  foreach($jsondata as $reqindex=>$reqvalue){
                                                                     if($key == $reqindex){
                                                                     $var = $reqvalue->requirements;
                                                                     $type = json_decode($var);
                                                                     
                                                                     
                                                                     }
                                                                  }
                                                               @endphp
                                                            @foreach($requirement as $req)
                                                            <div class="form-check form-check-inline">
                                                               
                                                               <input class="form-check-input requirement" type="checkbox" name="requirement[]" id="requirement" value="{{$req->tt_id}}"
                                                               <?php
                                                               if(empty($type)){
                                                                        
                                                               }
                                                               else{
                                                                  for($i=0; $i<sizeof($type);$i++){
                                                                           
                                                                     if($type[$i] == $req->tt_id){?>
                                                                     checked
                                                                     <?php
                                                                     }else{?>
                                                                        
                                                                     <?php
                                                                     }
                                                                  }
                                                               }
                                                               ?>
                                                               >
                                                               <label class="form-check-label" for="inlineRadio1">{{$req->tt_name}}</label>
                                                            </div>
                                                            @endforeach
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                      <input type="hidden" name="hide_id" value="{{$d->id}}">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                                                              
                                                      <button type="submit" name="upd_lead" id="upd_lead{{$d->id}}" class="btn btn-primary">Update</button>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- delete modal -->
                                    <div class="modal fade" id="deletelead{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                             </button>
                                             </div>
                                             <div class="modal-body text-center">
                                                <h4>Are you sure you want to delete it.</h4>
                                                <form action="{{url('crm/modify/lead')}}" method="post">
                                                   @csrf
                                                   <div class="form-group text-center">
                                                      <input type="hidden" name="hide_id" value="{{$d->id}}">
                                                      <button class="btn btn-primary btn-fix btn-air" type="submit" name="delete_lead" value="" id="timeout-activate">Yes</button>
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                   </div>
                                                </form>
                                             </div>
                                             <!-- <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                             <button type="button" class="btn btn-primary">Yes</button>
                                             </div> -->
                                          </div>
                                       </div>
                                    </div>

                                    <!-- mark modal -->
                                    <div class="modal fade" id="marklead{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                             <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                             </button> -->
                                             </div>
                                             <div class="modal-body text-center">
                                                <h4>Are you sure you want to mark it.</h4>
                                                <form action="{{url('crm/modify/lead')}}" method="post">
                                                   @csrf
                                                   <div class="form-group text-center">
                                                      <input type="hidden" name="hide_id" value="{{$d->id}}">
                                                      <input type="hidden" name="status" id="status{{$d->id}}"value="">
                                                      <button class="btn btn-primary btn-fix btn-air" type="submit" name="mark_lead" value="" id="timeout-activate">Yes</button>
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>

                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Assigned to modal -->
                                    <div class="modal fade" id="assignlead{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                             <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                             </button> -->
                                             </div>
                                             <div class="modal-body text-center">
                                                <h4>Are you sure you want to assign.</h4>
                                                <form action="{{url('crm/modify/lead')}}" method="post">
                                                   @csrf
                                                   <div class="form-group text-center">
                                                      <input type="hidden" name="hide_id" value="{{$d->id}}">
                                                      <input type="hidden" name="assign_to" class="indi_lead_assign"id="assign_to{{$d->id}}"value="">
                                                      <button class="btn btn-primary btn-fix btn-air" type="submit" name="assign_lead" value="" id="timeout-activate">Yes</button>
                                                      <button type="button" class="btn btn-secondary clearleadassingn" data-dismiss="modal">No</button>

                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    
                                   
                                    @php $sno=$sno+1 @endphp
                                    @endforeach
                                 </tbody>
                                 <tfoot>
                                    <!-- <tr>
                                       <th>#</th>
                                       <th>Details</th>
                                       <th>Type</th>
                                       <th>Address</th>
                                       <th>Start Date</th>
                                       <th>Total</th>
                                       <th>Last Date</th>
                                       <th>Action</th>
                                       </tr> -->
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
<!-- Bulk Assigned to modal -->
<div class="modal fade" id="bulkassignlead" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
         <!-- <button type="button" class="close clearbulkform" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button> -->
         </div>
         <div class="modal-body text-center">
            <h4>Are you sure you want to assign.</h4>
            <form action="{{url('crm/modify/bulk_lead')}}" method="post">
               @csrf
               <div class="form-group text-center">
                  <input type="hidden" name="hide_lead_id" id="hide_lead_id" value="">
                  <input type="hidden" name="bulkassign_to" id="bulkassign_to"value="">
                  <button class="btn btn-primary btn-fix btn-air" type="submit" name="bulk_assign" value="" id="timeout-activate">Yes</button>
                  <button type="button" class="btn btn-secondary clearbulkform" data-dismiss="modal">No</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@include('../includes/footer')
<script>
   function preview(image,id)
   {		
      if (image.files && image.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e){
      $('#image'+id)
         .attr('src', e.target.result)
         .width(100)
         .height(100);
      };
      reader.readAsDataURL(image.files[0]);
      }
   }


	function checkmobile(id) {
        $('#upd_lead'+id).prop('disabled',true);
            var hmob1 = $('#cus_mobile'+id).val();
			var adults = $('#adults'+id).val();
			var email = $('#cus_email'+id).val();
            var dig = hmob1.charAt(0);
            if(hmob1 != ''){
				if(dig >5){
                    $('.mobileerror'+id).text('');
					if(/^\d{10}$/.test(hmob1)){
                        $('.mobileerror'+id).text('');
						if( (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) && (adults !='') ){
							$('.emailerror'+id).text('');
							$('#upd_lead'+id).prop('disabled',false);
							return true;
						}else{
							$('#upd_lead'+id).prop('disabled',true);
						}
					}else{
                        $('.mobileerror'+id).text('');
                        $('.mobileerror'+id).text('Mobile number must be ten digits');
						return false;
					}
				}else{
                    $('.mobileerror'+id).text('');
                    $('.mobileerror'+id).text('First digit of mobile number must be greater than 5.');
					return false;
				}
			}else{
				$('.mobileerror'+id).text('');
				return false;
			} 
    }
	function checkemail(id) {
        $('#upd_lead'+id).prop('disabled',true);
        var email = $('#cus_email'+id).val();
		var hmob1 = $('#cus_mobile'+id).val();
		var adults = $('#adults'+id).val();
        if(email != ''){
				if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
					$('.emailerror'+id).text('');
					if( (/^\d{10}$/.test(hmob1)) && (adults !='') ){
						$('#upd_lead'+id).prop('disabled',false);
						return true;
					}else{
						$('#upd_lead'+id).prop('disabled',true);
						return false;
					}
				}else{
					$('.emailerror'+id).text('');
					$('.emailerror'+id).text('Enter a valid email address.');
					return false;
				}
		}else{
			$('.emailerror'+id).text('');
			return false;
		} 
    }
	function validateadults(id){
		$('#upd_lead'+id).prop('disabled',true);
		var adults = $('#adults'+id).val();
		var hmob1 = $('#cus_mobile'+id).val();
		var email = $('#cus_email'+id).val();
		if(adults != ''){
			if( (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) && (/^\d{10}$/.test(hmob1)) ){
				$('#upd_lead'+id).prop('disabled',false);
				return true;
			}else{
				$('#upd_lead'+id).prop('disabled',true);
				return false;
			}
		}else{
			$('.adulterror'+id).text('');
			return false;
		}
	}
   //pass choosen option lead_status  from database in mark modal
   function changestatus(id,status){
      $('#status'+id).val(status);
   }
   //pass choosen assinged option id in modal to assign lead to someone
   function assignedto(id){
      var status = $('#assignedto'+id).val();
      if(status !=''){
         $('#assignlead'+id).modal('show');
         $('#assign_to'+id).val(status);
      }
   }
   //clear individual assign form field on clicking no button
   $(".clearleadassingn").click(function() {
      $('.indi_lead_assign').val("");
   });
   //on click select all option for bulk assign check all checkbox
   $(document).ready(function(){
      $('#mainselect').click(function(){
         $('.checkall').prop('checked',$(this).prop('checked'));
      })
   });
   //function call on select change for bulk assign  
   function checkall(){
      let ele = $(".checkall");
      let  arr = [];
      $.each(ele, function(key,val) {
         if ($(this).prop('checked'))
            {
               arr.push($(this).val());
           }
      });
      if ((arr.length) == '0'){
         alert('Please select atleast one lead.');
         $("#bulkassignedto")[0].selectedIndex = 0;
      }
      else{
         var leadid = JSON.stringify(arr);
         var assignid = $('#bulkassignedto').val();
         if(assignid != ''){
            $('#bulkassignlead').modal('show');
            $('#hide_lead_id').val(leadid);
            $('#bulkassign_to').val(assignid);
         }
      }
   }
   //clear bulk assign form field on clicking no button
   $(".clearbulkform").click(function() {
            $(this).closest('form').find("input[type=hidden]").val("");
   });

   
</script>