@include('../includes/header')
@include('../includes/client_sidebar')
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
                                                            <div class="col-md-12">
                                                                <h4>Create New Member</h4>
                                                            </div>
                                                         </div>
                                                    </div>
                                                    <form action="{{url('client/modify')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-block">
                                                           <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="c_type">Client Type <span class="important">*</span></label>
                                                                        <select class="form-control" name="c_type" id="c_type">
                                                                            <option value="B2B">B2B</option>
                                                                            <option value="B2C">B2C</option>
                                                                            <option value="Corporate">Corporate</option>
                                                                        </select>
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="">First Name <span class="important">*</span></label>
                                                                        <input type="text" class="form-control" id="" name="fname" placeholder="">
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="">Last Name </label>
                                                                        <input type="text" class="form-control" id="" name="lname" placeholder="">
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="">Email Address <span class="important">*</span></label>
                                                                        <input type="email" class="form-control" id="" name="email" placeholder="">
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="">Contact No <span class="important">*</span></label>
                                                                        <input type="number" class="form-control" name="contact" id="" placeholder="">
                                                                    </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="profile_img">Profile Image</label>
                                                                        <input type="file" class="form-control" id="profile_img" name="profile_img" placeholder="" value="">
                                                                    </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="">Gender <span class="important">*</span></label>
                                                                       <select class="form-control" name="gender">
                                                                           <option value="Male">Male</option>
                                                                           <option value="Female">Female</option>
                                                                       </select>
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="">Whatapp No </label>
                                                                        <input type="number" class="form-control" id="" name="whats_contact" placeholder="">
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="">Skype ID </label>
                                                                        <input type="text" class="form-control" id="" name="skype_id" placeholder="">
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="">Facebook ID </label>
                                                                        <input type="text" class="form-control" id="" name="facebook_id" placeholder="">
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="">Instrgram ID </label>
                                                                        <input type="text" class="form-control" id="" name="insta_id" placeholder="">
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="">Twitter ID </label>
                                                                        <input type="text" class="form-control" id=""name="twitter_id" placeholder="">
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="">DOB <span class="required">*</span></label>
                                                                        <input type="date" class="form-control" name="dob" id="" placeholder="">
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="">Anniversary Date </label>
                                                                        <input type="date" class="form-control" name="anniversary_date"id="" placeholder="">
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="">Is Married ? </label>
                                                                        <br>
                                                                           <div class="form-check form-check-inline">
                                                                              <input class="form-check-input" type="radio" name="married" id="inlineRadio1" value="Yes">
                                                                              <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                              <input class="form-check-input" type="radio" name="married" id="inlineRadio2" value="No">
                                                                              <label class="form-check-label" for="inlineRadio2">No</label>
                                                                            </div>
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-12">
                                                                   <h6>Password Details</h6>
                                                               </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Passport No </label>
                                                                        <input type="text" class="form-control" name="passport_no" id="" placeholder="">
                                                                     </div> 
                                                               </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Passport Expiry Date </label>
                                                                        <input type="date" class="form-control" name="passport_expiry" id="" placeholder="">
                                                                     </div> 
                                                               </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for=""> Nationality </label>
                                                                        <input type="text" class="form-control"name="nationality" id="" placeholder="">
                                                                     </div> 
                                                               </div>
                                                                 <div class="col-md-12">
                                                                   <h6>Preference</h6>
                                                               </div>
                                                               <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">Meal Preference </label>
                                                                        <input type="text" class="form-control" id="" name="meal_prefer" placeholder="">
                                                                     </div> 
                                                               </div>
                                                               <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">Seating Preference </label>
                                                                        <input type="text" class="form-control" name="seat_prefer"id="" placeholder="">
                                                                    </div> 
                                                               </div>
                                                               <div class="col-md-12">
                                                                   <h6>Special Arrangements</h6>
                                                               </div>
                                                               <div class="col-md-12">
                                                                   <textarea class="summernote" name="arrangement"></textarea>
                                                               </div>
                                                           </div>  
                                                        </div>
                                                        <div class="card-footer">
                                                            <center>
                                                                <button type="submit" name="add_client" class="btn btn-primary">Submit</button>
                                                            </center>
                                                        </div>
                                                    </form>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('../includes/footer')