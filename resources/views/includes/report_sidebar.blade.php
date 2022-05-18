


							<ul class="pcoded-item pcoded-left-item">
                               <li class="{{($page_name=='index')?'active':''}}" style="margin-bottom:10px;">
									<a href="{{url('report')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
										<span class="pcoded-mtext">lead Report</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
                               <li class="{{($page_name=='according_report')?'active':''}}" style="margin-bottom:10px;">
									<a href="{{url('report/according_report')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-layout-grid4-alt"></i><b>D</b></span>
										<span class="pcoded-mtext">Accounting Report</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
							
								<li  class="{{($page_name=='invoices')?'active':''}}">
									<a href="{{url('report/invoices')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-file"></i><b></b></span>
										<span class="pcoded-mtext">Invoices</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<li  class="{{($page_name=='tax_payable')?'active':''}}">
									<a href="{{url('report/tax_payable')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-list"></i><b></b></span>
										<span class="pcoded-mtext">Tax Payable</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
						    	<li class="{{($page_name=='customer_payment')?'active':''}}">
									<a href="{{url('report/customer_payment')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-user"></i><b></b></span>
										<span class="pcoded-mtext">Customer Payment</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
                                 <li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-file-text-o"></i><b></b></span>
										<span class="pcoded-mtext"> Supplier Payments</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="{{url('report/paid_to_supplier')}}" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Paid to Supplier</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="{{url('report/payable_to_supplier')}}" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Payable to Supplier</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="{{url('report/supplier_wise_report')}}" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Supplier Wise Report </span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>
								</li>
						  <!--  	<li class="{{($page_name=='supplier_payments')?'active':''}}">-->
								<!--	<a href="{{url('')}}Report/supplier_payments" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="fa fa-file-text-o "></i><b></b></span>-->
								<!--		<span class="pcoded-mtext"> Supplier Payments</span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
								<!--</li>-->
						    	<li class="{{($page_name=='expenses')?'active':''}}">
									<a href="{{url('report/expenses')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-bar-chart"></i><b></b></span>
										<span class="pcoded-mtext">Expenses</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
						    	<li class="{{($page_name=='profit_loss')?'active':''}}">
									<a href="{{url('report/profit_loss')}}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-list"></i><b></b></span>
										<span class="pcoded-mtext">  Profit & Loss</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
						        
						    
								
							</ul>
							
						
						</div>
					</nav>