


  <?php $this->load->view('layout/header');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('layout/sidebar');?>
  <style>
#charts {
  min-width: 310px;
  max-width: 800px;
  height: 400px;
  margin: 0 auto
}
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>/admin/#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url();?>/admin/#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $balance->bal;?><sup style="font-size: 20px"></sup></h3>

              <p>Total Balance</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url();?>/admin/#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo count($user);?></h3>

              <p>All User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url();?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo count($institute_all);?></h3>

              <p>Total Institute</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url();?>/admin/#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <section class="col-lg-12 connectedSortable">
          <div id="container" style="height: 400px; min-width: 310px"></div>

        </section>
      </div>
    

    </section>
  </div>
  <div class="control-sidebar-bg"></div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript">
Highcharts.chart('container', {

  title: {
    text: 'Managment'
  },

  subtitle: {
    text: 'Customer, Institute and Balance'
  },

  yAxis: {
    title: {
      text: 'Number of Customer'
    }
  },
  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },
      pointStart: 2018 
    }
  },

  series: [{
    name: 'Order',
    data: [15112, 15112, 7988, 12169, 15112, 22452, 34400, 34227]
  },{
    name: 'All User',
    data: [<?php foreach ($customer_all_customer as  $user) { echo $user->users.','; } ?>]
  }, {
    name: 'Total Balance',
    data: [<?php foreach ($customer_all_data as  $value) { echo $value->bal.','; } ?>]
  }, {
    name: 'Institute',
    data: [<?php foreach ($customer_all_institute as  $ins) { echo $ins->year_val.','; } ?>]
  }],


  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});
</script>
<!-- ./wrapper -->
<?php $this->load->view('layout/footer');?>