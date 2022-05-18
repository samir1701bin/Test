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
                  <div class="col-md-8">
                     <div class="page-header">
                        <div class="page-block">
                           <div class="row align-items-center">
                              <div class="col-md-8">
                                 <div class="page-header-title">
                                    <h5 class="m-b-10">Your Itinerary</h5>
                                    <p class="m-b-0"><i class="fa fa-pencil">Edit </i></p>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <label>Change Cover Place</label>
                                 <input type="file">  
                              </div>
                           </div>
                        </div>
                     </div>
                     <br>
                     <div class="card ">
                        <div class="card-body" id="draggableMultiple1">
                           <div class="sortable-moves card-sub">
                              <img class="img-fluid p-absolute" src="{{asset('assets/images/avatar-1.jpg')}}" alt="">
                              <h5 class="card-title">Multiple list 1</h5>
                              <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                           </div>
                           <!--<form>-->
                           <!--                                                   <div class="row attribute" >-->
                           <!--                                                        <div class="col-lg-12 col-md-12" style="display:block" id="variant">-->
                           <!--                                                            <div class="form-group form-md-line-input form-md-floating-label">-->
                           <!--                                                                <label for="form_control_coupon_code"><h6>Days</h6></label>-->
                           <!--                                                                <div class="panel panel-default">-->
                           <!--                                                                    <div class="panel-body">-->
                           <!--                                                                        <div class="row">-->
                           <!--                                                                            <div class="col-sm-2 nopadding">-->
                           <!--                                                                                <div class="form-group">-->
                           <!--                                                                                    <input type="text" class="form-control" id="day"  name="day[0]" placeholder="Day" required>-->
                           <!--                                                                                </div>-->
                           <!--                                                                            </div>-->
                           <!--                                                                            <div class="col-sm-2 nopadding">-->
                           <!--                                                                                <div class="form-group">-->
                           <!--                                                                                    <input type="number" class="form-control" id="star_rating" min="1" name="star_rating[0]" oninput="valid()" placeholder="Star Rating" required>-->
                           <!--                                                                                </div>-->
                           <!--                                                                                <span class="material-input" id="spa"></span>-->
                           <!--                                                                            </div>-->
                           <!--                                                                            <div class="col-sm-2 nopadding">-->
                           <!--                                                                                <div class="form-group">-->
                           <!--                                                                                    <input type="text" class="form-control" id="address"  name="address[0]" oninput="valid()" placeholder="Address" required>-->
                           <!--                                                                                </div>-->
                           <!--                                                                            </div>-->
                           <!--                                                                            <div class="col-sm-2 nopadding">-->
                           <!--                                                                                <div class="form-group">-->
                           <!--                                                                                    <input type="text" class="form-control" id="description"  name="description[0]" oninput="" placeholder="description" required>-->
                           <!--                                                                                </div>-->
                           <!--                                                                            </div>-->
                           <!--                                                                            <div class="col-sm-1 nopadding">-->
                           <!--                                                                                <div class="form-group">-->
                           <!--                                                                                    <input type="text" class="form-control" id="attribute_unit" name="attribute_unit[0]" oninput="" placeholder="Unit" required>-->
                           <!--                                                                                </div>-->
                           <!--                                                                            </div>-->
                           <!--                                                                            <div class="col-sm-2 nopadding" >-->
                           <!--                                                                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">-->
                           <!--                                                                                <div class="fileinput-new thumbnail">-->
                           <!--                                                                                    <img width="100%" height="100%" src="" />-->
                           <!--                                                                                </div>-->
                           <!--                                                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>-->
                           <!--                                                                                <div>-->
                           <!--                                                                                    <span class="btn btn-rose btn-round btn-file">-->
                           <!--                                                                                        <span class="fileinput-new"></span>-->
                           <!--                                                                                        <span class="fileinput-exists"></span>-->
                           <!--                                                                                        <input type="file"  accept="image/*" id="attribute_img" name="prod_img0[]" multiple>-->
                           <!--                                                                                    </span>-->
                           <!--                                                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i></a>-->
                           <!--                                                                                </div>-->
                           <!--                                                                            </div>-->
                           <!--                                                                            </div>-->
                           <!--                                                                            <div class="col-sm-2 nopadding">-->
                           <!--                                                                                <div class="form-group">-->
                           <!--                                                                                    <div class="input-group">-->
                           <!--                                                                                        <div class="input-group-btn">-->
                           <!--                                                                                            <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="fa fa-plus" aria-hidden="true"></span> </button>-->
                           <!--                                                                                        </div>-->
                           <!--                                                                                    </div>-->
                           <!--                                                                                </div>-->
                           <!--                                                                            </div>-->
                           <!--                                                                        </div>-->
                           <!--                                                                        <div style="" id="getColor" ></div>-->
                           <!--                                                                        <div style="" id="education_fields" ></div>-->
                           <!--                                                                    </div>-->
                           <!--                                                                </div>-->
                           <!--                                                            </div>-->
                           <!--                                                        </div>-->
                           <!--                                                    </div>-->
                           <!--                                                    <br>-->
                           <!--                                                </form> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="card">
                        <div class="card-body">
                           <div class="d-flex">
                              <h6>Library</h6>
                              <span> 
                              <button class="btn btn-primary btn-padding" data-toggle="modal" data-target="#add" style="position:absolute;left:45%;"><i class="fa fa-plus"></i> Add New Library</button>    
                              </span>
                           </div>
                           <br>
                           <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link active" id="pills-activity-tab" data-toggle="pill" href="#pills-activity" role="tab" aria-controls="pills-activity" aria-selected="true">
                                 <i class="fa fa-tasks" aria-hidden="true"></i> <br> Activity</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link" id="pills-hotel-tab" data-toggle="pill" href="#pills-hotel" role="tab" aria-controls="pills-hotel" aria-selected="false">
                                 <i class="fa fa-hotel" aria-hidden="true"></i> <br> Hotel</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link" id="pills-flight-tab" data-toggle="pill" href="#pills-flight" role="tab" aria-controls="pills-flight" aria-selected="false">
                                 <i class="fa fa-plane" aria-hidden="true"></i> <br> Flight</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link" id="pills-train-tab" data-toggle="pill" href="#pills-train" role="tab" aria-controls="pills-train" aria-selected="false">
                                 <i class="fa fa-train" aria-hidden="true"></i> <br> Train</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link" id="pills-transport-tab" data-toggle="pill" href="#pills-transport" role="tab" aria-controls="pills-transport" aria-selected="false">
                                 <i class="fa fa-bus" aria-hidden="true"></i> <br> Transport</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link" id="pills-cruise-tab" data-toggle="pill" href="#pills-crusie" role="tab" aria-controls="pills-crusie" aria-selected="false">
                                 <i class="fa fa-ship" aria-hidden="true"></i> <br> Cruise</a>
                              </li>
                           </ul>
                           <div class="tab-content" id="pills-tabContent">
                              <form class="form-inline">
                                 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                 <button class="btn btn-outline-success my-2 my-sm-0 btn-padding" type="submit">Search</button>
                              </form>
                              <div class="tab-pane fade show active" id="pills-active" role="tabpanel" aria-labelledby="pills-activity-tab">
                                 <!--<div class="row">-->
                                 <!--    <div class="d-flex shadow-sm mt-4">-->
                                 <!--        <img src="{{asset('')}}assets/images/avatar-4.jpg" class="w-50">-->
                                 <!--        <div class="w-50 pl-10">-->
                                 <!--            <h6>Zoo Zurich</h6>-->
                                 <!--            <p>People who know animals will protect them</p>-->
                                 <!--        </div>-->
                                 <!--    </div>-->
                                 <!--    <div class="d-flex shadow-sm mt-4">-->
                                 <!--        <img src="{{asset('')}}assets/images/avatar-4.jpg" class="w-50">-->
                                 <!--        <div class="w-50 pl-10">-->
                                 <!--            <h6>Zoo Zurich</h6>-->
                                 <!--            <p>People who know animals will protect them</p>-->
                                 <!--        </div>-->
                                 <!--    </div>-->
                                 <!--</div> -->
                                 <div class="row">
                                    <div class="col-md-12" id="draggableMultiple">
                                       <div class="sortable-moves card-sub">
                                          <img class="img-fluid p-absolute" src="{{asset('assets/images/avatar-1.jpg')}}" alt="">
                                          <h5 class="card-title">Multiple list 1</h5>
                                          <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                       </div>
                                       <div class="sortable-moves card-sub">
                                          <img class="img-fluid p-absolute" src="{{asset('assets/images/avatar-2.jpg')}}" alt="">
                                          <h5 class="card-title">Multiple list 1</h5>
                                          <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                       </div>
                                       <div class="sortable-moves card-sub">
                                          <img class="img-fluid p-absolute" src="{{asset('assets/images/avatar-3.jpg')}}" alt="">
                                          <h5 class="card-title">Multiple list 2</h5>
                                          <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                       </div>
                                       <div class="sortable-moves card-sub">
                                          <img class="img-fluid p-absolute" src="{{asset('assets/images/avatar-4.jpg')}}" alt="">
                                          <h5 class="card-title">Multiple list 3</h5>
                                          <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                       </div>
                                       <div class="sortable-moves card-sub">
                                          <img class="img-fluid p-absolute" src="{{asset('assets/images/avatar-5.jpg')}}" alt="">
                                          <h5 class="card-title">Multiple list 4</h5>
                                          <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                       </div>
                                       <div class="sortable-moves card-sub">
                                          <img class="img-fluid p-absolute" src="{{asset('assets/images/avatar-1.jpg')}}" alt="">
                                          <h5 class="card-title">Multiple list 5</h5>
                                          <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="pills-hotel" role="tabpanel" aria-labelledby="pills-hotel-tab">
                                 <div class="row">
                                    <div class="d-flex shadow-sm mt-4">
                                       <img src="{{asset('assets/images/avatar-4.jpg')}}" class="w-50">
                                       <div class="w-50 pl-10">
                                          <h6>Zoo Zurich2</h6>
                                          <p>People who know animals will protect them</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="pills-flight" role="tabpanel" aria-labelledby="pills-flight-tab">
                                 <div class="row">
                                    <div class="d-flex shadow-sm mt-4">
                                       <img src="{{asset('assets/images/avatar-4.jpg')}}" class="w-50">
                                       <div class="w-50 pl-10">
                                          <h6>Zoo Zurich3</h6>
                                          <p>People who know animals will protect them</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="pills-train" role="tabpanel" aria-labelledby="pills-train-tab">
                                 <div class="row">
                                    <div class="d-flex shadow-sm mt-4">
                                       <img src="{{asset('assets/images/avatar-4.jpg')}}" class="w-50">
                                       <div class="w-50 pl-10">
                                          <h6>Zoo Zurich4</h6>
                                          <p>People who know animals will protect them</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="pills-transport" role="tabpanel" aria-labelledby="pills-transport-tab">
                                 <div class="row">
                                    <div class="d-flex shadow-sm mt-4">
                                       <img src="{{asset('assets/images/avatar-4.jpg')}}" class="w-50">
                                       <div class="w-50 pl-10">
                                          <h6>Zoo Zurich5</h6>
                                          <p>People who know animals will protect them</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="pills-crusie" role="tabpanel" aria-labelledby="pills-cruise-tab">
                                 <div class="row">
                                    <div class="d-flex shadow-sm mt-4">
                                       <img src="{{asset('assets/images/avatar-4.jpg')}}" class="w-50">
                                       <div class="w-50 pl-10">
                                          <h6>Zoo Zurich6</h6>
                                          <p>People who know animals will protect them</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<div class="modal " id="add" tabindex="-1" role="dialog" aria-labelledby="addTitle" aria-hidden="true">
   <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Library</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="card card-body">
               <div class="row">
                  <div class="col-md-12">
                     <label class="mt-2" for="name">Library Name <span class="important">*</span></label>
                     <input type="text" class="form-control  mb-3" name="" placeholder="Enter Library Name">
                  </div>
                  <div class="col-md-12">
                     <label class="mt-2" for="name">Icon <span class="important">*</span></label>
                     <input type="file" class="form-control  mb-3" name="" placeholder="">
                  </div>
                  <div class="col-md-12">
                     <button class="btn btn-primary">+ Submit</button> 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="container" style="margin-left:250px;">
   <style>
      #div1, #div2 {
      float: left;
      width: 100px;
      height: 35px;
      margin: 10px;
      padding: 10px;
      border: 1px solid black;
      }
   </style>
   <script>
      function allowDrop(ev) {
        ev.preventDefault();
      }
      
      function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
      }
      
      function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
      }
   </script>
   <h2>Drag and Drop</h2>
   <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
      <img src="{{asset('assets/images/avatar-4.jpg')}}" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
   </div>
   <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
</section>
@include('../includes/footer')