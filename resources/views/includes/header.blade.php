<html lang="en">
<head>
	<!-- <script src="https://kit.fontawesome.com/bf5306b8f3.js" crossorigin="anonymous"></script> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<title>Travel Management Portal</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Phoenixcoded" />
	<meta name="csrf_token" content="{{ csrf_token() }}" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('assets/pages/waves/css/waves.min.css')}}" type="text/css"
		media="all">

	<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">

	<link rel="stylesheet" href="{{asset('assets/bower_components/switchery/css/switchery.min.css')}}" type="text/css"
		media="all">

	<link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">

	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/switchery/dist/switchery.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/jquery-bar-rating/css/bars-1to10.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/jquery-bar-rating/css/bars-horizontal.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/jquery-bar-rating/css/bars-movie.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/jquery-bar-rating/css/bars-pill.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/jquery-bar-rating/css/bars-reversed.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/jquery-bar-rating/css/bars-square.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/jquery-bar-rating/css/css-stars.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/slick-carousel/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/slick-carousel/css/slick-theme.css')}}">


	<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">

	<link rel="stylesheet" href="{{asset('assets/pages/chart/radial/css/radial.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('assets/plugins/select-picker/css/bootstrap-select.min.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" type="text/css" media="all">
	

	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.css' rel='stylesheet' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.css' rel='stylesheet' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.css' rel='stylesheet' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/list/main.min.css' rel='stylesheet' />
	<style>
	#calendar{
    width: 80%;
    margin-left: 100px;
    box-shadow: 0px 0px 10px #000;
    padding:15px; 
    background: #fff;
  }
  #calendar-container {
    position: relative;
    top: 0%;
    text-align: center;
    left: 0%;
    right: 10%;
    bottom: 15%;
  }
	.hidden-field{
		visibility:hidden!important;
		height:0px;
		width:0px;
	}
	 .price{
         font-size:18px;
     }
     .invoice-status{
         padding:2px!important;
     }
     .red{
         color:red;
     }
	.important{
		color:red;
	}
	.profile{
		height:200px;
		width:200px;
		border-radius:50%;
		
	}
	.dashed-border{
		padding:10px;
		border:1px dashed grey;
		cursor:pointer;
	}
	.user-thumbnail{
		height:40px;
		width:40px;
		border-radius:50%;
		
	}
	.multiple_image{
		height:100px;
		width:200px;
		display:inline-block;
	}
	.top-header-menu li{
	    padding:0 5px;
	}
	.top-header-menu .top-menu{
	    padding:0px!important;
	}
	.top-menu-active{
	    background:#6ca8e9;
	}
	.user-img {
        height: 40px;
        border-radius: 50%;
    }
    /*scrollbar css*/
    /* width */
        .table-responsive::-webkit-scrollbar {
          width: 5px;
          height: 5px;
        }
        
        /* Track */
         .table-responsive::-webkit-scrollbar-track {
          background: #f1f1f1;
        }
        
        /* Handle */
         .table-responsive::-webkit-scrollbar-thumb {
          background: #888;
        }
        
        /* Handle on hover */
         .table-responsive::-webkit-scrollbar-thumb:hover {
          background: #555;
        }
      
    /*scrollbar css*/
    .right-text{
        float:right;
    }
    .table-field{
        border:0px;
        
    }
    .card-block .nav-tabs {
        margin-bottom: 10px;
    }
    .profile-image img {
        height: 100px;
    }
    .profile-bg-img .media-left {
        padding-bottom: 30px;
    }
    .user-title {
        bottom: 10px;
    }
    .counter-section{
        text-align:center;
        padding:10px 0px;
        margin-top:15px;
        border: 1px solid lightgray;
    }
    .counter-section h4{
       font-weight:bold;
       color:black;
    }
    .blue{
        color:blue!important;
    }
    .red{
        color:red!important;
        margin-left:5px;
    }
    .green{
        color:green!important;
    }
    #calendar{
        box-shadow:none!important;
    }
      .trip-details {
        display:inline;
        list-style: circle;
        padding-left: 15px;
    }
    .trip-details li {
        display:inline;
        padding-right: 20px;
    }
    @media screen and (max-width: 600px) {
         .trip-details {
             padding-left: 5px;
        }
         .trip-details li {
            padding-right: 5px;
        }
          .right-text{
            float:left;
        }
      .header-navbar .navbar-wrapper .navbar-logo .mobile-menu {
         top: 15px;
        }
        .header-navbar .navbar-wrapper .navbar-logo .mobile-options {
             top: 15px;
        }
        .nav-left{
            display:block!important;
        }
        	.top-header-menu .top-menu a{
        	    padding:0px 4px!important;
        	    font-size:11px;
        	}
        	.header-navbar .navbar-wrapper .navbar-container .nav-left li>a, .header-navbar .navbar-wrapper .navbar-container .nav-right li>a {
                margin-bottom: 10px;
                font-size: 10px;
        	}
        	.page-header .page-block {
            padding: 60px 40px;
            }
            .card .card-header {
          padding: 15px;
            }
            .mobile-cus{
                font-size:10px;
                padding:10px 2px;
            }
    }
	</style>
