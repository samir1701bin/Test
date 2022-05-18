<html lang="en">
   <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Welcome To Admin Dashboard</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="csrf_token" content="{{ csrf_token() }}" />
      <meta name="author" content="Phoenixcoded" />
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <link rel="icon" href="" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/bootstrap/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{url('assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
      <link rel="stylesheet" type="text/css" href="{{url('assets/icon/themify-icons/themify-icons.css')}}">
      <link rel="stylesheet" type="text/css" href="{{url('assets/icon/icofont/css/icofont.css')}}">
      <link rel="stylesheet" type="text/css" href="{{url('assets/icon/font-awesome/css/font-awesome.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
   </head>
   <body themebg-pattern="theme1">
      <div class="theme-loader">
         <div class="loader-track">
            <div class="preloader-wrapper">
               <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
               <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
               <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
               <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="login-block">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                     <div class="text-center">
                        <!--<img src="assets/images/logo.png" alt="logo.png">-->
                     </div>
                     <div class="auth-box card">
                        <div class="card-block">
                           <div class="row m-b-20">
                              <div class="col-md-12">
                                 <h3 class="text-center">Sign In</h3>
                              </div>
                           </div>
                           

                           <form id="login_form" method="post" action="{{url('admin/login')}}"class="md-float-material form-material">
                           @if(Session::get('fail'))
                           <div class="alert alert-danger">
                              {{Session::get('fail')}}
                           </div>
                           @endif
                              @csrf
                              <div class="form-group form-primary">
                                 <input type="text" name="email" id="uemail" class="form-control" >
                                 <span class="text-danger" id="uemail_error">@error('email'){{$message}}@enderror</span>
                                 <span class="form-bar"></span>
                                 <label class="float-label">Your Email Address</label>
                              </div>
                              <div class="form-group form-primary">
                                 <input type="password" name="password" id="upass" class="form-control" >
                                 <span class="text-danger" id="upass_error">@error('password'){{$message}}@enderror</span>
                                 <span class="form-bar"></span>
                                 <label class="float-label">Password</label>
                              </div>
                              <div class="row m-t-25 text-left">
                                 <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary d-">
                                       <label>
                                       <input type="checkbox" value="">
                                       <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                       <span class="text-inverse">Remember me</span>
                                       </label>
                                    </div>
                                    <div class="forgot-phone text-right f-right">
                                       <a href="{{url('admin/forgot_pass')}}" class="text-right f-w-600"> Forgot Password?</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="row m-t-30">
                                 <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                                 </div>
                              </div>
                           </form>
                           <hr />
                        </div>
                     </div>
                  
               </div>
            </div>
         </div>
      </section>
      <script type="text/javascript" src="{{url('assets/bower_components/jquery/js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/bower_components/popper.js/js/popper.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{url('assets/pages/waves/js/waves.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/bower_components/modernizr/js/modernizr.js')}}"></script>
      <script type="text/javascript" src="{{url('bower_components/modernizr/js/css-scrollbars.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/bower_components/i18next/js/i18next.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/js/common-pages.js')}}"></script>
      <script>
         $(document).ready(function(){
            // $('#login_form').submit(function(e){
            //    e.preventDefault();
            //    var email = $('#uemail').val();
            //    var token = $('input[name=_token]').val();
            //    var pass = $('#upass').val();
            
            //    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
            //       $.ajax({
            //          type: "POST",
            //          url: "{{url('admin/login')}}",
            //          headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
            //          data: {email:email, password:pass,token:token},
            //          success: function(response){                           
            //             location.reload();
            //          }
            //       });                
            //    }
            //    else{
            //       $('#uemail_error').html('Enter a valid email email address');
            //       return (false);
            //    }
            // });
         })
      </script>
   </body>
</html>