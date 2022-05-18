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
            														<div class="col-md-8 col-8">
                														<h4>Expenses Settings</h4>
                													</div>
            														<div class="col-md-4 col-4">
                													  <a  data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm text-white" style="float:right">Create New Category</a>
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
                										                    <th> Category Name</th>
                										                    <th> Category Type</th>
                										                    <th>Main Category</th>
                										                    <th>Action</th>
                										                </tr>
            										                </thead>
            										                <tbody>
            										                    <tr>
            										                        <td>Web Maintance</td>
            										                        <td>Sub Category</td>
            										                        <td>Technology</td>
            										                        <td>
            										                          <button data-toggle="modal" data-target="#edit_modal"  class="btn btn-sm btn-primary">Edit</button>
            										                          <button class="btn btn-sm btn-danger">Delete</button>
            										                        </td>
            										                    </tr>
            										                    <tr>
            										                        <td>Web Maintance</td>
            										                        <td>Sub Category</td>
            										                        <td>Technology</td>
            										                      <td>System Generate</td>
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
                  
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
           <div class="modal-body">
              <div class="mb-3">
                  <label for="">Main Category</label>
                  <select class="form-control" name="">
                       <option value="">Category 1</option>
                       <option value="">Category 2</option>
                  </select>
              </div>
              <div class="mb-3">
                  <label for=""> Category Name</label>
                  <select class="form-control" name="">
                       <option value="">Category 1</option>
                       <option value="">Category 2</option>
                  </select>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
      
    </div>
  </div>
</div>
  <!-- Edit Modal -->
<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
           <div class="modal-body">
              <div class="mb-3">
                  <label for="">Main Category</label>
                  <select class="form-control" name="">
                       <option value="">Category 1</option>
                       <option value="">Category 2</option>
                  </select>
              </div>
              <div class="mb-3">
                  <label for=""> Category Name</label>
                  <select class="form-control" name="">
                       <option value="">Category 1</option>
                       <option value="">Category 2</option>
                  </select>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
      
    </div>
  </div>
</div>
@include('../includes/footer')