@include('../includes/header')
@include('../includes/client_sidebar')
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
                                             <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h4>Corporate Clients</h4>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                              <li class="nav-item">
                                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#all" role="tab" aria-controls="home" aria-selected="true">All</a>
                                                              </li>
                                                              <li class="nav-item">
                                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#active" role="tab" aria-controls="profile" aria-selected="false">Active</a>
                                                              </li>
                                                              <li class="nav-item">
                                                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#inactive" role="tab" aria-controls="contact" aria-selected="false">Inactive</a>
                                                              </li>
                                                              <li class="nav-item">
                                                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#dead" role="tab" aria-controls="contact" aria-selected="false">Dead</a>
                                                              </li>
                                                            </ul>
                                                            <div class="tab-content" id="myTabContent">
                                                              <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="home-tab">
                                                                    <div class="dt-responsive table-responsive">
                                                                        <table class="datatable table table-striped table-bordered nowrap">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>ID</th>
                                                                                    <th>Client's Details</th>
                                                                                    <th>Total Enquiries</th>
                                                                                    <th>Total Invoices</th>
                                                                                    <th>Revenue</th>
                                                                                    <th>Last Enquiries</th>
                                                                                    <th>Last Purcahsed</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>1</td>
                                                                                    <td>
                                                                                        <a><b>User Name</b> <br>
                                                                                            <span class="user-type">B2B</span><br>
                                                                                            #765414
                                                                                        </a>
                                                                                    </td>
                                                                                    <td>
                                                                                        1
                                                                                    </td>
                                                                                    <td>
                                                                                        0
                                                                                    </td>
                                                                                    <td>
                                                                                        0.00
                                                                                    </td>
                                                                                    <td>
                                                                                        3 Months
                                                                                    </td>
                                                                                    
                                                                                    <td>
                                                                                       3 Months ago
                                                                                    </td>
                                                                                    <td><a
                                                                                            href="{{url('client/client_profile')}}"><button
                                                                                                class="btn btn-primary btn-sm">
                                                                                                View</button></a></td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                              </div>
                                                              <div class="tab-pane fade" id="active" role="tabpanel" aria-labelledby="profile-tab">
                                                                    <div class="dt-responsive table-responsive">
                                                                        <table  class="datatable table table-striped table-bordered nowrap">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>ID</th>
                                                                                    <th>Client's Details</th>
                                                                                    <th>Total Enquiries</th>
                                                                                    <th>Total Invoices</th>
                                                                                    <th>Revenue</th>
                                                                                    <th>Last Enquiries</th>
                                                                                    <th>Last Purcahsed</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>1</td>
                                                                                    <td>
                                                                                        <a><b>User Name</b> <br>
                                                                                            <span class="user-type">B2B</span><br>
                                                                                            #765414
                                                                                        </a>
                                                                                    </td>
                                                                                    <td>
                                                                                        1
                                                                                    </td>
                                                                                    <td>
                                                                                        0
                                                                                    </td>
                                                                                    <td>
                                                                                        0.00
                                                                                    </td>
                                                                                    <td>
                                                                                        3 Months
                                                                                    </td>
                                                                                    
                                                                                    <td>
                                                                                       3 Months ago
                                                                                    </td>
                                                                                    <td><a
                                                                                            href="{{url('client/client_profile')}}"><button
                                                                                                class="btn btn-primary btn-sm">
                                                                                                View</button></a></td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                              </div>
                                                              <div class="tab-pane fade" id="inactive" role="tabpanel" aria-labelledby="contact-tab">
                                                                   <div class="dt-responsive table-responsive">
                                                                        <table class="datatable table table-striped table-bordered nowrap">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>ID</th>
                                                                                    <th>Client's Details</th>
                                                                                    <th>Total Enquiries</th>
                                                                                    <th>Total Invoices</th>
                                                                                    <th>Revenue</th>
                                                                                    <th>Last Enquiries</th>
                                                                                    <th>Last Purcahsed</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>1</td>
                                                                                    <td>
                                                                                        <a><b>User Name</b> <br>
                                                                                            <span class="user-type">B2B</span><br>
                                                                                            #765414
                                                                                        </a>
                                                                                    </td>
                                                                                    <td>
                                                                                        1
                                                                                    </td>
                                                                                    <td>
                                                                                        0
                                                                                    </td>
                                                                                    <td>
                                                                                        0.00
                                                                                    </td>
                                                                                    <td>
                                                                                        3 Months
                                                                                    </td>
                                                                                    
                                                                                    <td>
                                                                                       3 Months ago
                                                                                    </td>
                                                                                    <td><a
                                                                                            href="{{url('client/client_profile')}}"><button
                                                                                                class="btn btn-primary btn-sm">
                                                                                                View</button></a></td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div> 
                                                              </div>
                                                              <div class="tab-pane fade" id="dead" role="tabpanel" aria-labelledby="contact-tab">
                                                                  <div class="dt-responsive table-responsive">
                                                                        <table  class="table datatable table-striped table-bordered nowrap">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>ID</th>
                                                                                    <th>Client's Details</th>
                                                                                    <th>Total Enquiries</th>
                                                                                    <th>Total Invoices</th>
                                                                                    <th>Revenue</th>
                                                                                    <th>Last Enquiries</th>
                                                                                    <th>Last Purcahsed</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>1</td>
                                                                                    <td>
                                                                                        <a><b>User Name</b> <br>
                                                                                            <span class="user-type">B2B</span><br>
                                                                                            #765414
                                                                                        </a>
                                                                                    </td>
                                                                                    <td>
                                                                                        1
                                                                                    </td>
                                                                                    <td>
                                                                                        0
                                                                                    </td>
                                                                                    <td>
                                                                                        0.00
                                                                                    </td>
                                                                                    <td>
                                                                                        3 Months
                                                                                    </td>
                                                                                    
                                                                                    <td>
                                                                                       3 Months ago
                                                                                    </td>
                                                                                    <td><a
                                                                                            href="{{url('client/client_profile')}}"><button
                                                                                                class="btn btn-primary btn-sm">
                                                                                                View</button></a></td>
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