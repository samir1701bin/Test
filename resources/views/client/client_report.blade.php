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
                                            <div class="col-md-12 col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>All Clients</h5>
                                                        <!--<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="chart_Combo" style="width: 100%; height: 300px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-md-12 col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>All Income</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="chart_Donut" style="width: 100%; height: 300px;"></div>
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
