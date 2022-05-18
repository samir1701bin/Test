@include('../includes/header')
@include('../includes/report_sidebar')
<style>
          .table td, .table th {
            padding: 10px 0.75rem;
        }
      </style>       
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
                                        	<div class="col-sm-12 col-md-12">
            										<div class="card">
            											<div class="card-header">
            													<div class="row">
            														<div class="col-md-12 col-12">
                														<h4>Paid To Supplier</h4>
                													</div>
            													
            													
            												</div>
            										     <p>In this section, You can generate report for New leads arrived for a particular period. Lead created manaually / automatically and irrespective of its current stage.</p>
            										     <p>Example: if you want to know the new leads arrived during july 2020 month.</p>
            										</div>
            										<div class="card-block">
            										    <div class="row">
            										         <div class="col-md-3">
            										             <div class="mb-3">
            										                 <label for="">From Date <span class="red">*</span></label>
            										                 <input class="form-control" type="date" name="" id="" requires>
            										             </div>
            										         </div>
            										         <div class="col-md-3">
            										             <div class="mb-3">
            										                 <label for="">To Date <span class="red">*</span></label>
            										                 <input class="form-control" type="date" name="" id="" requires>
            										             </div>
            										         </div>
            										         <div class="col-md-3">
            										             <div class="mb-3">
            										                 <label for="">Vendor Name <span class="red">*</span></label>
            										                 <input class="form-control" type="text" name="" placeholder="Type Vendor name" id="" requires>
            										             </div>
            										         </div>
            										         <div class="col-md-3">
            										             <button class="btn btn-primary btn-sm" style="margin-top:30px">Search</button>
            										         </div>
            										        <div class="col-md-12">
            										           
            										           <div class="dt-responsive table-responsive">
            										                  <table class="table datatable">
            										                <thead>
            										                    <tr>
                										                    <th>Supplier Name</th>
                										                    <th>Supplier Type</th>
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
 