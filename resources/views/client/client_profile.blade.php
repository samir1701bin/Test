@include('../includes/header')
@include('../includes/client_sidebar')
<style>
    .details-desc {
    margin-bottom: 10px;
    font-weight: 600;
    line-height: 30px;
}
.details-type{
    line-height:35px;
}
</style>
<div class="pcoded-content">
    <div class="page-header">
      <div class="page-block">
         <div class="row align-items-center">
            <div class="col-md-8">
               <div class="page-header-title">
                  <h5 class="m-b-10">Clients Profile</h5>
                  <p class="m-b-0">View and change your profile</p>
               </div>
            </div>
            <div class="col-md-4">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href=""> <i class="fa fa-home"></i> </a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Client Profile</a></li>
               </ul>
            </div>
         </div>
      </div>
    </div>
   <div class="pcoded-inner-content">
      <div class="main-body">
         <div class="page-wrapper">
            <div class="page-body">
               <div class="row">
                   
                  <div class="col-lg-12">
                     <div class="cover-profile">
                        <div class="profile-bg-img">
                           <img class="profile-bg-img img-fluid" src="{{asset('assets/images/user-profile/bg-img1.jpg')}}" alt="bg-img">
                            <div class="card-block user-info">
                              <div class="col-md-12">
                                 <div class="media-left">
                                    <a href="#" class="profile-image">
                                    <img class="user-img img-radius" src="{{asset('assets/images/user-profile/user-img.jpg')}}" alt="user-img">
                                    </a>
                                 </div>
                                 <div class="media-body row">
                                    <div class="col-lg-12">
                                       <div class="user-title">
                                          <h2>Josephin Villa</h2>
                                          <span class="text-white">Admin</span>
                                       </div>
                                    </div>
                                    <div>
                                    </div>
                                 </div>
                              </div>
                            </div>
                        </div>
                     </div>
                  </div>
                   <div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-purple">1</h4>
													<h6 class="text-muted m-b-0">Enquires</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-bar-chart f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-purple">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-red">1</h4>
													<h6 class="text-muted m-b-0">Enquires Sent</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-question-circle f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-red">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-green">145</h4>
													<h6 class="text-muted m-b-0">Invoices Sent</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-calendar-check-o f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-green">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-blue">Rs. 500000</h4>
													<h6 class="text-muted m-b-0">Busniess Revenue</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-hand-o-down f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-blue">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tab-header card">
                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                           <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#clients_details" role="tab">Clients Details</a>
                              <div class="slide"></div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#inquiry" role="tab">Inquiry</a>
                              <div class="slide"></div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#quotation_sent" role="tab">Quotation Sent</a>
                              <div class="slide"></div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#invoce_sent" role="tab">Invoice Sent</a>
                              <div class="slide"></div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#payment_history" role="tab">Payment History</a>
                              <div class="slide"></div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#document_list" role="tab">Document List</a>
                              <div class="slide"></div>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content">
                          <div class="tab-pane active" id="clients_details" role="tabpanel">
                           <div class="card">
                              <div class="card-header">
                                 <h5 class="card-header-text">Clients Dashboard</h5>
                                
                              </div>
                              <div class="card-block">
                                 <div class="edit-info">
                                   <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4 col-6"><span class="details-type">Client type</span> </div>
                                                <div class="col-md-8 col-6">: <span class="details-desc">B2B</span></div>
                                                <div class="col-md-4 col-6"><span class="details-type">Name</span> </div>
                                                <div class="col-md-8 col-6">: <span class="details-desc">Rohit Sharma</span></div>
                                                <div class="col-md-4 col-6"><span class="details-type">Address</span> </div>
                                                <div class="col-md-8 col-6">: <span class="details-desc">Jhansi</span></div>
                                                <div class="col-md-4 col-6"><span class="details-type">Tax No</span> </div>
                                                <div class="col-md-8 col-6">: <span class="details-desc">-</span></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4 col-6"><span class="details-type">Email ID</span> </div>
                                                <div class="col-md-8 col-6">: <span class="details-desc">user@gmail.com</span></div>
                                                <div class="col-md-4 col-6"><span class="details-type">Contact No</span> </div>
                                                <div class="col-md-8 col-6">: <span class="details-desc">+91 989898776</span></div>
                                                <div class="col-md-4 col-6"><span class="details-type">Address</span> </div>
                                                <div class="col-md-8 col-6">: <span class="details-desc">Jhansi</span></div>
                                                <div class="col-md-4 col-6"><span class="details-type">Tax No</span> </div>
                                                <div class="col-md-8 col-6">: <span class="details-desc">-</span></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4 col-6"><span class="details-type">Cretaed On</span> </div>
                                                <div class="col-md-8 col-6">: <span class="details-desc">-</span></div>
                                                <div class="col-md-4 col-6"><span class="details-type">Website</span> </div>
                                                <div class="col-md-8 col-6">: <span class="details-desc"></span></div>
                                                <div class="col-md-4 col-6"><span class="details-type">Service Type</span> </div>
                                                <div class="col-md-8 col-6">: <span class="details-desc"></span></div>
                                                <div class="col-md-4 col-6"><span class="details-type">Last Purchased</span> </div>
                                                <div class="col-md-8 col-6">: <span class="details-desc">-</span></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2 mb-3">
                                            <a href="{{url('client/create_client')}}" class="btn btn-primary btn-sm" style="float:right">+ Create New Member</a>
                                        </div>
                                        <div class="col-md-12">
                                          <table class="datatable table table-striped table-bordered nowrap">
                                                                             <thead>
                                                                                                            <tr>
                                                                                                                <th>Contact Details</th>
                                                                                                                <th>Gender</th>
                                                                                                                <th>Married</th>
                                                                                                                <th>Relationship</th>
                                                                                                                <th>DOB</th>
                                                                                                                <th>Anniversary</th>
                                                                                                                <th>Passport Details</th>
                                                                                                                <th>Action</th>
                                                                                                            </tr>
                                                                                                        </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-sm-4 col-4">
                                                                                                    <img class="user-img" src="{{asset('assets/images/avatar-4.jpg')}}">
                                                                                                </div>
                                                                                                <div class="col-md-8 col-sm-8 col-8">
                                                                                                      <b>User Name</b> <br>
                                                                                                    <span class="user-type">B2B</span><br>
                                                                                                    #765414
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td>Male</td>
                                                                                    <td>Yes</td>
                                                                                    <td>Married</td>
                                                                                    <td>12/12/21</td>
                                                                                    <td>12/12/21</td>
                                                                                    <td>
                                                                                        546234<br>
                                                                                        Exp 26/12/2021
                                                                                    </td>
                                                                                    <td>
                                                                                        <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-success btn-sm">View</button>
                                                                                        <a href="{{url('client/update_client')}}"><button  class="btn btn-primary btn-sm">Edit</button></a>
                                                                                        <a href="#"><button  class="btn btn-danger btn-sm">Delete</button></a>
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
                        <!--clients tab-->
                           <div class="tab-pane" id="inquiry" role="tabpanel">
                           <div class="card">
                              <div class="card-header">
                                 <h5 class="card-header-text">Enquired</h5>
                              </div>
                              <div class="card-block">
                                 <div class="edit-info">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="general-info form-material">
                                               <table class="datatable table table-striped table-bordered nowrap">
                                                                             <thead>
                                                                                                            <tr>
                                                                                                                <th>Lead Id</th>
                                                                                                                <th>Enquired On</th>
                                                                                                                <th>Headled By</th>
                                                                                                           </tr>
                                                                                                        </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                  <td>#1324</td>
                                                                                  <td>12/12/21</td>
                                                                                  <td>Handled By</td>
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
                         <!--inquiry tab-->
                           <div class="tab-pane" id="quotation_sent" role="tabpanel">
                               <div class="card">
                                     <div class="card-header">
                                         <h5 class="card-header-text">Quotation Sent</h5>
                                      </div>
                                      <div class="card-block">
                                           <table class="datatable table table-striped table-bordered nowrap">
                                                                             <thead>
                                                                                                            <tr>
                                                                                                                <th>Quotation Id</th>
                                                                                                                <th>Enquired On</th>
                                                                                                                <th>Headled By</th>
                                                                                                           </tr>
                                                                                                        </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                  <td>#1324</td>
                                                                                  <td>12/12/21</td>
                                                                                  <td>Handled By</td>
                                                                                </tr>
                                                                            </tbody>
                                          </table>
                                      </div>
                                   
                                </div>
                           </div>
                           <!--quotation sent-->
                           <div class="tab-pane" id="invoce_sent" role="tabpanel">
                              <div class="card">
                                     <div class="card-header">
                                         <h5 class="card-header-text">Invoice Sent</h5>
                                      </div>
                                      <div class="card-block">
                                           <table class="datatable table table-striped table-bordered nowrap">
                                                                             <thead>
                                                                                                            <tr>
                                                                                                                <th>Invoice Id</th>
                                                                                                                <th>Enquired On</th>
                                                                                                                <th>Headled By</th>
                                                                                                           </tr>
                                                                                                        </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                  <td>#1324</td>
                                                                                  <td>12/12/21</td>
                                                                                  <td>Handled By</td>
                                                                                </tr>
                                                                            </tbody>
                                          </table>
                                      </div>
                                   
                                </div>
                           </div>
                           <!--invoice sent-->
                           <div class="tab-pane" id="payment_history" role="tabpanel">
                               <div class="card">
                                     <div class="card-header">
                                         <h5 class="card-header-text">Payment History</h5>
                                      </div>
                                      <div class="card-block">
                                           <table class="datatable table table-striped table-bordered nowrap">
                                                                             <thead>
                                                                                                            <tr>
                                                                                                                <th>Invoice Id</th>
                                                                                                                <th>Created By</th>
                                                                                                                <th>Paid On</th>
                                                                                                                <th>Details</th>
                                                                                                                <th>Amount Paid</th>
                                                                                                           </tr>
                                                                                                        </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                  <td>#1324</td>
                                                                                  <td>XYZ</td>
                                                                                  <td>12/12/21</td>
                                                                                  <td>Online Pay</td>
                                                                                  <td>Rs. 700</td>
                                                                                </tr>
                                                                            </tbody>
                                          </table>
                                      </div>
                                   
                                </div>
                           </div>
                           <!--payment history-->
                           <div class="tab-pane" id="document_list" role="tabpanel">
                              <div class="card">
                                     <div class="card-header">
                                         <h5 class="card-header-text">Document List</h5>
                                      </div>
                                      <div class="card-block">
                                           <table class="datatable table table-striped table-bordered nowrap">
                                                                             <thead>
                                                                                                            <tr>
                                                                                                                <th>Sr No.</th>
                                                                                                                <th>Document Name</th>
                                                                                                           </tr>
                                                                                                        </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                  <td>1</td>
                                                                                  <td>Passport</td>
                                                                                </tr>
                                                                            </tbody>
                                          </table>
                                      </div>
                                   
                                </div>
                           </div>
                           <!--document_list -->
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
 <!--client details modal-->
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Memeber</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form>
          <div class="modal-body">
               <img src="{{asset('assets/images/avatar-4.jpg')}}" class="mb-3" style="height:50px;border-radius:50%">
               <b class="mb-2">User Name</b>
               <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4 col-6"><span class="details-type">Email ID</span> </div>
                            <div class="col-md-8 col-6">: <span class="details-desc">user@gmail.com</span></div>
                            <div class="col-md-4 col-6"><span class="details-type">Gender</span> </div>
                            <div class="col-md-8 col-6">: <span class="details-desc">Male</span></div>
                            <div class="col-md-4 col-6"><span class="details-type">Skyp ID</span> </div>
                            <div class="col-md-8 col-6">: <span class="details-desc"></span></div>
                            <div class="col-md-4 col-6"><span class="details-type">Date Of Birth</span> </div>
                            <div class="col-md-8 col-6">:<span class="details-desc">10/10/2000</span></div>
                            <div class="col-md-4 col-6"><span class="details-type">Instragram ID</span> </div>
                            <div class="col-md-8 col-6">:<span class="details-desc">-</span></div>
                            <div class="col-md-5 col-6"><span class="details-type">Anniversary Date</span> </div>
                            <div class="col-md-7 col-6">:<span class="details-desc"></span></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4 col-6"><span class="details-type">Email ID</span> </div>
                            <div class="col-md-8 col-6">: <span class="details-desc">user@gmail.com</span></div>
                            <div class="col-md-4 col-6"><span class="details-type">Contact No</span> </div>
                            <div class="col-md-8 col-6">: <span class="details-desc">+91 999999999</span></div>
                            <div class="col-md-4 col-6"><span class="details-type">Facebook ID</span> </div>
                            <div class="col-md-8 col-6">: <span class="details-desc"></span></div>
                            <div class="col-md-4 col-6"><span class="details-type">Twitter ID</span> </div>
                            <div class="col-md-8 col-6">: <span class="details-desc">-</span></div>
                            <div class="col-md-4 col-6"><span class="details-type">Is Married</span> </div>
                            <div class="col-md-8 col-6">: <span class="details-desc">-</span></div>
                            <div class="col-md-4 col-6"><span class="details-type">Relationship</span> </div>
                            <div class="col-md-8 col-6">: <span class="details-desc">-</span></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                         <hr>
                       <h6>Passport Details</h6>
                    </div>
                     <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4 col-6"><span class="details-type">Passport NO</span> </div>
                            <div class="col-md-8 col-6">: <span class="details-desc">673654</span></div>
                            <div class="col-md-4 col-6"><span class="details-type">Nationality</span> </div>
                            <div class="col-md-8 col-6">: <span class="details-desc">Indian</span></div>
                          </div>
                    </div>
                     <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4 col-6"><span class="details-type">Passport Expiry Date</span> </div>
                            <div class="col-md-8 col-6">: <span class="details-desc"></span></div>
                          </div>
                    </div>
                    <div class="col-md-12">
                         <hr>
                       <h6>Preferences</h6>
                    </div>
                     <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4 col-6"><span class="details-type">Meal Preference</span> </div>
                            <div class="col-md-8 col-6">: <span class="details-desc"></span></div>
                         </div>
                    </div>
                     <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 col-6"><span class="details-type">Seating Preference</span> </div>
                            <div class="col-md-6 col-6">: <span class="details-desc"></span></div>
                          </div>
                    </div>
                    <div class="col-md-12">
                         <hr>
                       <h6>Special Arrangement</h6>
                    </div>
                     <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 col-6"><span class="details-type">Dietary/Medical Requirement</span> </div>
                            <div class="col-md-6 col-6">: <span class="details-desc">N/A</span></div>
                         </div>
                    </div>
                     <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 col-6"><span class="details-type">Special Service Requirement</span> </div>
                            <div class="col-md-6 col-6">: <span class="details-desc">N/A</span></div>
                          </div>
                    </div>
                     <div class="col-md-12">
                         <hr>
                       <h6>Documents(Visa Copy / Insurance / Tax /Passport Copy / Any Other Document)</h6>
                    </div>
                    <div class="col-md-12">
                        <a><img src="{{asset('assets/images/file.png')}}" style="height:50px"> visa.png</a>
                    </div>
               </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </form>
    </div>
  </div>
</div>
 <!--client details modal-->
 @include('../includes/footer')