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
                @php $i=1 @endphp
                @foreach($l2count as $l2count)
                @php 
                    $string = str_replace(' ', '_', $l2count->name);
                @endphp	
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <a href="{{url('crm/lead/'.$string.'_lead')}}" class="text-decoration-none">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-purple">
                                        <!-- helper to get leadcount on the basis of leadtype -->
                                        {{get_lead_count($l2count->lead_type)}}
                                        </h4>
                                        <h6 class="text-muted m-b-0">
                                        {{ucfirst($l2count->name)}}
                                        </h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="fa fa-bar-chart f-28"></i>															
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" id="color{{$i}}">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">This Month</p>
                                    </div>
                                    <div class="col-3 text-right text-white">
                                    <!-- helper to get monthleadcount on the basis of leadtype -->
                                    {{cur_month_lead_count($l2count->lead_type)}}
                                    </div>
                                </div>
                            </div>
                            
                        </a>
                    </div>
                </div>
                @foreach($color as $d_color)
                        @if($i == $d_color->id)
                            <script>
                                document.getElementById("color{{$i}}").style.backgroundColor  = "{{$d_color->color_code}}";
                            </script>
                        @endif
                @endforeach

                @php $i=$i+1 @endphp
                @endforeach
                
                
                
                
                </div>
                <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Unassigned Leads</h5>
                                </div>
                                <div class="card-block">
                                    <div id="chart_Combo" style="width: 100%; height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>All Lead</h5>
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
<script>
	//Combo chart
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
            //  ['Month', 'b2b', 'b2c', 'corporate'],	   
            // ['jan', 157, 1167, 587],
            // ['feb', 139, 1110, 615],
            // ['march', 136, 691, 629],

			[<?= "'". implode("','", $colmname) ."'"; ?>],
			<?php
            if(count($colmname) && count($chartdata) ){
                
			  foreach($chartdata as $index=>$ch){ 
				$c= array();
                $c = $ch;
				if(count($colmname) != count($chartdata[$index])){
				    $c[] = 0;
                    $len = count($colmname) - count($chartdata[$index]);
                    for($i=1 ;$i<$len ;$i++){
                        $ch = array_push($c,0);
                    }  
				}
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
            title: 'Monthly Unassigned Leads',
            vAxis: { title: 'Leads' },
            hAxis: { title: 'Month' },
            seriesType: 'bars',
            series: { 5: { type: 'line' } },
            colors: ['#448aff', '#11c15b', '#ffe100', '#FE8A7D', '#69CEC6', '#ff5252']
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_Combo'));
        chart.draw(data, options);
    }
	
	//Donut chart
    google.charts.load("current", { packages: ["corechart"] });
    google.charts.setOnLoadCallback(drawChartDonut);

    function drawChartDonut() {
        var dataDonut = google.visualization.arrayToDataTable([
            ['Leads', 'Count'],
			<?php echo $piedata;?>
        ]);

        var optionsDonut = {
            title: 'Leads Activities',
            pieHole: 0.4,
            colors: ['#448aff', '#11c15b', '#ffe100', '#FE8A7D', '#ff5252']
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_Donut'));
        chart.draw(dataDonut, optionsDonut);
    }
</script>



