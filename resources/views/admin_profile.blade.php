@include('../includes/header')
@include('../includes/crm_sidebar')
<div class="pcoded-content">
    <div class="page-header">
      <div class="page-block">
         <div class="row align-items-center">
            <div class="col-md-8">
               <div class="page-header-title">
                  <h5 class="m-b-10">Admin Profile</h5>
                  <p class="m-b-0">View and change your profile</p>
               </div>
            </div>
            <div class="col-md-4">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href=""> <i class="fa fa-home"></i> </a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Admin Profile</a></li>
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
                  <div class="col-lg-12">
                     <div class="cover-profile">
                        <div class="profile-bg-img">
                           <img class="profile-bg-img img-fluid" src="{{asset('assets/images/user-profile/bg-img1.jpg')}}" alt="bg-img">
                            <div class="card-block user-info">
                              <div class="col-md-12">
                                 <div class="media-left">
                                    <a href="#" class="profile-image">
                                    @if($LoggedUserInfo->profile_img != '')
                                    <img class="user-img img-radius"
                                       src="{{asset('uploads/profile_img/'.$LoggedUserInfo->profile_img)}}"
                                       alt="User-Profile-Image">
                                    @else
                                    <img class="user-img img-radius" src="{{asset('assets/images/user-profile/user-img.jpg')}}" alt="user-img">
                                    @endif
                                    </a>
                                 </div>
                                 <div class="media-body row">
                                    <div class="col-lg-12">
                                       <div class="user-title">
                                       @if($LoggedUserInfo->name != '')
                                       <h2>{{Str::ucfirst($LoggedUserInfo->name)}}</h2>
                                       @else
                                       <h2>Your Name</h2>
                                       @endif
                                       </a>
                                          <span class="text-white">Admin</span>
                                       </div>
                                    </div>
                                    <div>
                                       <!-- <div class="pull-right cover-btn">
                                          <button type="button" class="btn btn-primary m-r-10 m-b-10"><i class="icofont icofont-plus"></i> Follow</button>
                                          <button type="button" class="btn btn-primary m-b-10"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                          </div> -->
                                    </div>
                                 </div>
                              </div>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tab-header card">
                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                           <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
                              <div class="slide"></div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Edit Personal Info</a>
                              <div class="slide"></div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Profile</a>
                              <div class="slide"></div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#review" role="tab">Change password</a>
                              <div class="slide"></div>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content">
                        <div class="tab-pane active" id="personal" role="tabpanel">
                           <div class="card">
                              <div class="card-header">
                                 <h5 class="card-header-text">About Me</h5>
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
                              <div class="card-block">
                                 <div class="edit-info">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="general-info form-material">
                                             <div class="row">
                                                <div class="col-lg-6 ">
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-user"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="name" class="form-control" value="{{Str::ucfirst($LoggedUserInfo->name)}}" required="" readonly>
                                                         <span class="form-bar"></span>
                                                         <label class="float-label"> Name</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- <div class="col-lg-6">
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-mobile-phone"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="" class="form-control" required="" readonly>
                                                         <span class="form-bar"></span>
                                                         <label class="float-label">Designation</label>
                                                      </div>
                                                   </div>
                                                </div> -->
                                                <div class="col-lg-6">
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-mobile-phone"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="number" class="form-control" value="{{$LoggedUserInfo->mobile}}" required="" readonly>
                                                         <span class="form-bar"></span>
                                                         <label class="float-label">Mobile Number</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-mobile-phone"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="eamil" name="" class="form-control" value="{{$LoggedUserInfo->email}}" required="" readonly>
                                                         <span class="form-bar"></span>
                                                         <label class="float-label">Email</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-mobile-phone"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="" class="form-control" value="{{Str::ucfirst($LoggedUserInfo->address)}}" required="" readonly>
                                                         <span class="form-bar"></span>
                                                         <label class="float-label">Address</label>
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
                        <div class="tab-pane" id="binfo" role="tabpanel">
                           <div class="card">
                              <div class="card-header">
                                 <h5 class="card-header-text">About Me</h5>
                                 <div class="alert-success" id="suceess_msg_div">
                                     
                                 </div>
                              </div>
                              <form id="update_pro_info_form">
                                 @csrf
                                 <div class="card-block">
                                    <div class="edit-info">
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="general-info form-material">
                                                <div class="row">
                                                   <div class="col-lg-6 ">
                                                      <div class="material-group">
                                                         <div class="material-addone">
                                                            <i class="icofont icofont-user"></i>
                                                         </div>
                                                         <div class="form-group form-primary">
                                                            <input type="text" name="name" id="name" class="form-control" >
                                                            <span class="form-bar"></span>
                                                            <label class="float-label"> Name</label>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- <div class="col-lg-6">
                                                      <div class="material-group">
                                                         <div class="material-addone">
                                                            <i class="icofont icofont-mobile-phone"></i>
                                                         </div>
                                                         <div class="form-group form-primary">
                                                            <input type="text" name="" class="form-control" required="" >
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Designation</label>
                                                         </div>
                                                      </div>
                                                   </div> -->
                                                   <div class="col-lg-6">
                                                      <div class="material-group">
                                                         <div class="material-addone">
                                                            <i class="icofont icofont-mobile-phone"></i>
                                                         </div>
                                                         <div class="form-group form-primary">
                                                            <input type="number" name="mobile" id="mobile" class="form-control" >
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Mobile Number</label>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-lg-6">
                                                      <div class="material-group">
                                                         <div class="material-addone">
                                                            <i class="icofont icofont-mobile-phone"></i>
                                                         </div>
                                                         <div class="form-group form-primary">
                                                            <input type="text" name="age" id="age" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Age</label>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-lg-6">
                                                      <div class="material-group">
                                                         <div class="material-addone">
                                                            <i class="icofont icofont-mobile-phone"></i>
                                                         </div>
                                                         <div class="form-group form-primary">
                                                            <input type="text" name="address" id="address" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Address</label>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-lg-6  alert-danger">
                                                      <div id="name_error"></div>
                                                      <div id="mobile_error"></div>
                                                      <div id="age_error"></div>
                                                      <div id="addr_error"></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card-footer">
                                    <div class="text-center">
                                       <!-- <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Submit</a> -->
                                       <!-- <a href="#!" id="edit-cancel" class="btn btn-danger waves-effect">Cancel</a> -->
                                       <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20 update_profile_info" name="update_profile_info"  >Submit</button> 
                                    </div>
                                 </div>
                              </form>
                           </div>
                         </div>  
                           <div class="tab-pane" id="contacts" role="tabpanel">
                               <div class="card">
                                    <div class="card-block">
                                        <form method="post" action="{{url('admin/upload_pic')}}" enctype="multipart/form-data" class="form-material">
                                           @csrf
                                            <div class="row">
                                                <div class="col-md-12 mt-2">
                                                    <center>
                                                      @if($LoggedUserInfo->profile_img != '')
                                                      <img class="card-img-top profile"
                                                         src="{{asset('uploads/profile_img/'.$LoggedUserInfo->profile_img)}}"
                                                         alt="User-Profile-Image">
                                                      @else
                                                      <img class="card-img-top profile"  id="image" src="{{asset('assets/images/user-profile/user-img.jpg')}}" alt="">
                                                      @endif
                                                      <!-- <img class="card-img-top profile"  id="image" src="{{asset('assets/images/user-profile/user-img.jpg')}}" alt=""> -->
                                                    <input type="file" class="hidden-field" onchange="preview(this)" name="propic" id="propic" required>
                                                    <label for="propic"><h4><i class="fa fa-picture-o"></i></h4></label>
                                                    </center>
                                                </div>   
                                             </div>
                                            <div>
                                                <div class="pic_error_msg text-danger text-center"></div>
                                                <div style="float:right;">
                                                   <button type="submit" class="btn btn-primary update_pro_pic" name="update_pro_pic">Update</button> 
                                                   <button type="reset" class="btn btn-danger">Cancel</button> 
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                           </div>`
                           <div class="tab-pane" id="review" role="tabpanel">
                              <div class="card">
                                 <div class="card-header">
                                    <h5 class="card-header-text">Change Password</h5>
                                    <!-- <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                       <i class="fa fa-pencil" aria-hidden="true"></i>
                                       </button> -->
                                 </div>
                                 <form action="{{url('admin/change_pass')}}" method="post">
                                    @csrf
                                 <div class="card-block">
                                    <div class="edit-info">
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="general-info form-material">
                                                <div class="row">
                                                      <div class="col-lg-6 ">
                                                         <div class="material-group">
                                                            <div class="material-addone">
                                                               <i class="icofont icofont-user"></i>
                                                            </div>
                                                            <div class="form-group form-primary">
                                                               <input type="password" name="current_pass" class="form-control" required="">
                                                               <span class="form-bar"></span>
                                                               <label class="float-label">Current Password</label>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-lg-6">
                                                         <div class="material-group">
                                                            <div class="material-addone">
                                                               <i class="icofont icofont-mobile-phone"></i>
                                                            </div>
                                                            <div class="form-group form-primary">
                                                               <input type="password" name="new_pass" id="new_pass" class="form-control" required="" >
                                                               <span class="form-bar"></span>
                                                               <label class="float-label">New Password</label>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-lg-12">
                                                         <div class="material-group">
                                                            <div class="material-addone">
                                                               <i class="icofont icofont-mobile-phone"></i>
                                                            </div>
                                                            <div class="form-group form-primary">
                                                               <input type="password" name="confirm_pass" id="confirm_pass" class="form-control" required="">
                                                               <span class="form-bar"></span>
                                                               <label class="float-label">Confirm Password</label>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-lg-12">
                                                         <div class="form-group registrationFormAlert text-danger" id="CheckPasswordMatch"></div>
                                                      </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="card-footer">
                                    <div class="text-center">
                                       <!-- <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Submit</a> -->
                                       <button type="submit" class="btn btn-primary update_pass" name="update_pass">Update</button> 
                                       <!-- <a href="#!" id="edit-cancel" class="btn btn-danger waves-effect">Cancel</a> -->
                                    </div>
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
      </div>
   </div>
</div>
<script>
    function preview(image){
		if (image.files && image.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e){
					$('#image')
						.attr('src', e.target.result)
						.width(200)
						.height(120);
				};
				reader.readAsDataURL(image.files[0]);
		}
	}

</script>
@include('../includes/footer')
<script>

   //confirm password match with new password validation function
    function checkPasswordMatch() {
         $('.update_pass').prop('disabled',true);
        var password = $("#new_pass").val();
        var confirmPassword = $("#confirm_pass").val();
        if (password != confirmPassword){
            $("#CheckPasswordMatch").html("Passwords does not match!");
        }else{
            $("#CheckPasswordMatch").html("Passwords match.");
            $('.update_pass').prop('disabled',false);    
        }
    }

      //  function profile_update(){
      $('#update_pro_info_form').submit(function(e){
            e.preventDefault();
            var name= $('#name').val();
            var mobile= $('#mobile').val();
            var age= $('#age').val();
            var address= $('#address').val();
            var token = $('input[name=_token]').val();
            $('#name_error').html('');
            $('#mobile_error').html('');
            $('#suceess_msg_div').html('');


            if(name == ''){
               $('#name_error').html('Please enter your name');
               return false;
            }
            if (/^\d{10}$/.test(mobile)){
                $.ajax({
                   type: "POST",
                   url: "{{route('update_personal_info')}}",
                   headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                   data: {name:name, mobile:mobile,token:token,age:age,address:address},
                   success: function(response){
                     // setTimeout(
                        $('#suceess_msg_div').html('Personal details updated successfully');
                        // , 5000);
                        // $('#suceess_msg_div').delay(5000).fadeOut();
                       location.reload();
                   }
                });                
            }
            else{
               $('#mobile_error').html('Mobile number must be ten digits.');
               return (false);
            }
      });
 

    $(document).ready(function () {      
      //confirm password match with new password function call
         $('.update_pass').prop('disabled',true);
         $("#confirm_pass").keyup(checkPasswordMatch);

         //profile pic validation
         $('.update_pro_pic').click(function(){
            var profile= $('#propic').val();
            if(profile == ''){
               $('.pic_error_msg').html('Please first choose the file you want to upload.')
            }
      });

    });
</script>

