@include('../includes/header')
@include('../includes/crm_sidebar')
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
               <div class="col-sm-12">
                  <div class="card">
                     <div class="card-header">
                        <div class="row">
                           <div class="col-8">
                              <h4>Unassigned Leads</h4>
                           </div>
                        </div>
                        <div class="card-block">
                           <div class="dt-responsive table-responsive">
                              <table id="order-table" class="table table-striped table-bordered nowrap">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Details</th>
                                       <th>Type</th>
                                       <th>Address</th>
                                       <th>Start Date</th>
                                       <th>Created At</th>
                                       <th>Updated At</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    
                                    <tr>
                                       <td class="sorting_1"></td>
                                       <td>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <img class="user-img"  src="{{asset('assets/images/avatar-4.jpg')}}">
                                             </div>
                                             <div class="col-md-12">
                                                <b></b><br><a class="link-color" href="mailto:" data-bs-original-title=""
                                                   title=""></a><br><a class="link-color" href="tel:" data-bs-original-title=""
                                                   title=""></a>
                                             </div>
                                          </div>
                                       </td>
                                       <td class="sorting_1"></td>
                                       <td></td>
                                       <td>
                                           <small>09:00pm</small>
                                          <b>assigned to</b>
                                          <select name="">
                                             <option>Ventor</option>
                                             <option>Ventor</option>
                                          </select>
                                       </td>
                                       <td></td>
                                       <td></td>
                                       <td>
                                          <button class="btn btn-sm btn-primary" data-bs-original-title="" title="">View</button>
                                       </td>
                                    </tr>
                                    
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                       <th>#</th>
                                       <th>Details</th>
                                       <th>Type</th>
                                       <th>Address</th>
                                       <th>Start Date</th>
                                       <th>Total</th>
                                       <th>Last Date</th>
                                       <th>Action</th>
                                    </tr>
                                 </tfoot>
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
@include('../includes/footer')