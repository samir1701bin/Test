@include('../includes/header')
@include('../includes/itinerary_sidebar')
<style>
    .card-block h4{
        font-size:20px;
        color:blue;
    }
    .red{
        color:red;
    }
    .green{
        color:green;
    }
    .blue{
        color:blue;
    }
    .fa-map-marker{
        color: red;
    font-size: 20px;
    margin-right: 5px;
    }
    .f-15{
        font-size:15px;
    }
    .user-thumbnail {
    height: 80px;
    width: 80px;
    border-radius:0%;
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
								
                                    
									<div class="col-sm-12">
										<div class="card">
										
											<div class="card-block" >
											    <h4>40 Days swiss itinerary for group tour</h4>
												<div class="dt-responsive table-responsive">
													<table id="order-table" class="table table-striped table-bordered nowrap">
														
														<tbody>
															<tr>
																<td>1</td>
																
																<td>
																  <a href="#">
																		<img class="img-fluid  user-thumbnail"
																			src="{{asset('')}}assets/images/user-profile/user-img.jpg"
																			alt="">  </a>  
																    Aqaparic,The Rosengart Collection, <br> Swiss Science  center
																technorama, Zoo Zurich
																</td>
																<td><i class="fa fa-map-marker"> </i>  Switzerland <br>
																Aqaparic,The Rosengart Collection, Swiss Science<br> center
																technorama, Zoo Zurich
																</td>
																
																<td><h5 class="f-15">USD 7,650</h5></td>


															
																<td>
																    <a href="{{asset('')}}itinerary/send_proposal"><button class="btn btn-primary btn-sm">Send Proposal</button></a>
																    <a href="{{asset('')}}"><button class="btn btn-success btn-sm">View Itinerary</button></a>
																    <br>
																    <a data-toggle="modal" data-target="#edit" class="green">Edit |</a> 
																     <a href="{{asset('')}}">Duplicate |</a>
																      <a href="{{asset('')}}" class="blue">Download |</a> 
																    <a href="{{asset('')}}" class="red">Delete </a>
																    </td>
																
															
															</tr>

                                                       

														</tbody>
														
													</table>
												</div>
											</div>
											
												<div class="card-block" >
											    <h4>40 Days swiss itinerary for group tour</h4>
												<div class="dt-responsive table-responsive">
													<table id="order-table" class="table table-striped table-bordered nowrap">
														
														<tbody>
														    
															<tr>
															    
															    
																
																<td>2</td>
																
																
																<td>
																  <a href="#">
																		<img class="img-fluid  user-thumbnail"
																			src="{{asset('')}}assets/images/user-profile/user-img.jpg"
																			alt="">  </a>  
																    Aqaparic,The Rosengart Collection, <br> Swiss Science  center
																technorama, Zoo Zurich
																</td>
																<td><i class="fa fa-map-marker"> </i>  Switzerland <br>
																Aqaparic,The Rosengart Collection, Swiss Science<br> center
																technorama, Zoo Zurich
																</td>
																
																<td><h5 class="f-15">USD 7,650</h5></td>


															
																<td>
																    <a href="{{asset('')}}itinerary/send_proposal"><button class="btn btn-primary btn-sm">Send Proposal</button></a>
																    <a href="{{asset('')}}"><button class="btn btn-success btn-sm">View Itinerary</button></a>
																    <br>
																    <a data-toggle="modal" data-target="#edit" class="green">Edit |</a> 
																     <a href="{{asset('')}}">Duplicate |</a>
																      <a href="{{asset('')}}" class="blue">Download |</a> 
																    <a href="{{asset('')}}" class="red">Delete </a>
																    </td>
																
															
															</tr>

                                                       

														</tbody>
														
													</table>
												</div>
											</div>
											
											
											
										</div>
									</div>
								
					    
					    <div class="modal " id="edit" tabindex="-1" role="dialog" aria-labelledby="editTitle" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Itinerary Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        									        <div class="card card-body">
        									           
        									          
        									                    <div class="row">
        									                        <div class="col-md-12">
        									                            	<label class="mt-2" for="name">Itinerary Folder<span class="important">*</span></label>
        									                                <select class="form-control  mb-3" type="text" name="" >
        									                                        	    <option></option>
        									                                        	    <option></option>
        									                                        	    <option></option>
        									                                        	    </select>
        									                        </div>
        									                        <div class="col-md-12">
        									                            	<label class="mt-2" for="name">Itinerary Location <span class="important">*</span></label>
        									                            	<input type="text" class="form-control  mb-3" name="" placeholder="Enter Itinerary Location">
        									                        </div>
        									                        <div class="col-md-12">
        									                            	<label class="mt-2" for="name">Itinerary Name <span class="important">*</span></label>
        									                            	<input type="text" class="form-control  mb-3" name="" placeholder="Enter Itinerary Name">
        									                        </div>
        									                        <div class="col-md-12">
        									                        <button class="btn btn-primary">Submit</button> </div>
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
                  </div>
@include('../includes/footer')
