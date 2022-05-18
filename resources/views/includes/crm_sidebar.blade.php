<style>
      tfoot{
          display:none;
      }
  </style>
							<ul class="pcoded-item pcoded-left-item">
								<li  class="{{($page_name=='index')?'active':''}}">
									<a href="{{url('crm')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-dashboard"></i><b></b></span>
										<span class="pcoded-mtext">Lead Dashboard</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<li  class="{{($page_name=='all')?'active':''}}">
									<a href="{{url('crm/lead/all')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-menu-alt"></i><b></b></span>
										<span class="pcoded-mtext">All Lead</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<li  class="{{($page_name=='add_lead')?'active':''}}">
									<a href="{{url('crm/add_lead')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-menu-alt"></i><b></b></span>
										<span class="pcoded-mtext">Add Lead</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
						    	<div class="pcoded-navigation-label" menu-title-theme="theme1">By Lead Stage (Active)</div>

	  							@foreach($leadstage as $leadstage)
								  @php 
								  	$string = str_replace(' ', '_', $leadstage->name);
								  @endphp
						    	<li class="{{($page_name==$leadstage->name.'_lead')?'active':''}}">
									<a href="{{url('crm/lead/'.$string.'_lead')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-question-circle" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">{{ucfirst($leadstage->name)}}</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								
	  							@endforeach
						    	<!-- <li class="{{($page_name=='new_lead')?'active':''}}">
									<a href="{{url('crm/new_lead')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-plus-circle"></i><b></b></span>
										<span class="pcoded-mtext">New</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
						    	<li class="{{($page_name=='follow_up_lead')?'active':''}}">
									<a href="{{url('crm/follow_up_lead')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-handshake-o" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Follow Up</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
						    	<li class="{{($page_name=='potential_lead')?'active':''}}">
									<a href="{{url('crm/potential_lead')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-star" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Potential</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
						    	<li class="{{($page_name=='positive_lead')?'active':''}}">
									<a href="{{url('crm/positive_lead')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-thumb-up"></i><b></b></span>
										<span class="pcoded-mtext">Positive</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
						    	<li class="{{($page_name=='converted_lead')?'active':''}}">
									<a href="{{url('crm/converted_lead')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-check-circle"></i><b></b></span>
										<span class="pcoded-mtext">Converted</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
						    	<li class="{{($page_name=='close_lead')?'active':''}}">
									<a href="{{url('crm/close_lead')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-times-circle-o"></i><b></b></span>
										<span class="pcoded-mtext">Close</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li> -->
						    	<div class="pcoded-navigation-label" menu-title-theme="theme1"> More Lead Action</div>
								  
                             	<li class="{{($page_name=='lead_report')?'active':''}}">
									<a href="{{url('crm/lead_report')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-file"></i><b></b></span>
										<span class="pcoded-mtext">Lead Report</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
                             	<!-- <li class="{{($page_name=='')?'active':''}}">
									<a href="{{url('crm')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-files"></i><b></b></span>
										<span class="pcoded-mtext">Import lead fron Xl</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li> -->
                             	<li class="{{($page_name=='')?'active':''}}">
									<a href="{{url('crm/bulk_lead')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-receipt"></i><b></b></span>
										<span class="pcoded-mtext">Bulk Lead Assign</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
                             	<li class="{{($page_name=='crm_setting')?'active':''}}">
									<a href="{{url('crm/crm_setting')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-cog"></i><b></b></span>
										<span class="pcoded-mtext">CRM Setting</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>

								<!--	<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">-->
								<!--	<a href="javascript:void(0)" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="fa fa-user"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">Clients </span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
								<!--	<ul class="pcoded-submenu" style="display: none;">-->
								<!--		<li class=" ">-->
								<!--			<a href="{{url('/Admin/client')}}" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Total Clients</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--		<li class=" ">-->
								<!--			<a href="{{url('/Admin/add_client')}}" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Add clients</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--	</ul>-->
								<!--</li>-->
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
