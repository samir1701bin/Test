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
                              <h4>Converted Leads</h4>
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
                                       <th>Total</th>
                                       <th>Last Date</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @php $i=1 @endphp
                                    @foreach($leaddata as $d)
                                    <tr>
                                       <td class="sorting_1">{{$i}}</td>
                                       <td>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <img class="user-img"  src="{{asset('assets/images/avatar-4.jpg')}}">
                                             </div>
                                             <div class="col-md-12">
                                                <b>{{$d->cust_name}}</b><br><a class="link-color" href="mailto:{{$d->cust_email}}" data-bs-original-title=""
                                                   title="">{{$d->cust_email}}</a><br><a class="link-color" href="{{$d->cust_mobile}}" data-bs-original-title=""
                                                   title="">{{$d->cust_mobile}}</a>
                                             </div>
                                          </div>
                                       </td>
                                       <td class="sorting_1">{{$d->enquiry_type}}</td>
                                       <td>{{$d->travel_location}}</td>
                                       <td>
                                          {{$d->travel_date}} <small>09:00pm</small>
                                          <b>assigned to</b>
                                          <select name="">
                                             <option>Ventor</option>
                                             <option>Ventor</option>
                                          </select>
                                       </td>
                                       <td>{{$d->total}}<br><b>Created On</b> <span>{{$d->created_at}}</span></td>
                                       <td>24/02/21 <small>09:00pm</small><br><b>Last Update</b><br><span>{{$d->updated_at}}</span></td>
                                       <td>
                                          <button class="btn btn-sm btn-primary" data-bs-original-title="" title="">View</button>
                                       </td>
                                    </tr>
                                    @php $i=$i+1 @endphp
                                    @endforeach
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