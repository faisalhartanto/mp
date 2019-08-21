<style>
    .glyphicons {
        padding-left: 0;
        padding-bottom: 1px;
        margin-bottom: 20px;
        list-style: none;
        overflow: hidden;
      }
          
      .glyphicons li {
        float: left;
        width: 11.5%;
        height: 115px;
        padding: 10px;
        margin: 0 -1px -1px 0;
        font-size: 12px;
        line-height: 1.4;
        text-align: center;
        border: 1px solid #ddd;
      }
      
      .glyphicons .glyphicon {
              margin-top: 5px;
              margin-bottom: 10px;
              font-size: 24px;
          display: block;
              text-align: center;
      }
</style>

<section class="content-header">
  <h1>
	Beranda
	<small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Beranda</li>
  </ol>
</section>


<body>
<div id="container">
    <h1>&nbsp; Monitoring Status Project <span style="float:right">&nbsp;</span></h1>
	
	<section class="content">
    <div id="body">
	<div class="box">
		<div class="box-body">
			<div id="chart"></div>
			
		</div>
		<div class="box-body">
			<div id="chart2"></div>
			
		</div>
	</div>
    </div>
    </section>
 
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
 
<!--<script type="text/javascript" src="<?php echo base_url('/assets/jquery-1.7.2.min.js'); ?>"></script>-->
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/template2/dist/js/app.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/Highcharts/code/highcharts.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/Highcharts/code/modules/exporting.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/Highcharts/code/themes/grid.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/Highcharts/code/modules/drilldown.js'); ?>"></script>

<script type="text/javascript">
jQuery(function(){
    new Highcharts.Chart({
        chart: {
            renderTo: 'chart',
            type: 'column',
			color: '#000000',
        },
        title: {
            text: 'Monitoring Status Project Application',
            x: -20
        },
        subtitle: {
            text: 'http://nufaza.com/monitoringproject',
            x: -20
        },
        xAxis: {
            categories: ['Belum Di Kerjakan', 'On Progress', 'BAST', 'Closed']
				
			
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            }
        },
        series: [{
            name: 'Jumlah',
			colorByPoint: true,
            data: <?php echo json_encode($data); ?>,
			//tes tambahan label
			dataLabels: {
                enabled: true,
                color: '#000000',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                },
				y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '20px',
                    fontFamily: 'Verdana, sans-serif'
				}
			}
        }]
    });
}); 


jQuery(function(){
    new Highcharts.Chart({
        chart: {
            renderTo: 'chart2',
            type: 'column',
			color: '#000000',
        },
        title: {
            text: 'Monitoring Status Project Application',
            x: -20
        },
        subtitle: {
            text: 'http://nufaza.com/monitoringproject',
            x: -20
        },
        xAxis: {
            categories: ['Belum Di Kerjakan', 'On Progress', 'BAST', 'Closed']
				
			
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            }
        },
        series: [{
            name: 'Status Pekerjaan',
			colorByPoint: true,
            data: <?php echo json_encode($data2); ?>,
			//tes tambahan label
			dataLabels: {
                enabled: true,
                color: '#000000',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                },
				y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '20px',
                    fontFamily: 'Verdana, sans-serif'
				}
			}
        }]
    });
}); 
</script>



</body>

</html>