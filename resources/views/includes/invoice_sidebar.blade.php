

							<ul class="pcoded-item pcoded-left-item">
                               <li class="{{($page_name=='index')?'active':''}}" style="margin-bottom:10px;">
									<a href="{{url('invoice')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-layout-grid2-alt" aria-hidden="true"></i><b>D</b></span>
										<span class="pcoded-mtext"> All Invoices</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
							
								<li  class="{{($page_name=='unpaid_invoices')?'active':''}}">
									<a href="{{url('invoice/unpaid_invoices')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-file-code-o" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext"> Unpaid invoices</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<li  class="{{($page_name=='over_due_invoices')?'active':''}}">
									<a href="{{url('invoice/over_due_invoices')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-file"></i><b></b></span>
										<span class="pcoded-mtext"> Over due invoices</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
						    	<li class="{{($page_name=='partially_paid_invoices')?'active':''}}">
									<a href="{{url('invoice/partially_paid_invoices')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-th-list"></i><b></b></span>
										<span class="pcoded-mtext"> Partially paid invoice</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>

						    	<li class="{{($page_name=='fully_paid_invoices')?'active':''}}">
									<a href="{{url('invoice/fully_paid_invoices')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-outdent"></i><b></b></span>
										<span class="pcoded-mtext">  Fully Paid Invoices</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
						    
						    	<div class="pcoded-navigation-label" menu-title-theme="theme1">Refund</div>
			                	<li class="{{($page_name=='pending_invoices')?'active':''}}">
									<a href="{{url('invoice/pending_invoices')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-file"></i><b></b></span>
										<span class="pcoded-mtext">Pending</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
                             	<li class="{{($page_name=='completed_invoices')?'active':''}}">
									<a href="{{url('invoice/completed_invoices')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-file"></i><b></b></span>
										<span class="pcoded-mtext">Completed</span>
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
								<!--			<a href="{{url('')}}/Admin/client" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Total Clients</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--		<li class=" ">-->
								<!--			<a href="{{url('')}}/Admin/add_client" class="waves-effect waves-dark">-->
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