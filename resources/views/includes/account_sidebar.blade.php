<style>
    .counter-section {
     margin-bottom: 16px;
    }
</style>

							<ul class="pcoded-item pcoded-left-item">
                               <li class="{{($page_name=='index')?'active':''}}" style="margin-bottom:10px;">
									<a href="{{url('crm')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
										<span class="pcoded-mtext"> Dashboard</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
							
								<li  class="{{($page_name=='payable_receivable')?'active':''}}">
									<a href="{{url('account/payable_receivable')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-inr"></i><b></b></span>
										<span class="pcoded-mtext"> Payable Vs Receivable</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<li  class="{{ ($page_name=='profit_loss_summary')?'active':''}}">
									<a href="{{url('account/profit_loss_summary')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-get-pocket"></i><b></b></span>
										<span class="pcoded-mtext"> Profit & Loss Summary</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
							
						    
						    	<div class="pcoded-navigation-label" menu-title-theme="theme1">Supplier Payments</div>
			                	<li class="{{ ($page_name=='payable_supplier')?'active':''}}">
									<a href="{{url('account/payable_supplier')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-list-alt"></i><b></b></span>
										<span class="pcoded-mtext">Payable to Supplier</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
                             	<li class="{{ ($page_name=='paid_to_supplier')?'active':''}}">
									<a href="{{url('account/paid_to_supplier')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-list"></i><b></b></span>
										<span class="pcoded-mtext">Paid to Supplier</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
                             	<li class="{{ ($page_name=='supplier_wise_payments')?'active':''}}">
									<a href="{{url('account/supplier_wise_payments')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-credit-card"></i><b></b></span>
										<span class="pcoded-mtext">Supplier wise Payments</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
                             	<li class="{{ ($page_name=='overdue_payable')?'active':''}}">
									<a href="{{url('account/overdue_payable')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-google-wallet"></i><b></b></span>
										<span class="pcoded-mtext">Overdue Payable</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
						    	<div class="pcoded-navigation-label" menu-title-theme="theme1">Customer Payments</div>
			                	<li class="{{ ($page_name=='receivable')?'active':''}}">
									<a href="{{url('account/receivable')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-user"></i><b></b></span>
										<span class="pcoded-mtext"> Receivable</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
                             	<li class="{{ ($page_name=='received')?'active':''}}">
									<a href="{{url('account/received')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-list"></i><b></b></span>
										<span class="pcoded-mtext">Received</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
                             	<li class="{{ ($page_name=='overdue_receivable')?'active':''}}">
									<a href="{{url('account/overdue_receivable')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-users"></i><b></b></span>
										<span class="pcoded-mtext"> Overdue Receivable</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
						    	<div class="pcoded-navigation-label" menu-title-theme="theme1">Expense Settings</div>
			                	<li class="{{ ($page_name=='expense_report')?'active':''}}">
									<a href="{{url('account/expense_report')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-bar-chart"></i><b></b></span>
										<span class="pcoded-mtext"> Expense Report</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
                             	<li class="{{ ($page_name=='recurring_expenses')?'active':''}}">
									<a href="{{url('account/recurring_expenses')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-file"></i><b></b></span>
										<span class="pcoded-mtext"> Recurring Expenses</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
                             	<li class="{{ ($page_name=='expense_setting')?'active':''}}">
									<a href="{{url('account/expense_setting')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-cog"></i><b></b></span>
										<span class="pcoded-mtext"> Expense Settings</span>
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