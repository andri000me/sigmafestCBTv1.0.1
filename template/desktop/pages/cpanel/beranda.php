<?php
/**
    * Deskripsi Dokumen PHP
    * @version    : 1.1.3.5
    * @package    : IBeESNay
    * @filename   : navbar.php
    * @creator    : SUNARDI
    * @email      : sunardi.1135@yahoo.com
    * @facebook   : wwww.facebook.com/ibeesnay
    * @twitter    : @IBeESNay
*/

?>
<script src="<?php echo base_url();?>assets/js/plugins/chart.min.js"></script>
<script>
  $(function () {
    var areaChartData = {
      labels: ["Peserta 1", "Peserta 2", "Peserta 3", "Peserta 4", "Peserta 5"],
      datasets: [
        {
          label: "Soal yang benar",
          fillColor: "rgba(154,205,50,0.9)",
          strokeColor: "rgba(154,205,50,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [78, 68, 57, 49, 36]
        },
        {
          label: "Soal yang benar",
          fillColor: "rgba(154,205,50,0.9)",
          strokeColor: "rgba(154,205,50,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [48, 38, 67, 29, 16]
        },
        {
          label: "Soal yang benar",
          fillColor: "rgba(154,205,50,0.9)",
          strokeColor: "rgba(154,205,50,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [38, 18, 57, 79, 99]
        },
        {
          label: "Soal yang benar",
          fillColor: "rgba(154,205,50,0.9)",
          strokeColor: "rgba(154,205,50,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [18, 38, 97, 29, 46]
        }
      ]
    };

    var laporanChartCanvas = $("#laporanChart").get(0).getContext("2d");
    var laporanChart = new Chart(laporanChartCanvas);
    var laporanChartData = areaChartData;
    laporanChartData.datasets[1].fillColor = "#00a65a";
    laporanChartData.datasets[1].fillColor = "#00a65a";
    laporanChartData.datasets[1].fillColor = "#00a65a";
    
    
    var laporanChartOptions = {
      scaleBeginAtZero: true,
      scaleShowGridLines: true,
      scaleGridLineColor: "rgba(0,0,0,.05)",
      scaleGridLineWidth: 1,
      scaleShowHorizontalLines: true,
      scaleShowVerticalLines: true,
      barShowStroke: true,
      barStrokeWidth: 1,
      barValueSpacing: 5,
      barDatasetSpacing: 1,
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      responsive: true,
      maintainAspectRatio: true
    };

    laporanChartOptions.datasetFill = false;
    laporanChart.Bar(laporanChartData, laporanChartOptions);
  });
</script>
<div class="row">
	<div class="col-md-12">
	  <div class="box">
		<div class="box-header with-border">
                    <h3 class="box-title">Grafik Dan Laporan - <small class="text-success">Selamat datang administrator, autentikasi anda 15 menit yang lalu. <?php echo anchor('login/user_logout','Keluar',array('target'=>'_self'));?></small></h3>
		  <div class="box-tools pull-right">
			<div class="btn-group">
			  <button type="button" class="btn btn-sm btn-box-tool dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-wrench"></i></button>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="#">Segarkan laman</a></li>
				<li class="divider"></li>
				<li><a href="#">Pengaturan</a></li>
			  </ul>
			</div>
			<button type="button" class="btn btn-sm btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		  </div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		  <div class="row">
			<div class="col-md-8">
			  <p class="text-center">
				<center><?php echo heading("Grafik: 1 Jan - 30 Jul tahun 2016",5);?></center>
			  </p>

			  <div class="chart">
				<canvas id="laporanChart" style="height: 180px;"></canvas>
			  </div>
			</div>
			<!-- /.col -->
			<div class="col-md-4">
			  <p class="text-center">
				<strong>Laporan kelulusan</strong>
			  </p>

			  <div class="progress-group">
				<span class="progress-text">Laporan 1</span>
				<span class="progress-number"><b>160</b>/200</span>

				<div class="progress sm">
				  <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
				</div>
			  </div>
			  <!-- /.progress-group -->
			  <div class="progress-group">
				<span class="progress-text">Laporan 2</span>
				<span class="progress-number"><b>310</b>/400</span>

				<div class="progress sm">
				  <div class="progress-bar progress-bar-red" style="width: 60%"></div>
				</div>
			  </div>
			  <!-- /.progress-group -->
			  <div class="progress-group">
				<span class="progress-text">Laporan 3</span>
				<span class="progress-number"><b>480</b>/800</span>

				<div class="progress sm">
				  <div class="progress-bar progress-bar-green" style="width: 80%"></div>
				</div>
			  </div>
			  <!-- /.progress-group -->
			  <div class="progress-group">
				<span class="progress-text">Laporan 4</span>
				<span class="progress-number"><b>250</b>/500</span>

				<div class="progress sm">
				  <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
				</div>
			  </div>
			  <!-- /.progress-group -->
			  <div class="progress-group">
				<span class="progress-text">Laporan 5</span>
				<span class="progress-number"><b>250</b>/500</span>

				<div class="progress sm">
				  <div class="progress-bar progress-bar-yellow" style="width: 50%"></div>
				</div>
			  </div>
			  <!-- /.progress-group -->
			  <div class="progress-group">
				<span class="progress-text">Laporan 6</span>
				<span class="progress-number"><b>250</b>/500</span>

				<div class="progress sm">
				  <div class="progress-bar progress-bar-red" style="width: 40%"></div>
				</div>
			  </div>
			  <!-- /.progress-group -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</div>
		<!-- ./box-body -->
		<div class="box-footer">
		  <div class="row">
			<div class="col-sm-3 col-xs-6">
			  <div class="description-block border-right">
				<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
				<h5 class="description-header">1543</h5>
				<span class="description-text">TOTAL DATA 1</span>
			  </div>
			  <!-- /.description-block -->
			</div>
			<!-- /.col -->
			<div class="col-sm-3 col-xs-6">
			  <div class="description-block border-right">
				<span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
				<h5 class="description-header">154</h5>
				<span class="description-text">TOTAL DATA 2</span>
			  </div>
			  <!-- /.description-block -->
			</div>
			<!-- /.col -->
			<div class="col-sm-3 col-xs-6">
			  <div class="description-block border-right">
				<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
				<h5 class="description-header">1565</h5>
				<span class="description-text">TOTAL DATA 3</span>
			  </div>
			  <!-- /.description-block -->
			</div>
			<!-- /.col -->
			<div class="col-sm-3 col-xs-6">
			  <div class="description-block">
				<span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
				<h5 class="description-header">1200</h5>
				<span class="description-text">TOTAL DATA 4</span>
			  </div>
			  <!-- /.description-block -->
			</div>
		  </div>
		  <!-- /.row -->
		</div>
		<!-- /.box-footer -->
	  </div>
	  <!-- /.box -->
	</div>
	<!-- /.col -->
</div>
  <!-- /.row -->
