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
									<img class="img-80 img-radius"
										src="{{asset('assets/images/avatar-4.jpg')}}"
										alt="User-Profile-Image">
									<div class="user-details">
										<span id="more-details">John Doe<i class="fa fa-caret-down"></i></span>
									</div>
								</div>
								<div class="main-menu-content">
									<ul>
										<li class="more-details">
											<a href="{{asset('')}}/Admin/admin_profile"><i class="ti-user"></i>View Profile</a>
											<a href="{{asset('')}}/Admin/general"><i class="ti-settings"></i>General Settings</a>
											<a href=""><i
													class="ti-layout-sidebar-left"></i>Logout</a>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="pcoded-navigation-label pt-15"></div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="active" style="margin-bottom:10px;">
									<a href="{{asset('')}}/Admin/index" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
										<span class="pcoded-mtext">Dashboard</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
							
								<li class="">
									<a href="{{asset('')}}/Admin/manage_user" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-user"></i><b></b></span>
										<span class="pcoded-mtext">Manage Users</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b></b></span>
										<span class="pcoded-mtext">Manage Categories</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="{{asset('')}}/Admin/categories" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Total Categories</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="{{asset('')}}/Admin/add_category" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Add Category</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										
									</ul>
								</li>
								<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-tag" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Manage Tag</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="{{asset('')}}/Admin/tag" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Total Tag</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="{{asset('')}}/Admin/add_tag" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Add tag</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										
									</ul>
								</li>
								<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-shopping-bag" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Manage Products</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="{{asset('')}}/Admin/manage_product" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Total Products</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="{{asset('')}}/Admin/add_product" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Add Products</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										
									</ul>
								</li>
								<li class="">
									<a href="{{asset('')}}/Admin/manage_society" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-map-marker" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Manage Society</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								<li class="">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-pencil-alt"></i><b></b></span>
										<span class="pcoded-mtext">Stock Update</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								<li class="">
									<a href="{{asset('')}}/Admin/vieworder" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-shopping-cart" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Orders</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-file"></i><b></b></span>
										<span class="pcoded-mtext">Pages</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="{{asset('')}}/Admin/pages" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">List</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>
								</li>
								<li class="">
									<a href="{{asset('')}}/Admin/order_limit_setting" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-settings"></i><b></b></span>
										<span class="pcoded-mtext">Order Limit setting</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								<li class="">
									<a href="{{asset('')}}/Admin/stock" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-clipboard"></i><b></b></span>
										<span class="pcoded-mtext">Stock </span>
										<span class="pcoded-mcaret"></span>
									</a>
								
								</li>
								<li class="">
									<a href="{{asset('')}}/Admin/order_notification" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-bell"></i><b></b></span>
										<span class="pcoded-mtext">Notification </span>
										<span class="pcoded-mcaret"></span>
									</a>
								
								</li>
								<li class="">
									<a href="{{asset('')}}/Admin/order_feedback" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-comments-o" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Order Feedback </span>
										<span class="pcoded-mcaret"></span>
									</a>
								
								</li>
								<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-settings"></i><b></b></span>
										<span class="pcoded-mtext">System Setting </span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="{{asset('')}}/Admin/general" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Website setting</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="{{asset('')}}/Admin/page_setting" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Page Setting</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>
								</li>
									<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-image"></i><b></b></span>
										<span class="pcoded-mtext">Manage Slider </span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="{{asset('')}}/Admin/slider" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Total Slider</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="{{asset('')}}/Admin/add_slider" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Add Slider</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>
								</li>
									<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-quote-left" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Manage Testimonial  </span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="{{asset('')}}/Admin/testimonial" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Total Testimonial</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="{{asset('')}}/Admin/add_testimonial" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Add Testimonial</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>
								</li>
									<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-user"></i><b></b></span>
										<span class="pcoded-mtext">Clients </span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="{{asset('')}}/Admin/client" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Total Clients</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="{{asset('')}}/Admin/add_client" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Add clients</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>
								</li>
        <!--                        <li class="">-->
								<!--	<a href="" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="ti-settings"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">General Setting </span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
								
								<!--</li>-->
								
							</ul>
							
						
						</div>
					</nav>
					