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
                                        	<div class="col-sm-8 col-md-8">
            										<div class="card">
            											<div class="card-header">
            													<div class="row">
            														<div class="col-md-12 col-12">
                														<h4>Expenses </h4>
                													</div>
            													
            												</div>
            										  
            										</div>
            										<div class="card-block">
            										    <div class="row">
            										        <div class="col-md-3">
            										           <div class="mb-2">
            										                <label>From Date</label>
            										                <input type="date" class="form-control" name="" placeholder="" id="">
            										           </div>
            										        </div>
            										        <div class="col-md-3">
            										           <div class="mb-2">
            										                <label>To Date</label>
            										                <input type="date" class="form-control" name="" placeholder="" id="">
            										           </div>
            										        </div>
            										        <div class="col-md-3">
            										           <div class="mb-2">
            										                <label>Utilities</label>
            										                <select class="form-control" name="">
            										                    <option value="">Select any option</option>
            										                </select>
            										           </div>
            										        </div>
            										        <div class="col-md-3">
            										          <button class="btn btn-primary btn-sm mt-4">Generate</button>
            										        </div>
            										        <div class="col-md-12">
            										            
            										            <h6 class="mb-3 mt-4" style="color:black"><b>Last 30 Days Report(07-Jan-2021 to 06-Feb-2021)</b></h6>
            										        </div>
            										        <div class="col-md-6">
            										            <table class="table">
            										                <thead>
            										                    <tr>
            										                        <th>Category</th>
            										                        <th>Amount</th>
            										                    </tr>
            										                </thead>
            										                <tbody>
            										                    <tr>
            										                        <td>Utlities</td>
            										                        <td>103</td>
            										                    </tr>
            										                </tbody>
            										            </table>
            										        </div>
            										        <div class="col-md-6">
            										            <div id="chart_Donut" style="width: 100%; height: 300px;"></div>
            										        </div>
            										        <div class="col-md-12">
            										           <div class="dt-responsive table-responsive">
            										                  <table class="table datatable">
            										                <thead>
            										                    <tr>
                										                    <th>Expensive Date</th>
                										                    <th>Main Category</th>
                										                    <th>Sub Category</th>
                										                    <th>Short Description</th>
                										                    <th>More Detials</th>
                										                    <th>Action</th>
                										                </tr>
            										                </thead>
            										                <tbody>
            										                    <tr>
            										                        <td>10 Jan</td>
            										                        <td>Utlities</td>
            										                        <td>Furniture</td>
            										                        <td></td>
            										                        <td></td>
            										                        <td>
            										                          <button class="btn btn-sm btn-primary">Edit</button>
            										                          <button class="btn btn-sm btn-danger">Delete</button>
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
            								<div class="col-md-4">
            								    <div class="card">
            								        <div class="card-header">
            								            <h4>Add New Expenses</h4>
            								        </div>
            								        <div class="card-body">
            								            <div class="mb-2">
            								                <label for="">Parent Category <span class="red"> *</span></label>
            								                <select class="form-control" name="" required>
            								                    <option value="">Option 1</option>
            								                    <option value="">Option 1</option>
            								                </select>
            								            </div>
            								            <div class="mb-2">
            								                <label for="">Sub Category <span class="red"> *</span></label>
            								                <select class="form-control" name="" required>
            								                    <option value="">Option 1</option>
            								                    <option value="">Option 1</option>
            								                </select>
            								            </div>
            								            <div class="mb-2">
            								                <label for="">Expense Date <span class="red"> *</span></label>
            								                <input type="date" class="form-control" name="" required>
            								            </div>
            								            <div class="row">
            								                <div class="col-md-6">
            								                    <div class="mb-2">
            								                        <label for="">Sub Total Amount <span class="red">*</span></label>
            								                        <input type="number" class="form-control" required placeholder="Sub total Amount">
            								                    </div>
            								                </div>
            								                <div class="col-md-6">
            								                    <div class="mb-2">
            								                        <label for="">Tax Amount <span class="red">*</span></label>
            								                        <input type="number" class="form-control" required placeholder="Tax Amount">
            								                    </div>
            								                </div>
            								            </div>
            								             <div class="mb-2">
            								                        <label for="">Total Amount <span class="red">*</span></label>
            								                        <input type="number" class="form-control" required placeholder="Expenses Amount">
            								            </div>
            								             <div class="mb-2">
            								                        <label for="">Expenses Short Description <span class="red">*</span></label>
            								                        <input type="text" class="form-control" required placeholder="Expenses Short Description">
            								            </div>
            								             <div class="mb-2">
            								                        <label for="">More details about expense <span class="red">*</span></label>
            								                        <input type="text" class="form-control" required placeholder="More details about expenses">
            								            </div>
            								            <center>
            								                <button class="btn btn-primary btn-sm">Save</button>
            								            </center>
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