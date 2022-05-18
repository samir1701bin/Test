@include('../includes/header')
@include('../includes/account_sidebar') 
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
                                 <!--<ul class="breadcrumb">-->
                                 <!--   <li class="breadcrumb-item">-->
                                 <!--      <a href=""> <i class="fa fa-home"></i> </a>-->
                                 <!--   </li>-->
                                 <!--   <li class="breadcrumb-item"><a href="">Dashboard</a></li>-->
                                 <!--   <li class="breadcrumb-item"><a href="">Dashboard Ecommerce</a></li>-->
                                 <!--</ul>-->
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
                														<h4>Create New Recurring Expense </h4>
                													</div>
            													
            												</div>
            										 </div>
                										<div class="card-block">
                										    <div class="row">
                										        <div class="col-md-4">
                										           <div class="mb-2">
                										                <label>Expenses Details <span class="red"> *</span></label>
                										                <input type="text" class="form-control" name="" placeholder="" id="">
                										           </div>
                										        </div>
                										        <div class="col-md-2">
                										           <div class="mb-2">
                										                <label>Expenses Amount <span class="red"> *</span></label>
                										                <input type="date" class="form-control" name="" placeholder="" id="">
                										           </div>
                										        </div>
                										        <div class="col-md-4">
                										           <div class="mb-2">
                										                <label>Occurs <span class="red"> *</span></label>
                										                <div class="row">
                										                    <div class="col-md-4 col-4 p-0">
                										                        <select class="form-control" name="">
                        										                    <option value="">Every Months</option>
                        										                    <option value="">Every Week</option>
                        										                </select>
                										                    </div>
                										                    <div class="col-md-8 col-8 p-0">
                										                        <input type="date" class="form-control" name=""> 
                										                   </div>
                										                </div>
                										                
                										           </div>
                										        </div>
                										        <div class="col-md-2 mt-2">
                										          <button class="btn btn-primary btn-sm mt-4">Create</button>
                										        </div>
                										       
                										    </div>
                										</div>
                									</div>
            										<div class="card">
            											<div class="card-header">
            													<div class="row">
            														<div class="col-md-12 col-12">
                														<h4> Recurring Expense List </h4>
                													</div>
            													
            												</div>
            										 </div>
                										<div class="card-block">
                										    <div class="row">
                										        <div class="col-md-12">
                										           <div class="dt-responsive table-responsive">
                										                  <table class="table datatable">
                										                <thead>
                										                    <tr>
                    										                    <th>Created On</th>
                    										                    <th>Expenses Details</th>
                    										                    <th>Amount</th>
                    										                    <th>Occure (Monthly weekly)-(Date/Day)</th>
                    										                    <th>Action</th>
                    										                </tr>
                										                </thead>
                										                <tbody>
                										                    <tr>
                										                        <td>
                										                            <input type="text" class="form-control" name="" value="">
                										                        </td>
                										                        <td>
                										                            <input type="text" class="form-control" name="" value="">
                										                        </td>
                										                        <td>
                										                            <input type="text" class="form-control" name="" value="">
                										                        </td>
                										                        <td>
                										                            <input type="text" class="form-control" name="" value="">
                										                        </td>
                										                        <td>
                										                            <input type="text" class="form-control" name="" value="">
                										                        </td>
                										                    </tr>
                										                    <tr>
                										                      <td>06-Dec-2020</td>
                										                      <td>Electricity</td>
                										                      <td>1000</td>
                										                      <td>weekly-wendesday</td>
                										                      <td>
                										                          <button class="btn btn-primary btn-sm">Edit</button>
                										                          <button class="btn btn-danger btn-sm">Delete</button>
                										                      </td>
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