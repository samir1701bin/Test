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
            </div>
         </div>
      </div>
   </div>
   <div class="pcoded-inner-content">
      <div class="main-body">
         <div class="page-wrapper">
            <div class="page-body">
         <div class="row">
         <div class="col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                  <div class="card-header">
                     <h4>Lead Report</h4>
                     <p>Travel lead report offers a detailed offers a detailed analytics about your Lead management system. There are over 20+ reporting formats are available in graphical and excel report  format. Want to see the reports in action ? </p>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-6 col-sm-12 text-center">
                           <h6 class="">Monthly Wise Lead  Report Based On Client type</h6>
                           <div id="stacked_column_chart" style="width: 100%; height: 300px;"></div>
                        </div>
                        <!-- <div class="col-md-6 col-sm-12 text-center">
                              <h6>Destination Wise Lead Report</h6>
                                 <div id="chart_div" style="width: 100%; height: 300px;"></div>
                        </div> -->
                        <!-- <div class="col-md-3 col-sm-6 text-center">
                                 <div id="chart_Exploading" style="width: 100%; height: 300px;"></div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                                 <div id="chart_Threshold" style="width: 100%; height: 300px;"></div>
                        </div>
                        <div class="col-md-6 col-sm-12 text-center">
                                 <div id="chart_area" style="width: 100%; height: 300px;"></div>
                        </div> -->
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
<script>
   google.charts.load('current', {packages: ['corechart', 'bar']});
   google.charts.setOnLoadCallback(drawStacked);

function drawStacked() {
      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Motivation Level');
      data.addColumn('number', 'Energy Level');

      data.addRows([
        [{v: [8, 0, 0], f: '8 am'}, 1, .25],
        [{v: [9, 0, 0], f: '9 am'}, 2, .5],
        [{v: [10, 0, 0], f:'10 am'}, 3, 1],
        [{v: [11, 0, 0], f: '11 am'}, 4, 2.25],
        [{v: [12, 0, 0], f: '12 pm'}, 5, 2.25],
        [{v: [13, 0, 0], f: '1 pm'}, 6, 3],
      //   [{v: [14, 0, 0], f: '2 pm'}, 7, 4],
      //   [{v: [15, 0, 0], f: '3 pm'}, 8, 5.25],
      //   [{v: [16, 0, 0], f: '4 pm'}, 9, 7.5],
      //   [{v: [17, 0, 0], f: '5 pm'}, 10, 10],
      ]);

      var options = {
        title: 'Motivation and Energy Level Throughout the Day',
        isStacked: true,
        hAxis: {
          title: 'Time of Day',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Rating (scale of 1-10)'
        }
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('stacked_column_chart'));
      chart.draw(data, options);
    }

   //stacked column chart  
    google.charts.load('current', {'packages':['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawStuff); 
    function drawStuff() {
        var data =
    google.visualization.arrayToDataTable([ 
      // ['Month', 'B2b', 'B2c', 'Corporate' ],
      // ['Jan', 10, 24, 20,],
      // ['Feb', 16, 22, 23,],
      // ['Mar', 28, 19, 29,]
      
      [<?= "'". implode("','", $colmname) ."'"; ?>],
			<?php
            if(count($colmname) && count($chartdata) ){
                
			  foreach($chartdata as $index=>$ch){ 
				$c= array();
                $c = $ch;
			?>
				[<?=
                    implode(",", $c) ;
                ?>],
			<?php 
			  }
			}          
			?>
   ]); 
     var options = { 
        width: 600,
         height: 400,
          legend: { position: 'top',maxLines: 3 },
          hAxis:{
             title:'Month'
          },
          vAxis:{
             title:'Leads'
          },
           bar: { groupWidth: '75%' },
            isStacked: true, 
         };
          var view = new google.visualization.DataView(data);
    //view.setColumns([0, 1, { calc: "stringify", sourceColumn: 1, type: "string", role: "annotation" }, 2]);
   var chart =new google.visualization.ColumnChart(document.getElementById("stacked_column_chart")); 
   chart.draw(view, options); };
</script>