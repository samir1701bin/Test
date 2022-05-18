<div id="styleSelector"></div>
</div>
			</div>
		</div>
	</div>

	<script src="{{asset('assets/bower_components/jquery/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/bower_components/jquery-ui/js/jquery-ui.min.js')}}">
	</script>
	<script src="{{asset('assets/bower_components/popper.js/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/bower_components/bootstrap/js/bootstrap.min.js')}}">
	</script>

	<script
		src="{{asset('assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

	<script src="{{asset('assets/pages/waves/js/waves.min.js')}}"></script>

	<script src="{{asset('assets/bower_components/modernizr/js/modernizr.js')}}"></script>

	<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- google chart -->
   <script src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{asset('/assets/pages/chart/google/js/custom-google-chart.js')}}"></script>
<!-- 
	<script src="{{asset('')}}assets/pages/widget/amchart/gauge.js"></script>
	<script src="{{asset('')}}assets/pages/widget/amchart/serial.js"></script>
	<script src="{{asset('')}}assets/pages/widget/amchart/light.js"></script>
	<script src="{{asset('')}}assets/pages/widget/amchart/pie.min.js"></script> -->
	<!-- <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script> -->

	<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
	<script src="{{asset('assets/plugins/summernote/summernote.min.js')}}"></script>
	<script src="{{asset('assets/js/vertical/vertical-layout.min.js')}}"></script><script src="{{asset('')}}assets/pages/form-masking/inputmask.js"></script>
<script src="{{asset('assets/pages/form-masking/jquery.inputmask.js')}}"></script>
<script src="{{asset('assets/pages/form-masking/autoNumeric.js')}}"></script>
<script src="{{asset('assets/pages/form-masking/form-mask.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/pages/data-table/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/pages/data-table/js/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/pages/data-table/js/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/pages/advance-elements/swithces.js')}}"></script>
<script src="{{asset('assets/bower_components/switchery/js/switchery.min.js')}}"></script>
<script src="{{asset('assets/bower_components/jquery-bar-rating/js/jquery.barrating.min.js')}}"></script>
<script src="{{asset('assets/pages/rating/rating.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>

<script src="{{asset('assets/pages/rating/rating.js')}}"></script>
<script src="{{asset('assets/bower_components/slick-carousel/js/slick.min.js')}}"></script>
<script src="{{asset('assets/pages/product-detail/product-detail.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/pages/data-table/js/data-table-custom.js')}}"></script>
<script src="{{asset('assets/pages/dashboard/ecommerce-dashboard.js')}}"></script>
<!-- <script src="{{asset('assets/plugins/select-picker/js/bootstrap-select.min.js')}}"></script> -->
<script src="{{asset('assets/js/script.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/js/rating.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/jquery-bar-rating/js/jquery.barrating.js')}}"></script>
<script>
    $(document).ready( function () {
        $('.datatable').DataTable();
    } );
</script>
	<script>
	$(document).ready(function(){
	// preview single image script
	
		// preview multiple image script
		// $('.switchery').trigger('click');


		$('select').selectpicker();
		function Validateprice(){
			
	   var mrp=$("#mrp").val();
	   
	   var price=$("#price").val();
	  
	   if(price > mrp){
		 
		   $("#price_alert").html('Price is more than MRP');

	   }
   	}
   $("#mrp").keyup(Validateprice);
   $("#price").keyup(Validateprice);
   $(".summernote").summernote();

	})
	
	</script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/interaction/main.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/list/main.min.js'></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
  
      var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
        header: {
          center: 'addEventButton'
        },
        customButtons: {
          addEventButton: {
            text: 'Add Event...',
            click: function() {
              var dateStr = prompt('Enter a date in YYYY-MM-DD format');
              var date = new Date(dateStr + 'T00:00:00'); // will be in local time
  
              if (!isNaN(date.valueOf())) { // valid?
                calendar.addEvent({
                  title: 'dynamic event',
                  start: date,
                  allDay: true
                });
                alert('Great. Now, update your database...');
              } else {
                alert('Invalid date.');
              }
            }
          }
        }
      });
  
      calendar.render();
    });
  </script>      
</body>


</html>
