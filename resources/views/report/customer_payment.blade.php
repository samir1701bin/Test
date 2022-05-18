@include('../includes/header')
@include('../includes/report_sidebar')
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
								   <div class="col-xl-12 col-md-6">
										<div class="card">
										    <div class="card-header">
										        <h4>Customer Report</h4>
										     </div>
										    <div class="card-body">
										        <div class="row">
										            <div class="col-md-6 text-center mb-4">
										                <h6 class="">Receivable Report</h6>
										                  <div id="chart_Combo" style="width:100%; height: 300px;"></div>
										            </div>
										            <div class="col-md-6 text-center mb-4">
										                    <h6 class="">Payable Report</h6>
										                    <div id="chart_area" style="width:100%; height: 300px;"></div>
										            </div>
										            <div class="col-md-12">
										                 <div class="dt-responsive table-responsive">
            										                  <table class="table datatable">
            										                <thead>
            										                    <tr>
                										                    <th>Customer Name</th>
                										                    <th>Customer Type</th>
                										                    <th>Amount Payable</th>
                										                    <th>Paid</th>
                										                    <th>Balance</th>
                										                    <th>Due Date</th>
                										                </tr>
            										                </thead>
            										                <tbody>
            										                  <tr>
            										                      <td>Book cab journey</td>
            										                      <td>Airlines</td>
            										                      <td><span class="green">Rs. 2000</span></td>
            										                      <td><span class="blue">Rs. 2000</span></td>
            										                      <td><span class="red">Rs. 2000</span></td>
            										                      <td>29 Aug 2020</td>
            										                  </tr>
            										                </tbody>
            										            </table>
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
                  </div>
				  @include('../includes/footer')