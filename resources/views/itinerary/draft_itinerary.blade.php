@include('../includes/header')
@include('../includes/itinerary_sidebar')

<style>
    .btn-padding{
 padding: 5px 15px;
    }
    .nav-pills .nav-link {
    border-radius: 0rem;
}

.nav-link {
    display: block;
    padding: 0.3rem 0.3rem;
}
.w-50{
    width:50%;
}
.pl-10{
  padding-left:10px;  
}
.border-bottom{
    border-bottom:1px solid gray;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}
.sortable-moves .img1 {
  width: 200px;
  height:150px;
  position:relative;
  left: -59px;
}
.sortable-moves .h5{
    position: absolute;
    left: 243px;
    top: 30px;
}
.sortable-moves .p{
    position: absolute;
    right: 149px;
    top: 68px;
}
</style>
                  <div class="pcoded-content">
                     
                     <div class="pcoded-inner-content">
                        <div class="main-body">
                           <div class="page-wrapper">
                              <div class="page-body">
								  
                               <div class="row">
                                   <div class="col-md-8">
                                      
<br>

<div class="card">
    <div class="card-body">
      <h5>The Edison George Town</h5>
      <br>
      <!--<div class="d-flex">-->
      <!--    <img src="{{asset('')}}assets/images/avatar-4.jpg" class="w-50">-->
      <!--    <div class="w-50 pl-10">-->
      <!--    <h3>Star Rating:5 Star</h3>-->
      <!--    <h6>Address:</h6>-->
      <!--    </div>-->
      <!--</div>-->
      <div class="sortable-moves ">
            <img class="img-fluid p-absolute img1" src="{{asset('assets/images/avatar-1.jpg')}}"  class="w-50" alt="">
            <h5 class="card-title h5">Zoo Zurich</h5>
             <p class="card-text p">People who know animals will protect them.</p>
            </div>
      <br>
      
      <!--<div class="row">-->
      <!--    <h6>Short Description</h6>-->
      <!--</div>-->
    </div>
</div>
 </div>
 
                                   
                                    <div class="col-md-4 mt-4">
                             
                            <div class="card">
                                <div class="card-body">
                                    <div style="display:flex;">
                                <h5 class=""> Draft Itinerary</h5>  
                                  </div>  
                                    <div class="row">
        <!--<div class="col-md-12">-->
            <div class="sortable-moves card-sub mt-2">
            <img class="img-fluid p-absolute" src="{{asset('assets/images/avatar-1.jpg')}}" alt="">
            <h5 class="card-title">Zoo Zurich</h5>
             <p class="card-text">People who know animals will protect them.</p>
            </div>
            
            <div class="sortable-moves card-sub mt-2">
            <img class="img-fluid p-absolute" src="{{asset('assets/images/avatar-1.jpg')}}" alt="">
            <h5 class="card-title">Zoo Zurich</h5>
             <p class="card-text">People who know animals will protect them.</p>
            </div>
        <!--</div>-->
         
         <!--<div class="d-flex shadow-sm mt-4">-->
         <!--    <img src="{{asset('')}}assets/images/avatar-4.jpg" class="w-50">-->
         <!--    <div class="w-50 pl-10">-->
         <!--        <h6>Zoo Zurich</h6>-->
         <!--        <p>People who know animals will protect them</p>-->
         <!--    </div>-->
         <!--</div>-->
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

