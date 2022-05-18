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
               <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href=""> <i class="fa fa-home"></i> </a>
                  </li>
                  <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#!">General Setting</a>
                  </li>
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
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-header">
                           <h4>Setting</h4>
                        </div>
                        <div class="card-block">
                           <div class="row">
                              <div class="col-md-12 mt-2">
                                 <form class="form-material">
                                    <div class="form-group form-default">
                                       <input type="text" name="" class="form-control" required="">
                                       <span class="form-bar"></span>
                                       <label class="float-label">Title</label>
                                    </div>
                                    <div class="form-group form-default">
                                       <input type="text" name="" class="form-control" required="">
                                       <span class="form-bar"></span>
                                       <label class="float-label">Copyright</label>
                                    </div>
                                    <div class="form-group form-default">
                                       <div class="sub-title">Website logo</div>
                                       <input type="file" name="logo" class="hidden-field" id="image">
                                       <img src="{{asset('assets/images/user-profile/user-img.jpg')}}"  class="user-thumbnail" alt="" >
                                       <label for="image">Update website logo</label>
                                    </div>
                              
                                </form>	
                           </div>
                        </div>
                        <div class="card-footer">
                           <div class="text-center">
                              <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Submit</a>
                              <a href="#!" id="edit-cancel" class="btn btn-danger waves-effect">Cancel</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="styleSelector">
         </div>
      </div>
   </div>
   </div>
   @include('../includes/footer')