</head>
<!--welcome msg-->

<!--welcome msg-->
<body>

	

	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">
			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
							<i class="ti-menu"></i>
						</a>
						
						<a href="{{url('travel_management')}}">
							<!--<img class="img-fluid" src="{{asset('')}}assets/images/logo.png"-->
							<!--	alt="Theme-Logo" />-->
							<h5>Travel Portal</h5>
						</a>
						<a class="mobile-options waves-effect waves-light">
							<i class="ti-more"></i>
						</a>
					</div>
					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li>
								<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
								</div>
							</li>
							<div class="top-header-menu">
							<li class="top-menu {{($main_page=='crm')?'top-menu-active':''}}"><a href="{{url('crm')}}">CRM </a></li>
							    <li class="top-menu {{($main_page=='itinerary')?'top-menu-active':''}}"><a href="{{url('itinerary')}}">Itinarary</a></li>
							    <li class="top-menu {{($main_page=='invoice')?'top-menu-active':''}}"><a href="{{url('invoice')}}">Invoice</a></li>
							    <li class="top-menu {{($main_page=='booking')?'top-menu-active':''}}"><a href="{{url('booking')}}">Booking</a></li>
							    <li class="top-menu {{($main_page=='client')?'top-menu-active':''}}"><a href="{{url('client')}}">Client </a></li>
							    <li class="top-menu {{($main_page=='account')?'top-menu-active':''}}"><a href="{{url('account')}}">Account</a></li>
							    <li class="top-menu {{($main_page=='report')?'top-menu-active':''}}"><a href="{{url('report')}}">Report</a></li>
							    <li class="top-menu {{($main_page=='setting')?'top-menu-active':''}}"><a href="{{url('setting')}}">Setting</a></li>
							</div>
							
						</ul>
						<ul class="nav-right">
							 <li class="header-notification mt-2">
                                <a href="#!" class="waves-effect waves-light mt-2">
                                  <i class="ti-bell"></i>
                                  <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('assets/images/avatar-2.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('assets/images/avatar-3.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="mt-2">
                                <a href="#!" class="displayChatbox waves-effect waves-light mt-2">
                                  <i class="ti-comments"></i>
                                  <span class="badge bg-c-green"></span>
                                </a>
                            </li>
							<li class="user-profile header-notification">
								<a href="#!" class="waves-effect waves-light">
										@if($LoggedUserInfo->profile_img != '')
    									<img class="img-80 img-radius"
    										src="{{asset('uploads/profile_img/'.$LoggedUserInfo->profile_img)}}"
    										alt="User-Profile-Image">
										@else
											<img src="{{asset('assets/images/avatar-4.jpg')}}" class="img-radius"
											alt="User-Profile-Image">
										@endif
										@if($LoggedUserInfo->name != '')
											<span>{{Str::ucfirst($LoggedUserInfo->name)}}</span>
										@else
											<span>Your Name</span>
										@endif
									<i class="ti-angle-down"></i>
								</a>
								<ul class="show-notification profile-notification">
									<li class="waves-effect waves-light">
										<a href="#!">
											<i class="ti-settings"></i> Settings
										</a>
									</li>
									<li class="waves-effect waves-light">
										<a href="{{url('admin/admin_profile')}}">
											<i class="ti-user"></i> Profile
										</a>
									</li>
									
									<li class="waves-effect waves-light">
										<a href="{{url('logout')}}">
											<i class="ti-layout-sidebar-left"></i> Logout
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			 <div id="sidebar" class="users p-chat-user showChat">
				<div class="had-container">
					<div class="card card_main p-fixed users-main">
						<div class="user-box">
							<div class="chat-search-box">
								<a class="back_friendlist">
									<i class="fa fa-chevron-left"></i>
								</a>
								<div class="right-icon-control">
									<form class="form-material">
										<div class="form-group form-primary">
											<input type="text" name="footer-email" class="form-control"
												id="search-friends" required="">
											<span class="form-bar"></span>
											<label class="float-label"><i class="fa fa-search m-r-10"></i>Search
												Friend</label>
										</div>
									</form>
								</div>
							</div>
							<div class="main-friend-list">
								<div class="media userlist-box waves-effect waves-light" data-id="1"
									data-status="online" data-username="Josephin Doe" data-toggle="tooltip"
									data-placement="left" title="Josephin Doe">
									<a class="media-left" href="#!">
										<img class="media-object img-radius img-radius"
											src="{{asset('assets/images/avatar-3.jpg')}}"
											alt="Generic placeholder image ">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Josephin Doe</div>
									</div>
								</div>
								<div class="media userlist-box waves-effect waves-light" data-id="2"
									data-status="online" data-username="Lary Doe" data-toggle="tooltip"
									data-placement="left" title="Lary Doe">
									<a class="media-left" href="#!">
										<img class="media-object img-radius"
											src="{{asset('assets/images/avatar-2.jpg')}}"
											alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Lary Doe</div>
									</div>
								</div>
								<div class="media userlist-box waves-effect waves-light" data-id="3"
									data-status="online" data-username="Alice" data-toggle="tooltip"
									data-placement="left" title="Alice">
									<a class="media-left" href="#!">
										<img class="media-object img-radius"
											src="{{asset('assets/images/avatar-4.jpg')}}"
											alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Alice</div>
									</div>
								</div>
								<div class="media userlist-box waves-effect waves-light" data-id="4"
									data-status="online" data-username="Alia" data-toggle="tooltip"
									data-placement="left" title="Alia">
									<a class="media-left" href="#!">
										<img class="media-object img-radius"
											src="{{asset('assets/images/avatar-3.jpg')}}"
											alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Alia</div>
									</div>
								</div>
								<div class="media userlist-box waves-effect waves-light" data-id="5"
									data-status="online" data-username="Suzen" data-toggle="tooltip"
									data-placement="left" title="Suzen">
									<a class="media-left" href="#!">
										<img class="media-object img-radius"
											src="{{asset('assets/images/avatar-2.jpg')}}"
											alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Suzen</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
                    <div class="pcoded-main-container">
    				<div class="pcoded-wrapper">
    					<nav class="pcoded-navbar">
    						<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    						<div class="pcoded-inner-navbar main-menu">
    							<div class="">
    								<div class="main-menu-header">
										@if($LoggedUserInfo->profile_img != '')
    										<img class="img-80 img-radius"
    										src="{{asset('uploads/profile_img/'.$LoggedUserInfo->profile_img)}}"
    										alt="User-Profile-Image">
										@else
											<img src="{{asset('assets/images/avatar-4.jpg')}}" class="img-radius"
											alt="User-Profile-Image">
										@endif
    									<div class="user-details">
										@if($LoggedUserInfo->name != '')
										<span id="more-details">{{Str::ucfirst($LoggedUserInfo->name)}}<i class="fa fa-caret-down"></i></span>
										@else
										<span id="more-details">Your Name<i class="fa fa-caret-down"></i></span>
										@endif
    									</div>
    								</div>
    								<div class="main-menu-content">
    									<ul>
    										<li class="more-details">
    											<a href="{{url('admin/admin_profile')}}"><i class="ti-user"></i>View Profile</a>
    											<a href="{{url('admin/general')}}"><i class="ti-settings"></i>General Settings</a>
    											<a href="{{url('logout')}}"><i
    													class="ti-layout-sidebar-left"></i>Logout</a>
    										</li>
    									</ul>
    								</div>
    							</div>
    							
    							<div class="pcoded-navigation-label pt-15"></div>
